<?php

/**
 * @Author: JasonYang
 * @Date:   2020-12-23 10:44:34
 * @Last Modified by:   JasonYang
 * @Last Modified time: 2020-12-23 10:46:00
 * @Email: yangvvvvip@163.com
 */
namespace app\lib\exception;

class WechatException extends BaseException
{
	// HTTP 状态码
	public $httpCode = 400;
	// 错误信息
	public $errMsg = '微信服务器接口调用失败';
	// 自定义的错误码
	public $errCode = 99999;
}