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
                    <li>
                        <a href="#"><i class="fa fa-user fa-fw"></i> Мой профиль</a>
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
    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                Предметы <small>Страница приложений</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="index">Главная</a></li>
                <li><a href="course">Предметы</a></li>
                <li class="active">Приложение</li>
            </ol>

        </div>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-1"><h3>Название приложение</h3></div>
                            <div class="col-md-4"><h4>Окно предпросмотра приложения</h4></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-md-offset-1">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Название</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Название">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Title</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Action</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Action">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Краткое название</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Краткое название">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Описание приложения</label>
                                        <textarea class="form-control" rows="3" placeholder="Описание приложения"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Требования к приложению</label>
                                        <textarea class="form-control" rows="3" placeholder="Требования к приложению"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-success"><i class="fa fa-pencil"></i> Сохранить изменения</button>
                                </form>
                            </div>
                            <div class="col-md-2">
                                <div class="thumbnail in-border" data-toggle="modal" data-target="#appModal">
                                    <img class="dostal" src="/img/8.jpg" alt="...">
                                    <div class="caption">
                                        <h3 class="color-blue bold-text text-size" align="center">Прямоугольные сферические треугольники</h3>
                                        <p align="center"><a href="#" class="btn btn-danger" role="button"><em>99.98 руб.</em></a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <form>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Вывод решения в</label>
                                        <select class="form-control">
                                            <option value="pdf">pdf</option>
                                            <option value="Word">Word</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPassword1">Статус</label>
                                        <select class="form-control">
                                            <option value="Активно">Активно</option>
                                            <option value="Неактивно">Неактивно</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPassword1">Загрузить фоновое изображение</label>
                                        <input type="file" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Стоимость</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" MIN="0" MAX="9999" value="0" id="exampleInputEmail1">
                                            <span class="input-group-addon"><i class="fa fa-rub"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i> Удалить приложение</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-5 col-md-offset-1">
                                <div class="thumbnail">
                                    <div class="caption">
                                        <form>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Форма ввода данных form.php</label>
                                                <input type="file" class="form-control" id="exampleInputPassword1">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Файл обработки введеных данных data_check.php</label>
                                                <input type="file" class="form-control" id="exampleInputPassword1">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Алгоритм решения задачи count.php</label>
                                                <input type="file" class="form-control" id="exampleInputPassword1">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Проверка полученныз данных count_check.php</label>
                                                <input type="file" class="form-control" id="exampleInputPassword1">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Файл генерирующий Word, PDF typeFile.php</label>
                                                <input type="file" class="form-control" id="exampleInputPassword1">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Формаы вывода result.php</label>
                                                <input type="file" class="form-control" id="exampleInputPassword1">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Дополнительная информацияпосле решения</label>
                                                <textarea class="form-control" rows="3" placeholder="Дополнительная информацияпосле решения"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="thumbnail">
                                    <div class="caption">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Значение 1</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Значение 2</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Значение 3</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Решить</button>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i> Очистить</button>
                                        </div>
                                    </div>
                                </div>
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Пример решения</label>
                                        <input type="file" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <button type="submit" class="btn btn-success"><i class="fa fa-pencil"></i> Сохранить изменения</button>
                                </form>
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
