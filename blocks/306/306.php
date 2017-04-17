<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/306.less', 'css/306.css');
        ?>
        <link href="css/306.css" rel="stylesheet" type="text/css" />


    </head>

    <body>
        <div class="type-306">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="line">
                            || <span class="fix">FIXTURES & RESULTS</span>
                        </div>
                        <div class="result-even">
                            <p>Bristol City VS Real Soccer </p>
                        </div>
                        <div class="result-odd">
                            <p>Real Soccer VS Wednesday Club </p>
                        </div>
                        <div class="result-even">
                            <p>Aresenal VS Real Soccer </p>
                        </div>
                        <div class="result-odd">
                            <p>Real Soccer VS Cannon United </p>
                        </div>
                        <div class="result-even">
                            <p>Real Soccer VS Arsenal</p>
                        </div>
                        <div class="result-odd">
                            <p>Everton VS Real Soccer</p>
                        </div> <div class="result-even">
                            <p>Real Soccer VS Hakward City</p>
                        </div>
                        <div class="result-odd">
                            <p>Real Soccer 2 VS 1 Orange United </p>
                        </div>
                        <div class="viewall">
                            <a href="#">VIEW ALL FIX TURES</a>
                        </div>
                    </div>
                    <!---col-md-----8-->
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <div class="distance">
                            <div class="row">
                                <div class="thumb">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="image">
                                            <img src="images/banner-hp1.jpg" alt=""/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="image1">
                                            <img src="images/banner-hp2.jpg" alt=""/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="line1">
                                || <span class="fix">TWITTER FEED</span>
                            </div>
                            <div class="clearfix"></div>
                            <!---slive show------->
                            <div class="bg">
                                <div class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="icon">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                            <span>Make sure you grab all these great April freebies.<span class="color-red"> https://t.co/rm45bav7tp</span>
                                                <div class="time">6 hours ago</div>
                                        </div>

                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                            <span>Make sure you grab all these great April freebies. https://t.co/rm45bav7tp
                                                6 hours ago</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                            <span>Make sure you grab all these great April freebies. https://t.co/rm45bav7tp
                                                6 hours ago</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                            <span>Make sure you grab all these great April freebies. https://t.co/rm45bav7tp
                                                6 hours ago</span>
                                        </div>
                                    </div>
                                </div>
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
            navigation: true,
            nav: true,
            items: 1,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    })
</script>