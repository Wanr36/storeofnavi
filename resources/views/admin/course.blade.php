<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Предметы</title>
    <link href="{!! asset('adminstyle/css/bootstrap.css') !!}" rel="stylesheet" />
    <link href="{!! asset('adminstyle/css/font-awesome.css') !!}" rel="stylesheet" />
    <link href="{!! asset('adminstyle/css/custom-styles.css') !!}" rel="stylesheet" />
    <link rel="stylesheet" href="{!! asset('adminstyle/css/main.css') !!}">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
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
                <a class="active-menu" href="/adminzone/course"><i class="fa fa-desktop"></i> Предметы</a>
            </li>
            <li>
                <a href="/adminzone/users"><i class="fa fa-user"></i> Пользователи</a>
            </li>
            <li>
                <a href="/adminzone/reviews"><i class="fa fa-table"></i> Отзывы</a>
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
                        <a class="active-menu" href="/adminzone/course"><i class="fa fa-desktop"></i> Предметы</a>
                    </li>
                    <li role="presentation" class="nav-li">
                        <a href="/adminzone/users"><i class="fa fa-user"></i> Пользователи</a>
                    </li>
                    <li role="presentation" class="nav-li">
                        <a href="/adminzone/reviews"><i class="fa fa-table"></i> Отзывы</a>
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
                Предметы <small>Страница категорий</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#">Главная</a></li>
                <li class="active">Предметы</li>
            </ol>

        </div>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-offset-1 group_cource">
                                @foreach($courses as $course)
                                    <a href="#{!! $course->actionDisciplines  !!}" class="btn btn-default cource_btn">{!! $course->nameDisciplines  !!}</a>
                                @endforeach
                                <a href="#new" class="btn btn-danger btn_new_course active"><i class='glyphicon glyphicon-plus'></i> Добавить</a>
                            </div>
                            <div class="image-caption">
                                <div class="row">
                                    <div class="col-md-offset-1 col-md-12 col-lg-12">
                                            <h3 class="pull-right img-text-h3">Название предмета</h3>
                                    </div>
                                </div>
                                <div class="row footer-img">
                                    <div class="col-md-6 col-lg-6">
                                        <p class="col-md-offset-1 col-md-8 img-text-p">Слоган для слайдера</p>
                                    </div>
                                    <div class="col-md-5 col-lg-5">
                                        <a href="#" class="btn btn-danger pull-right img-btn-footer">Перейти</a>
                                    </div>
                                </div>
                            </div>
                            <img class="header-img " src="{!! asset('img/slider.png') !!}" alt="Изображение предмета">
                            <div class="row disciplin-form-group">
                                <form class="form-course add_course" enctype = 'multipart/form-data' accept="image/*" method="post" action="#">
                                    <div class="col-md-5 col-md-offset-1">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Название предмета</label>
                                            <input required type="text" name="nameDisciplines" class="form-control nameDisciplines" id="exampleInputEmail1" placeholder="Название предмета">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Action предмета</label>
                                            <input required type="text" name="actionDisciplines" class="form-control actionDisciplines" id="exampleInputPassword1" placeholder="Action предмета">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Краткое название предмета</label>
                                            <input required type="text" name="shortDiscipline" class="form-control shortDiscipline" id="exampleInputPassword1" placeholder="Краткое название предмета">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Описание предмета</label>
                                            <textarea required class="form-control discription" name="discription" rows="3" placeholder="Описание предмета"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-success"><i class="fa fa-pencil"></i> Сохранить изменения</button>
                                    </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputFile">Фоновое изображение</label>
                                                <input required type="file" multiple="multiple" name="img" class="form-control img">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Слоган для слайдера</label>
                                                <textarea required name="discriptionForImg" class="form-control discriptionForImg" rows="3" placeholder="Слоган для слайдера"></textarea>
                                            </div>
                                            <p class="help-block">Внимание! Все приложения будут удалены!</p>
                                            <button type="button" class="btn btn-danger delite_corse disabled"><i class="fa fa-trash-o"></i> Удалить предмет</button>
                                        </div>
                                    </form>

                            </div>

                            <hr>
                            <div class="panel-header">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-1">
                                        <h2>Приложения предмета
                                            <button class="btn btn-success add_new_application" data-toggle="tooltip" data-placement="top" title="Добавить приложение">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div class="col-md-4">
                                        <h3 class="pull-right">Окно предпросмотра</h3>
                                    </div>
                                </div>
                                <div class="row application-group">
                                    <div class="col-md-5 col-md-offset-1">
                                        <div class="form-group">
                                            <select multiple class="form-control application-scr">
                                                <!--<option class="id aplication-selected">Приложение 1</option>
                                                <option class="id aplication-selected">Приложение 2</option>
                                                <option class="id aplication-selected">Приложение 3</option>
                                                <option class="id aplication-selected">Приложение 4</option>
                                                <option class="id aplication-selected">Приложение 5</option>
                                                <option class="id aplication-selected">Приложение 1</option>
                                                <option class="id aplication-selected">Приложение 2</option>
                                                <option class="id aplication-selected">Приложение 3</option>
                                                <option class="id aplication-selected">Приложение 4</option>
                                                <option class="id aplication-selected">Приложение 5</option>
                                                <option class="id aplication-selected">Приложение 1</option>
                                                <option class="id aplication-selected">Приложение 2</option>
                                                <option class="id aplication-selected">Приложение 3</option>
                                                <option class="id aplication-selected">Приложение 4</option>-->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-offset-3  col-md-2 ">
                                        <div class="thumbnail in-border" data-toggle="modal" data-target="#appModal">
                                            <img class="dostal" src="/img/8.jpg" alt="...">
                                            <div class="caption">
                                                <h3 class="color-blue bold-text text-size" align="center">Пример текста</h3>
                                                <p align="center"><a href="#" class="btn btn-danger summa" role="button"><em>00.00 руб.</em></a></p>
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
