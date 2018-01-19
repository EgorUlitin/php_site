$(document).ready(function () {
	'use strict';
	$('form#myModal').submit(
		function (event) {
			event.preventDefault();

			let userName = $('#name').val;
			let login = $('#login').val;
			let email = $('#email').val;
			let pwd = $('#password').val;

			let user_data = {
				userName: userName,
				login: login,
				email: email,
				pwd: pwd
			};

			user_data = 'user_data=' + JSON.stringify(user_data); 
			$.ajax({
				url: '../models/reguser.php',
				type: 'post',
				data: user_data,
				success: function (response) {
					console.log("response", response);
					if (response === 'user add') {
						window.location = "/"
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
})