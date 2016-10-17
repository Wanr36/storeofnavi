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
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/feedback.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i,800&subset=cyrillic" rel="stylesheet">

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
                                <li role="presentation" class="nav-li"><a href="#">ПРИЛОЖЕНИЯ</a></li>
                                <li role="presentation" class="nav-li"><a href="#">О ПРОЕКТЕ</a></li>
                                <li role="presentation" class="nav-li"><a href="#">ВОПРОС-ОТВЕТ</a></li>
                                <li role="presentation" class="nav-li"><a href="#">КОНТАКТЫ</a></li>
                            </ul>
                            <ul class="nav nav-pills menu-burger pull-right">
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        МЕНЮ <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li role="presentation" class="nav-li visible-xs"><a href="#" data-toggle="modal" data-target="#authregModal">МОЙ АККАУНТ</a></li>
                                        <li role="presentation" class="nav-li visible-xs"><a href="#" onclick="showsearch();">ПОИСК</a></li>
                                        <li role="presentation" class="nav-li"><a href="#">ПРИЛОЖЕНИЯ</a></li>
                                        <li role="presentation" class="nav-li"><a href="#">О ПРОЕКТЕ</a></li>
                                        <li role="presentation" class="nav-li"><a href="#">ВОПРОС-ОТВЕТ</a></li>
                                        <li role="presentation" class="nav-li"><a href="#">КОНТАКТЫ</a></li>
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
            <div class="feedback">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="pull-left application-h2">ОТЗЫВЫ</h1>
                    </div>
                    <img src="img/wave.png" class="application-wave" alt="Волна">
                </div>
                <div class="row" >
                    <div class="col-xs-12" >
                        <div class="col-xs-3 left-content">
                            <div class="col-xs-12 add-comm">
                                Ваши отзывы помогают нам сделать наш сервис еще лучше, более удобным, эффективным и полезным.<br><br>
                                Возможно, ваши отзывы будут полезными и другим пользователям.<br><br>
                                Пожалуйста, поделитесь своими эмоциями от использования нашего сервиса!<br><br>
                                <button class="btn btn-info add-com-btn">ОСТАВИТЬ ОТЗЫВ</button>
                            </div>
                            <div class="col-xs-12 banner" >
                                <div>
                                    <div class="image-caption">
                                        <h3 class="banner-text-h3 pull-right"><em>Решим мореходную астрономию</em></h3>
                                        <br>
                                        <h2 class="banner-text-h2 pull-right">В 1 КЛИК</h2>
                                        <button class="btn btn-danger banner-btn pull-right"><em>решить</em></button>
                                    </div>
                                    <img class="banner-img" src="img/banner.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-9 right-content">
                            <div class="col-xs-12 user-comment" >
                                <div class="col-xs-12 user-text">
                                    Изначально я не до конца доверял этому сайту, т.к. тематика, все-таки, весьма специфична и ошибиться в расчетах достаточно легко. Но знаете, результат меня очень обрадовал! Павел большой молодец! эти приложения реально помогают в учебе!
                                </div>
                                <div class="col-xs-8 user-info">
                                    <div class="col-xs-2 user-avatar">

                                    </div>
                                    <div class="col-xs-10 user-name-date">
                                        <span class="name">Константин<br>Константинопольский </span> <br>
                                        <span class="date">28 августа 2016г.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 user-comment" >
                                <div class="col-xs-12 user-text">
                                    Изначально я не до конца доверял этому сайту, т.к. тематика, все-таки, весьма специфична и ошибиться в расчетах достаточно легко. Но знаете, результат меня очень обрадовал! Павел большой молодец! эти приложения реально помогают в учебе!
                                </div>
                                <div class="col-xs-8 user-info">
                                    <div class="col-xs-2 user-avatar">

                                    </div>
                                    <div class="col-xs-10 user-name-date">
                                        <span class="name">Константин<br>Константинопольский </span> <br>
                                        <span class="date">28 августа 2016г.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 user-comment" >
                                <div class="col-xs-12 user-text">
                                    Изначально я не до конца доверял этому сайту, т.к. тематика, все-таки, весьма специфична и ошибиться в расчетах достаточно легко. Но знаете, результат меня очень обрадовал! Павел большой молодец! эти приложения реально помогают в учебе!
                                </div>
                                <div class="col-xs-8 user-info">
                                    <div class="col-xs-2 user-avatar">

                                    </div>
                                    <div class="col-xs-10 user-name-date">
                                        <span class="name">Константин<br>Константинопольский </span> <br>
                                        <span class="date">28 августа 2016г.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 user-comment" >
                                <div class="col-xs-12 user-text">
                                    Изначально я не до конца доверял этому сайту, т.к. тематика, все-таки, весьма специфична и ошибиться в расчетах достаточно легко. Но знаете, результат меня очень обрадовал! Павел большой молодец! эти приложения реально помогают в учебе!
                                </div>
                                <div class="col-xs-8 user-info">
                                    <div class="col-xs-2 user-avatar">

                                    </div>
                                    <div class="col-xs-10 user-name-date">
                                        <span class="name">Константин<br>Константинопольский </span> <br>
                                        <span class="date">28 августа 2016г.</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-9">

                        </div>

                    </div>
                </div>
            </div>
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
<div class="modal fade" id="authregModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 modal-auth">
                        <div class="modal-auth-menu">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <h1 class="modal-auth-h1">МОЙ АККАУНТ</h1>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <p class="modal-p">Авторизуйся на сайте и пользуйся им без ограничений! Для твоего удобства мы ввели авторизацию через социальные сети.</p>
                            </div>
                            <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-sm-offset-1">
                                <form role="form" method="POST" class="login-modal-form" action="{{ url('/login') }}">
                                    <div class="form-group">
                                        <label class="sr-only" for="authUserLogin">Логин</label>
                                        <input type="text" class="form-control" name="email" id="authUserLogin" placeholder="Твой логин">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="authUserPassword">Пароль</label>
                                        <input type="password" name="password" class="form-control" id="authUserPassword" placeholder="Пароль">
                                    </div>
                                    <button type="submit" class="btn btn-info modal-auth-btn"><span>АВТОРИЗОВАТЬСЯ</span></button>
                                </form>

                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <hr/>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3 modal-social"><p class="modal-p">Войди через соц.сети</p></div>
                            </div>
                            <div align="center" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <a href="#"><img src="img/vkontakte.png" alt=""></a>
                                <a href="#"><img src="img/facebook.png" alt=""></a>
                                <a href="#"><img src="img/googleplus.png" alt=""></a>
                                <a href="#"><img src="img/mailru.png" alt=""></a>
                                <a href="#"><img src="img/odnoklassniki.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 modal-reg">
                        <div class="modal-reg-menu">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <h1 class="modal-reg-h1">НЕ ЗАРЕГИСТРИРОВАН?</h1>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <p class="modal-p">Регистрация займет всего 15 секуед твоего времени. Зато после нее ты сможешь пользоваться всеми ништяками нашего сервиса! ;)</p>
                            </div>
                            <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-sm-offset-1">
                                <form role="form" class="registration-modal-form" method="POST" action="{{ url('/register') }}" >
                                    <div class="form-group">
                                        <label class="sr-only" for="regUserLogin">Логин</label>
                                        <input type="text" name="name" class="form-control" id="regUserLogin" placeholder="Твой логин">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="regUserEmail">E-mail</label>
                                        <input type="email" name="email" class="form-control" id="regUserEmail" placeholder="E-mail">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="regUserPassword">Пароль</label>
                                        <input type="password" name="password" class="form-control password" id="regUserPassword" placeholder="Пароль">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="regUserConfPassword">Пароль</label>
                                        <input type="password" name="password_confirmation" class="form-control password_confirmation" id="regUserConfPassword" placeholder="Подтверждение пароля">
                                    </div>
                                    <button type="submit" class="btn btn-default modal-reg-btn"><span>ЗАРЕГИСТРИРОВАТЬСЯ</span></button>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="feedModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 modal-auth">
                        <div class="modal-auth-menu">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <h1 class="modal-auth-h1">Оставить отзыв</h1>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <p class="modal-p">Оставьте свой отзыв, что бы мы могли узнать о плюсах и минусах нашего сервиса, а так же наши поситители!</p>
                            </div>
                            <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-sm-offset-1">
                                <form role="form" method="POST" class="login-modal-form" action="{{ url('/login') }}">
                                    <div class="form-group">
                                        <label class="sr-only" for="user">Логин или ФИО</label>
                                        <input type="text" class="form-control" name="user" id="user" placeholder="Твой логин">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="phone">Телефон</label>
                                        <input type="phone" name="phone" class="form-control" id="phone" placeholder="Ваш контактный телефон">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="text">Текст отзыва</label>
                                        <textarea type="phone" name="text" style="resize: none" class="form-control" id="text" cols="20" rows="10" placeholder="Текст сообщения"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-info modal-auth-btn"><span>Отправить</span></button>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
        $('.user-avatar').height($('.user-avatar').width());
    }
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
