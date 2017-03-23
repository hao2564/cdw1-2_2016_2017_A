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
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/264.less', 'css/264.css');
        ?>
        <link href="css/264.css" rel="stylesheet" type="text/css" />


    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="type-264">
                        <div class="menu-tapill">
                            <ul class="nav nav-pills">
                                <div class="top20">Top20</div>
                                <li class="active"><a data-toggle="pill" href="#home">TOP 20</a></li>
                                <li><a data-toggle="pill" href="#menu1">Featured</a></li>
                                <li><a data-toggle="pill" href="#menu2">Popular</a></li>
                                <li><a data-toggle="pill" href="#menu3">Newest</a></li>
                            </ul>

                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    <div class="type-27">
                                        <div class="distance">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <div class="thumb">
                                                        <div class="type-logo">
                                                            <img src="images/logotype-32.png" alt=""/>
                                                        </div>
                                                        <div class="feature">
                                                            <p>FEATURED</p>
                                                        </div>
                                                        <a data-code="" href="#" target="_blank" class="btn btn-custom btn-full blue-bg btn-shop btn-top btn-default btn-lg">
                                                            SHOW CODE
                                                            <div class="btn-left">
                                                                <i class="fa fa-caret-left" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="btn-right">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                            </div>
                                                        </a>

                                                        <!-----thumb text---->
                                                        <div class="coupon">
                                                            <h4>Coupon 1</h4>
                                                            <p>Great promo 10% discount code for</p><p> all products so hurry up!</p>
                                                            <!----icon star----->
                                                            <div class="item-ratings">
                                                                <i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star-o" backup-class="fa fa-star-o"></i> <span> (610 rates)</span>
                                                            </div>
                                                        </div>
                                                        <div class="line"></div>
                                                        <div class="item-meta">
                                                            <div class="icon-left">
                                                                <span class="fa fa-clock-o"></span> 3 days
                                                                <span class="fa fa-tag"></span> Discount
                                                            </div>
                                                            <div class="icon-right">
                                                                <span class="fa fa-plus-square"></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-----Thumb two--------->
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <div class="thumb">
                                                        <div class="type-logo">
                                                            <img src="images/logotype-52.png" alt=""/>
                                                        </div>
                                                        <div class="feature">
                                                            <p>FEATURED</p>
                                                        </div>
                                                        <a data-code="" href="#" target="_blank" class="btn btn-custom btn-full blue-bg btn-shop btn-top btn-default btn-lg">
                                                            SHOW CODE
                                                            <div class="btn-left">
                                                                <i class="fa fa-caret-left" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="btn-right">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                            </div>
                                                        </a>

                                                        <!-----thumb text---->
                                                        <div class="coupon">
                                                            <h4>Coupon 1</h4>
                                                            <p>Great promo 10% discount code for</p><p> all products so hurry up!</p>
                                                            <!----icon star----->
                                                            <div class="item-ratings">
                                                                <i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star-o" backup-class="fa fa-star-o"></i> <span> (610 rates)</span>
                                                            </div>
                                                        </div>
                                                        <div class="line"></div>
                                                        <div class="item-meta">
                                                            <div class="icon-left">
                                                                <span class="fa fa-clock-o"></span> 3 days
                                                                <span class="fa fa-tag"></span> Discount
                                                            </div>
                                                            <div class="icon-right">
                                                                <span class="fa fa-plus-square"></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-----thumb three------>
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <div class="thumb">
                                                        <div class="type-logo">
                                                            <img src="images/logotype-32.png" alt=""/>
                                                        </div>
                                                        <a data-code="" href="#" target="_blank" class="btn btn-custom btn-full blue-bg btn-shop btn-top btn-default btn-lg">
                                                            SHOW CODE
                                                            <div class="btn-left">
                                                                <i class="fa fa-caret-left" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="btn-right">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                            </div>
                                                        </a>

                                                        <!-----thumb text---->
                                                        <div class="coupon">
                                                            <h4>Coupon 1</h4>
                                                            <p>Great promo 10% discount code for</p><p> all products so hurry up!</p>
                                                            <!----icon star----->
                                                            <div class="item-ratings">
                                                                <i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star-o" backup-class="fa fa-star-o"></i> <span> (610 rates)</span>
                                                            </div>
                                                        </div>
                                                        <div class="line"></div>
                                                        <div class="item-meta">
                                                            <div class="icon-left">
                                                                <span class="fa fa-clock-o"></span> 3 days
                                                                <span class="fa fa-tag"></span> Discount
                                                            </div>
                                                            <div class="icon-right">
                                                                <span class="fa fa-plus-square"></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-xs-12 ">
                                                    <div class="thumb">
                                                        <div class="type-logo">
                                                            <img src="images/logotype-32.png" alt=""/>
                                                        </div>
                                                        <a data-code="" href="#" target="_blank" class="btn btn-custom btn-full blue-bg btn-shop btn-top btn-default btn-lg">
                                                            SHOW CODE
                                                            <div class="btn-left">
                                                                <i class="fa fa-caret-left" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="btn-right">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                            </div>
                                                        </a>

                                                        <!-----thumb text---->
                                                        <div class="coupon">
                                                            <h4>Coupon 1</h4>
                                                            <p>Great promo 10% discount code for</p><p> all products so hurry up!</p>
                                                            <!----icon star----->
                                                            <div class="item-ratings">
                                                                <i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star-o" backup-class="fa fa-star-o"></i> <span> (610 rates)</span>
                                                            </div>
                                                        </div>
                                                        <div class="line"></div>
                                                        <div class="item-meta">
                                                            <div class="icon-left">
                                                                <span class="fa fa-clock-o"></span> 3 days
                                                                <span class="fa fa-tag"></span> Discount
                                                            </div>
                                                            <div class="icon-right">
                                                                <span class="fa fa-plus-square"></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-----Thumb two--------->
                                                <div class="col-md-4 col-sm-4 col-xs-12 ">
                                                    <div class="thumb">
                                                        <div class="type-logo">
                                                            <img src="images/logotype-52.png" alt=""/>
                                                        </div>
                                                        <a data-code="" href="#" target="_blank" class="btn btn-custom btn-full blue-bg btn-shop btn-top btn-default btn-lg">
                                                            SHOW CODE
                                                            <div class="btn-left">
                                                                <i class="fa fa-caret-left" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="btn-right">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                            </div>
                                                        </a>

                                                        <!-----thumb text---->
                                                        <div class="coupon">
                                                            <h4>Coupon 1</h4>
                                                            <p>Great promo 10% discount code for</p><p> all products so hurry up!</p>
                                                            <!----icon star----->
                                                            <div class="item-ratings">
                                                                <i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star-o" backup-class="fa fa-star-o"></i> <span> (610 rates)</span>
                                                            </div>
                                                        </div>
                                                        <div class="line"></div>
                                                        <div class="item-meta">
                                                            <div class="icon-left">
                                                                <span class="fa fa-clock-o"></span> 3 days
                                                                <span class="fa fa-tag"></span> Discount
                                                            </div>
                                                            <div class="icon-right">
                                                                <span class="fa fa-plus-square"></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-----thumb three------>
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <div class="thumb">
                                                        <div class="type-logo">
                                                            <img src="images/logotype-32.png" alt=""/>
                                                        </div>
                                                        <div class="feature">
                                                            <p>FEATURED</p>
                                                        </div>
                                                        <a data-code="" href="#" target="_blank" class="btn btn-custom btn-full blue-bg btn-shop btn-top btn-default btn-lg">
                                                            CHECK DISCOUNT
                                                            <div class="btn-left">
                                                                <i class="fa fa-caret-left" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="btn-right">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                            </div>
                                                        </a>

                                                        <!-----thumb text---->
                                                        <div class="coupon">
                                                            <h4>Coupon 1</h4>
                                                            <p>Great promo 10% discount code for</p><p> all products so hurry up!</p>
                                                            <!----icon star----->
                                                            <div class="item-ratings">
                                                                <i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star-o" backup-class="fa fa-star-o"></i> <span> (610 rates)</span>
                                                            </div>
                                                        </div>
                                                        <div class="line"></div>
                                                        <div class="item-meta">
                                                            <div class="icon-left">
                                                                <span class="fa fa-clock-o"></span> 3 days
                                                                <span class="fa fa-tag"></span> Discount
                                                            </div>
                                                            <div class="icon-right">
                                                                <span class="fa fa-plus-square"></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <div class="thumb">
                                                        <div class="type-logo">
                                                            <img src="images/logotype-32.png" alt=""/>
                                                        </div>
                                                        <div class="feature">
                                                            <p>FEATURED</p>
                                                        </div>
                                                        <a data-code="" href="#" target="_blank" class="btn btn-custom btn-full blue-bg btn-shop btn-top btn-default btn-lg">
                                                            CHECK DISCOUNT
                                                            <div class="btn-left">
                                                                <i class="fa fa-caret-left" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="btn-right">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                            </div>
                                                        </a>

                                                        <!-----thumb text---->
                                                        <div class="coupon">
                                                            <h4>Coupon 1</h4>
                                                            <p>Great promo 10% discount code for</p><p> all products so hurry up!</p>
                                                            <!----icon star----->
                                                            <div class="item-ratings">
                                                                <i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star-o" backup-class="fa fa-star-o"></i> <span> (610 rates)</span>
                                                            </div>
                                                        </div>
                                                        <div class="line"></div>
                                                        <div class="item-meta">
                                                            <div class="icon-left">
                                                                <span class="fa fa-clock-o"></span> 3 days
                                                                <span class="fa fa-tag"></span> Discount
                                                            </div>
                                                            <div class="icon-right">
                                                                <span class="fa fa-plus-square"></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-----Thumb two--------->
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <div class="thumb">
                                                        <div class="type-logo">
                                                            <img src="images/logotype-32.png" alt=""/>
                                                        </div>
                                                        <div class="feature">
                                                            <p>FEATURED</p>
                                                        </div>
                                                        <a data-code="" href="#" target="_blank" class="btn btn-custom btn-full blue-bg btn-shop btn-top btn-default btn-lg">
                                                            CHECK DISCOUNT
                                                            <div class="btn-left">
                                                                <i class="fa fa-caret-left" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="btn-right">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                            </div>
                                                        </a>

                                                        <!-----thumb text---->
                                                        <div class="coupon">
                                                            <h4>Coupon 1</h4>
                                                            <p>Great promo 10% discount code for</p><p> all products so hurry up!</p>
                                                            <!----icon star----->
                                                            <div class="item-ratings">
                                                                <i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star-o" backup-class="fa fa-star-o"></i> <span> (610 rates)</span>
                                                            </div>
                                                        </div>
                                                        <div class="line"></div>
                                                        <div class="item-meta">
                                                            <div class="icon-left">
                                                                <span class="fa fa-clock-o"></span> 3 days
                                                                <span class="fa fa-tag"></span> Discount
                                                            </div>
                                                            <div class="icon-right">
                                                                <span class="fa fa-plus-square"></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-----thumb three------>
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <div class="thumb">
                                                        <div class="type-logo">
                                                            <img src="images/logotype-32.png" alt=""/>
                                                        </div>
                                                        <a data-code="" href="#" target="_blank" class="btn btn-custom btn-full blue-bg btn-shop btn-top btn-default btn-lg">
                                                            CHECK DISCOUNT
                                                            <div class="btn-left">
                                                                <i class="fa fa-caret-left" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="btn-right">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                            </div>
                                                        </a>

                                                        <!-----thumb text---->
                                                        <div class="coupon">
                                                            <h4>Coupon 1</h4>
                                                            <p>Great promo 10% discount code for</p><p> all products so hurry up!</p>
                                                            <!----icon star----->
                                                            <div class="item-ratings">
                                                                <i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star-o" backup-class="fa fa-star-o"></i> <span> (610 rates)</span>
                                                            </div>
                                                        </div>
                                                        <div class="line"></div>
                                                        <div class="item-meta">
                                                            <div class="icon-left">
                                                                <span class="fa fa-clock-o"></span> 3 days
                                                                <span class="fa fa-tag"></span> Discount
                                                            </div>
                                                            <div class="icon-right">
                                                                <span class="fa fa-plus-square"></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <div class="thumb">
                                                        <div class="type-logo">
                                                            <img src="images/logotype-32.png" alt=""/>
                                                        </div>
                                                        <div class="feature">
                                                            <p>FEATURED</p>
                                                        </div>
                                                        <a data-code="" href="#" target="_blank" class="btn btn-custom btn-full blue-bg btn-shop btn-top btn-default btn-lg">
                                                            CHECK DISCOUNT
                                                            <div class="btn-left">
                                                                <i class="fa fa-caret-left" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="btn-right">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                            </div>
                                                        </a>

                                                        <!-----thumb text---->
                                                        <div class="coupon">
                                                            <h4>Coupon 1</h4>
                                                            <p>Great promo 10% discount code for</p><p> all products so hurry up!</p>
                                                            <!----icon star----->
                                                            <div class="item-ratings">
                                                                <i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star-o" backup-class="fa fa-star-o"></i> <span> (610 rates)</span>
                                                            </div>
                                                        </div>
                                                        <div class="line"></div>
                                                        <div class="item-meta">
                                                            <div class="icon-left">
                                                                <span class="fa fa-clock-o"></span> 3 days
                                                                <span class="fa fa-tag"></span> Discount
                                                            </div>
                                                            <div class="icon-right">
                                                                <span class="fa fa-plus-square"></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-----Thumb two--------->
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <div class="thumb">
                                                        <div class="type-logo">
                                                            <img src="images/logotype-32.png" alt=""/>
                                                        </div>
                                                        <div class="feature">
                                                            <p>FEATURED</p>
                                                        </div>
                                                        <a data-code="" href="#" target="_blank" class="btn btn-custom btn-full blue-bg btn-shop btn-top btn-default btn-lg">
                                                            CHECK DISCOUNT
                                                            <div class="btn-left">
                                                                <i class="fa fa-caret-left" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="btn-right">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                            </div>
                                                        </a>

                                                        <!-----thumb text---->
                                                        <div class="coupon">
                                                            <h4>Coupon 1</h4>
                                                            <p>Great promo 10% discount code for</p><p> all products so hurry up!</p>
                                                            <!----icon star----->
                                                            <div class="item-ratings">
                                                                <i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star-o" backup-class="fa fa-star-o"></i> <span> (610 rates)</span>
                                                            </div>
                                                        </div>
                                                        <div class="line"></div>
                                                        <div class="item-meta">
                                                            <div class="icon-left">
                                                                <span class="fa fa-clock-o"></span> 3 days
                                                                <span class="fa fa-tag"></span> Discount
                                                            </div>
                                                            <div class="icon-right">
                                                                <span class="fa fa-plus-square"></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-----thumb three------>
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <div class="thumb">
                                                        <div class="type-logo">
                                                            <img src="images/logotype-32.png" alt=""/>
                                                        </div>
                                                        <a data-code="" href="#" target="_blank" class="btn btn-custom btn-full blue-bg btn-shop btn-top btn-default btn-lg">
                                                            CHECK DISCOUNT
                                                            <div class="btn-left">
                                                                <i class="fa fa-caret-left" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="btn-right">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                            </div>
                                                        </a>

                                                        <!-----thumb text---->
                                                        <div class="coupon">
                                                            <h4>Coupon 1</h4>
                                                            <p>Great promo 10% discount code for</p><p> all products so hurry up!</p>
                                                            <!----icon star----->
                                                            <div class="item-ratings">
                                                                <i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star-o" backup-class="fa fa-star-o"></i> <span> (610 rates)</span>
                                                            </div>
                                                        </div>
                                                        <div class="line"></div>
                                                        <div class="item-meta">
                                                            <div class="icon-left">
                                                                <span class="fa fa-clock-o"></span> 3 days
                                                                <span class="fa fa-tag"></span> Discount
                                                            </div>
                                                            <div class="icon-right">
                                                                <span class="fa fa-plus-square"></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <div class="distance">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="thumb">
                                                    <div class="type-logo">
                                                        <img src="images/logotype-52.png" alt=""/>
                                                    </div>
                                                    <div class="feature">
                                                        <p>FEATURED</p>
                                                    </div>
                                                    <a data-code="" href="#" target="_blank" class="btn btn-custom btn-full blue-bg btn-shop btn-top btn-default btn-lg">
                                                        SHOW CODE
                                                        <div class="btn-left">
                                                            <i class="fa fa-caret-left" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="btn-right">
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        </div>
                                                    </a>

                                                    <!-----thumb text---->
                                                    <div class="coupon">
                                                        <h4>Coupon 1</h4>
                                                        <p>Great promo 10% discount code for</p><p> all products so hurry up!</p>
                                                        <!----icon star----->
                                                        <div class="item-ratings">
                                                            <i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star-o" backup-class="fa fa-star-o"></i> <span> (610 rates)</span>
                                                        </div>
                                                    </div>
                                                    <div class="line"></div>
                                                    <div class="item-meta">
                                                        <div class="icon-left">
                                                            <span class="fa fa-clock-o"></span> 3 days
                                                            <span class="fa fa-tag"></span> Discount
                                                        </div>
                                                        <div class="icon-right">
                                                            <span class="fa fa-plus-square"></span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-----Thumb two--------->
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="thumb">
                                                    <div class="type-logo">
                                                        <img src="images/logotype-52.png" alt=""/>
                                                    </div>
                                                    <div class="feature">
                                                        <p>FEATURED</p>
                                                    </div>
                                                    <a data-code="" href="#" target="_blank" class="btn btn-custom btn-full blue-bg btn-shop btn-top btn-default btn-lg">
                                                        CHECK DISCOUNT
                                                        <div class="btn-left">
                                                            <i class="fa fa-caret-left" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="btn-right">
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        </div>
                                                    </a>

                                                    <!-----thumb text---->
                                                    <div class="coupon">
                                                        <h4>Coupon 1</h4>
                                                        <p>Great promo 10% discount code for</p><p> all products so hurry up!</p>
                                                        <!----icon star----->
                                                        <div class="item-ratings">
                                                            <i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star-o" backup-class="fa fa-star-o"></i> <span> (610 rates)</span>
                                                        </div>
                                                    </div>
                                                    <div class="line"></div>
                                                    <div class="item-meta">
                                                        <div class="icon-left">
                                                            <span class="fa fa-clock-o"></span> 3 days
                                                            <span class="fa fa-tag"></span> Discount
                                                        </div>
                                                        <div class="icon-right">
                                                            <span class="fa fa-plus-square"></span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-----thumb three------>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="thumb">
                                                    <div class="type-logo">
                                                        <img src="images/logotype-32.png" alt=""/>
                                                    </div>
                                                    <a data-code="" href="#" target="_blank" class="btn btn-custom btn-full blue-bg btn-shop btn-top btn-default btn-lg">
                                                        CHECK DISCOUNT
                                                        <div class="btn-left">
                                                            <i class="fa fa-caret-left" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="btn-right">
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        </div>
                                                    </a>

                                                    <!-----thumb text---->
                                                    <div class="coupon">
                                                        <h4>Coupon 1</h4>
                                                        <p>Great promo 10% discount code for</p><p> all products so hurry up!</p>
                                                        <!----icon star----->
                                                        <div class="item-ratings">
                                                            <i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star-o" backup-class="fa fa-star-o"></i> <span> (610 rates)</span>
                                                        </div>
                                                    </div>
                                                    <div class="line"></div>
                                                    <div class="item-meta">
                                                        <div class="icon-left">
                                                            <span class="fa fa-clock-o"></span> 3 days
                                                            <span class="fa fa-tag"></span> Discount
                                                        </div>
                                                        <div class="icon-right">
                                                            <span class="fa fa-plus-square"></span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="clearfix"></div>

                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="thumb">
                                                    <div class="type-logo">
                                                        <img src="images/logotype-32.png" alt=""/>
                                                    </div>
                                                    <div class="feature">
                                                        <p>FEATURED</p>
                                                    </div>
                                                    <a data-code="" href="#" target="_blank" class="btn btn-custom btn-full blue-bg btn-shop btn-top btn-default btn-lg">
                                                        CHECK DISCOUNT
                                                        <div class="btn-left">
                                                            <i class="fa fa-caret-left" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="btn-right">
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        </div>
                                                    </a>

                                                    <!-----thumb text---->
                                                    <div class="coupon">
                                                        <h4>Coupon 1</h4>
                                                        <p>Great promo 10% discount code for</p><p> all products so hurry up!</p>
                                                        <!----icon star----->
                                                        <div class="item-ratings">
                                                            <i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star-o" backup-class="fa fa-star-o"></i> <span> (610 rates)</span>
                                                        </div>
                                                    </div>
                                                    <div class="line"></div>
                                                    <div class="item-meta">
                                                        <div class="icon-left">
                                                            <span class="fa fa-clock-o"></span> 3 days
                                                            <span class="fa fa-tag"></span> Discount
                                                        </div>
                                                        <div class="icon-right">
                                                            <span class="fa fa-plus-square"></span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu2" class="tab-pane fade">
                                    <div class="distance">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="thumb">
                                                    <div class="type-logo">
                                                        <img src="images/logotype-32.png" alt=""/>
                                                    </div>
                                                    <div class="feature">
                                                        <p>FEATURED</p>
                                                    </div>
                                                    <a data-code="" href="#" target="_blank" class="btn btn-custom btn-full blue-bg btn-shop btn-top btn-default btn-lg">
                                                        CHECK DISCOUNT
                                                        <div class="btn-left">
                                                            <i class="fa fa-caret-left" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="btn-right">
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        </div>
                                                    </a>

                                                    <!-----thumb text---->
                                                    <div class="coupon">
                                                        <h4>Coupon 1</h4>
                                                        <p>Great promo 10% discount code for</p><p> all products so hurry up!</p>
                                                        <!----icon star----->
                                                        <div class="item-ratings">
                                                            <i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star-o" backup-class="fa fa-star-o"></i> <span> (610 rates)</span>
                                                        </div>
                                                    </div>
                                                    <div class="line"></div>
                                                    <div class="item-meta">
                                                        <div class="icon-left">
                                                            <span class="fa fa-clock-o"></span> 3 days
                                                            <span class="fa fa-tag"></span> Discount
                                                        </div>
                                                        <div class="icon-right">
                                                            <span class="fa fa-plus-square"></span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-----Thumb two--------->
                                            <div class="col-md-4 col-sm-4 c0l-xs-12">
                                                <div class="thumb">
                                                    <div class="type-logo">
                                                        <img src="images/logotype-32.png" alt=""/>
                                                    </div>
                                                    <div class="feature">
                                                        <p>FEATURED</p>
                                                    </div>
                                                    <a data-code="" href="#" target="_blank" class="btn btn-custom btn-full blue-bg btn-shop btn-top btn-default btn-lg">
                                                        CHECK DISCOUNT
                                                        <div class="btn-left">
                                                            <i class="fa fa-caret-left" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="btn-right">
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        </div>
                                                    </a>

                                                    <!-----thumb text---->
                                                    <div class="coupon">
                                                        <h4>Coupon 1</h4>
                                                        <p>Great promo 10% discount code for</p><p> all products so hurry up!</p>
                                                        <!----icon star----->
                                                        <div class="item-ratings">
                                                            <i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star-o" backup-class="fa fa-star-o"></i> <span> (610 rates)</span>
                                                        </div>
                                                    </div>
                                                    <div class="line"></div>
                                                    <div class="item-meta">
                                                        <div class="icon-left">
                                                            <span class="fa fa-clock-o"></span> 3 days
                                                            <span class="fa fa-tag"></span> Discount
                                                        </div>
                                                        <div class="icon-right">
                                                            <span class="fa fa-plus-square"></span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-----thumb three------>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="thumb">
                                                    <div class="type-logo">
                                                        <img src="images/logotype-32.png" alt=""/>
                                                    </div>
                                                    <a data-code="" href="#" target="_blank" class="btn btn-custom btn-full blue-bg btn-shop btn-top btn-default btn-lg">
                                                        CHECK DISCOUNT
                                                        <div class="btn-left">
                                                            <i class="fa fa-caret-left" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="btn-right">
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        </div>
                                                    </a>

                                                    <!-----thumb text---->
                                                    <div class="coupon">
                                                        <h4>Coupon 1</h4>
                                                        <p>Great promo 10% discount code for</p><p> all products so hurry up!</p>
                                                        <!----icon star----->
                                                        <div class="item-ratings">
                                                            <i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star-o" backup-class="fa fa-star-o"></i> <span> (610 rates)</span>
                                                        </div>
                                                    </div>
                                                    <div class="line"></div>
                                                    <div class="item-meta">
                                                        <div class="icon-left">
                                                            <span class="fa fa-clock-o"></span> 3 days
                                                            <span class="fa fa-tag"></span> Discount
                                                        </div>
                                                        <div class="icon-right">
                                                            <span class="fa fa-plus-square"></span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="clearfix"></div>

                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="thumb">
                                                    <div class="type-logo">
                                                        <img src="images/logotype-32.png" alt=""/>
                                                    </div>
                                                    <div class="feature">
                                                        <p>FEATURED</p>
                                                    </div>
                                                    <a data-code="" href="#" target="_blank" class="btn btn-custom btn-full blue-bg btn-shop btn-top btn-default btn-lg">
                                                        CHECK DISCOUNT
                                                        <div class="btn-left">
                                                            <i class="fa fa-caret-left" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="btn-right">
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        </div>
                                                    </a>

                                                    <!-----thumb text---->
                                                    <div class="coupon">
                                                        <h4>Coupon 1</h4>
                                                        <p>Great promo 10% discount code for</p><p> all products so hurry up!</p>
                                                        <!----icon star----->
                                                        <div class="item-ratings">
                                                            <i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star-o" backup-class="fa fa-star-o"></i> <span> (610 rates)</span>
                                                        </div>
                                                    </div>
                                                    <div class="line"></div>
                                                    <div class="item-meta">
                                                        <div class="icon-left">
                                                            <span class="fa fa-clock-o"></span> 3 days
                                                            <span class="fa fa-tag"></span> Discount
                                                        </div>
                                                        <div class="icon-right">
                                                            <span class="fa fa-plus-square"></span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="thumb">
                                                    <div class="type-logo">
                                                        <img src="images/logotype-32.png" alt=""/>
                                                    </div>
                                                    <div class="feature">
                                                        <p>FEATURED</p>
                                                    </div>
                                                    <a data-code="" href="#" target="_blank" class="btn btn-custom btn-full blue-bg btn-shop btn-top btn-default btn-lg">
                                                        CHECK DISCOUNT
                                                        <div class="btn-left">
                                                            <i class="fa fa-caret-left" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="btn-right">
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        </div>
                                                    </a>

                                                    <!-----thumb text---->
                                                    <div class="coupon">
                                                        <h4>Coupon 1</h4>
                                                        <p>Great promo 10% discount code for</p><p> all products so hurry up!</p>
                                                        <!----icon star----->
                                                        <div class="item-ratings">
                                                            <i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star-o" backup-class="fa fa-star-o"></i> <span> (610 rates)</span>
                                                        </div>
                                                    </div>
                                                    <div class="line"></div>
                                                    <div class="item-meta">
                                                        <div class="icon-left">
                                                            <span class="fa fa-clock-o"></span> 3 days
                                                            <span class="fa fa-tag"></span> Discount
                                                        </div>
                                                        <div class="icon-right">
                                                            <span class="fa fa-plus-square"></span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-----Newset---->
                                <div id="menu3" class="tab-pane fade">
                                    <div class="distance">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="thumb">
                                                    <div class="type-logo">
                                                        <img src="images/logotype-32.png" alt=""/>
                                                    </div>
                                                    <div class="feature">
                                                        <p>FEATURED</p>
                                                    </div>
                                                    <a data-code="" href="#" target="_blank" class="btn btn-custom btn-full blue-bg btn-shop btn-top btn-default btn-lg">
                                                        CHECK DISCOUNT
                                                        <div class="btn-left">
                                                            <i class="fa fa-caret-left" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="btn-right">
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        </div>
                                                    </a>

                                                    <!-----thumb text---->
                                                    <div class="coupon">
                                                        <h4>Coupon 1</h4>
                                                        <p>Great promo 10% discount code for</p><p> all products so hurry up!</p>
                                                        <!----icon star----->
                                                        <div class="item-ratings">
                                                            <i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star-o" backup-class="fa fa-star-o"></i> <span> (610 rates)</span>
                                                        </div>
                                                    </div>
                                                    <div class="line"></div>
                                                    <div class="item-meta">
                                                        <div class="icon-left">
                                                            <span class="fa fa-clock-o"></span> 3 days
                                                            <span class="fa fa-tag"></span> Discount
                                                        </div>
                                                        <div class="icon-right">
                                                            <span class="fa fa-plus-square"></span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-----Thumb two--------->
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="thumb">
                                                    <div class="type-logo">
                                                        <img src="images/logotype-32.png" alt=""/>
                                                    </div>
                                                    <div class="feature">
                                                        <p>FEATURED</p>
                                                    </div>
                                                    <a data-code="" href="#" target="_blank" class="btn btn-custom btn-full blue-bg btn-shop btn-top btn-default btn-lg">
                                                        CHECK DISCOUNT
                                                        <div class="btn-left">
                                                            <i class="fa fa-caret-left" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="btn-right">
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        </div>
                                                    </a>

                                                    <!-----thumb text---->
                                                    <div class="coupon">
                                                        <h4>Coupon 1</h4>
                                                        <p>Great promo 10% discount code for</p><p> all products so hurry up!</p>
                                                        <!----icon star----->
                                                        <div class="item-ratings">
                                                            <i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star-o" backup-class="fa fa-star-o"></i> <span> (610 rates)</span>
                                                        </div>
                                                    </div>
                                                    <div class="line"></div>
                                                    <div class="item-meta">
                                                        <div class="icon-left">
                                                            <span class="fa fa-clock-o"></span> 3 days
                                                            <span class="fa fa-tag"></span> Discount
                                                        </div>
                                                        <div class="icon-right">
                                                            <span class="fa fa-plus-square"></span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-----thumb three------>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="thumb">
                                                    <div class="type-logo">
                                                        <img src="images/logotype-32.png" alt=""/>
                                                    </div>
                                                    <a data-code="" href="#" target="_blank" class="btn btn-custom btn-full blue-bg btn-shop btn-top btn-default btn-lg">
                                                        CHECK DISCOUNT
                                                        <div class="btn-left">
                                                            <i class="fa fa-caret-left" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="btn-right">
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        </div>
                                                    </a>

                                                    <!-----thumb text---->
                                                    <div class="coupon">
                                                        <h4>Coupon 1</h4>
                                                        <p>Great promo 10% discount code for</p><p> all products so hurry up!</p>
                                                        <!----icon star----->
                                                        <div class="item-ratings">
                                                            <i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star-o" backup-class="fa fa-star-o"></i> <span> (610 rates)</span>
                                                        </div>
                                                    </div>
                                                    <div class="line"></div>
                                                    <div class="item-meta">
                                                        <div class="icon-left">
                                                            <span class="fa fa-clock-o"></span> 3 days
                                                            <span class="fa fa-tag"></span> Discount
                                                        </div>
                                                        <div class="icon-right">
                                                            <span class="fa fa-plus-square"></span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="clearfix"></div>

                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="thumb">
                                                    <div class="type-logo">
                                                        <img src="images/logotype-32.png" alt=""/>
                                                    </div>
                                                    <div class="feature">
                                                        <p>FEATURED</p>
                                                    </div>
                                                    <a data-code="" href="#" target="_blank" class="btn btn-custom btn-full blue-bg btn-shop btn-top btn-default btn-lg">
                                                        CHECK DISCOUNT
                                                        <div class="btn-left">
                                                            <i class="fa fa-caret-left" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="btn-right">
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        </div>
                                                    </a>

                                                    <!-----thumb text---->
                                                    <div class="coupon">
                                                        <h4>Coupon 1</h4>
                                                        <p>Great promo 10% discount code for</p><p> all products so hurry up!</p>
                                                        <!----icon star----->
                                                        <div class="item-ratings">
                                                            <i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star-o" backup-class="fa fa-star-o"></i> <span> (610 rates)</span>
                                                        </div>
                                                    </div>
                                                    <div class="line"></div>
                                                    <div class="item-meta">
                                                        <div class="icon-left">
                                                            <span class="fa fa-clock-o"></span> 3 days
                                                            <span class="fa fa-tag"></span> Discount
                                                        </div>
                                                        <div class="icon-right">
                                                            <span class="fa fa-plus-square"></span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="thumb">
                                                    <div class="type-logo">
                                                        <img src="images/logotype-32.png" alt=""/>
                                                    </div>
                                                    <div class="feature">
                                                        <p>FEATURED</p>
                                                    </div>
                                                    <a data-code="" href="#" target="_blank" class="btn btn-custom btn-full blue-bg btn-shop btn-top btn-default btn-lg">
                                                        CHECK DISCOUNT
                                                        <div class="btn-left">
                                                            <i class="fa fa-caret-left" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="btn-right">
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        </div>
                                                    </a>

                                                    <!-----thumb text---->
                                                    <div class="coupon">
                                                        <h4>Coupon 1</h4>
                                                        <p>Great promo 10% discount code for</p><p> all products so hurry up!</p>
                                                        <!----icon star----->
                                                        <div class="item-ratings">
                                                            <i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star" backup-class="fa fa-star"></i><i class="fa fa-star-o" backup-class="fa fa-star-o"></i> <span> (610 rates)</span>
                                                        </div>
                                                    </div>
                                                    <div class="line"></div>
                                                    <div class="item-meta">
                                                        <div class="icon-left">
                                                            <span class="fa fa-clock-o"></span> 3 days
                                                            <span class="fa fa-tag"></span> Discount
                                                        </div>
                                                        <div class="icon-right">
                                                            <span class="fa fa-plus-square"></span>
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
    </div>



</body>
</html>

