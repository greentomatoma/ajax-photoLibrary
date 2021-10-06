function fadeAnime() {

  $('.type__item').each(function() {
    let elemPos = $(this).offset().top-50;
    let scroll = $(window).scrollTop();
    let windowHeight = $(window).height();
    if(scroll >= elemPos - windowHeight) {
      // 画面内に入ったら、flipLeftTopというクラス名を追加
      $(this).addClass('flipLeftTop');
    } else {
      // 画面外に出たら、flipLeftTopというクラス名を外す
      $(this).removeClass('flipLeftTop');
    }
  });
}


// 画面をスクロールしたら動かす
$(window).scroll(function (){
  // アニメーション関数を起動
  fadeAnime();
});