<?php

namespace app\api\controller\v1;

use think\Controller;
use app\api\model\Category as CateModel;
use app\lib\exception\CateException;

class Category
{
	/**
	 * [getCateAll 获取全部分类]
	 * @Author   JasonYang
	 * @DateTime 2020-12-22T16:27:23+0800
	 * @return   [type]                   [description]
	 * @throws   CateException
	 */
    public function getCateAll()
    {
    	$cates = CateModel::all([], "image");
    	if ($cates->isEmpty()) {
    		throw new CateException();
    	}
    	return $cates;
    }
}
