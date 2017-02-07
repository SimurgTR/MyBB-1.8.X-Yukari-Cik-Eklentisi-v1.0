$(document).ready(function(){
$("#yukaricikar").hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 400) {
      $('#yukaricikar').fadeIn(200);
    } else {
      $('#yukaricikar').fadeOut(200);
    }
  });
  $('.yukari-git').click(function () {
    $('html,body').animate({
      scrollTop: 0
    }, 1000);
    return false;
  });
});
