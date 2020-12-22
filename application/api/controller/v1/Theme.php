<?php

/**
 * @Author: JasonYang
 * @Date:   2020-12-21 17:10:17
 * @Last Modified by:   JasonYang
 * @Last Modified time: 2020-12-22 13:08:28
 * @Email: yangvvvvip@163.com
 */
namespace app\api\controller\v1;

use app\api\validate\IdCollection;
use app\api\validate\IdMustBeInt;
use app\api\model\Theme as ThemeModel;
use app\lib\exception\ThemeException;

class Theme
{
	/**
	 * [getSimpleList 获取主题列表]
	 * @Author   JasonYang
	 * @DateTime 2020-12-21T17:11:58+0800
	 * @url /theme/ids=id1,id2,id3,....
	 * 
	 * @param    string                   $ids [description]
	 *
	 * @throws   ThemeException
	 * @return   [type]                        [description]
	 */
	public function getSimpleList($ids = "")
	{
		(new IdCollection())->goCheck();

		$result = ThemeModel::getThemeList($ids);
		if (!$result) {
			throw new ThemeException();
		}
		return $result;
	}

	public function getProductDetail($id = 0)	
	{
		(new IdMustBeInt())->goCheck();

		$result = ThemeModel::getDetail($id);
		if (!$result) {
			throw new ThemeException();
		}
		return $result;
	}
}