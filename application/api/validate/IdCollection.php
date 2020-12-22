<?php

/**
 * @Author: JasonYang
 * @Date:   2020-12-21 17:15:28
 * @Last Modified by:   JasonYang
 * @Last Modified time: 2020-12-21 17:35:02
 * @Email: yangvvvvip@163.com
 */
namespace app\api\validate;

class IdCollection extends BaseValidate
{
	protected $rule = [
		"ids" => "require|checkIds"
	];

	protected $message = [
		"ids" => "ids必须是以逗号分隔的多个正整数"
	];

	protected function checkIds($value)
	{
		$ids = explode(",", $value);
		if (empty($ids)) {
			return false;
		}

		foreach ($ids as $id) {
			if (!$this->isPositiveInteger($id)) {
				return false;
			}
		}
		return true;
	}
}