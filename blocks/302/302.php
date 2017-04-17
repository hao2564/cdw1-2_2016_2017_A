<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/swiper.min.js" type="text/javascript"></script>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/302.less', 'css/302.css');
        ?>
        <link href="css/302.css" rel="stylesheet" type="text/css" />


    </head>

    <body>
        <div class="type-302">
          
              
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="images/slide-1.jpg" alt=""/>
                            <div class="wellcome">
                                <h3>WELLCOME TO</h3>
                                <h1>REAL SOCCER</h1>
                                <h5>FOOTBALL CLUB</h5>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="images/slider-hp2-1.jpg" alt=""/>
                            <div class="thumb">
                                <h1>REAL FOOTBALL</h1>
                                <h5>FOOTBALL CLUB</h5>
                            </div>
                        </div>

                    </div>
                    <!-- Add Pagination -->
                  
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                    <div class="swiper-button-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                </div>

        </div>
    </body>
</html>
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 30,
        loop: true
    });
</script>