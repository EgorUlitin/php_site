<?php
function indexAction() {
    $title = 'Главная';
    $view_filename = 'index_main.php';
    generateResponse($view_filename, [
        'title' => $title
    ]);
}
function regAction() {
    $title = 'Регистрация';
    $view_filename = 'reg.php';
    generateResponse($view_filename, [
        'title' => $title
    ]);
}

function authAction() {
    $title = 'Зарегистрироваться';
    $view_filename = 'auth.php';
    
    generateResponse($view_filename, [
        'title' => $title,
    ]);
}

function reg_userAction() {
    include "file_model.php";
    include "validator_model.php";
    $post = $_POST;
    $user_data = check_array_data(json_decode($post['user_data'], true));
//    $user_data['state'] = 'user';
    if (!$user_data or (addDataToFile($user_data, '../private/files/users_lst.txt') === false)) {
        echo 'not add';
        return;
    }
    echo 'user add';
    return;
}

function account_authAction() {
    include "../private/Models/acc_model.php";
    include "../private/Models/validator_model.php";
    $post = $_POST;
    $user_data = check_array_data(json_decode($post['auth_data'], true));
    $all_users = getAllUsers();
    foreach ($all_users as $value) {
        if ($value['login'] == $user_data['login']) {
            if ($value['pwd'] == $user_data['pwd']) {
                $_SESSION['auth'] = true;
                $_SESSION['login'] = $user_data['login'];
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
function generateResponse($view, $data=[]) {
    if(is_array($data)) {
        extract($data);
    }
    require_once "../private/Views/template.php";
}