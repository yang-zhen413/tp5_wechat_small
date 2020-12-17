<?php 
namespace app\api\validate;

use think\Validate;
use think\Request;
use think\Exception;

/**
 * 验证器基类
 */
class BaseValidate extends Validate
{
	public function gocheck()
	{
		// 获取http传入的全部参数
		$params = (new Request())->param();
		$result = $this->check($params);
		if (!$result) {
			$errors = $this->error;
			throw new Exception($errors);
		}
		return true;
	}
}
 ?>