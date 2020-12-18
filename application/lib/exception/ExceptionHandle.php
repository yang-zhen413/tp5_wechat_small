<?php

/**
 * @Author: JasonYang
 * @Date:   2020-12-18 12:58:54
 * @Last Modified by:   JasonYang
 * @Last Modified time: 2020-12-18 15:44:21
 * @Email: yangvvvvip@163.com
 */

namespace app\lib\exception;

use Exception;
use think\Log;
use think\exception\Handle;

class ExceptionHandle extends Handle 
{

	private $httpCode;
	private $errMsg;
	private $errCode;

	/**
	 * [render 重写render实现自定义返回信息]
	 * @Author   JasonYang
	 * @DateTime 2020-12-18T13:52:40+0800
	 * @param    Exception                $e [description]
	 * @return   [type]                      [description]
	 */
	public function render(Exception $e)
	{
		if ($e instanceof BaseException) 
		{
			// 如果是自定义的异常
			$this->httpCode = $e->httpCode;
			$this->errMsg = $e->errMsg;
			$this->errCode = $e->errCode;
		}
		else 
		{
			if (config('app_debug')) 
			{
				return parent::render($e);
			}
			else
			{
				$this->httpCode = 500;
				$this->errMsg = '服务器内部错误';
				$this->errCode = 99999;
				Log::error($e->getMessage());
			}
		}

		$result = [
			'errMsg' => $this->errMsg,
			'errCode' => $this->errCode,
			'requestUrl' => request()->url()
		];

		return json($result, $this->httpCode);
	}
}