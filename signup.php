<?php
	
	$data = $_POST;
	function signup($data['signup']) {
		if (isset($data['signup'])) {
			$input_text = trim($data['signup']);
			$input_text = htmlspecialchars($input_text);
			$input_text = stripslashes($input_text);
			$input_text = strip_tags($input_text);
			return $input_text['signup'];
		} else {
			echo "Введите корректные данные!";
		}
	}
	

?>
