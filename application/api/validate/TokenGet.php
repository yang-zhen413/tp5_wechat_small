<?php

/**
 * @Author: yang-zhen413
 * @Date:   2020-12-22 17:41:26
 * @Last Modified by:   yang-zhen413
 * @Last Modified time: 2020-12-22 17:42:47
 * @Email: yangvvvvip@163.com
 */
namespace app\api\validate;

class TokenGet extends BaseValidate
{
	protected $rule = [
		"code" => "require|isNotEmpty"
	];

	protected $message = [
		"code" => "code参数缺失"
	];
}