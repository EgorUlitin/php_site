<?php
namespace Vendor\Models;

class Validator
{
	
	public function check_input($str) {
	    return !empty(strip_tags(trim($str)));
	}
	public function check_array_data($arr) {
	    foreach ($arr as $value) {
	        if (!check_input($value)) {
	            return false;
	        }
	    }
	    return $arr;
	}
}













