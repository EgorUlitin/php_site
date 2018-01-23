<?php
include "file_model.php";
include "validator_model.php";
function getAllUsers() {
    $users = getDataFromFileShort("../files/users_lst.txt");
    return unserialize($users);
}
function authUser() {
    $post = $_POST;
    $user_data = check_array_data(json_decode($post['auth_data'], true));
    $all_users = getAllUsers();
    foreach ($all_users as $value) {
        if ($value['login'] == $user_data['login']) {
            if ($value['pwd'] == $user_data['pwd']) {
                echo $value['state'];
                return true;
            }
            echo 'pwd is wrong';
            return false;
        }
    }
    echo 'user not found';
    return false;
}
authUser();