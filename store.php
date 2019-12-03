<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./js/page.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/store.css">
    <!-- <link rel='stylesheet' href='https://cdn.foundation5.zurb.com/foundation.css'> -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css'>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans|Noto+Sans+KR&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.4/pagination.css"/>
    <title>store</title>
    <style>
    body{
        overflow-x: visible;
    }
    .container{
        max-width: 100%;
        padding-left: 1rem;
        padding-right: 1rem;
    }
    .paginationjs .paginationjs-pages{
        float:right;
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
            <p>A complete list of collectable cards in Gods Unchained.</p>
            <img src="./img/icon/arrow-down.png" alt="arrow_down" class="store_but">        
        </div>
        <section class="store">
        <div class="row">
            <div class="small-12 columns small-centered">
                <fieldset class="controls">
                    <div class="row">
                        <!-- filter buttons -->
                        <div class="small-8 columns" id="controlsfilter">
                        <button class="filter tiny round active showbar" data-filter="all">All Item</button>
                        <button class="filter tiny round hidebar" data-filter=".newyork">Mini Game1</button>
                        <button class="filter tiny round hidebar" data-filter=".california">Mini Game2</button>
                        <button class="filter tiny round hidebar" data-filter=".texas">Mini Game3</button>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="row">
        <!-- container for images -->
        <div class="small-12 columns small-centered">
            <div class="container" id="Container">
                <!-- data -->
                <div id="data-container"></div>
                <!-- pagebar -->
                <div id="pagination"></div>
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

<script>

    $('.hidebar').click(function(){
        $('#pagination').hide();
    });
    $('.showbar').click(function(){
        $('#pagination').show();
    });
    $(".store_but").click(function(){
        var offsetSection1 = $("#controlsfilter").offset();
        
        $('html,body').animate({
            scrollTop:offsetSection1.top
        },800)
    })
    $(function () {
        let container = $('#pagination');
        container.pagination({
            dataSource: [
                {url: "./img/card/card1.png", class:"newyork"},
                {url: "./img/card/card2.png", class:"california"},
                {url: "./img/card/card3.png", class:"newyork"},
                {url: "./img/card/card4.png", class:"california"},
                {url: "./img/card/card5.png", class:"newyork"},
                {url: "./img/card/card6.png", class:"newyork"},
                {url: "./img/card/card7.png", class:"california"},
                {url: "./img/card/card8.png", class:"newyork"},
                {url: "./img/card/card9.png", class:"california"},
                {url: "./img/card/card1.png", class:"texas "},
                {url: "./img/card/card2.png", class:"newyork "},
                {url: "./img/card/card3.png", class:"texas "},
                {url: "./img/card/card4.png", class:"newyork"},
                {url: "./img/card/card5.png", class:"newyork "},
                {url: "./img/card/card6.png", class:"texas "},
                {url: "./img/card/card7.png", class:"newyork "},
                {url: "./img/card/card8.png", class:"california "},
            ],
            pageSize:17,
            callback: function (data, pagination) {
                 var dataHtml = '<ul>';

                $.each(data, function (index, item) {
                    dataHtml += '<li class="mix ' + item.class + '" style="display:inline-block;">' + '<img src="' + item.url + '">' + '</li> ';
                });

                dataHtml += '</ul>';

                $("#data-container").html(dataHtml);
            }
        })
    })
</script>
<script src='https://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js'></script>
<script  src="./js/store.js"></script>

<!-- 바디 끝 -->
</body>
</html>