<?php

/**
 * @Author: JasonYang
 * @Date:   2020-12-22 15:24:11
 * @Last Modified by:   JasonYang
 * @Last Modified time: 2020-12-22 15:26:00
 * @Email: yangvvvvip@163.com
 */
namespace app\lib\exception;

class ProductException extends BaseException
{
	// http状态码
	public $httpCode = 404;
	// 错误信息
	public $errMsg = '商品不存在，请检查参数';
	// 自定义错误码
	public $errCode = 20000;
}