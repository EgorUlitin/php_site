<!DOCTYPE html><html>
    <head>
    	<meta charset="utf-8">
    	<title>Горящие туры</title>
    	<meta name="viewport" content="width=device-width; initial-scale=1.0">
    	<link rel="stylesheet" href="css/bootstrap.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.."></script>
    	<script src="js/bootstrap.js"></script>
    	<link rel="stylesheet" href="css/font-awesome.min.css">
    	<link rel="stylesheet" href="css/main.css">
    </head>
	<body>
		<!--             Меню             -->
		<div class="bg-header">
			<div class="container">
				<div class="row">
					<nav class="navbar navbar-inverse navbar-fixed-top" >
						<div class="container">
							<div class="navbar-header navbar-left">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
									<span class="sr-only"></span>
	            					<span class="icon-bar"></span>
	            					<span class="icon-bar"></span>
	            					<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
							</div>
							<div class="collapse navbar-collapse" id="responsive-menu">
								<ul class="nav navbar-nav navbar-right">
									<li><a href="#">Подбор тура</a></li>
									<li><a href="#"><span class="glyphicon glyphicon-fire"></span>Горящие туры</a></li>
									<li><a href="#">Страны</a></li>
									<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Наши услуги<b class="caret"></b></a>
							          <ul class="dropdown-menu">
							            <li><a href="#">Авиабилеты</a></li>
							            <li><a href="#">Визы</a></li>
							            <li><a href="#">Бронирование отелей</a></li>					            
							            <li><a href="#">Круизы</a></li>
							            <li><a href="#">Туры по России</a></li>
							          </ul>
							      	</li>
									<li><a href="#">О компании</a></li>
									<li><a href="#">Контакты</a></li>
								</ul>
							</div>
				        </div>
	        		</nav>
				</div>
			</div>
			<!--              Заголовок-1                 -->
			
			<!--              Слайдер               -->
			
			<!--                  Заголовок-2+модальное окно            -->
			<div class="container">
				<div class="jumbotron jt">
					<h1>Регистрируйся или умри!</h1>
	  				<p>wtf?!</p>
	  				<p><a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" role="button">Регистрация</a></p>
	  				<p><a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal2" role="button">Авторизация</a></p>
				</div>
				<!-- модаль для регистрации -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					        <h4 class="modal-title" id="myModalLabel">Регистрация</h4>
					      </div>
					      <div class="modal-body">
					      	<form action="/signup.php" method="POST" role="form">
								<div class="form-group">
							    	<label for="">Ваше имя*</label>
							    	<input type="name" name="login" class="form-control" id="" placeholder="Ваше имя">
							  	</div>
							  	<div class="form-group">
								    <label for="">Ваш email*</label>
								    <input type="email" name="email" class="form-control" id="" placeholder="Ваш email">
								</div>
								<div class="form-group">
								    <label for="">Ваш телефон*</label>
								    <input type="nubmer" name="number" class="form-control" id="" placeholder="Ваш телефон">
								</div>
								<div class="form-group">
								    <label for="">Ваш пароль*</label>
								    <input type="password" name="password" class="form-control" id="" placeholder="Ваш пароль">
								</div>
							</form>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
					        <button type="button" name="signup" class="btn btn-primary">Подтвердить</button>
					      </div>
					    </div>
					</div>
				</div><!-- модаль для регистрации -->
				<!-- модаль для авторизации -->
				<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times</button>
				        <h4 class="modal-title" id="myModalLabel">Авторизация</h4>
				      </div>
					  <div class="modal-body">
				      	<form action="/index.php" method="POST" role="form">
							  	<div class="form-group">
								    <label for="">Ваш email*</label>
								    <input type="email" name="email" class="form-control" id="" placeholder="Ваш email">
								</div>
								<div class="form-group">
								    <label for="">Ваш пароль*</label>
								    <input type="password" name="password" class="form-control" id="" placeholder="Ваш пароль">
								</div>
								
							</form>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
					        <button type="button" name="login" class="btn btn-primary">Войти</button>
					      </div>
					    </div>
					</div>
			</div><!-- модаль для авторизации -->
		</div>
		<!--                    Инфоблок               -->
		<div class="bg-infoblock">	
			<div class="container infoblock">
				<div class="flex">
					<div class="flex1">
	  					<h3 class="">Обновление сайта</h3><hr><p>Мы постоянно развиваемся и рады предстваить Вам новую версию нашего сайта. У него мощная техническая начинка, которая позволяет за несколько секунд находить сотни туров, от крупнейших туроператоров.</p>
					</div>
					<div class="flex1">
	  					<h3 class="">Адаптивный сайт</h3><hr><p>Наш сайт адаптирован для мобильных устройств, а это значит, что Вы можете искать обычные туры или просматривать горящие путевки прямо со своего телефона или планшета.</p><br>
	  					<a class="btn btn-default" href="#" role="button"><span class="glyphicon glyphicon-arrow-right"></span>Подробнее</a>
					</div>
					<div class="flex1">
	  					<h3 class="">Онлайн поиск туров 24/7</h3><hr><p>Дорогие, друзья! Мы используем передовые технологии в туризме, а это значит, что на нашем сайте Вы можете найти туры от более чем 70 туроператоров в режиме онлайн, в любое время суток.</p><br>
	  					<a class="btn btn-default" href="#" role="button"><span class="glyphicon glyphicon-arrow-right"></span>Подробнее</a>
					</div>
				</div>
			</div>
		</div>	
		<!--                 Отзывы+добавление комментариев              -->
		<div class="bg-comment">
			<div class="container">
				<div class="reviews1">
					<div>
						<h2>Отзывы наших туристов</h2><br><br><br>
						<div class="container">
							<img src="img/photo2.jpg" alt="" class="img-circle col-lg-2">
							<div class="col-lg-10">
								<h3>Горчакова Марина, 25.11.2017<br><small>Отлично съездили! Крит - это замечательный остров! Взяли машину на прокат, объехали почти все самые интересные места. Спасибо давчонкам за отель, который они посоветовали, удобно расположен, все было рядом и номера хорошие.</small></h3>
							</div>
						</div>
						<div class="container reviews-img">
							<img src="img/photo1.jpg" alt="" class="img-circle col-lg-2">
							<div class="col-lg-10">
								<h3>Степанов Афанасий, 22.11.2017<br><small>Доверили свой отдых Вашей компании и не прогадали. Отправил заявку на сайте, мне сразу перезвонили и предложили несколько интересных вариантов. Решил заехать в офис, чтобы пообщаться подробнее, договорились на удобное время. Менеджеры помогли определиться с отелем, получилось даже дешевле, чем планировал. Отель превзошел мои ожидания, отлично отдохнули всей семьей! Спасибо за Вашу работу, будем обращаться только в Вам, отправляю к Вам своих друзей и знакомых, пока никто не жаловался.</small></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="container ">
					<div class="btn-comment">
						<p class="text-center btn-3"><a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal2" role="button">Добавить отзыв</a></p>
					</div>
					<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					        <h4 class="modal-title" id="myModalLabel">Отзыв о работе компании</h4>
					      </div>
					      <div class="modal-body">
					      	<form role="form">
								<div class="form-group">
							    	<label for="exampleInputEmail1">Ваше имя*</label>
							    	<input type="name" class="form-control" id="exampleInputName1" placeholder="Ваше имя">
							  	</div>
							  	<div class="form-group">
								    <label for="exampleInputPassword1">Ваш email*</label>
								    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ваш email">
								</div>
								<div class="form-group">
								    <label for="exampleInputPassword1">Оставьте ваши комментарии</label>
								    <textarea type="comment" rows="10" cols="20" class="form-control mo-1" id="exampleInputComment1" placeholder="Ваш комментарий"></textarea>
								</div>
							</form>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
					        <button type="button" class="btn btn-primary">Отправить</button>
					      </div>
					    </div>
					</div>
					</div>
				</div>
			</div>
		</div>		
		<!--                        Баннер                     -->
		<div class="container banner-1">
			<div class="title-banner-1">
				<h1 class="text-center">Наши преимущества</h1>
			</div>
			<div class="grid-banner">
				<div class="text-center"><img src="img/ic1.png" alt=""><p>Забота о клиенте</p>
				</div>
				<div class="text-center"><img src="img/ic2.png" alt=""><p>Надежность</p>
				</div>
				<div class="text-center"><img src="img/ic3.png" alt=""><p>Акции и скидки</p>
				</div>
				<div class="text-center"><img src="img/ic4.png" alt=""><p>Все страны мира</p>
				</div>
			</div>
		</div>
		<!--          Заголовок-2+кнопка            -->
		<div class="container title-2">
			<div class="col-lg-6">
			  <h3>Не смогли подобрать подходящий тур?<br><br><small>Оставьте заявку, и мы найдем то, что Вам нужно. Мы отвечаем быстро, не рассылаем спам и не навязываем дополнительных услуг. Просто попробуйте и убедитесь сами!</small></h3>
			</div>
			<div class="col-lg-6 text-center btn1">
			  <p><a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" role="button">Получить выгодное предложение</a></p>
			  </div>
		</div>
		<!--               футер                    -->
		<div class="footer">
			<div class="container">
				<div class="flex-footer">
					<div class="flex2">
						<img src="img/logo.png" alt=""><br><br><br>
						<div>
							<small>Санкт-Петербург, ул. Гастелло, д.12</small><br>
							<h3>(812) 222-22-22</h3>
						</div>
					</div>
					<div class="flex3">
					<a href="#">Положение об обработке персональных данных</a><br><br>
					<p>Предложения на сайте не являются публичной офертой и носят исключительно информационный характер.</p><br>
					<i class="fa fa-vk" aria-hidden="true"></i>
					<i class="fa fa-facebook" aria-hidden="true"></i>
					<i class="fa fa-instagram" aria-hidden="true"></i>
					<i class="fa fa-twitter" aria-hidden="true"></i>
					</div>
				</div>
			</div>
		</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	</body>
</html>