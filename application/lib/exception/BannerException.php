<?php

/**
 * @Author: JasonYang
 * @Date:   2020-12-18 13:36:26
 * @Last Modified by:   JasonYang
 * @Last Modified time: 2020-12-18 15:36:54
 * @Email: yangvvvvip@163.com
 */

namespace app\lib\exception;

class BannerException extends BaseException 
{
	// http状态码
	public $httpCode = 404;
	// 错误信息
	public $errMsg = '请求的banner不存在';
	// 自定义错误码
	public $errCode = 40000;
}