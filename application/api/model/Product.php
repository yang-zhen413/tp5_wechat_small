<?php

namespace app\api\model;

use think\Model;

class Product extends BaseModel
{
	// 隐藏熟悉
    protected $hidden = ["update_time", "delete_time", "from", "pivot", "create_time", "main_img_id", "category_id"];
    // 获取器-格式化url路径
    public function getMainImgUrlAttr($value, $data)
	{
		return $this->prefixPath($value, $data);
	}

	/**
	 * [getRecentData 获取最近商品]
	 * @Author   JasonYang
	 * @DateTime 2020-12-22T15:20:21+0800
	 * @param    integer                  $count [条数]
	 * @return   object                          [商品数据集对象]
	 */
	public static function getRecentData($count = 0)
	{
		return self::limit($count)->order("create_time desc")->select();
	}
}
