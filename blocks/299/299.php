<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/299.less', 'css/299.css');
        ?>
        <link href="css/299.css" rel="stylesheet" type="text/css" />


    </head>

    <body>
        <div class="type-299">
            <div class="bg-xam">
                <div class="container">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <img src="images/firfox.png" alt=""/>
                        </div>
                        <div class="item">
                            <img src="images/envanto.png" alt=""/>
                        </div>
                        <div class="item">
                            <img src="images/jquery.png" alt=""/>
                        </div>
                        <div class="item">
                            <img src="images/wordpress.png" alt=""/>
                        </div>
                        <div class="item">
                            <img src="images/eco.png" alt=""/>
                        </div>
                        <div class="item">
                            <img src="images/woo.png" alt=""/>
                        </div>
                        <div class="item">
                            <img src="images/wp.png" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<script>
    $(document).ready(function () {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
            margin: 10,
            nav: true,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
    })
</script>