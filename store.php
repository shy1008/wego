<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'> -->
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/store.css">
    <link rel='stylesheet' href='https://cdn.foundation5.zurb.com/foundation.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css'>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans|Noto+Sans+KR&display=swap" rel="stylesheet">
    <title>store</title>
    <style>
    .container{
        max-width: 100%;
        padding-left: 1rem;
        padding-right: 1rem;
    }
    </style>
    <!-- <script>
    var uAgent = navigator.userAgent.toLowerCase();
    var mobilePhones = new Array('iphone', 'ipod', 'ipad', 'android', 'blackberry', 'windows ce', 'nokia', 'webos', 'opera mini', 'sonyericsson', 'opera mobi', 'iemobile');
    for (var i = 0; i < mobilePhones.length; i++) {
        if (uAgent.indexOf(mobilePhones[i]) != -1) {
            document.location = "../wego/m/index.php"
        }
    }
    </script>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           -->
</head>

<!-- 바디시작 -->
<body>
  <!-- wrap시작 -->
    <div id="wrap">
        <header>
          <?php include "./lib/header.php";?>
        </header>
    <!-- 단락시작 -->
        <div class="store_img">
            <h2>STORE</h2>
            <p>V</p>        
        </div>
        <section class="store">
        <div class="row">
            <div class="small-12 columns small-centered">
                <fieldset class="controls">
                    <div class="row">
                        <!-- filter buttons -->
                        <div class="small-8 columns" id="controlsfilter">
                        <button class="filter tiny round active" data-filter="all">All Item</button>
                        <button class="filter tiny round" data-filter=".newyork">Mini Game1</button>
                        <button class="filter tiny round" data-filter=".california">Mini Game2</button>
                        <button class="filter tiny round" data-filter=".texas">Mini Game3</button>
                        </div>
                        <!-- layout buttons -->
                        <!-- <div class="small-4 columns" id="controlslayout">
                        <div class="controlslayout">
                        <input type="radio" class="grid" checked="checked" name="layout" id="grid"><label id="labelgrid" for="grid"><i class="fa fa-th"></i></label></input><input type="radio" class="list" name="layout" id="list"><label id="labellist" for="list"><i class="fa fa-bars"></i></label></input></div>
                        </div> -->
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="row">
        <!-- container for images -->
        <div class="small-12 columns small-centered">
            <div class="container" id="Container">
                <ul class="small-block-grid-3 medium-block-grid-4 large-block-grid-5">
                    <li class="mix newyork"><img src="./img/gallery/grid/grid1.jpg"/></li>
                    <li class="mix newyork"><img src="./img/gallery/grid/grid2.jpg"/></li>
                    <li class="mix california"><img src="./img/gallery/grid/grid3.jpg"/></li>
                    <li class="mix newyork"><img src="./img/gallery/grid/grid4.jpg"/></li>
                    <li class="mix texas"><img src="./img/gallery/grid/grid5.png"/></li>
                    <li class="mix newyork"><img src="./img/gallery/grid/grid6.jpg"/></li>
                    <li class="mix newyork"><img src="./img/gallery/grid/grid7.png"/></li>
                    <li class="mix california"><img src="./img/gallery/grid/grid8.jpg"/></li>
                    <li class="mix california"><img src="./img/gallery/grid/grid9.jpg"/></li>
                    <!-- <li class="gap"/>
                    <li class="gap"/> -->
                </ul>
            </div>
        </div>
        </div>
        </section>
        <footer>
            <?php include "./lib/footer.php"; ?>
        <!-- 푸터끝 --> 
        </footer>
  <!-- wrap끝 -->
    </div>

<!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js'></script>
<script  src="./js/store.js"></script>

<!-- 바디 끝 -->
</body>
</html>