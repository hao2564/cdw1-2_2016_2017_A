<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/swiper.min.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/260.less', 'css/260.css');
        ?>
        <link href="css/260.css" rel="stylesheet" type="text/css" />


    </head>
    <body>
        <div class="type-1">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="images/a.jpg" alt=""/>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/b.jpg" alt=""/>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/shopping1.jpg" alt=""/>
                    </div>

                </div>
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