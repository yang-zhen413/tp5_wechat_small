<?php 
namespace app\api\validate;

use app\api\validate\BaseValidate;

class IdMustBeInt extends BaseValidate
{
	protected $rule = [
		"id" => "require|isPositiveInteger"
	];

    protected $message = [
        "id.require" => "id不能为空",
        "id.isPositiveInteger" => "id必须是正整数"
    ];
}