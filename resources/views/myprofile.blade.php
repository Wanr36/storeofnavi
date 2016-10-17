<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="RU-ru"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="RU-ru"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="RU-ru"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="RU-ru"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i,800&subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/profile.css">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div class="head_photo"></div>
<div class="container header-container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="header-box">
                <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-2">
                        <div class="header-logo">
                            <img class="header-logo" src="img/logo.png" alt="Логотип store of navi">
                        </div>
                    </div>
                    <div class="col-xs-9 col-sm-4 col-md-5 col-lg-7 header-nav">
                        <div>

                            <ul class="nav nav-pills menu-str">
                                <li role="presentation" class="nav-li"><a href="disciplines">ПРИЛОЖЕНИЯ</a></li>
                                <li role="presentation" class="nav-li"><a href="faq">О ПРОЕКТЕ</a></li>
                                <li role="presentation" class="nav-li"><a href="question">ВОПРОС-ОТВЕТ</a></li>
                                <li role="presentation" class="nav-li"><a href="contacts">КОНТАКТЫ</a></li>
                            </ul>
                            <ul class="nav nav-pills menu-burger pull-right">
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        МЕНЮ <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li role="presentation" class="nav-li visible-xs"><a href="#" data-toggle="modal" data-target="#authregModal">МОЙ АККАУНТ</a></li>
                                        <li role="presentation" class="nav-li visible-xs"><a href="#" onclick="showsearch();">ПОИСК</a></li>
                                        <li role="presentation" class="nav-li"><a href="disciplines">ПРИЛОЖЕНИЯ</a></li>
                                        <li role="presentation" class="nav-li"><a href="faq">О ПРОЕКТЕ</a></li>
                                        <li role="presentation" class="nav-li"><a href="question">ВОПРОС-ОТВЕТ</a></li>
                                        <li role="presentation" class="nav-li"><a href="contacts">КОНТАКТЫ</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-4 col-lg-3 menu-navmenu hidden-xs">
                        <div class="row">
                            <div class="col-sm-1">
                                <img src="img/usericon.png" class="menu-user-icon"></img>
                            </div>
                            <div class="col-sm-8" style="margin-top: 15px">

                                <div><!-- <div class="obertka"> -->
                                    <a href="#" data-toggle="modal" data-target="#authregModal"><i class="glyphicon glyphicon-user menu-user-icon2"></i>
                                        <span class="menu-user-name">МОЙ ПРОФИЛЬ</span></a>
                                </div>
                            </div>
                            <img src="img/searchicon.png" class="menu-search-icon"  onclick="showsearch();"></img>
                            <div  class="col-sm-1 menu-search-border">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-5 col-sm-offset-7 col-md-4 col-md-offset-8 col-lg-3 col-lg-offset-9 search-input hide">
                <div class="search-input-in">
                    <div class="col-xs-12" >
                        <div class="input-group">
                      <span class="input-group-btn">
                        <a href="#" class="glyphicon glyphicon-search" ></a>
                      </span>
                            <input type="text" class="form-control" placeholder="Поиск..." >
                        </div><!-- /input-group -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="my-account">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="pull-left my-account-h2">Мой аккаунт</h2>
                    </div>
                    <img src="img/wave.png" class="my-account-wave" alt="Волна">
                </div>
                <div class="row">
                    <div id="reg" class="col-xs-8" >
                        <div class="col-xs-12 acc-info">
                            <div class="col-xs-12 info-caption">
                                <h3 class="pull-left my-account-h3">РЕГИСТРАЦИОННЫЕ ДАННЫЕ</h3>
                            </div>

                            <div class="row info-content">
                                <div class="col-xs-4 info">
                                    <form role="form">
                                        <div class="form-group">
                                            <label for="userLogin">Ваш логин:</label>
                                            <input type="text" class="form-control" id="userLogin" value="MegaFuckingDestroyer" placeholder="Логин">
                                        </div>
                                        <div class="form-group">
                                            <label for="userPass">Ваш пароль:</label>
                                            <input type="password" class="form-control" id="userPass" value="1234567890" placeholder="Пароль">
                                        </div>
                                        <div class="form-group">
                                            <label for="userEmail">Ваша электронная почта:</label>
                                            <input type="email" class="form-control" id="userEmail" value="Konstantin@konstantin.ru" placeholder="E-mail">
                                        </div>
                                        <div class="form-group">
                                            <label for="userTel">Ваш телефон:</label>
                                            <input type="tel" class="form-control" id="userTel" value="+79057982443" placeholder="Телефон">
                                        </div>
                                    </form>
                                </div>
                                <div class="col-xs-4 info">
                                    <form role="form">
                                        <div class="form-group">
                                            <label for="userFirstName">Вашe имя:</label>
                                            <input type="text" class="form-control" id="userFirstName" value="Константин" >
                                        </div>
                                        <div class="form-group">
                                            <label for="userLastName">Ваша фамилия:</label>
                                            <input type="text" class="form-control" id="userLastName" value="Константинопольский" >
                                        </div>
                                        <div class="form-group">
                                            <label for="userSpec">Ваша специальность:</label>
                                            <input type="text" class="form-control" id="userSpec" value="Судоводитель" >
                                        </div>
                                        <div class="form-group">
                                            <label for="userKurs">Ваш курс:</label>
                                            <input type="text" class="form-control" id="userKurs" value="3" >
                                        </div>
                                    </form>
                                </div>
                                <div class="col-xs-4 info info3">
                                    <p>При публикации комментариев или отзывов, на сайте будет отображаться только ваш логин и аватар.
                                        <br><br>
                                        Мы заботимся о вашей конфиденциальности, поэтому не показываем ваши реальные имя и фамилию</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4 col-xs-offset-8 after-acc-info">
                            <button class="btn btn-info acc-btn">РЕДАКТИРОВАТЬ</button>
                        </div>
                    </div>
                    <div id="ava" class="col-xs-4" style="/*padding-left: 30px;*/">
                        <div id="avatar" class="col-xs-12">
                        </div>
                        <div class="col-xs-10 col-xs-offset-1 after-ava">
                            <button class="btn btn-info acc-btn">СМЕНИТЬ АВАТАР</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-buyings">
                <div class="col-xs-12 buying-table">
                    <h3 class="pull-left my-account-h3">МОИ ПОКУПКИ</h3>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>№</th>
                            <th>ID</th>
                            <th>Дата</th>
                            <th>Приложение</th>
                            <th>Цена</th>
                            <th>Статус</th>
                            <th>Действие</th>
                        </tr>
                        </thead>

                        <tr>
                            <td>1</td>
                            <td><a href="#">12876695</a></td>
                            <td>24 / 08 / 2016<br>20:09:34</td>
                            <td><a href="#">Косоугольные сферичиские треугольники</a></td>
                            <td>Бесплатно</td>
                            <td><span class="status">Куплено</span></td>
                            <td><img src="img/action.png" alt=""></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="#">12876695</a></td>
                            <td>24 / 08 / 2016<br>20:09:34</td>
                            <td><a href="#">Косоугольные сферичиские треугольники</a></td>
                            <td>Бесплатно</td>
                            <td><span class="status">Куплено</span></td>
                            <td><img src="img/action.png" alt=""></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="#">12876695</a></td>
                            <td>24 / 08 / 2016<br>20:09:34</td>
                            <td><a href="#">Косоугольные сферичиские треугольники</a></td>
                            <td>Бесплатно</td>
                            <td><span class="status">Куплено</span></td>
                            <td><img src="img/action.png" alt=""></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="#">12876695</a></td>
                            <td>24 / 08 / 2016<br>20:09:34</td>
                            <td><a href="#">Косоугольные сферичиские треугольники</a></td>
                            <td>Бесплатно</td>
                            <td><span class="status">Куплено</span></td>
                            <td><img src="img/action.png" alt=""></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="#">12876695</a></td>
                            <td>24 / 08 / 2016<br>20:09:34</td>
                            <td><a href="#">Косоугольные сферичиские треугольники</a></td>
                            <td>Бесплатно</td>
                            <td><span class="status">Куплено</span></td>
                            <td><img src="img/action.png" alt=""></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="#">12876695</a></td>
                            <td>24 / 08 / 2016<br>20:09:34</td>
                            <td><a href="#">Косоугольные сферичиские треугольники</a></td>
                            <td>Бесплатно</td>
                            <td><span class="status">Куплено</span></td>
                            <td><img src="img/action.png" alt=""></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="#">12876695</a></td>
                            <td>24 / 08 / 2016<br>20:09:34</td>
                            <td><a href="#">Косоугольные сферичиские треугольники</a></td>
                            <td>Бесплатно</td>
                            <td><span class="status">Куплено</span></td>
                            <td><img src="img/action.png" alt=""></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="#">12876695</a></td>
                            <td>24 / 08 / 2016<br>20:09:34</td>
                            <td><a href="#">Косоугольные сферичиские треугольники</a></td>
                            <td>Бесплатно</td>
                            <td><span class="status">Куплено</span></td>
                            <td><img src="img/action.png" alt=""></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="#">12876695</a></td>
                            <td>24 / 08 / 2016<br>20:09:34</td>
                            <td><a href="#">Косоугольные сферичиские треугольники</a></td>
                            <td>Бесплатно</td>
                            <td><span class="status">Куплено</span></td>
                            <td><img src="img/action.png" alt=""></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="#">12876695</a></td>
                            <td>24 / 08 / 2016<br>20:09:34</td>
                            <td><a href="#">Косоугольные сферичиские треугольники</a></td>
                            <td>Бесплатно</td>
                            <td><span class="status">Куплено</span></td>
                            <td><img src="img/action.png" alt=""></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="my-comments">
                <div class="col-xs-12 comment-table">
                    <h3 class="pull-left my-account-h3">МОИ КОММЕНТАРИИ</h3>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>№</th>
                            <th>Дата</th>
                            <th>Комментарий</th>
                            <th>Статус</th>
                            <th>Действие</th>
                        </tr>
                        </thead>
                        <tr>
                            <td>1</td>
                            <td>24 / 08 / 2016<br>20:09:34</td>
                            <td>
                                <p>Косоугольные сферические треугольники всегда давались мне не легко. Однако теперь, с появлением этого замечательного сайта я не только с легкостью решаю все задачи, но еще и могу держать МИД на 10 минут дольше! Спасибо этому сайту, спасибо Паше!</p>
                                <p class="after-com-p"><i>к приложению:</i> <a href="#">Косоугольные сферические треугольники</a>
                            </td>
                            <td><span class="status">Опублик...</span></td>
                            <td><img src="img/action.png" alt=""></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>24 / 08 / 2016<br>20:09:34</td>
                            <td>
                                <p>Косоугольные сферические треугольники всегда давались мне не легко. Однако теперь, с появлением этого замечательного сайта я не только с легкостью решаю все задачи, но еще и могу держать МИД на 10 минут дольше! Спасибо этому сайту, спасибо Паше!</p>
                                <p class="after-com-p"><i>к приложению:</i> <a href="#">Косоугольные сферические треугольники</a>
                            </td>
                            <td><span class="status">Опублик...</span></td>
                            <td><img src="img/action.png" alt=""></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>24 / 08 / 2016<br>20:09:34</td>
                            <td>
                                <p>Косоугольные сферические треугольники всегда давались мне не легко. Однако теперь, с появлением этого замечательного сайта я не только с легкостью решаю все задачи, но еще и могу держать МИД на 10 минут дольше! Спасибо этому сайту, спасибо Паше!</p>
                                <p class="after-com-p"><i>к приложению:</i> <a href="#">Косоугольные сферические треугольники</a>
                            </td>
                            <td><span class="status">Опублик...</span></td>
                            <td><img src="img/action.png" alt=""></td>
                        </tr>

                    </table>

                </div>
            </div>
        </div>

    </div>
</div>
<div class="row sale-block">
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-lg-offset-1">
            <p style="text-align: center;"><button class="btn btn-danger sale-block-btn">ПОПРОБУЙ БЕСПЛАТНО!</button></p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 col-lg-offset-1">
            <p align="center" class="sale-block-text">Остались сомнения насчет нашего сервиса? Попробуй <span class="color-red">бесплатные приложения</span>!</p>
        </div>

    </div>
</div>
<footer>
    <div class="container">
        <div class="row footer footer-info-nav-desk">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
                <p class="footer-img"><img src="img/footerlogo.png" class="" alt=""></p>
                <p class="footer-text" align="center"><i>2010 — 2016 © «Store of Navi»</i></p>
                <p class="footer-text" align="center"><i>Качественная моментальная помощь в решении: задач, лабораторных работ, курсовых для курсантов, судоводителей <b>Морского Государственного Университета (МГУ) им. адмирала Г.И. Невельского</b></i></p>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 footer-nav">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

                </div>
                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <dl>
                            <dt class="footer-text-dt">ИНФОРМАЦИЯ</dt>
                            <dd>
                                <ul class="list-unstyled footer-text-ul">
                                    <li><a href="#">Приложения</a></li>
                                    <li><a href="#">О проекте</a></li>
                                    <li><a href="#">Частые вопросы</a></li>
                                    <li><a href="#">Контакты</a></li>
                                    <br>
                                    <li><a href="#">Пользовательское соглашение</a></li>
                                </ul>
                            </dd>
                        </dl>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-5 col-lg-offset-1">
                        <dl>
                            <dt class="footer-text-dt">МОЙ АККАУНТ</dt>
                            <dd>
                                <ul class="list-unstyled footer-text-ul">
                                    <li><a href="#">Профиль</a></li>
                                    <li><a href="#">Мои покупки</a></li>
                                    <li><a href="#">Как польщоваться сайтом</a></li>
                                    <br>
                                    <li><a href="#">Выйти</a></li>
                                </ul>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="footer-border"></div>
                    <div align="right" class="footer-dev">
                        <a href="#"><img src="img/developer.png" alt=""></a>
                        <a href="#"><img src="img/design.png" alt=""></a>
                    </div>

                </div>
            </div>
        </div>
        <div class="row footer footer-info-nav-mob">

            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 ">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <dl>
                        <dt class="footer-text-dt">ИНФОРМАЦИЯ</dt>
                        <dd>
                            <ul class="list-unstyled footer-text-ul">
                                <li><a href="#">Приложения</a></li>
                                <li><a href="#">О проекте</a></li>
                                <li><a href="#">Частые вопросы</a></li>
                                <li><a href="#">Контакты</a></li>
                                <br>
                                <li><a href="#">Пользовательское соглашение</a></li>
                            </ul>
                        </dd>
                    </dl>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-5 col-lg-offset-1">
                    <dl>
                        <dt class="footer-text-dt">МОЙ АККАУНТ</dt>
                        <dd>
                            <ul class="list-unstyled footer-text-ul">
                                <li><a href="#">Профиль</a></li>
                                <li><a href="#">Мои покупки</a></li>
                                <li><a href="#">Как польщоваться сайтом</a></li>
                                <br>
                                <li><a href="#">Выйти</a></li>
                            </ul>
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 footer-info-nav-mob">
                <p class="footer-img"><img src="img/logo3.png" class="" alt=""></p>
                <p class="footer-text" align="center">2010 — 2016 © «Store of Navi»</p>
                <p class="footer-text" align="center">Качественная моментальная помощь в решении: задач, лабораторных работ, курсовых для курсантов, судоводителей Морского Государственного Университета (МГУ) им. адмирала Г.И. Невельского</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="footer-border"></div>
                <div align="right" class="footer-dev">
                    <a href="#"><img src="img/design.png" alt=""></a>
                    <a href="#"><img src="img/developer.png" alt=""></a>
                </div>

            </div>
        </div>
    </div>
</footer>


<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<script type="text/javascript">
    $(document).mouseup(function(event){
        if( $(event.target).closest('.search-input').length )
            return;
        if ($('.search-input').hasClass('show'))
            $('.search-input').removeClass('show').addClass('hide');
        event.stopPropagation();
    });

    function showsearch() {
        $('.search-input').removeClass('hide').addClass('show');
    }

    $(function() {
        changeHeight();
        $(window).resize(changeHeight);
    });
    function changeHeight() {
        $('#avatar').height($('#avatar').width());
    }

    $('.info3').innerHeight($('.info').height());
    // $('#ava').innerHeight($('.info').height());
</script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
</body>
</html>
