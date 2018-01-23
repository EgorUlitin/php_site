$(document).ready(function () {
     'use strict';

     let form = $('form#auth')[0];
     if (form !== undefined) {
         form[2].addEventListener('click', getAuthData);
     }

     function getAuthData() {
         let login = form[0].value;
         let pwd = form[1].value;

         let auth_data = {
             login: login,
             pwd: pwd
         };

         auth_data = 'auth_data=' + JSON.stringify(auth_data);
         console.log("auth_data", auth_data);

         $.ajax({
             url: '../model/auth_user.php',
             type: 'post',
             data: auth_data,
             success: function (response) {
                 console.log("response", response);
                 switch (response) {
                     case 'pwd is wrong':
                         document.getElementById('response').innerHTML = 'pwd is wrong';
                         break;
                     case 'user not found':
                         document.getElementById('response').innerHTML = 'user not found';
                         break;
                     case 'user':
                         window.location = "/user_account.php";
                         break;
                     case 'admin':
                         window.location = "/admin_account.php";
                         break;
                 }
             },
             error: function (err) {
                 console.log("err", err);
             }
         });

     }
     });