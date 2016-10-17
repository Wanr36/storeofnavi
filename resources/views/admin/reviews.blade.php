<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Отзывы</title>
    <link href="{!! asset('adminstyle/css/bootstrap.css') !!}" rel="stylesheet" />
    <link href="{!! asset('adminstyle/css/font-awesome.css') !!}" rel="stylesheet" />
    <link href="{!! asset('adminstyle/css/custom-styles.css') !!}" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{!! asset('adminstyle/css/main.css') !!}">
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default top-navbar" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/adminzone">
                <strong>
                    <img src="{!! asset('/img/logo.png') !!}" class="logo_header"  alt="Логотип"> Store of Navi
                </strong>
            </a>
        </div>
        <ul class="nav navbar-top-links navbar-left menu-str" id="main-menu">
            <li>
                <a href="/adminzone"><i class="fa fa-dashboard"></i> Консоль</a>
            </li>
            <li>
                <a href="/adminzone/course"><i class="fa fa-desktop"></i> Предметы</a>
            </li>
            <li>
                <a href="/adminzone/users"><i class="fa fa-user"></i> Пользователи</a>
            </li>
            <li>
                <a class="active-menu" href="/adminzone/reviews"><i class="fa fa-table"></i> Отзывы</a>
            </li>
            <li>
                <a href="/adminzone/comments"><i class="fa fa-comment-o"></i> Коментарии</a>
            </li>
            <li>
                <a href="/adminzone/messege"><i class="fa fa-envelope-o"></i> Сообщения</a>
            </li>
            <li>
                <a href="/adminzone/question"><i class="fa fa-question"></i> Вопрос-ответ</a>
            </li>
        </ul>
        <ul class="nav nav-pills menu-burger pull-left">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    НАВИГАЦИЯ <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li role="presentation" class="nav-li">
                        <a href="/adminzone"><i class="fa fa-dashboard"></i> Консоль</a>
                    </li>
                    <li role="presentation" class="nav-li">
                        <a href="/adminzone/course"><i class="fa fa-desktop"></i> Предметы</a>
                    </li>
                    <li role="presentation" class="nav-li">
                        <a href="/adminzone/users"><i class="fa fa-user"></i> Пользователи</a>
                    </li>
                    <li role="presentation" class="nav-li">
                        <a class="active-menu" href="/adminzone/reviews"><i class="fa fa-table"></i> Отзывы</a>
                    </li>
                    <li role="presentation" class="nav-li">
                        <a href="/adminzone/comments"><i class="fa fa-comment-o"></i> Коментарии</a>
                    </li>
                    <li role="presentation" class="nav-li">
                        <a href="/adminzone/messege"><i class="fa fa-envelope-o"></i> Сообщения</a>
                    </li>
                    <li role="presentation" class="nav-li">
                        <a href="/adminzone/question"><i class="fa fa-question"></i> Вопрос-ответ</a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Мой профиль</a>
                    </li>
                    <li><a class="exit_admin"><i class="fa fa-sign-out fa-fw"></i> Выход</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
    </nav>
    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                Поьзователь <small>Страница отзывов</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#">Главная</a></li>
                <li class="active">Отзывы</li>
            </ol>

        </div>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Отзывы</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <div class="form-group pull-right">
                                            <button class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                                        </div>
                                        <div class="form-group pull-right">
                                            <input type="search" class="form-control" placeholder="Ключевое слово...">
                                        </div>
                                    </div>
                                    <table class="table table-hover table-reviews">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Текст</th>
                                            <th>Пользователь</th>
                                            <th>Активирован</th>
                                            <th>Дата</th>
                                            <th>Действия</th>
                                        </tr>
                                        </thead>
                                        <tfoot></tfoot>
                                        <tbody>
                                        @foreach($reviews as $review)
                                        <tr>
                                            <th scope="row">{!! $review->id !!}</th>
                                            <th>{!! $review->textReviews !!}</th>
                                            <th>{!! $review->addUserReviews !!}</th>
                                            <th>
                                                @if($review->statusReviews == 1)
                                                    {{"Да"}}
                                                @elseif($review->statusReviews == 0)
                                                    {{"Нет"}}
                                                @endif
                                            </th>
                                            <th>{!! date("d.m.Y",strtotime($review->created_at)) !!}</th>
                                            <th>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Выполнить <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li class="{!! $review->id !!} update_review"><a href="#">Редактировать отзыв</a></li>
                                                        @if($review->statusReviews == 1)
                                                            <li class="{!! $review->id !!} show_review disabled" disabled><a href="#">Показать отзыв</a></li>
                                                        @elseif($review->statusReviews == 0)
                                                            <li class="{!! $review->id !!} show_review"><a href="#">Показать отзыв</a></li>
                                                        @endif
                                                        <li role="separator" class="divider"></li>
                                                        <li class="{!! $review->id !!} delite_review"><a href="#">Удалить отзыв</a></li>
                                                    </ul>
                                                </div>
                                            </th>
                                        </tr>
                                        @endforeach
                                        {!! $reviews->render() !!}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
        </div>
        <footer>
            <p>2016 &copy; «Store of Navi»</p>
        </footer>
    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
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
<!-- /. WRAPPER  -->
<!-- JS Scripts-->
<!-- jQuery Js -->
<script src="{!! asset('/adminstyle/js/jquery-1.10.2.js') !!}"></script>
<!-- Bootstrap Js -->
<script src="{!! asset('/adminstyle/js/bootstrap.min.js') !!}"></script>
<!-- Metis Menu Js -->
<script src="{!! asset('/adminstyle/js/jquery.metisMenu.js') !!}"></script>
<!-- Custom Js -->
<script src="{!! asset('/adminstyle/js/custom-scripts.js') !!}"></script>
<script src="{!! asset('/adminstyle/js/main.js') !!}"></script>
</body>
</html>
