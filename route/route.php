<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// banner
Route::get("api/:version/banner/:id", "api/:version.Banner/getBanner");
// 主题
Route::get("api/:version/theme", "api/:version.Theme/getSimpleList");
Route::get("api/:version/theme/:id", "api/:version.Theme/getProductDetail");
// 商品
Route::get("api/:version/product/recent", "api/:version.Product/getRecent");
// 分类
Route::get("api/:version/category/all", "api/:version.Category/getCateAll");
