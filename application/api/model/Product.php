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

	public function Image()
	{
		return $this->belongsTo("Image", "img_id", "id");
	}
}
