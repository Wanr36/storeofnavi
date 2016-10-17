$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
var msg = {
    error: function(){},
    success: function(){}
}
$('.about .solution:first').css("padding", "0 10px 0 25px");
$('.about .solution:last').css("padding", "0 25px 0 5px");

$('.about .info-app:first').css("border-bottom", "1px solid #e5e5e5");
$('.about .info-app:last').css("border-left", "1px solid #e5e5e5");


function changeHeight() {
    $('.bio-ava').height($('.bio-ava').width());
}
$(function(){
    var url = location.href,
        urlTwo=url.split(".")[1];
    if(urlTwo.split('/')[1] == "disciplines"){
        $(".nav-li:first").css('background','url("../img/hoverApp1.png")');
        $(".menu-str li:first-child a").css('color','white').css('text-shadow', 'black 0px 1px 4px');
    }
    //AboutPage
    changeHeight();
    $(window).resize(changeHeight);
	//endAboutPage
    $(".add-com-btn").on("click", function(){
        $("#feedModal").modal('show');
    });
    otzivi();
    $(".header-logo").on("click",function(){
        location.href="index";
    });
    $(".registration-modal-form").on("submit", function(e){
        e.preventDefault();
        var form = $(this),
            data = form.serialize(),
            url = $(".registration-modal-form").attr("action");
        $.ajax({
            url: url,
            type:"POST",
            dataType:"JSON",
            data:data
        }).done(function(data){
            console.log(data);
        }).fail(msg.error());
    });

    $(".registration-modal-form").on("submit", function(e){
        e.preventDefault();
        var form = $(this),
            data = form.serialize(),
            url = $(".registration-modal-form").attr("action");
        $.ajax({
            url: url,
            type:"POST",
            dataType:"JSON",
            data:data
        }).done(function(data){
            console.log(data);
        }).fail(msg.error());
    });
    //Поиск
        // Сюда указываем id поля поиска.
        $('#main-dinamic-search').bind('textchange', function () {
            // В переменную помещаем поисковое значение которое ввел пользователь.
            var input_search = $("#main-dinamic-search").val();
            // Проверяем поисковое значение. Если оно больше или ровняется Трём, то всё нормально и также если меньше 150 символов.
            if (input_search.length >= 3 && input_search.length < 150 ) {
                // Делаем запрос в обработчик в котором будет происходить поиск.
                var url = "/search";
                $.ajax({
                    type: "POST",
                    url: url, // Обработчик.
                    data: "pole="+input_search, // В переменной <strong>q</strong> отправляем ключевое слово в обработчик.
                    dataType: "JSON",
                    cache: false,
                    success: function(data) {
                        $("#block-search-result").show(); // Показываем блок с результатом.
                        $("#list-search-result").html(data['search']); // Добавляем в список результат поиска.
                        console.log(data);
                    }
                });
            }else{
                // Если ничего не найдено, то скрываем выпадающий список.
                $("#block-search-result").hide();
            }
        });
    //end поиск

}());

$(document).mouseup(function(event){
    if( $(event.target).closest('.search-input').length ) 
      return;
    if ($('.search-input').hasClass('show')) 
      $('.search-input').removeClass('show').addClass('hide');
    event.stopPropagation();
  });

$(window).resize(function(event){
    otzivi();
  });

  function otzivi() {
  	var widthdoc = $(".container").outerWidth();
	var paddingdoc = ($(".container").outerWidth(true) - $(".container").innerWidth())/2;
	console.log(paddingdoc);
	$(".otziv-block").first().css("padding-left", paddingdoc + "px");
	$(".otziv-block").last().css("padding-right", paddingdoc + "px");

	$(".otziv-block").each(function(indx, element) {
		console.log($(this).outerWidth() - $(this).width() );
		$(this).width((widthdoc-30)/4 );
	});
  }

  function showsearch() {
    $('.search-input').removeClass('hide').addClass('show');
  }
  function funcOver(el){
       el.getElementsByTagName("em")[0].innerHTML = 'РЕШИТЬ';
       el.getElementsByTagName("h3")[0].classList.add("color-white");
       el.getElementsByTagName("h3")[0].classList.remove("color-blue");
       el.getElementsByTagName("a")[0].classList.add("btn-default");
       el.getElementsByTagName("a")[0].classList.remove("btn-danger");
  }
  function funcOut(el, str){
       el.getElementsByTagName("em")[0].innerHTML = str;
       el.getElementsByTagName("h3")[0].classList.add("color-blue");
       el.getElementsByTagName("h3")[0].classList.remove("color-white");
       el.getElementsByTagName("a")[0].classList.add("btn-danger");
       el.getElementsByTagName("a")[0].classList.remove("btn-default");
  }