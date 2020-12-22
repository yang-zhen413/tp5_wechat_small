<?php 
namespace app\api\controller\v1;

use app\api\validate\IdMustBeInt;
use app\api\model\Banner as BannerModel;
use app\lib\exception\BannerException;

class Banner 
{
	/**
	 * 根据id获取banner信息
	 * @url /banner/:id
	 * 
	 * @param  integer  $id  
	 * 
	 * @throws BannerException
	 * @return 
	 */
	public function getBanner($id)
	{
		(new IdMustBeInt())->goCheck();

		$banner = BannerModel::getBannerById($id);
		if (!$banner) 
		{
			throw new BannerException();
		}
		return $banner;
	}
}
 ?>