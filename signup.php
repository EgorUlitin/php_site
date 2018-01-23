<?php
	
	$data = $_POST;

var_dump($data);

    $name = $data['name'];
    $login = $data['login'];
    $email = $data['email']

	function signup($str) {
		if (isset($str)) {
			$input_text = trim($str);
			$input_text = htmlspecialchars($input_text);
			$input_text = stripslashes($input_text);
			$input_text = strip_tags($input_text);
			return $input_text;
		} else {
			echo "Введите корректные данные!";
		}
	}
	


?>
