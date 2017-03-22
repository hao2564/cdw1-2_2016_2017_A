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
        $less->compileFile('less/269.less', 'css/269.css');
        ?>
        <link href="css/269.css" rel="stylesheet" type="text/css" />


    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="type-269">
                        <div class="distance">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="icon">
                                        <span class="fa fa-laptop"></span>
                                        <h3>Computers</h3>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="detail">
                                        <h3>Computers</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut<br>
                                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris <br>
                                            nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                            <!----clearfix------>
                            <div class="clearfix"></div>    
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
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
                            <!----clearfix----->
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="page-number">
                                        <ul class="pagination">
                                            <li class="active"><a href="">1</a>
                                            </li><li><a class="page2">2</a></li>
                                        </ul>
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

