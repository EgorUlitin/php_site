<!DOCTYPE html><html lang="en">
    <head>
    	<meta charset="utf-8">
    	<title><? echo $title; ?></title>
    	<meta name="viewport" content="width=device-width; initial-scale=1.0">
    	<link rel="stylesheet" href="/static/css/bootstrap.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="/static/js/jquery-3.2.1.js"></script>
    	<script src="/static/js/bootstrap.js"></script>
    	<link rel="stylesheet" href="/static/css/font-awesome.min.css">
    	<link rel="stylesheet" href="/static/css/main.css">
    </head>
	<body>
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
                                <a href="#" class="navbar-brand" href="#"><img src="/img/logo.png" alt=""></a>
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
                                    <li><a href="/reg">Регистрация</a></li>
                                    <li><a href="/auth">Авторизация</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        

        <? require_once $view; ?>
    
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
    <?php include "modalauth.php"; ?>
    <?php include "modalreg.php"; ?>
    <script src="/static/js/reg.js"></script>
    <script src="/static/js/auth.js"></script>
    <script src="/static/js/bootstrap.js"></script>
    </body>
</html>