<?php

/**
 * @Author: yang-zhen413
 * @Date:   2020-12-22 17:38:06
 * @Last Modified by:   yang-zhen413
 * @Last Modified time: 2020-12-22 17:44:10
 * @Email: yangvvvvip@163.com
 */
namespace app\api\controller\v1;

use app\api\validate\TokenGet;

class Token
{
	public function getToken()
	{
		(new TokenGet())->goCheck();

		
	}
}