<?php

/**
 * @Author: EDZ
 * @Date:   2020-12-18 15:36:04
 * @Last Modified by:   JasonYang
 * @Last Modified time: 2020-12-18 15:38:07
 * @Email: yangvvvvip@163.com
 */

namespace app\lib\exception;

class ParameterException extends BaseException
{
	public $httpCode = 400;
	public $errMsg = '参数缺失';
	public $errCode = 10000;
}