<?php

/**
 * @Author: JasonYang
 * @Date:   2020-12-18 09:54:49
 * @Last Modified by:   JasonYang
 * @Last Modified time: 2020-12-21 15:35:03
 * @Email: yangvvvvip@163.com
 */
namespace app\api\model;

class Banner extends BaseModel
{
	// 隐藏字段
	protected $hidden = ['update_time', 'delete_time'];

	public function item()
	{		
		return $this->hasMany('BannerItem', 'banner_id', 'id');
	}

	/**
	 * [getBannerById 根据id获取banner]
	 * @Author   JasonYang
	 * @DateTime 2020-12-18T10:50:10+0800
	 * @param    integer                   $id [bannerId]
	 * @return   [type]                        [description]
	 */
	public static function getBannerById($id)
	{
		return self::with(['item','item.image'])->find($id);
	}
}