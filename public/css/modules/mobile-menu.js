// モバイルメニュー開閉
$(".mobile-menu__btn").click(function() {
  $(this).toggleClass('active');
  $("#mobile-menu").toggleClass('panelactive');
});

$("#mobile-menu a").click(function() {
  $("#mobile-menu").removeClass('panelactive');
});