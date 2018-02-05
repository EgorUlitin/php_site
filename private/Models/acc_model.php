<?php
use Vendor\Models\Validator;
function getAllUsers() {
    $users = getDataFromFileShort("../files/users_lst.txt");
    return unserialize($users);
}
