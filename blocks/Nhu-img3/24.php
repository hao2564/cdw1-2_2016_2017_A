<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script src="css/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/24.less', 'css/24.css');
        ?>
        <link href="css/24.css" rel="stylesheet" type="text/css" />


    </head>
    <body>
        <div class="type-24">
            <!---------Phan Header------------->
            <div class="topheader">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="headerleft">
                                <img src="images/car.png" alt=""/>
                                <p>get free! shipping on order over <span>$100</span></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="header-right">
                                <p><a href="">login</a> / <a href="">register</a></p>
                                <div class="dropdown">
                                    <li class="active dropdown" >
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            USD
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">ENG</a></li>
                                            <li><a href="#">FR</a></li>
                                            <li><a>USK</a></li>
                                        </ul>
                                    </li>
                                </div>
                                <img src="images/flag.png" alt=""/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
            <!----------Phan Logo--------------->
            <div class="container">
                <div class="logo">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="search">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                SEARCH
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="img-logo">
                                <img src="images/logo.png" alt=""/>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="logoright">
                                <ul class="checkout">
                                    <li><a href="#"><i class="fa fa-heart-o"></i>wishlist</a></li>
                                    <li class="mobi_right_li"><a href="#"><i class="fa fa-shopping-cart"></i>checklist</a></li>
                                </ul>
                                <div class="w_likes">
                                    <span>3</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
            <!----------Phan Menu--------------->
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span> 
                        </button>
                        <a class="navbar-brand" href="#">CATEGORY</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li><a href="#">HOME</a></li>
                            <li  class="active"><a href="#">SHOP</a></li>
                            <li><a href="#">ACCESSORIES</a></li> 
                            <li><a href="#">PAGES</a></li>
                            <li><a href="#">BLOCK</a></li> 

                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">  <img src="images/bag.png" alt=""/> Cart:2Item</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="clearfix"></div>

            <!---------Phan Tap Bills--------->
            <div class="container">
                <div class="content">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">HOME  <span class="duongdung">|</span></a></li>
                        <li><a data-toggle="tab" href="#menu1">SHOP <span class="duongdung">|</span></a></li>
                        <li><a data-toggle="tab" href="#menu2"> MEN <span class="duongdung">|</span></a></li>
                        <li><a data-toggle="tab" href="#menu3"> TSHOP</a></li>
                    </ul>
                </div>
            </div>
            <div class="bgxam">
                <div class="container">
                    <div class="tab-content">
                        <!----Detail----->
                        <div id="home" class="tab-pane fade in active">

                            <div class="bg">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="bg-img">
                                            <div class="thumb-img">
                                                <img src="images/Product-Details-04.jpg" id="main-photo"><br> 
                                                <img src="images/t_item1.jpg" class="thumb size1">
                                                <img src="images/t_item12.jpg" class="thumb size0">
                                                <img src="images/t_item13.jpg" class="thumb size">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="detail_heading_left">
                                            <h3>Gray Structured Cool Handmade T-Shirt</h3>
                                            <div class="old_price_gray"><p> $90.30 </p></div>
                                            <div class="new_price_gray"><del> $100.30 </del></div>
                                        </div>

                                        <div class="detail_heading_right">
                                            <ul id="detail_star">
                                                <li><a class="fa fa-star-o red" href=""></a></li>
                                                <li><a class="fa fa-star-o red" href=""></a></li>
                                                <li><a class="fa fa-star-o red" href=""></a></li>
                                                <li><a class="fa fa-star-o" href=""></a></li>
                                                <li><a class="fa fa-star-o" href=""></a></li>
                                            </ul>
                                            <p>(5 Review)</p>
                                        </div>
                                        <div class="line">
                                        </div>
                                        <div class="des">
                                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingOne">
                                                        <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                <i class="more-less glyphicon glyphicon-plus"></i>
                                                                DESCRIPTION
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body">
                                                            <div class="panel-body">
                                                                <p>Pellentesque habitant morbi tristique senectus et netus et males suada fames acila turpis egestas. Vestibulum tortor quam, feugialth vitae, ultricies eget, tempor sitare amet, ante. Donec eu libero sitkar amet quam.</p>
                                                                <ul id="product_accord">
                                                                    <li><a href="">Tristique senectus et netus aspernatur aut.</a></li>
                                                                    <li><a href="">Labore doloam aliquam quaerat voluptatem.</a></li>
                                                                    <li><a href="">Nisi ut aliquid ex ea commodi consequatue.</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <!-----size fix------>
                                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingTwo">
                                                        <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                                <i class="more-less glyphicon glyphicon-plus"></i>
                                                                SIZE & FIT
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                        <div class="panel-body">
                                                            <div class="panel-body">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="line1"></div>
                                            <!-------delivery----------->

                                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingThree">
                                                        <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                                <i class="more-less glyphicon glyphicon-plus"></i>
                                                                DELIVERY & RETURNS
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                        <div class="panel-body">
                                                            <div class="panel-body">
                                                                <div class="single_color sp_single_col">
                                                                    <div class="color_heading"><h5>Colors</h5></div>
                                                                    <div class="color_detail">
                                                                        <div class="panel-body colors_cat">
                                                                            <ul id="cat_color">
                                                                                <li><a class="col-7" href="#"></a></li>
                                                                                <li><a class="col-8" href="#"></a></li>
                                                                                <li><a class="col-9" href="#"></a></li>
                                                                                <li><a class="col-10" href="#"></a></li>
                                                                            </ul>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <!------Select size--------------->
                                                                <div class="single_color sp_single_col">
                                                                    <div class="color_heading"><h5>Select Size</h5></div>
                                                                    <div class="color_detail">
                                                                        <div class="panel-body colors_cat">
                                                                            <div class="color_size_detail">
                                                                                <ul id="color_size">
                                                                                    <li><a href="">xs</a></li>
                                                                                    <li><a href="">s</a></li>
                                                                                    <li><a href="">m</a></li>
                                                                                    <li><a href="">l</a></li>
                                                                                    <li><a href="">xl</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <!------------quantity------------------->
                                                                <div class="single_color">
                                                                    <div class="color_heading"><h5>Quantity</h5></div>
                                                                    <div class="color_detail">
                                                                        <div class="size_down">
                                                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity[113]" max="119" min="0" step="1">
                                                                        </div>
                                                                        <div class="size_cart">
                                                                            <a href="#">Add to cart</a>
                                                                        </div>
                                                                        <div class="size_heart">
                                                                            <a href="#"><img src="images/Product-Details-heart.png" alt=""></a>
                                                                        </div>
                                                                        <div class="size_heart">
                                                                            <a href="#"><img src="images/Product-Details-arrow.png" alt=""></a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="menu1" class="tab-pane fade">

                        </div>
                        <div id="menu2" class="tab-pane fade">


                        </div>
                        <div id="menu3" class="tab-pane fade">

                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <!------------------Phan Additional---------------->
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="description">
                                <p>Description</p>
                            </div>
                            <div class="add">
                                <p>ADDITIONAL INFORMATION</p>
                            </div>
                            <div class="review">
                                <p>Review (2)</p>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="text-add">
                                <h2>Additional Information</h2>
                            </div>
                            <div class="mutiline">
                            </div>
                            <div class="info">
                                <p>Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enimsal ipsam salamthi voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptateras sequi nesciunt resmla Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquae eius modi tempora inciduntia ut labore et dolore magnam aliquam quaerat voluptatem. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="line3"></div>
                    <div class="clearfix"></div>
                    <!---------------phan relaty product------------>
                    <div class="relaty">
                        <h3 class="product">related products</h3>
                        <div class="mutiline">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!-------------Phan sliveshow-------->
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <img src="images/t_item16.jpg" alt=""/>
                        </div>
                        <div class="item">
                            <img src="images/t_item13.jpg" alt=""/>
                        </div>
                        <div class="item">
                            <img src="images/t_item11.jpg" alt=""/>
                        </div>
                        <div class="item">
                            <img src="images/t_item12.jpg" alt=""/>
                        </div>
                        <div class="item">
                            <img src="images/t_item2.jpg" alt=""/>
                        </div>
                        <div class="item">
                            <img src="images/t_item3.jpg" alt=""/>
                        </div>
                        <div class="item">
                            <img src="images/t_item1.jpg" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-----------Phan footer-------->
            <div class="footer">
                <div class="row">
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="footer_top_left">
                            <a href=""><i class="fa fa-envelope"></i>signup newsletter</a>
                            <input type="text" placeholder="">
                            <input type="submit" value="submit">
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="img-footer">
                            <img src="images/pay1.png" alt=""/>
                            <img src="images/pay2.png" alt=""/>
                            <img src="images/pay3.png" alt=""/>
                            <img src="images/pay4.png" alt=""/>
                            <img src="images/pay5.png" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="single_widget">
                                <h5>information</h5>
                                <div class="wid_line"></div>
                                <p>New Products</p>
                                <p>Top Seller</p>
                                <p>Manufatures</p>
                                <p>New Products</p>
                                <p>Top Seller</p>
                                <p>Special</p>
                            </div>
                        </div>
                        <div class="col-md-3">

                            <div class="single_widget">
                                <h5>information</h5>
                                <div class="wid_line"></div>
                                <p>New Products</p>
                                <p>Top Seller</p>
                                <p>Manufatures</p>
                                <p>New Products</p>
                                <p>Top Seller</p>
                                <p>Special</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single_widget">
                                <h5>information</h5>
                                <div class="wid_line"></div>
                                <p>New Products</p>
                                <p>Top Seller</p>
                                <p>Manufatures</p>
                                <p>New Products</p>
                                <p>Top Seller</p>
                                <p>Special</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single_widget">
                                <h5>information</h5>
                                <div class="wid_line"></div>
                                <p>New Products</p>
                                <p>Top Seller</p>
                                <p>Manufatures</p>
                                <p>New Products</p>
                                <p>Top Seller</p>
                                <p>Special</p>

                                <ul class="wid_social">
                                    <li><a class="fa fa-facebook" href=""></a></li>
                                    <li><a class="fa fa-twitter" href=""></a></li>
                                    <li><a class="fa fa-google-plus" href=""></a></li>
                                    <li><a class="fa fa-pinterest" href=""></a></li>
                                    <li><a class="fa fa-rss" href=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <p>COPYRIGHT © 2015 MEN’SWAER. ALL RIGHTS RESERVED.</p>
            </footer>
        </div>

    </body>
</html>


<script>
    $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).fadeIn("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).fadeOut("fast");
                $(this).toggleClass('open');
            });

    /*---------Main photo--------*/
    $(document).ready(function (e) {
        $('.thumb').click(function (e) {
            var hinhnho = $(this).attr('src');
            $('#main-photo').attr('src', hinhnho);
        });
    });
    /*------------Toggle----------------*/
    function toggleIcon(e) {
        $(e.target)
                .prev('.panel-heading')
                .find(".more-less")
                .toggleClass('glyphicon-plus glyphicon-minus');
    }
    $('.panel-group').on('hidden.bs.collapse', toggleIcon);
    $('.panel-group').on('shown.bs.collapse', toggleIcon);
    /*-----------------Slide Show----------------*/
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

