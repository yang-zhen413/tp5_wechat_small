<?php

namespace app\api\model;

use think\Model;

class Category extends BaseModel
{
    protected $hidden = ["update_time", "delete_time", "create_time"];

    //关联模型
    public function image()
    {
    	return $this->belongsTo("Image", "topic_img_id", "id");
    }
}
