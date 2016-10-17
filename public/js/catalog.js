$(function(){
	
}());

$('.catalog-item').each(function(indx, element){
    $(element).addClass('active');
});

$('.category-item').on('click', function(e) {
  $(this).closest('li').addClass('active')
  .siblings().removeClass('active');
  var itemIndex = $(this).closest('li').index();
  $('.catalog-item').each(function(indx, element){
    if (itemIndex > 0) {
      if ($(element).hasClass('category'+itemIndex.toString())) {
        $(element).addClass('active');
      } else {
        $(element).removeClass('active');
      }
    } else {
      $(element).addClass('active');
    }
  });
});