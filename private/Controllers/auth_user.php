<?php

namespace Vendor\Controllers;

session_start();

use Vendor\Models\Validator;

class Auth_user
{
	function __contruct
	{
		if (isset($_POST['auth_data'])) {
    	authUser();
		}
		if ($_GET['logout']) {
    	session_unset();
    	header("Location:/");
		}
	}
}


