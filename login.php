<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/main-media.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans|Noto+Sans+KR&display=swap" rel="stylesheet">
    <title>Wego</title>
    <style>
    body{
      background:black;
      min-width: 1024px;
    }
    </style>
</head>
<!-- body -->
<body >
<!-- login form -->
  <a href="#page-top" class="floating-btn scrollup">
    <img src="./img/icon/up64.png" alt="floating-btn" >	
  </a>
  <button class="but"><img src="./img/icon/x64.png" alt="close"></button>
  <div class="bg-text">
    <h1 class="login_head">SIGN IN TO GODS UNCHAINED</h1>
      <form action="" method="post" id="login">
        <input type="email" name="email" value="Email Address" placeholder="Email Address" id="email">
        <input type="password" name="email" value="Password" placeholder ="Password" id="password">
        <p>Forgot password?</p>
        <input type="submit" value="LOGIN" id="submit">
      </form>
    <p>No account? <span class="pass_find">Register</span> to claim your free core pack!</p>
  </div>
  <!-- wrap시작 -->
  <div id="wrap" class="blur">
    <header>
        <?php include "./lib/header.php"; ?>
    </header>
<!-- 단락 -->
    <section class="section1 container">
      <div class='fullscreen-video-wrap'>
          <video autoplay muted loop id="myVideo" >
              <source src="./file/play.mp4" type="video/mp4">
          </video>
      </div>
      <div class="header-overlay"></div>
      <div class='header-content'>
            <img src="./img/title.png" alt="main_title" style="width:800px; margin:0 auto; ">
            <!-- <p>이미지</p> -->
      </div>
    </section>
<!-- 단락 -->
    <section class="section2">
        <div class="slide" >
          <div><img src="./img/card/card1.png" alt="item1" style="height:320px;"></div>
          <div><img src="./img/card/card2.png" alt="item2" style="height:320px;"></div>
          <div><img src="./img/card/card3.png" alt="item3" style="height:320px;"></div>
          <div><img src="./img/card/card4.png" alt="item4" style="height:320px;"></div>
          <div><img src="./img/card/card5.png" alt="item5" style="height:320px;"></div>
          <div><img src="./img/card/card6.png" alt="item6" style="height:320px;"></div>
          <div><img src="./img/card/card7.png" alt="item7" style="height:320px;"></div>
        </div>
    </section>
<!-- 단락 -->
    <section class="section3">
    </section>
<!-- 단락 -->
    <section class="section4">
      <div class="overlay">
        <div class="section_text" data-aos="fade-up">
          <span style="font-size:45px; font-weight:bold;">TOURNAMENT PRIZEPOOL</span><br/>10% of pack sales go directly to the first Gods Unchained <br/>World Championship, with a $1.6M goal.
        </div>
        <div class="left_box">
          <picture>
            <source srcset="./img/card.webp" type="image/webp" /> <img src="./img/bg4.jpg" style="width:100%;" />
          </picture>
        </div>
        <div class="right_box" data-aos="fade-left">
          <span style="font-size:45px;">Exclusive Presale Packs</span><br/> A completely limited edition Genesis Season of 380 unique cards. Only available before game launch, and hard-capped at $15M. Don’t miss out.
        </div>
      </div>
    </section>
<!-- 단락 -->
    <section class="section5">
      <div style="text-align:center;" data-aos="fade-up" data-aos-duration="10000">
        <iframe width="800" height="500" src="https://www.youtube.com/embed/H4CuvWJd8kE?autoplay=1&mute=1"style="position: relative;top: -60px;" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <picture>
        <source srcset="./img/troll.webp" type="image/webp" style="width:100%;"/> <img src="./img/bg1.jpg" style="float:right; position:relative; top:-380px; right:150px;" />
      </picture>
    </section>
<!-- 단락 -->
    <section class="section6">
      <div class="right_text_content" data-aos="zoom-in-left">
        <span style="font-size:35px; font-weight:bold; margin-bottom:50px;">SEAMLESS GAMING.</span>
          <p><br/>Magic: The Gathering created a genre. <br/>
          Hearthstone redefined it in a digital format.<br/>
          We’re taking the best elements from each game and expanding upon <br/>
          them in new ways to create a gameplay experience <br/>
          which feels strangely classic yet refreshing.</p>
      </div>
      <picture class="section_bg">
        <source srcset="./img/b1.webp" type="image/webp"/> <img src="./img/bg1.jpg" class="img"/>
      </picture>
    </section>
<!-- 단락 -->
    <section class="section7">
      <div class="left_text_content" data-aos="zoom-out-right">
          <span style="font-size:35px; font-weight:bold; margin-bottom:50px;">SEAMLESS GAMING.</span>
            <p><br/>Magic: The Gathering created a genre. <br/>
            Hearthstone redefined it in a digital format.<br/>
            We’re taking the best elements from each game and expanding upon <br/>
            them in new ways to create a gameplay experience <br/>
            which feels strangely classic yet refreshing.</p>
      </div>
      <picture class="section_bg">
        <source srcset="./img/b2.webp" type="image/webp"/> <img src="./img/bg2.jpg" class="img2"/>
      </picture>
    </section>
<!-- 단락 -->
    <section class="section8">
      <div class="right_text_content2" data-aos="zoom-out-left">
          <span style="font-size:35px; font-weight:bold; margin-bottom:50px;">SEAMLESS GAMING.</span>
            <p><br/>Magic: The Gathering created a genre. <br/>
            Hearthstone redefined it in a digital format.<br/>
            We’re taking the best elements from each game and expanding upon <br/>
            them in new ways to create a gameplay experience <br/>
            which feels strangely classic yet refreshing.</p>
      </div>
      <picture class="section_bg">
        <source srcset="./img/b3.webp" type="image/webp"/> <img src="./img/bg3.jpg"  class="img3"/>asddddd
      </picture>
    </section>
    <!-- 푸터시작 -->
    <footer>
      <?php include "./lib/footer.php"; ?>
<!-- 푸터끝 --> 
    </footer>
  <!-- wrap끝 -->
  </div>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="./slick/slick.min.js"></script>
<script src="./js/event.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="./js/aos.js"></script>
<script src="./js/blur.js"></script>
<script src="./js/web3.js"></script>
<script>
// var web3 = new Web3('ws://localhost:8545');
// console.log(web3);

  $(".but").click(function(){
      $(".but").css('display','none');
      $(".bg-text").css('display','none');
      $(".blur").removeClass();
  });
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
</script>
<!-- 바디 끝 -->
</body>
</html>