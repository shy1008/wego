<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
    <title>Home</title>
</head>
<body>
    <div id="wrap">
        <header>
            <nav>
                <ul class="menu_left">
                    <li style="width:32px; height:32px; background:#ffffff;">logo</li>
                    <li><img src="./img/icon/32/home.png" alt=""></li>
                    <li><img src="./img/icon/32/compass.png" alt=""></li>
                    <li><img src="./img/icon/32/bag.png" alt=""></li>
                    <li><img src="./img/icon/32/hand.png" alt=""></li>
                </ul>
                <ul class="menu_right">
                    <li class="hoho"><img src="./img/icon/32/hand.png" alt=""></li>
                    <li class="hoho2"><button> 다운로드 </button> </li>
                    <li class="hoho2"><button> 로그인 </button> </li>
                </ul>
            </nav>
        </header>
        
        <section class="section1" >
            <div style="position: absolute; width: 100%; height: 100vh; ">
                <video autoplay muted loop id="myVideo" style=" width:100%; height:100vh;" >
                    <source src="./file/castle.mp4" type="video/mp4">
                </video>
            </div>
        </section>

        

        <footer>
        </footer>
    </div>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="./slick/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
      $('.test').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            arrows:false,
            autoplaySpeed: 2000,
            responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    }); 
});
  </script>
</body>
</html>