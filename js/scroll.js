$(".scrollup").hide(); // 탑 버튼 숨김
$(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 900 ) { // 스크롤 내릴 표시
        $('.scrollup').fadeIn();
    } else {
        $('.scrollup').fadeOut();
    }
  });

  $('.scrollup').click(function () {
    $('body,html').animate({
        scrollTop: 0
    }, 600);  // 탑 이동 스크롤 속도
    return false;
  });
});
