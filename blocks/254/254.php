<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/254.less', 'css/254.css');
        ?>
        <link href="css/254.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="type-254">
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="title-footer">
                                <h2>Newsletter</h2>
                                <p>Latest discounts and coupons</p>
                            </div>
                            <div class="input-email">
                                <form action="#" method="post">
                                    <input type="text" placeholder="Email address" />
                                </form>
                            </div>
                            <div class="btn-sub">
                                <a href="#">Subscribe</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="title-footer">
                                <h2>FAQ</h2>
                            </div>
                            <div class="text-footer">
                                <a href="#"><p>Duis aute irure dolor?</p></a>
                                <a href="#"><p>Sunt in culpa qui officia?</p></a>
                                <a href="#"><p>Cillum dolore eu fugiat?</p></a>
                                <a href="#"><p>Lorem Ipsum dolor sit?</p></a> 
                                <a href="#"><p>Dolor Sit Amet?</p></a> 
                                <a href="#"><p>Set Do Eiusmod?</p></a>   
                                <a href="#"><p>Excepteur sint occaecat?</p></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="title-footer">
                                <h2>About us</h2>
                            </div>
                            <div class="text-footer">
                                <a href="#"><p>Sed ut perspiciatis unde</p></a>
                                <a href="#"><p>Omnis iste natus error</p></a>
                                <a href="#"><p>Sit voluptatem accusantium</p></a>
                                <a href="#"><p>Doloremque laudantium</p></a>
                                <a href="#"><p>Totam rem aperiameaque</p></a>
                                <a href="#"><p>Ipsa quae ab illo inventore veritatis</p></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="title-footer">
                                <h2>Follow us</h2>
                            </div>
                            <div class="text-footer">
                                <ul class="list-inline">
                                    <li><a href="#" class="active"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#" class="active"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#" class="active"><i class="fa fa-google-plus-square"></i></a></li>
                                </ul>
                            </div>
                            <div class="img-footer">
                                <img src="images/logo_g2.png" alt=""/>
                            </div>        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>