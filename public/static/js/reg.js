jQuery(document).ready(function () {
    'use strict';

    jQuery('form#reg_form').submit(
        function (event) {
            event.preventDefault();
            let userName = jQuery('#name').val();
            let login = jQuery('#login').val();
            let email = jQuery('#email').val();
            let pwd = jQuery('#password').val();
            let user_data = {
                userName: userName,
                login: login,
                email: email,
                pwd: pwd,
                state: 'user'
            };
            user_data = 'user_data=' + JSON.stringify(user_data);
            jQuery.ajax({
                url: '../models/reg_user.php', 
                type: 'post', 
                data: user_data, 
                success: function (response) {  
                    console.log("response", response);
                    if (response === 'user add') {
                        jQuery("#myModal").modal('hide');
                        setTimeout(function () {
                            jQuery("#myModal2").modal('show');
                        }, 400);
                    } else {
                        console.log("Пользователь не добавлен");
                    }
                },
                error: function (err) {
                    console.log("Error", err);
                }
            });
        }
    )

});