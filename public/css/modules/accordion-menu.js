// アコーディオンメニューをクリックした時
$('.question__title').on('click', function() {
  //直後のアコーディオンを行うエリアを取得し
  let findEle = $(this).next('.box');
  //アコーディオンの上下動作
  $(findEle).slideToggle();

  //title要素にクラス名closeがあれば
  if($(this).hasClass('close')) {
    //クラス名を除去し
    $(this).removeClass('close');
  } else {
    //クラス名closeを付与
    $(this).addClass('close');
  }
});


//ページが読み込まれた際にopenクラスをつけ、openがついていたら開く動作※不必要なら下記全て削除
$(window).on('load', function() {
  //questionのはじめのliにopenクラスを追加
  $('.question li:first-of-type').addClass('open');
  //openクラスを取得
  $('open').each(function(index, element) {
    // openクラスの子要素のquestion__titleクラスを取得
    let Title =$(element).children('.question__title');
    // Titleにcloseクラスを付与
    $(Title).addClass('close');
    // openクラスの子要素boxクラスを取得
    let Box =$(element).children('.box');
    // アコーディオンを開く
    $(Box).slideDown(500);
  })
});