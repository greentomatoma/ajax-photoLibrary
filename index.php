<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,500&family=Mukta&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="../public/css/style.css">
  <title>Photos</title>
</head>
<body>
  <!-- Slider main container -->
  <div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide"><img src="../public/images/parakeet_1.jpg"></div>
      <div class="swiper-slide"><img src="../public/images/parakeet_2.jpg"></div>
      <div class="swiper-slide"><img src="../public/images/parakeet_3.jpg"></div>
      ...
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
  </div>
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="../public/css/main.js"></script>
</body>
</html>