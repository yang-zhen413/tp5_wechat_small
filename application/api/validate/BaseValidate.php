<?php 
namespace app\api\validate;

use think\Validate;
use think\Exception;
use think\facade\Request;

/**
 * 验证器基类
 */
class BaseValidate extends Validate
{
	public function goCheck()
	{
		// 获取http传入的全部参数
		$params = Request::param();
		$result = $this->check($params);
		if (!$result) {
			$errors = $this->error;
			throw new Exception($errors);
		}
		return true;
	}
}
 ?>