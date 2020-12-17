<?php 
namespace app\api\controller\v1;

use app\api\validate\IdMustBeInt;

/**
 * 
 */
class Banner
{
	public function getBanner($id)
	{
		(new IdMustBeInt())->goCheck();
		
	}
}
 ?>