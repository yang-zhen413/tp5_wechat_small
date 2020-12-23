<?php

/**
 * @Author: yang-zhen413
 * @Date:   2020-12-22 17:38:06
 * @Last Modified by:   JasonYang
 * @Last Modified time: 2020-12-23 10:50:52
 * @Email: yangvvvvip@163.com
 */
namespace app\api\controller\v1;

use app\api\validate\TokenGet;
use app\api\service\UserToken;

class Token
{
	public function getToken($code = '')
	{
		(new TokenGet())->goCheck();

		$user = new UserToken($code);
		$token = $user->get();
		return $token;
	}
}