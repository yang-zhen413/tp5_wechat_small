<?php

/**
 * @Author: JasonYang
 * @Date:   2020-12-22 16:26:31
 * @Last Modified by:   JasonYang
 * @Last Modified time: 2020-12-22 16:26:57
 * @Email: yangvvvvip@163.com
 */
namespace app\lib\exception;

class CateException extends BaseException 
{
	// http状态码
	public $httpCode = 404;
	// 错误信息
	public $errMsg = '分类资源不存在';
	// 自定义错误码
	public $errCode = 50000;
}