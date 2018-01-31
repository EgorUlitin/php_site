<?php
include "file_model.php";
include "validator_model.php";
function getAllUsers() {
    $users = getDataFromFileShort("../files/users_lst.txt");
    return unserialize($users);
}
