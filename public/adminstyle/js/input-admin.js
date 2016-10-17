(function(){
  var circle = new Sonic({
                          width: 100,
                          height: 100,
                          padding: 20,
                          strokeColor: '#ea4c88',
                          pointDistance: .01,
                          stepsPerFrame: 3,
                          trailLength: .7,
                          step: 'fader',
                          setup: function() {
                              this._.lineWidth = 5;
                          },
                          path: [
                              ['arc', 25, 25, 25, 0, 360]
                          ]
    }),
    done_admin = function(data){
      var metka = data['metka'];
      if(metka){
        circle.stop();
        $(".sonic").remove();
        location.href = "/adminzone";
      }else{
        circle.stop();
        $(".sonic").remove();
        $(".answer").html("<h3><i class=''></i> Не правельно введена почта или паролль!</h3>");
      }
      
    },
    fail_admin = function(){
      circle.stop();
      $(".sonic").remove();
      $(".answer").html("<h3><i class=''></i> Ошибка на стороне сервера!</h3>");
    };
  $(".sign-in-admin").on("submit", function(e){
    e.preventDefault();
    var form = $(this),
        data = form.serialize(),
        url=$(".sign-in-admin").attr("action");
    circle.play();
    $(".loader").append(circle.canvas);
    $('#myModal').modal('show');
    $.ajax({
      url:url,
      type:"POST",
      dataType:"JSON",
      data:data
    }).done(done_admin).fail(fail_admin);
  });
}());
