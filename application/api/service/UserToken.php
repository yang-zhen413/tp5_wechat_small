<?php

/**
 * @Author: yang-zhen413
 * @Date:   2020-12-22 17:44:53
 * @Last Modified by:   JasonYang
 * @Last Modified time: 2020-12-23 14:17:10
 * @Email: yangvvvvip@163.com
 */
namespace app\api\service;

use app\api\model\User;
use app\lib\exception\WechatException;

class UserToken
{	
	protected $code;
	protected $app_id;
	protected $app_secret;
	protected $login_url;

	public function __construct($code = '')
	{
		$this->code = $code;
		$this->app_id = config('wx.app_id');
		$this->app_secret = config('wx.app_secret');
		$this->login_url = sprintf(config('wx.login_url'), $this->app_id, $this->app_secret, $this->code);
	}

	public function get($code = '')
	{
		$result = curl_get($this->login_url);
		$wxRes = json_decode($result, true);
		if (empty($wxRes)) 
		{
			throw new Exception("获取session_key及openid时发生异常,微信内部错误");
		}

		$loginFail = array_key_exists('errcode', $wxRes);
		if ($loginFail) 
		{
			$this->processLogInErr($wxRes);
		}
		$this->grantToken($wxRes);
	}

	private function grantToken($wxRes)
	{
		$openid = $wxRes['openid'];
		echo $openid;
	}

	private function processLogInErr($wxRes)
	{
		throw new WechatException([
			'errMsg' => $wxRes['errmsg'],
			'errCode' => $wxRes['errcode']
		]);
	}
}