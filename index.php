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
      </div>
    </div>
  </div>
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="../public/css/modules/hero-slider.js"></script>
  <script src="../public/css/main.js"></script>
</body>
</html>