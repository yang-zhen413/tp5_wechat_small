<?php 
namespace app\api\validate;

use Exception;
use think\Validate;
use think\facade\Request;
use app\lib\exception\ParameterException;

class BaseValidate extends Validate
{	
	public function goCheck()
	{
		// 获取http传入的全部参数
		$params = Request::param();
		$result = $this->check($params);
		if (!$result) 
		{
			$exception = new ParameterException([
				"errMsg" => $this->error
			]);
			throw $exception;
		}
		return true;
	}
}
 ?>