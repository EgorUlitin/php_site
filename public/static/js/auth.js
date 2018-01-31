jQuery(document).ready(function () {
     'use strict';

    jQuery('form#auth').submit(
        function (event) {
            event.preventDefault();            
            let login = jQuery('#auth_login').val();
            let pwd = jQuery('#auth_pass').val();
            let auth_data = {
                login: login,
                pwd: pwd
            };
            auth_data = 'auth_data=' + JSON.stringify(auth_data);

            jQuery.ajax({
                url: '/account_auth',
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
                        case 'admin':
                            window.location = "/account";
                            break;
                    }},
                error: function (err) {
                    console.log("err", err);
                }
            });
        })
     });