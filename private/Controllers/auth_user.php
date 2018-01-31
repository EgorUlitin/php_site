<?php
session_start();
include "file_model.php";
include "validator_model.php";
if (isset($_POST['auth_data'])) {
    authUser();
}
if ($_GET['logout']) {
    session_unset();
    header("Location:/");
}
