<?php

/**
 * @Author: JasonYang
 * @Date:   2020-12-18 09:54:49
 * @Last Modified by:   JasonYang
 * @Last Modified time: 2020-12-22 13:46:24
 * @Email: yangvvvvip@163.com
 */
namespace app\api\model;

use think\Model;

class Theme extends BaseModel
{
	// 隐藏字段
	protected $hidden = ["update_time", "delete_time", "topic_img_id", "head_img_id"];
	// 模型关联
    public function topicImg()
    {
    	return $this->belongsTo("Image", "topic_img_id", "id");
    }
    // 模型关联
    public function headImg()
    {
    	return $this->belongsTo("Image", "head_img_id", "id");
    }
    // 模型关联
    public function product()
    {
    	return $this->belongsToMany("Product", "theme_product", "product_id", "theme_id");
    }
    
    /**
     * [getThemeList 获取主题列表]
     * @Author   JasonYang
     * @DateTime 2020-12-22T13:17:08+0800
     * @param    string                   $ids [id1,id2,id3,...]
     * @return   object                        [主题模型查询对象]
     */
    public static function getThemeList($ids = "")
    {
    	$ids = explode(",", $ids);
		$result = self::with(['topic_img', 'head_img'])->select($ids);
		return $result;
    }

    /**
     * [getDetail 主题详情]
     * @Author   JasonYang
     * @DateTime 2020-12-22T13:18:21+0800
     * @param    integer                  $id [主题id]
     * @return   object                       [主题模型查询对象]
     */
    public static function getDetail($id = 0)
    {
    	return self::with("product", "topic_img", "head_img")->find($id);
    }
}
