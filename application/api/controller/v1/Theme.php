<?php

/**
 * @Author: JasonYang
 * @Date:   2020-12-21 17:10:17
 * @Last Modified by:   yang-zhen413
 * @Last Modified time: 2020-12-22 17:04:00
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
		if ($result->isEmpty()) {
			throw new ThemeException();
		}
		return $result;
	}

	/**
	 * [getProductDetail 获取主题详情]
	 * @Author   JasonYang
	 * @DateTime 2020-12-22T17:03:02+0800
	 * @url      /theme/:id
	 * @param    integer                  $id [description]
	 * @return   [type]                       [description]
	 */
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