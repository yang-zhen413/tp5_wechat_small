<?php 
namespace app\api\validate;


class IdMustBeInt extends BaseValidate
{
	protected $rule = [
		"id" => "require|integer"
	];
}