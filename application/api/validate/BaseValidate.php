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

	/**
	 * [isPositiveInteger 自定义验证ID为整数规则的验证器]
	 * @Author   JasonYang
	 * @DateTime 2020-12-21T17:14:20+0800
	 * @param    [type]                   $value [description]
	 * @param    string                   $rule  [description]
	 * @param    string                   $data  [description]
	 * @param    string                   $field [description]
	 * @return   boolean                         [description]
	 */
	protected function isPositiveInteger($value, $rule = '',
        $data = '', $field = '')
    {
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0) {
            return true;
        }
        else{
            return false;
        }
    }

    protected function isNotEmpty($value)
    {
    	if (empty($value)) {
    		return false;
    	}
    	return true;
    }
}
 ?>