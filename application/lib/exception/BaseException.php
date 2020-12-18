<?php

/**
 * @Author: JasonYang
 * @Date:   2020-12-18 13:27:56
 * @Last Modified by:   JasonYang
 * @Last Modified time: 2020-12-18 15:51:51
 * @Email: yangvvvvip@163.com
 */

namespace app\lib\exception;

use think\Exception;

class BaseException extends Exception 
{
	// HTTP 状态码
	public $httpCode = 400;
	// 错误信息
	public $errMsg = '参数错误';
	// 自定义的错误码
	public $errCode = 10000;

	public function __construct($params = [])
	{
		if ( !is_array($params) ) 
		{
			return false;
		}
		if ( array_key_exists('httpCode', $params) ) 
		{
			$this->httpCode = $params['httpCode'];
		}
		if ( array_key_exists('errMsg', $params) ) 
		{
			$this->errMsg = $params['errMsg'];
		}
		if ( array_key_exists('errCode', $params) ) 
		{
			$this->errCode = $params['errCode'];
		}
	}
}