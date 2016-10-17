<!DOCTYPE html>
<html lang="RU-ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Консоль</title>
    <link href="{!! asset('/adminstyle/css/bootstrap.css" rel="stylesheet') !!}" />
    <link href="{!! asset('/adminstyle/css/font-awesome.css" rel="stylesheet') !!}" />
    <link href="{!! asset('/adminstyle/js/morris/morris-0.4.3.min.css') !!}" rel="stylesheet" />
    <link href="{!! asset('/adminstyle/css/custom-styles.css') !!}" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{!! asset('/adminstyle/js/Lightweight-Chart/cssCharts.css') !!}">
    <link rel="stylesheet" href="{!! asset('/adminstyle/css/main.css') !!}">
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Меню</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/adminzone">
                    <strong>
                        <img src="/img/logo.png" class="logo_header"  alt="Логотип"> Store of Navi
                    </strong>
                </a>
            </div>
                <ul class="nav navbar-top-links navbar-left menu-str" id="main-menu">
                    <li>
                        <a class="active-menu" href="/adminzone"><i class="fa fa-dashboard"></i> Консоль</a>
                    </li>
                    <li>
                        <a href="adminzone/course"><i class="fa fa-desktop"></i> Предметы</a>
                    </li>
                    <li>
                        <a href="adminzone/users"><i class="fa fa-user"></i> Пользователи</a>
                    </li>
                    <li>
                        <a href="adminzone/reviews"><i class="fa fa-table"></i> Отзывы</a>
                    </li>
                    <li>
                        <a href="adminzone/comments"><i class="fa fa-comment-o"></i> Коментарии</a>
                    </li>
                    <li>
                        <a href="adminzone/messege"><i class="fa fa-envelope-o"></i> Сообщения</a>
                    </li>
                    <li>
                        <a href="adminzone/question"><i class="fa fa-question"></i> Вопрос-ответ</a>
                    </li>
                </ul>
            <ul class="nav nav-pills menu-burger pull-left">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        НАВИГАЦИЯ <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li role="presentation" class="nav-li">
                            <a class="active-menu" href="/adminzone"><i class="fa fa-dashboard"></i> Консоль</a>
                        </li>
                        <li role="presentation" class="nav-li">
                            <a href="adminzone/course"><i class="fa fa-desktop"></i> Предметы</a>
                        </li>
                        <li role="presentation" class="nav-li">
                            <a href="adminzone/users"><i class="fa fa-user"></i> Пользователи</a>
                        </li>
                        <li role="presentation" class="nav-li">
                            <a href="adminzone/reviews"><i class="fa fa-table"></i> Отзывы</a>
                        </li>
                        <li role="presentation" class="nav-li">
                            <a href="adminzone/comments"><i class="fa fa-comment-o"></i> Коментарии</a>
                        </li>
                        <li role="presentation" class="nav-li">
                            <a href="adminzone/messege"><i class="fa fa-envelope-o"></i> Сообщения</a>
                        </li>
                        <li role="presentation" class="nav-li">
                            <a href="adminzone/question"><i class="fa fa-question"></i> Вопрос-ответ</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="adminzone/myprofile"><i class="fa fa-user fa-fw"></i> Мой профиль</a>
                        </li>
                        <li>
                            <a class="exit_admin"><i class="fa fa-sign-out fa-fw"></i> Выход</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->

        <!-- /. NAV SIDE  -->

		<div id="page-wrapper">
		  <div class="header">
                        <h1 class="page-header">
                            Админ панель <small>Главная страница</small>
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Главная</a></li>
					  <li class="active">Консоль</li>
					</ol>

		</div>
            <div id="page-inner">

                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
					<div class="board">
                        <div class="panel panel-primary">
						<div class="number">
							<h3>
								<h3>44</h3>
								<small>За сутки</small>
                                <h3>444</h3>
                                <small>За неделю</small>
                                <h3>4455</h3>
                                <small>Всего</small>
							</h3>
						</div>
						<div class="icon">
						   <i class="fa fa-eye fa-5x red"></i>
						</div>

                        </div>
						</div>
                    </div>

					       <div class="col-md-4 col-sm-12 col-xs-12">
					<div class="board">
                        <div class="panel panel-primary">
						<div class="number">
							<h3>
								<h3>32</h3>
								<small>За сутки</small>
                                <h3>80</h3>
                                <small>За неделю</small>
                                <h3>321</h3>
                                <small>Всего</small>
							</h3>
						</div>
						<div class="icon">
						   <i class="fa fa-shopping-cart fa-5x blue"></i>
						</div>

                        </div>
						</div>
                    </div>

					       <div class="col-md-4 col-sm-12 col-xs-12">
					<div class="board">
                        <div class="panel panel-primary">
						<div class="number">
							<h3>
								<h3>56,150 р.</h3>
								<small>За сутки</small>
                                <h3>56,150 р.</h3>
                                <small>За неделю</small>
                                <h3>56,150 р.</h3>
                                <small>Всего</small>
							</h3>
						</div>
						<div class="icon">
						   <i class="fa fa-money fa-5x green"></i>
						</div>

                        </div>
						</div>
                    </div>

                </div>
				     <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="panel panel-default chartJs">
                                <div class="panel-heading">
                                    <div class="card-title">
                                        <div class="title">ТОП 10 Приложений</div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>№</th>
                                                    <th>Приложение</th>
                                                    <th>Категория</th>
                                                    <th>Цена</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Косоугольные сферические треугольники</td>
                                                    <td>Геометрия</td>
                                                    <td>Бесплатно</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Прямоугольные сферические треугольники</td>
                                                    <td>Астрономия</td>
                                                    <td>89.98 руб.</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Прямоугольные сферические треугольники</td>
                                                    <td>Вычислительная техника</td>
                                                    <td>99.98 руб.</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Косоугольные сферические треугольники</td>
                                                    <td>Геометрия</td>
                                                    <td>Бесплатно</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Косоугольные сферические треугольники</td>
                                                    <td>Геометрия</td>
                                                    <td>Бесплатно</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Косоугольные сферические треугольники</td>
                                                    <td>Геометрия</td>
                                                    <td>Бесплатно</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Косоугольные сферические треугольники</td>
                                                    <td>Геометрия</td>
                                                    <td>Бесплатно</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Косоугольные сферические треугольники</td>
                                                    <td>Геометрия</td>
                                                    <td>Бесплатно</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Косоугольные сферические треугольники</td>
                                                    <td>Геометрия</td>
                                                    <td>Бесплатно</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>Косоугольные сферические треугольники</td>
                                                    <td>Геометрия</td>
                                                    <td>Бесплатно</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="panel panel-default chartJs">
                                <div class="panel-heading">
                                    <div class="card-title">
                                        <div class="title">Последние 10 покупок</div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>№</th>
                                                    <th>Email</th>
                                                    <th>Приложение</th>
                                                    <th>Цена</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>name@site.com</td>
                                                    <td>Косоугольные сферические треугольники</td>
                                                    <td>Бесплатно</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>name@site.com</td>
                                                    <td>Косоугольные сферические треугольники</td>
                                                    <td>Бесплатно</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>name@site.com</td>
                                                    <td>Косоугольные сферические треугольники</td>
                                                    <td>Бесплатно</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>name@site.com</td>
                                                    <td>Косоугольные сферические треугольники</td>
                                                    <td>Бесплатно</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>name@site.com</td>
                                                    <td>Косоугольные сферические треугольники</td>
                                                    <td>Бесплатно</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>name@site.com</td>
                                                    <td>Косоугольные сферические треугольники</td>
                                                    <td>Бесплатно</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>name@site.com</td>
                                                    <td>Косоугольные сферические треугольники</td>
                                                    <td>Бесплатно</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>name@site.com</td>
                                                    <td>Косоугольные сферические треугольники</td>
                                                    <td>Бесплатно</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>name@site.com</td>
                                                    <td>Косоугольные сферические треугольники</td>
                                                    <td>Бесплатно</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>name@site.com</td>
                                                    <td>Косоугольные сферические треугольники</td>
                                                    <td>Бесплатно</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				<footer>
                    <p>2016 &copy; «Store of Navi»</p>
				</footer>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"> <i class="fa fa-sign-out"></i> Вы уверены?</h4>
                </div>
                <div class="modal-body">
                    <p>Вы уверены, что вы хотите выйти из личного кабинета?</p>
                </div>
                <div class="modal-footer">
                    <a type="button" href="adminzone/logout" class="btn btn-danger">Выйти</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть окно</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div class="modal fade" id="msg" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title modal-title-msg"> </h4>
                </div>
                <div class="modal-body modal-body-msg">
                    <p> </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть окно</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <script src="{!! asset('/adminstyle/js/jquery-1.10.2.js') !!}"></script>
    <script src="{!! asset('/adminstyle/js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('/adminstyle/js/jquery.metisMenu.js') !!}"></script>
    <script src="{!! asset('/adminstyle/js/morris/raphael-2.1.0.min.js') !!}"></script>
    <script src="{!! asset('/adminstyle/js/morris/morris.js') !!}"></script>
	<script src="{!! asset('/adminstyle/js/easypiechart.js') !!}"></script>
	<script src="{!! asset('/adminstyle/js/easypiechart-data.js') !!}"></script>
	<script src="{!! asset('/adminstyle/js/Lightweight-Chart/jquery.chart.js') !!}"></script>
    <script src="{!! asset('/adminstyle/js/main.js') !!}"></script>
</body>
</html>
