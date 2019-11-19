<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/mobile.css">
    <link rel="stylesheet" type="text/css" href="../slick/slick.css">
    <link rel="stylesheet" type="text/css" href="../slick/slick-theme.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans|Noto+Sans+KR&display=swap" rel="stylesheet">
    <title>Wego</title>
    <script>
    var uAgent = navigator.userAgent.toLowerCase();
    var mobilePhones = new Array('iphone', 'ipod', 'ipad', 'android', 'blackberry', 'windows ce', 'nokia', 'webos', 'opera mini', 'sonyericsson', 'opera mobi', 'iemobile');
    for (var i = 0; i < mobilePhones.length; i++) {
        if (uAgent.indexOf(mobilePhones[i]) != -1) {
            document.location = url("../wego/m/index.php");
        }
    }
    </script> 
    <style>
    body{
      background:black;
    }
    </style>
</head>
<!-- 바디시작 -->
<body>
<a href="#page-top" class="floating-btn scrollup">
  <img src="../img/icon/up32.png" alt="floating-btn" >	
</a>
<button class="but"><img src="../img/icon/x32.png" alt="close"></button>
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
  <!-- 헤더시작 --> 
    <header>
      <?php include "./lib/header.php"; ?>
  <!-- 헤더끝 --> 
    </header>
<!-- 단락 -->
    <section class="section1">
      <div class='fullscreen-image-wrap'>
      </div>
      <div class="header-overlay"></div>
      <div class='header-content'>
        <img src="../img/title.png" alt="main_title">
      </div>
    </section>
<!-- 단락 -->
    <section class="section2">
      <div class="slide" >
          <div><img src="../img/item/item.png" alt="item1" class="slide_item"></div>
          <div><img src="../img/item/item2.png" alt="item2" class="slide_item"></div>
          <div><img src="../img/item/item3.png" alt="item3" class="slide_item"></div>
          <div><img src="../img/item/item4.png" alt="item4" class="slide_item"></div>
          <div><img src="../img/item/item5.png" alt="item5" class="slide_item"></div>
          <div><img src="../img/item/item6.png" alt="item6" class="slide_item"></div>
          <div><img src="../img/item/item7.png" alt="item7" class="slide_item"></div>
      </div>
    </section>
<!-- 단락 -->
    <section class="section3">
      <div class="overlay">
        <div class="section_text" data-aos="fade-up">
          <span>TOURNAMENT PRIZEPOOL</span><br/>10% of pack sales go directly to the first Gods Unchained World Championship, with a $1.6M goal.
        </div>
        <div class="left_box" data-aos="fade-up" >
           <img src="../img/card.png" alt="carditem">
        </div>
        <div class="section_text2" data-aos="fade-up">
          <span>Exclusive Presale Packs</span><br/>A completely limited edition Genesis Season of 380 unique cards. Only available before game launch, and hard-capped at $15M. Don’t miss out.
        </div>
        <div class="videowrapper">
            <iframe  src="https://www.youtube.com/embed/H4CuvWJd8kE?"frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </section>
<!-- 단락 -->
    <section class="section4"> 
      <div class="right_text_content" data-aos="fade-up"data-aos-duration="3000">
        <span style="font-size:35px; font-weight:bold; margin-bottom:50px;">SEAMLESS GAMING.</span>
          <p><br/>Magic: The Gathering created a genre. <br/>
          Hearthstone redefined it in a digital format.<br/>
          We’re taking the best elements from each game and expanding upon <br/>
          them in new ways to create a gameplay experience <br/>
          which feels strangely classic yet refreshing.</p>
      </div>
    </section>
<!-- 단락 -->
    <section class="section5"> 
      <div class="right_text_content" data-aos="fade-up"data-aos-duration="3000">
        <span style="font-size:35px; font-weight:bold; margin-bottom:50px;">SEAMLESS GAMING.</span>
          <p><br/>Magic: The Gathering created a genre. <br/>
          Hearthstone redefined it in a digital format.<br/>
          We’re taking the best elements from each game and expanding upon <br/>
          them in new ways to create a gameplay experience <br/>
          which feels strangely classic yet refreshing.</p>
      </div>
    </section>
<!-- 단락 -->
    <section class="section6"> 
      <div class="right_text_content" data-aos="fade-up"data-aos-duration="3000">
        <span style="font-size:35px; font-weight:bold; margin-bottom:50px;">SEAMLESS GAMING.</span>
          <p><br/>Magic: The Gathering created a genre. <br/>
          Hearthstone redefined it in a digital format.<br/>
          We’re taking the best elements from each game and expanding upon <br/>
          them in new ways to create a gameplay experience <br/>
          which feels strangely classic yet refreshing.</p>
      </div>
    </section>
<!-- 단락 -->

    <!-- 푸터시작 -->
    <footer>
      <span style="padding:40px 0px; line-height: 40px; font-size:16px;">STAY UP TO DATE ON GODS UNCHAINED<span><br/>
          <ul class="footer_icon">
            <li><img src="..//img/icon/icon1.png" alt="twitter" style="width:50px;"></li>
            <li><img src="../img/icon/icon2_1.png" alt="discord" style="width:50px;"></li>
            <li><img src="../img/icon/icon3_1.png" alt="reddit" style="width:50px;"></li>
          </ul>
          <ul class="footer_menu">
            <li>Blog</li>
            <li>Referrals</li>
            <li>FAQ</li>
            <li>Terms</li>
            <li>Activate</li>
            <li>Jobs</li>
          </ul>
          <p style="font-size:12px;">Copyright © 2019 Immutable. All rights reserved.</p>
    <!-- 푸터끝 -->
    </footer>
  

<!-- wrap끝 -->
  </div>
  

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="../slick/slick.min.js"></script>
<script src="../js/event.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/blur.js"></script>
<script>
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