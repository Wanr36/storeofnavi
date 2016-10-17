$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
var derectivs = {
    type: {
        get:"GET",
        post:"POST"
    },
    dataType:"JSON"
}
var messege = {
        Error : function(){
            var header = "<i class='fa fa-exclamation'></i> Ошибка",
                body = "Ошибка на стороне сервера! Перезагрузите страницу.";
            $(".modal-title-msg").html(header);
            $(".modal-body-msg p").html(body);
            $("#msg").modal("show");
        },
        Success : function(){}
    },
    methods = {
        takeId: function($this){
            return $this.attr("class").slice(" ")[0];
        }
    },
    PageController = {
        question: function(){
            $(".update_question").on("click", function(){
                var btn = $(this),
                    id = methods.takeId(btn);
                console.log(id);
                $.ajax({
                    url:"/adminzone/question/getQuestion",
                    cache: false,
                    data: 'id='+id,
                    type: derectivs.type.get,
                    dataType: derectivs.dataType,
                    processData: false,
                    contentType: false
                }).done(function(data) {
                    var question = data['question'],
                        header = "<i class='glyphicon glyphicon-pencil'></i> Редактор записи",
                        body = "<form method='' action='#' class='question_form'>" +
                                    "<div class='form-group'>" +
                                        "<label for='exampleInputEmail1'>Логин пользователя</label>" +
                                        "<input type='text' class='form-control' id='addUserQuestionAnswer' name='addUserQuestionAnswer' value='" + question['addUserQuestionAnswer'] + "'>" +
                                    "</div>" +
                                    "<div class='form-group'>" +
                                        "<label for='exampleInputEmail1'>Вопрос пользователя</label>" +
                                        "<textarea id='question_user' name='textQuestionAnswer' cols='150' rows='150' style='width: 550px; height: 100px;' class='question_user col-md-12'> "+question['textQuestionAnswer']+" </textarea>"+
                                    "</div>" +
                                    "<div class='form-group'>" +
                                        "<label for='exampleInputEmail1'>Ответ пользователю</label>" +
                                        "<textarea id='answer_user' name='textAnswer' cols='150' rows='150' style='width: 550px; height: 100px;' class='answer_user col-md-12'> "+((question['textAnswer']==null)?" ":question['textAnswer'])+" </textarea>"+
                                    "</div>" +
                                    "<div class='form-group'>" +
                                        "<label for='exampleInputEmail1'>" +
                                        "<input type='checkbox' name='option2' "+((question['statusQuestionAnswer']==1)?"value='1' checked":"value='0'")+">Опубликовать" +
                                        "</label>"+
                                    "</div>" ,
                        footer = "<button type='button' class='btn btn-info email_show_input'><i class='glyphicon glyphicon-envelope'></i> Отправить пользователю на почту</button> <button type='submit' class='btn btn-success save_question'><i class='glyphicon glyphicon-pencil'></i> Сохранить</button>" +
                                "</form>";
                    $(".window_modal_form_title ").html(header);
                    $(".window_modal_form_body").html(body);
                    $(".window_modal_form_footer").html(footer);
                    $("#window_modal_form").modal('show');
                    new nicEditor().panelInstance('question_user');
                    new nicEditor().panelInstance('answer_user');
                    $(".email_show_input").on("click", function(){
                        var footer_btn = "<button type='button' class='btn btn-danger back_operation'><i class='glyphicon glyphicon-minus'></i> Отменить операцию</button>",
                            content = "<div class='form-group addEmailQuestionAnswer-form'>" +
                                        "<label for='addEmailQuestionAnswer'>Email пользователя</label>" +
                                            "<input type='email' class='form-control' id='addEmailQuestionAnswer' name='addEmailQuestionAnswer' value='" + question['addEmailQuestionAnswer'] + "'>" +
                                        "</div>"+
                                        "<div class='form-group subject-form'>" +
                                            "<label for='subject'>Тема письма</label>" +
                                            "<input type='text' class='form-control' id='subject' name='subject' placeholder='Напишите тему письма'>" +
                                        "</div>";
                        $(".save_question").attr('disabled','disabled');
                        $(".email_show_input").html("<i class='glyphicon glyphicon-envelope'></i> Отправить").addClass("send_answer").removeClass("email_show_input");
                        $(".question_form").append(content);
                        $(".window_modal_form_footer").append(footer_btn);
                        $(".back_operation").on("click", function(){
                            $(".addEmailQuestionAnswer-form").empty();
                            $(".subject-form").empty();
                            $(".save_question").removeAttr('disabled');
                            $(".back_operation").remove();
                            $(".send_answer").html("<i class='glyphicon glyphicon-envelope'></i> Отправить пользователю на почту").addClass("email_show_input").removeClass("send_answer");
                        });
                    });
                }).fail(messege.Error);

            });
            $(".delite_question").on("click", function(){
                var btn = $(this),
                    id = methods.takeId(btn);
                $.ajax({
                    url:"/adminzone/question/"+id,
                    method: "DELETE",
                    cache: false,
                    data: {'_token':"{{csrf_token()}}" },
                    dataType: derectivs.dataType,
                    processData: false,
                    contentType: false
                }).done(function(data){
                    btn.parent().parent().parent().parent().empty();
                }).fail(messege.Error);
            });
        }
};
function MSG(head,msg){
    this.msg = msg;
    this.head=head;
}
MSG.prototype.talk = function(){
    var header="<i class='fa fa-comment-o'></i> "+this.head,
        body=this.msg;
    $("#myModal .modal-title").html(header);
    $("#myModal .modal-body p").html(body);
    $("#myModal").modal("show");
}
$(function(){
    var page = location.pathname;
    switch (page){
        case "/adminzone/question": PageController.question();
        default: "Страница не найдена!";
    }
    $(".application-scr").css("height", "300px");
    $(".dostal").css("height", "55%");
    $('[data-toggle="tooltip"]').tooltip();
    //Logout
    $(".exit_admin").on("click", function(){
        $("#myModal").modal("show");
    });
    //EndLogout

    $(".add_new_application").on("click", function(){
        //Берем id
        location.href="application";
    });
    //Страница дисциплина
    var files;
    $('.img').change(function(){
        files = this.files;
    });
    $(".add_course").on("submit", function(e){
        e.preventDefault();
        var data = new FormData(),
            form = $(this),
            $img = $(".img"),
            url=$(".add_course").attr("action"),
            text = form.serialize();
        data.append("nameDisciplines", $(".nameDisciplines").val());
        data.append("actionDisciplines", $(".actionDisciplines").val());
        data.append("shortDiscipline", $(".shortDiscipline").val());
        data.append("discription", $(".discription").val());
        data.append("discriptionForImg", $(".discriptionForImg").val());
        data.append('img', $img.prop('files')[0]);
        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            cache: false,
            dataType: 'JSON',
            processData: false,
            contentType: false
        }).done(function(data){
            $msg =new MSG("Операция прошла успешно", data['msg']);
            $msg.talk();
            var btn="<a href='#"+$(".actionDisciplines").val()+"' class='btn btn-default cource_btn'>"+$(".shortDiscipline").val()+"</a>";
            $(".group_cource").find(".btn_new_course").before(btn);
            $(".header-img").attr('src', data['srcImg']);
        }).fail(function(){
            $msg =new MSG("Ошибка на стороне сервера", "Перезагрузите страницу!");
            $msg.talk();
        });
    });
    $(".cource_btn").on("click", function(){
        $(".group_cource").find(".active").removeClass("active");
        $(this).addClass('active');
        var data = $(this).attr("href").substr(1);

        $.ajax({
            type:"GET",
            dataType:"JSON",
            cache: false,
            url:"/adminzone/select_course",
            data:"pole="+data,
            processData: false,
            contentType: false
        }).done(function(data){
            //console.log(data);
            var disciplines = data['disciplines'][0],
                application = data['application'],
                count_application = application.length;
            console.log(disciplines, application, count_application);

            $(".nameDisciplines").val(disciplines['nameDisciplines']);
            $(".img-text-h3").html(disciplines['nameDisciplines']);
            $(".actionDisciplines").val(disciplines['actionDisciplines']);
            $(".shortDiscipline").val(disciplines['shortDiscipline']);
            $(".discription").val(disciplines['discription']);
            $(".discriptionForImg").val(disciplines['discriptionForImg']);
            $(".img-text-p").html(disciplines['discriptionForImg']);
            $(".delite_corse").removeClass('disabled');
            $(".add_course").addClass("update_course").removeClass("add_course");
            $(".header-img").attr('src', disciplines['img']).height(450).width('80%');
            $.each(application, function(i,e){
                console.log(i);
                if( $.isNumeric(i) ){
                    var titleApplication = application[i]['titleApplication'],
                        id = application[i]['id'];
                    if(i == 0){
                        $(".application-scr").append('<option selected="selected" class="'+id+' aplication-selected">'+titleApplication+'</option>');
                        $(".text-size").html(titleApplication);
                        if(application[i]['priceApplication'] == 0){
                            $(".summa em").html("Бесплатно");
                        }else{
                            $(".summa em").html(application[i]['priceApplication'] + " р.");
                        }
                        $(".dostal").attr('src', application[i]['imgApplication']);
                    }else{
                        $(".application-scr").append('<option class="'+id+' aplication-selected">'+titleApplication+'</option>');
                    }
                }
            });
            $(".aplication-selected").on("click",function(){
                console.log($(this));
            });
            $(".aplication-selected").on("dblclick", function(){
                //Берем id
                var id = $(this).attr('class').split(' ')[0];
                location.href="application/"+id;
            });

        }).fail(function(){
            $msg =new MSG("Ошибка на стороне сервера", "Перезагрузите страницу!");
            $msg.talk();
        });
    });
    $(".btn_new_course").on("click", function(){
        $(".group_cource").find(".active").removeClass("active");
        $(this).addClass('active');
        $(".update_course").addClass("add_course").removeClass("update_course");
        $(".delite_corse").addClass('disabled');
        $(".header-img").attr('src', '/img/slider.png');
    });
    $(".nameDisciplines").change(function(){
        $(".img-text-h3").html($(".nameDisciplines").val());
    });
    $(".discriptionForImg").change(function(){
        $(".img-text-p").html($(".discriptionForImg").val());
    });
    $('.discriptionForImg').keydown(function(){
        $('.img-text-p').html($('.discriptionForImg').val());
    });
    $('.nameDisciplines').keydown(function(){
        $('.img-text-h3').html($('.nameDisciplines').val());
    });
       //$('.img-text-p').val($('.discriptionForImg').val());

    //дисциплинаEnd
    //Страница отзывы
    //$('table.table-reviews').columnFilters({alternateRowClassNames:['rowa','rowb'], excludeColumns:[2,3]});
    //End отзывы
    //Страница Пользователи
    /*$('.table-users').tableSearch({
        searchText:'Поиск по таблице: ',
        searchPlaceHolder:'Ключевое слово'
    });
    $('.buy-table').tableSearch({
        searchText:'Поиск по таблице: ',
        searchPlaceHolder:'Ключевое слово'
    });*/
    //
}());

