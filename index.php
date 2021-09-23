<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../public/css/bootstrap-reboot.css"/>
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="../public/css/style.css">
  <title>Photos</title>
</head>
<body>
  <div id="global-container">
    <div id="container">
      <header class="header">
        <div class="header__inner">
          <div class="logo">
            <span class="logo">Cocco</span>
          </div>
          <nav class="header__nav">
            <ul class="header__ul">
              <li class="header__li"><a href="#">Service</a></li>
              <li class="header__li"><a href="#">Company</a></li>
              <li class="header__li"><a href="#">Contact</a></li>
            </ul>
          </nav>
          <button class="mobile-menu__btn">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </header>
      <div id="content">
        <div class="hero">
            <!-- Slider main container -->
            <div class="swiper">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                  <div class="hero__title">Beautiful</div>
                  <img src="../public/images/parakeet_1.jpg">
                </div>
                <div class="swiper-slide">
                  <div class="hero__title">A good friend</div>
                  <img src="../public/images/parakeet_2.jpg">
                </div>
                <div class="swiper-slide">
                  <div class="hero__title">Good fortune</div>
                  <img src="../public/images/parakeet_3.jpg">
                </div>
              </div>
              <div class="hero__footer">
                <img class="hero__downarrow" src="../public/images/arrow.svg">
                <span class="hero__scrolltext">scroll</span>
              </div>
            </div>
        </div>
        <div id="main-content">
          <aside class="side left">
            <div class="side__inner">
              <a href="#" class="twitter icon">Twitter</a>
              <a href="#" class="fb icon">Facebook</a>
            </div>
          </aside>
          <main>
            <section class="introduction">
              <div class="introduction__inner">
                <div class="introduction__img">
                  <img src="../public/images/parakeet_4.jpg">
                </div>
                <div class="introduction__texts">
                  <div class="introduction__text-inner">
                    <div class="introduction__title main-title">
                      <span class="orange">About</span> <span>service</span>
                    </div>
                    <div class="introduction__sub sub-title">初めてご利用される方へ</div>
                    <div class="introduction__description">
                      <p>インコ専用の<br>サービスサイトです</p>
                      <p>気になるコンテンツを見てみましょう。</p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="contents">
              <div>
                <h2 class="main-title">Main Contents</h2>
                <p class="sub-title">お探しのコンテンツをお選びください</p>
              </div>
              <div class="contents__inner">
                <div class="contents__item">
                  <img src="../public/images/parakeet_5.jpg">
                  <p class="contents__title">コミュニティ</p>
                </div>
                <div class="contents__item">
                  <img src="../public/images/seed_1.jpg">
                  <p class="contents__title">お買い物</p>
                </div>
                <div class="contents__item">
                  <img src="../public/images/seed_1.jpg">
                  <p class="contents__title">お買い物</p>
                </div>
                <div class="contents__item">
                  <img src="../public/images/seed_1.jpg">
                  <p class="contents__title">お買い物</p>
                </div>
              </div>
            </section>
            <section class="type">
              <div class="type__header">
                <h2 class="main-title">Type</h2>
                <p class="sub-title">気になる子を見てみましょう</p>
              </div>
              <div class="type__inner">
                <div class="type__container">
                  <div class="type__item">
                    <div class="type__img">
                      <img src="../public/images/small_parakeet.jpg">
                      <p class="type__title">小型インコ</p>
                    </div>
                  </div>
                  <div class="type__item">
                    <div class="type__img">
                      <img src="../public/images/lovebird.jpg">
                      <p class="type__title">ラブバード</p>
                    </div>
                  </div>
                  <div class="type__item">
                    <div class="type__img">
                      <img src="../public/images/medium_parakeet.jpg">
                      <p class="type__title">中型インコ</p>
                    </div>
                  </div>
                  <div class="type__item">
                    <div class="type__img">
                      <img src="../public/images/large_parakeet.jpg">
                      <p class="type__title">大型インコ</p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </main>
          <aside class="side right">
            <div class="side__inner">
              <span>&copy; greentomatoma</span>
            </div>
          </aside>
        </div>
        <footer class="footer">
          <div class="logo">
            <span class="logo">Cocco</span>
          </div>
          <nav class="footer__nav">
            <ul class="footer__ul">
              <li class="footer__li"><a href="#">Service</a></li>
              <li class="footer__li"><a href="#">Contact</a></li>
              <li class="footer__li"><a href="#">Company</a></li>
              <li class="footer__li"><a href="#">Sitemap</a></li>
            </ul>
            <div class="footer__copyright">
              &copy; greentomatoma
            </div>
          </nav>
        </footer>
      </div>
    </div>
    <!-- <nav class="mobile-menu">
      <ul class="mobile-menu__main">
        <li class="mobile-menu__item">
          <a href="#" class="mobile-menu__link">
            <span class="main-title">Service</span>
            <span class="sub-title">サービスについて</span>
          </a>
        </li>
        <li class="mobile-menu__item">
          <a href="#" class="mobile-menu__link">
            <span class="main-title">Service</span>
            <span class="sub-title">サービスについて</span>
          </a>
        </li>
        <li class="mobile-menu__item">
          <a href="#" class="mobile-menu__link">
            <span class="main-title">Service</span>
            <span class="sub-title">サービスについて</span>
          </a>
        </li>
      </ul>
    </nav> -->
  </div>
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="../public/css/modules/hero-slider.js"></script>
  <script src="../public/css/main.js"></script>
</body>
</html>