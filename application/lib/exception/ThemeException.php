<?php

/**
 * @Author: JasonYang
 * @Date:   2020-12-21 17:56:03
 * @Last Modified by:   JasonYang
 * @Last Modified time: 2020-12-21 17:57:11
 * @Email: yangvvvvip@163.com
 */
namespace app\lib\exception;


class ThemeException extends BaseException
{
	// http状态码
	public $httpCode = 404;
	// 错误信息
	public $errMsg = '请求的theme资源不存在';
	// 自定义错误码
	public $errCode = 30000;
}