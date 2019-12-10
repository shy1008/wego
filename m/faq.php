<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
    <link rel="stylesheet" type="text/css" href="./css/mobile.css">
    <link rel="stylesheet" href="./css/faq.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans|Noto+Sans+KR&display=swap" rel="stylesheet">
    <title>Wego</title>
    <style>
    .overlay{
        min-height: 100vh;
        margin-top: 63px;  
    }
    </style>
</head>
<!-- 바디시작 -->
<body>
<a href="#page-top" class="floating-btn scrollup">
  <img src="../img/icon/up32.png" alt="floating-btn" >	
</a>
<?php include "./lib/login_form.php"; ?>
<!-- wrap시작 -->
  <div id="wrap">
  <!-- 헤더시작 --> 
    <header>
      <?php  $page = 'faq'; include "./lib/header.php"; ?>
  <!-- 헤더끝 --> 
    </header>
    <article>
        <div class="overlay">
        <div class="container2">
            <h2>Frequently Asked Questions</h2>
            <p class="sub_text">Confused? Don't worry. The Citadel's Grand Library has all the Answers you need. If you're still left searching, contact a live guide using the chat functionality in the bottom right.</p>
            <div class="accordion">
                <h3>General</h3>
                <div class="accordion-item">
                    <a>Why is the moon sometimes out during the day?</a>
                    <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <a>Why is the sky blue?</a>
                    <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <a>Will we ever discover aliens?</a>
                    <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <a>How much does the Earth weigh?</a>
                    <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <a>How do airplanes stay up?</a>
                    <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                    </div>
                </div>
                <h3>Card</h3>
                <div class="accordion-item">
                    <a>Why is the moon sometimes out during the day?</a>
                    <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <a>Why is the sky blue?</a>
                    <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <a>Will we ever discover aliens?</a>
                    <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    <!-- 단락끝 -->
        </article>
    
          <!-- 푸터시작 -->
         
    <!-- 단락끝 -->
    </section>
<!-- 단락 -->

    <!-- 푸터시작 -->
    <footer>
      <?php include "./lib/footer.php"; ?>
<!-- 푸터끝 --> 
    </footer>
<!-- wrap끝 -->
  </div>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<!-- <script src='https://code.jquery.com/jquery-3.2.1.min.js'></script> -->
<script src="../js/faq.js"></script>
<script src="../js/popup.js"></script>
<script type="text/javascript">
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