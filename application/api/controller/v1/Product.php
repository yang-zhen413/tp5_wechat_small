<?php

namespace app\api\controller\v1;

use think\Controller;
use app\api\validate\Count;
use app\api\model\Product as ProductModel;
use app\lib\exception\ProductException;

class Product
{
	/**
	 * [getRecent 获取最新商品]
	 * @Author   JasonYang
	 * @DateTime 2020-12-22T15:26:20+0800
	 * @param    integer                  $count [条数]
	 * @return   [type]                          [description]
	 * @throws   ProductException
	 */
    public function getRecent($count = 10)
    {
    	(new Count())->goCheck();

    	$products = ProductModel::getRecentData($count);
    	if ($products->isEmpty()) {
    		throw new ProductException();
    	}
    	$products->hidden(['summary']);
    	return $products;
    }

    public function getAllInCategory($id = 0)
    {
        
    }
}
