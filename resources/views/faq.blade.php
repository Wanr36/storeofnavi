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
    <link rel="stylesheet" href="css/about.css">
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
                                <li role="presentation" class="nav-li"><a href="disciplines">ПРИЛОЖЕНИЯ</a></li>
                                <li role="presentation" class="nav-li active-nav"><a href="faq">О ПРОЕКТЕ</a></li>
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
                                        <li role="presentation" class="nav-li active-nav"><a href="faq">О ПРОЕКТЕ</a></li>
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
        <div class="col-xs-12 col-lg-9">
            <div class="about">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="pull-left about-h2">О ПРОЕКТЕ</h1>
                    </div>
                    <img src="img/wave.png" class="about-wave" alt="Волна">
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-xs-12 about-head">
                            <p><b>Привет!</b> <br>
                                Если ты — курсант–судоводитель Морского Государственного Университета (МГУ) им. адм. Г.И. Невельского (Россия, г. Владивосток), то наверняка знаешь, насколько сложно решать задачи, выполнять лабораторные работы или курсовые по таким дисциплинам, как <a href="#">«Математические основы судовождения» (МОС)</a>, <a href="#">«Мореходная астрономия»</a>. Приходится постоянно изучать множество материалов, посещать лекции, разбираться в большом количестве литературы. И, как следствие, тратить много времени… А что делать, если разобраться в этих дисциплинах не получается?</p>
                        </div>
                        <div class="col-xs-12 three-solution">
                            <div class="col-xs-12 three-solution-head">
                                <span>СУЩЕСТВУЕТ 3 РЕШЕНИЯ:</span>
                            </div>
                            <div class="col-xs-4 solution">
                                <img  src="img/solution1.png" alt="">
                                <p><i>Ходить на лекции и обучаться. Проблема в том, что это долго и не всегда дает нужный результат. Также курсантам систематически приходится стоять в нарядах, и, как следствие, пропускать важные занятия, на которых объясняют методику решения задач.</i></p>
                            </div>
                            <div class="col-xs-4 solution">
                                <img  src="img/solution2.png" alt="">
                                <p><i>Заказать решение задач или написание курсовых у однокурсника. Это наиболее популярный способ, однако, однокурсник в нужное время может быть занят или заболеть.</i></p>

                            </div>
                            <div class="col-xs-4 solution">
                                <img  src="img/solution3.png" alt="">
                                <p><i>Использовать приложения от Store of Navi и получить правильное решение всех задач в течение 3-5 минут! Кроме того, приложения подойдут Вам также, если Вы в совершенстве знаете дисциплину и просто не хотите тратить свое время на разрешение задач.</i></p>

                            </div>
                        </div>
                        <div class="col-xs-12 about-content" >
                            <div class="col-xs-12 bio">
                                <div class="col-xs-2 bio-ava">

                                </div>
                                <div class="col-xs-10 bio-text">
                                    <p>Меня зовут Павел Авдеев, и я сам был одним из тех однокурсников, к которым можно было обратиться за помощью в решении подобных задач. Но так как в сутках всего 24 часа, помочь удавалось далеко не всем. Я понимал, что многие из них вынуждены постоянно стоять в нарядах и в рабочих группах за свои «хвосты», нередко, и весь летний отпуск. А ведь задолженности могут тянуться годами! И тогда я создал проект, который предлагает приложения для мгновенного решения задач по <a href="#">«Математическим основам судовождения»</a> и <a href="#">«Мореходной астрономии»</a> работающие круглосуточно.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 info-app">
                                <h4>Как это работает и почему я получу<br>гарантированно правильно решенные задачи?</h4>
                                <p>С нашими приложениями всё, что вам нужно сделать — это ввести в него исходные данные и нажать кнопку «Решить». Сразу же после оплаты (в ту же минуту!) вы получите правильное решение в PDF-файле. Всего 1,5 секунды — и задача решена! А если решение окажется не верным — мы в кратчайшие сроки разберемся с неполадками и вышлем вам правильный вариант (в абсолютном большинстве случаев такое возможно только при неправильном вводе исходных данных, если такое случится, то мы обязуемся бесплатно перерешать ваш заказ, ыедь вы же уже заплатили)!</p>
                            </div>
                            <div class="col-xs-6 info-app">
                                <h4>Все наши приложения отвечают следующим требованиям:</h4>
                                <ul>
                                    <li><i>Подробное описание</i></li>
                                    <li><i>Легкость и простота в использовании</i></li>
                                    <li><i>Мгновенность</i></li>
                                    <li><i>Результат решения отвечает<br>всем заявленным нормативам</i></li>
                                </ul>
                            </div>
                            <div class="col-xs-6 info-app">
                                <h4>Пользуясь нашими приложениями, вы получаете:</h4>
                                <ul>
                                    <li><i>Правильно решённое задание</i></li>
                                    <li><i>Экономию своего времени</i></li>
                                    <li><i>Лёгкость и гибкость оплаты</i></li>
                                    <li><i>Доступ к сервису 24 часа в сутки</i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 visible-lg-block">
            <div class="row">
                <div id="hexagon">
                    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-12 hexagon">
                        <h3 align="center" class="hexagon-header-text">
                            <span class="hexagon-big-text">3 ПРИЧИНЫ</span>
                            <span class="hexagon-little-text">ВОСПОЛЬЗОВАТЬСЯ</span>
                            <span class="hexagon-little-text">НАШИМ СЕРВИСОМ</span>
                        </h3>
                        <div class="mZ">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object" src="img/m1.png" alt="АНАЛОГОВ НЕ СУЩЕСТВУЕТ">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 align="center" class="media-heading mZ-text">АНАЛОГОВ НЕ<br> СУЩЕСТВУЕТ</h4>
                                            <p align="center" class="mZ-p">
                                                Нашим приложениям не существует аналогов. Вы нигде не сможете найти, скачать подобные приложения. Они абсолютно уникальны!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#"><img class="media-object" src="img/m2.png" alt="МГНОВЕННЫЙ РЕЗУЛЬТАТ"></a>
                                        </div>
                                        <div class="media-body">
                                            <h4 align="center" class="media-heading mZ-text">МГНОВЕННЫЙ<br> РЕЗУЛЬТАТ</h4>
                                            <p align="center" class="mZ-p">
                                                Понадобится ровно столько времени, сколько займет проведение платежа, а сам правильный ответ приходит в течение 1,5 секунд с момента поступления подтверждения об оплате – мгновенно!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object" src="img/m3.png" alt="ГАРАНТИЯ КАЧЕСТВА">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 align="center" class="media-heading mZ-text"> ГАРАНТИЯ<br> КАЧЕСТВА </h4>
                                            <p align="center" class="mZ-p">
                                                Правильный результат наших приложений гарантирован, а весь процесс происходит прозрачно и открыто. Вы можете в любое время зайти на сайт, восполь- зоваться приложением и оплатить услуги.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid feedback">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <h2 class="pull-left content-application-h2">ОТЗЫВЫ</h2>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <a href="" class="pull-right main-application-a">посмотреть все отзывы</a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img src="img/wave.png" class="content-application-wave" alt="Волна">
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($feedbacks as $feedback)
            <div class="col-xs-3 otziv-block" >
                <div class="col-xs-12 user-comment" >
                    {!! $feedback->textReviews !!}
                    <div class="col-xs-12 user-info">
                        <div class="col-xs-4 user-avatar">
                            <img src="../img/img1.jpg" class="user-avatar" alt="">
                        </div>
                        <div class="col-xs-8 user-name-date">
                            <p class="name">{!! $feedback->addUserReviews !!}</p>
                            <p class="date">{!! date("d.m.Y",strtotime($feedback->created_at)) !!} </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
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

<div class="modal fade" id="authregModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div> -->
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
                                <form role="form">
                                    <div class="form-group">
                                        <label class="sr-only" for="authUserLogin">Логин</label>
                                        <input type="text" class="form-control" id="authUserLogin" placeholder="Твой логин">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="authUserPassword">Пароль</label>
                                        <input type="password" class="form-control" id="authUserPassword" placeholder="Пароль">
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
                                <form role="form">
                                    <div class="form-group">
                                        <label class="sr-only" for="regUserLogin">Логин</label>
                                        <input type="text" class="form-control" id="regUserLogin" placeholder="Твой логин">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="regUserEmail">E-mail</label>
                                        <input type="email" class="form-control" id="regUserEmail" placeholder="E-mail">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="regUserPassword">Пароль</label>
                                        <input type="password" class="form-control" id="regUserPassword" placeholder="Пароль">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="regUserConfPassword">Пароль</label>
                                        <input type="password" class="form-control" id="regUserConfPassword" placeholder="Подтверждение пароля">
                                    </div>
                                    <button type="submit" class="btn btn-default modal-reg-btn"><span>ЗАРЕГИСТРИРОВАТЬСЯ</span></button>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
              <button type="button" class="btn btn-primary">Сохранить изменения</button>
            </div> -->
        </div>
    </div>
</div>

<div class="modal fade" id="appModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!--
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
                <h4 class="modal-title">КОСОУГОЛЬНЫЕ СФЕРИЧЕСКИЕ ТРЕУГОЛЬНИКИ</h4>
                <div class="alert alert-danger"><p class="alert-p">
                        Предупреждение: Данным приложением может пользоваться только <a href="#">зарегистрированный пользователь</a>, пройдите <a href="#">авторизацию</a>!</p>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 appInsertData">
                            <div class="col-sm-12 insertHeader">
                                <h5>ВВЕДИ ДАННЫЕ</h5>
                            </div>
                            <form class="form-horizontal" role="form">

                                <div class="form-group">
                                    <label class="col-sm-6 control-label appInput appKnow">Известно:</label>
                                    <div class="col-sm-1 appInput"></div>
                                    <div class="col-sm-4 appInput">
                                        <select id="input1" class="form-control">
                                            <option></option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input2" class=" col-sm-2 control-label appInput">&nbsp;&nbsp;&nbsp;_=</label>
                                    <div class="col-sm-4 appInput">
                                        <input type="text" class="form-control" id="input2">
                                    </div>
                                    <label for="input2" class="col-sm-1 control-label appInput">&deg;&nbsp;&nbsp;&nbsp;</label>
                                    <div class="col-sm-4 appInput">
                                        <input type="text" class="form-control" id="input3">
                                    </div>
                                    <label for="input3" class="col-sm-1 control-label appInput">&prime;&nbsp;&nbsp;&nbsp;</label>
                                </div>
                                <div class="form-group">
                                    <label for="input4" class=" col-sm-2 control-label appInput">&nbsp;&nbsp;&nbsp;_=</label>
                                    <div class="col-sm-4 appInput">
                                        <input type="text" class="form-control" id="input4">
                                    </div>
                                    <label for="input4" class="col-sm-1 control-label appInput">&deg;&nbsp;&nbsp;&nbsp;</label>
                                    <div class="col-sm-4 appInput">
                                        <input type="text" class="form-control" id="input5">
                                    </div>
                                    <label for="input5" class="col-sm-1 control-label appInput">&prime;&nbsp;&nbsp;&nbsp;</label>
                                </div>
                                <div class="form-group">
                                    <label for="input6" class=" col-sm-2 control-label appInput">&nbsp;&nbsp;&nbsp;_=</label>
                                    <div class="col-sm-4 appInput">
                                        <input type="text" class="form-control" id="input6">
                                    </div>
                                    <label for="input6" class="col-sm-1 control-label appInput">&deg;&nbsp;&nbsp;&nbsp;</label>
                                    <div class="col-sm-4 appInput">
                                        <input type="text" class="form-control" id="input7">
                                    </div>
                                    <label for="input7" class="col-sm-1 control-label appInput">&prime;&nbsp;&nbsp;&nbsp;</label>
                                </div>
                                <div class="col-sm-12 insertFooter">
                                    <div class="col-sm-6 price-badge">
                                        <em class="btn pull-right btn-danger">Бесплатно</em>
                                    </div>
                                    <div class="col-sm-6 btn-accept">
                                        <button type="submit" class="btn btn-default">РЕШИТЬ</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="col-sm-7 appCaption">
                        <div class="">
                            <h5>ТРЕБОВАНИЯ К ПРИЛОЖЕНИЮ</h5>
                            <ul>
                                <li>При вводе данных для "ABC" сумма углов должна быть в пределах от 180&deg; до 560&deg;;</li>
                                <li>При вводе данных для "abc" сумма сторон должна быть в пределаз от 0&deg; до 360&deg;;</li>
                                <li>При вводе дробных значений (градусов, минут, пленгов, расстояний) необходимо отделять дробную часть знаком "." - точка.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-5 col-sm-offset-2 appLinkCaption">
                        <a href="#">Перейти на страницу приложения</a>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
              <button type="button" class="btn btn-primary">Сохранить изменения</button>
            </div> -->
        </div>
    </div>
</div>


<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
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
