<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Вход в админ панель</title>
    <link href="{!! asset('adminstyle/css/bootstrap.css') !!}" rel="stylesheet" />
    <link rel="icon" href="" type="image/x-icon">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<style>
    body {
        background-color: #2c3338;
        color: #606468;
        font-family: 'Open Sans', Arial, sans-serif;
        font-size: 14px;
        line-height: 1.5em;
    }

    a {
        color: #eee;
        text-decoration: none;
    }
    a:hover {
        text-decoration: underline;
    }

    input {
        border: none;
        font-family: 'Open Sans', Arial, sans-serif;
        font-size: 14px;
        line-height: 1.5em;
        padding: 0;
        -webkit-appearance: none;
    }

    p {
        line-height: 1.5em;
    }

    .clearfix { *zoom: 1; } /* For IE 6/7 */
    .clearfix:before, .clearfix:after {
        display: table;
        content: "";
    }
    .clearfix:after { clear: both; }

    /* ---------- LOGIN ---------- */

    #login {
        margin: 150px auto;
        width: 280px;
    }

    #login form span {
        background-color: #363b41;
        border-radius: 3px 0px 0px 3px;
        -moz-border-radius: 3px 0px 0px 3px;
        -webkit-border-radius: 3px 0px 0px 3px;
        color: #606468;
        display: block;
        float: left;
        height: 50px;
        line-height: 50px;
        text-align: center;
        width: 50px;
    }

    #login form input {
        height: 50px;
        outline:none;
    }

    #login form input[type="email"], input[type="password"] {
        background-color: #3b4148;
        border-radius: 0px 3px 3px 0px;
        -moz-border-radius: 0px 3px 3px 0px;
        -webkit-border-radius: 0px 3px 3px 0px;
        color: #606468;
        margin-bottom: 1em;
        padding: 0 16px;
        width: 230px;
    }

    #login form input:focus {
        color:#fff;
    }

    #login form input[type="submit"] {
        border-radius: 3px;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        background-color: #ea4c88;
        color: #eee;
        font-weight: bold;
        margin-bottom: 2em;
        text-transform: uppercase;
        cursor:pointer;
        width: 280px;
    }

    #login form input[type="submit"]:hover {
        background-color: #d44179;
    }

    #login > p {
        text-align: center;
    }

    #login > p span {
        padding-left: 5px;
    }

    /* ����� ���� vladmaxi, ����� ������� */
    .vladmaxi-top{
        line-height: 24px;
        font-size: 11px;
        background: #eee;
        text-transform: uppercase;
        z-index: 9999;
        position: fixed;
        top:0;
        left:0;
        width:100%;
        font-family: calibri;
        font-size: 13px;
        box-shadow: 1px 0px 2px rgba(0,0,0,0.2);
        -webkit-animation: slideOut 0.5s ease-in-out 0.3s backwards;
    }
    @-webkit-keyframes slideOut{
        0%{top:-30px; opacity: 0;}
        100%{top:0px; opacity: 1;}
    }

    .vladmaxi-top a{
        padding: 0px 10px;
        letter-spacing: 1px;
        color: #333;
        text-shadow: 0px 1px 1px #fff;
        display: block;
        float: left;
    }
    .vladmaxi-top a:hover{
        background: #fff;
    }
    .vladmaxi-top span.right{
        float: right;
    }
    .vladmaxi-top span.right a{
        float: left;
        display: block;
    }
    .loader{
        margin-top: 20px;
    }
</style>
<div class="container-fluid">
    <div class="vladmaxi-top">
        <a href="/" target="_blank">Главная Storeofnavi.ru</a>
        <div class="clr"></div>
    </div>
</div>
<div class="container container-fluid">
    <div class="row">
        <div id="login">
            <form action="{!! asset("/adminzone/login") !!}" method="post" class="sign-in-admin">
                <fieldset class="clearfix">
                    <p>
                        <span class="fontawesome-user"><i class="fa fa-user"></i></span>
                        <input type="email" placeholder="E-mail" class=' email_user' name="email_user" required>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    </p>
                    <p>
                        <span class="fontawesome-lock"><i class="fa fa-key"></i></span>
                        <input type="password"  placeholder="Пароль" class=' password_user' name="password_user" required>
                    </p>
                    <p><input type="submit" value="ВОЙТИ"></p>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="glyphicon glyphicon-log-in"></i> Вход в систему</h4>
            </div>
            <div class="modal-body">
                <div class="col-sm-offset-5 loader">

                </div>
                <p class="answer">

                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</body>
<script src="{!! asset('/adminstyle/js/jquery-1.10.2.js') !!}" type="text/javascript"></script>
<script src="{!! asset('/adminstyle/js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('/adminstyle/js/sonic.js') !!}"></script>
<script src="{!! asset('/adminstyle/js/input-admin.js') !!}"></script>
</html>

