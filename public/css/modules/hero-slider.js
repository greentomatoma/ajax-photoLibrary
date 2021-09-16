class HeroSlider {
  constructor(el) {
    this.el = el;
    this.swiper = this._initSwiper();
  }

  _initSwiper() {
      return  new Swiper(this.el, {
        // Optional parameters
        // direction: 'vertical',
        loop: true,
        grabCursor: true,
        effect: 'coverflow',
        centeredSlides: true,
        // 現在表示されているviewに何枚のスライドを表示するか
        slidesPerView: 1,
        // 次のスライドに移る間隔（時間）
        speed: 1000,
        // 1024px以上の画面では画像が2枚表示
        breakpoints: {
          1024: {
            slidesPerView: 2,
          }
        },
      });
  }

  // 自動スライド設定
  start(options = {}) {
    options = Object.assign({
      // 4秒ごとにスライドが切り替わる
      delay: 4000,
      // マウスで画像を変更した場合でも4秒後に自動で切り替わるようにする
      disableOnInteraction: false
    }, options);
    this.swiper.params.autoplay = options;
    this.swiper.autoplay.start();
  }
  stop() {
    this.swiper.autoplay.stop();
  }
}