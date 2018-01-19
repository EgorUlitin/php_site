<?php

include "getAdd.php";
function check_data($str) {
	$data = json_decode($str, true);

	return $data;
}



function reg_user() {
	$post = $_POST;
	$user_data = check_data($post['user_data']);
	if (!$user_data or !addDataFile($user_data, '../files/users_lst.txt')){
		echo 'not add';
		// returne false
	}
	echo 'user add';
	// returne true
}