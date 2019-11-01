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
                    <li><button> 다운로드 </button> </li>
                    <li><button> 로그인 </button> </li>
                </ul>
            </nav>
        </header>
        
        <section class="section1">
            <div class="title" style="color:#ffffff;">
                <img src="./img/logo.jpg" alt="logo" >
                <h2>카드게임</h2>
                <button>다운로드 버튼</button>
                <p>이미지</p>
            </div>
            <div>
                <video autoplay muted loop id="myVideo" >
                    <source src="./file/castle.mp4" type="video/mp4">
                </video>
            </div>
        </section>

        <section class="section2" >
            <div class="test" >
                <div><img src="./img/item/item.png" alt="" ></div>
                <div><img src="./img/item/item.png" alt=""></div>
                <div><img src="./img/item/item2.png" alt="" style="width:200px;"></div>
                <div><img src="./img/item/item.png" alt=""></div>
                <div><img src="./img/item/item.png" alt=""></div>
                <div><img src="./img/item/item2.png" alt="" style="width:200px;"></div>
                <div><img src="./img/item/item.png" alt=""></div>
            </div>
        </section>

        <section class="section3">
       
       <!-- <img src="./img/item/item.png" alt=""> -->
        </section>

        <section class="section4">
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