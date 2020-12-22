<?php

namespace app\api\model;

use think\Model;

class BaseModel extends Model
{
	protected function prefixPath($value, $data)
	{
		$path = $value;
		if ($data['from'] == 1) {
			$path =  config('app_host') . $path;
		}
		return $path;
	}
}
