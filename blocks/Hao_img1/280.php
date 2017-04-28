<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/280.less', 'css/280.css');
    ?>
    <link href="css/280.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div class="type-280">
        <div class="top-bar">
            <div class="container">
                <ul class="left-bar-side" style="margin-left: -40px;">
                    <li> 
                        <a href="#"><i class="fa fa-lock"></i> Login</a> 
                    </li>
                    <li> 
                        <a href="#"><i class="fa fa-lock"></i> My Account</a> 
                    </li>
                    <li> 
                        <a href="#"><i class="fa fa-heart"></i> My Favourites</a> 
                    </li>
                </ul>

                <ul class="right-bar-side social_icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-tumblr"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        <!--HEADER-->
        <header>
            <div class="container"> 
                <!--======= LOGO =========-->
                <div class="logo"> 
                    <a href="#">
                        <img src="images/logo.png">
                    </a>
                </div>
                <!--======= SEARCH =========-->
                <div class="search">
                    <form action="#" method="get" style="height: 28px;">
                        <select class="form-control" name="post_type">
                            <option>All Categories</option>
                            <option value="post">Blog Posts</option>
                            <option value="product">Products</option>
                            <option value="sh_coupons">Coupons</option>
                        </select>
                        <input class="form-control" name="s" value="" placeholder="Enter your keyword...">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
            <!--nav-->
            <nav>
                <div class="container"> 
                    <ul class="ownmenu">
                        <li class="menu-item" style="display: block;">
                            <a title="Home" href="#">HOME</a>   
                        </li>
                        <li class="menu-item" style="display: block;">
                            <a title="ABOUT US" href="#">ABOUT US</a>
                        </li>
                        <li class="menu-item" style="display: block;">
                            <a title="CATEGORIES" href="#">CATEGORIES</a>                                                           
                        </li>
                        <li class="menu-item" style="display: block;">
                            <a title="Stores" href="#">STORES</a>
                        </li>
                        <li class="active menu-item" style="display: block;">
                            <a title="coupon codes" href="#">COUPON CODES</a>
                        </li>
                        <li class="menu-item" style="display: block;">
                            <a title="Blog" href="#">BLOG</a>
                        </li>
                        <li class="menu-item" style="display: block;">
                            <a title="Contact" href="#">CONTACT US</a>
                        </li>
                    </ul>
                    <div class="sub-nav-co"> 
                        <a href="#">SUBMIT COUPON</a> 
                    </div>
                </div>
            </nav>
        </header>

        <!--Banner-->
        <section class="sub-banner" style="background-image: url(images/sub-bnr-bg4.jpg);">
            <div class="overlay">
                <div class="container">
                    <h2>COUPON</h2>
                    <ul class="sub-nav">
                        <li>
                            <a href="#"><i class="fa fa-home"></i></a>  /  </li>
                        <li>coupon</li>
                    </ul>	
                </div>
            </div>
        </section>

        <!--Works-->
        <div class="container">
            <div class="row" style="margin-top: 100px;">
                <!--1-->
                <div class="col-md-4">
                    <div class="coupon-inner">
                        <div class="top-tag"> 
                            <span class="ribn-red"><span>Exclusive</span></span> 
                            <span class="star"><i class="fa fa-star-o"></i></span>
                        </div>
                        <div class="c-img">
                            <div class="coupon-image" style="">
                                <img src="images/1.jpg" class="img-responsive">							
                            </div>
                            <div class="coupon-content-box">
                                <a class="head" href="#">Flat 40% off Hotel Bookings In 10 Cities Near you</a>
                            </div>
                            <div class="coupon-info-box">
                                <p>Expires On : 2021-05-22</p>
                                <div class="text-center"> 
                                    <a data-href="#" target="_blank" data-text="1513" class="btn">get coupon code</a>
                                </div>
                            </div>
                        </div>
                        <ul class="btm-info" style="padding: 0px;">
                            <li class="col-xs-4"> 
                                <i class="fa fa-check-square-o"></i> Verified</li>							
                            <li class="col-xs-3">
                                <a href="#" data-id="79"> 
                                    <i class="fa fa-bookmark"></i> Save</a>
                            </li>							
                            <li class="col-xs-2">
                                <a href="#"> 
                                    <i class="fa fa-share"></i> Share</a>
                            </li>							
                            <li class="col-xs-3">
                                <a href="#" data-id="79" data-toggle="modal" data-target="#myModaltest"> 
                                    <i class="fa fa-comments"></i> Discuss</a>
                            </li>						
                        </ul>
                    </div>
                </div>
                <!--2-->
                <div class="col-md-4">
                    <div class="coupon-inner">
                        <div class="top-tag"> 
                            <span class="ribn-red"><span>Exclusive</span></span> 
                            <span class="star"><i class="fa fa-star-o"></i></span>
                        </div>
                        <div class="c-img">
                            <div class="coupon-image" style="">
                                <img src="images/1.jpg" class="img-responsive">							
                            </div>
                            <div class="coupon-content-box">
                                <a class="head" href="#">Flat 40% off Hotel Bookings In 10 Cities Near you</a>
                            </div>
                            <div class="coupon-info-box">
                                <p>Expires On : 2021-05-22</p>
                                <div class="text-center"> 
                                    <a data-href="#" target="_blank" data-text="1513" class="btn">get coupon code</a>                                  
                                </div>
                            </div>
                        </div>
                        <ul class="btm-info" style="padding: 0px;">
                            <li class="col-xs-4"> 
                                <i class="fa fa-check-square-o"></i> Verified</li>							
                            <li class="col-xs-3">
                                <a href="#" data-id="79"> 
                                    <i class="fa fa-bookmark"></i> Save</a>
                            </li>							
                            <li class="col-xs-2">
                                <a href="#"> 
                                    <i class="fa fa-share"></i> Share</a>
                            </li>							
                            <li class="col-xs-3">
                                <a href="#" data-id="79" data-toggle="modal" data-target="#myModaltest"> 
                                    <i class="fa fa-comments"></i> Discuss</a>
                            </li>						
                        </ul>
                    </div>
                </div>
                <!--3-->
                <div class="col-md-4">
                    <div class="coupon-inner">
                        <div class="top-tag"> 
                            <span class="ribn-red"><span>Exclusive</span></span> 
                            <span class="star"><i class="fa fa-star-o"></i></span>
                        </div>
                        <div class="c-img">
                            <div class="coupon-image" style="">
                                <img src="images/1.jpg" class="img-responsive">							
                            </div>
                            <div class="coupon-content-box">
                                <a class="head" href="#">Flat 40% off Hotel Bookings In 10 Cities Near you</a>
                            </div>
                            <div class="coupon-info-box">
                                <p>Expires On : 2021-05-22</p>
                                <div class="text-center"> 
                                    <a data-href="#" target="_blank" data-text="1513" class="btn">get coupon code</a>                                  
                                </div>
                            </div>
                        </div>
                        <ul class="btm-info" style="padding: 0px;">
                            <li class="col-xs-4"> 
                                <i class="fa fa-check-square-o"></i> Verified</li>							
                            <li class="col-xs-3">
                                <a href="#" data-id="79"> 
                                    <i class="fa fa-bookmark"></i> Save</a>
                            </li>							
                            <li class="col-xs-2">
                                <a href="#"> 
                                    <i class="fa fa-share"></i> Share</a>
                            </li>							
                            <li class="col-xs-3">
                                <a href="#" data-id="79" data-toggle="modal" data-target="#myModaltest"> 
                                    <i class="fa fa-comments"></i> Discuss</a>
                            </li>						
                        </ul>
                    </div>
                </div>
                <!--4-->
                <div class="col-md-4" style="margin-top: 40px; ">
                    <div class="coupon-inner">
                        <div class="top-tag"> 
                            <span class="ribn-red"><span>Exclusive</span></span> 
                            <span class="star"><i class="fa fa-star-o"></i></span>
                        </div>
                        <div class="c-img">
                            <div class="coupon-image" style="">
                                <img src="images/1.jpg" class="img-responsive">							
                            </div>
                            <div class="coupon-content-box">
                                <a class="head" href="#">Flat 40% off Hotel Bookings In 10 Cities Near you</a>
                            </div>
                            <div class="coupon-info-box">
                                <p>Expires On : 2021-05-22</p>
                                <div class="text-center"> 
                                    <a data-href="#" target="_blank" data-text="1513" class="btn">get coupon code</a>
                                </div>
                            </div>
                        </div>
                        <ul class="btm-info" style="padding: 0px;">
                            <li class="col-xs-4"> 
                                <i class="fa fa-check-square-o"></i> Verified</li>							
                            <li class="col-xs-3">
                                <a href="#" data-id="79"> 
                                    <i class="fa fa-bookmark"></i> Save</a>
                            </li>							
                            <li class="col-xs-2">
                                <a href="#"> 
                                    <i class="fa fa-share"></i> Share</a>
                            </li>							
                            <li class="col-xs-3">
                                <a href="#" data-id="79" data-toggle="modal" data-target="#myModaltest"> 
                                    <i class="fa fa-comments"></i> Discuss</a>
                            </li>						
                        </ul>
                    </div>
                </div>
                <!--5-->
                <div class="col-md-4" style="margin-top: 40px; ">
                    <div class="coupon-inner">
                        <div class="top-tag"> 
                            <span class="ribn-red"><span>Exclusive</span></span> 
                            <span class="star"><i class="fa fa-star-o"></i></span>
                        </div>
                        <div class="c-img">
                            <div class="coupon-image" style="">
                                <img src="images/1.jpg" class="img-responsive">							
                            </div>
                            <div class="coupon-content-box">
                                <a class="head" href="#">Flat 40% off Hotel Bookings In 10 Cities Near you</a>
                            </div>
                            <div class="coupon-info-box">
                                <p>Expires On : 2021-05-22</p>
                                <div class="text-center"> 
                                    <a data-href="#" target="_blank" data-text="1513" class="btn">get coupon code</a>
                                </div>
                            </div>
                        </div>
                        <ul class="btm-info" style="padding: 0px;">
                            <li class="col-xs-4"> 
                                <i class="fa fa-check-square-o"></i> Verified</li>							
                            <li class="col-xs-3">
                                <a href="#" data-id="79"> 
                                    <i class="fa fa-bookmark"></i> Save</a>
                            </li>							
                            <li class="col-xs-2">
                                <a href="#"> 
                                    <i class="fa fa-share"></i> Share</a>
                            </li>							
                            <li class="col-xs-3">
                                <a href="#" data-id="79" data-toggle="modal" data-target="#myModaltest"> 
                                    <i class="fa fa-comments"></i> Discuss</a>
                            </li>						
                        </ul>
                    </div>
                </div>
                <!--6-->
                <div class="col-md-4" style="margin-top: 40px; ">
                    <div class="coupon-inner">
                        <div class="top-tag"> 
                            <span class="ribn-red"><span>Exclusive</span></span> 
                            <span class="star"><i class="fa fa-star-o"></i></span>
                        </div>
                        <div class="c-img">
                            <div class="coupon-image" style="">
                                <img src="images/1.jpg" class="img-responsive">							
                            </div>
                            <div class="coupon-content-box">
                                <a class="head" href="#">Flat 40% off Hotel Bookings In 10 Cities Near you</a>
                            </div>
                            <div class="coupon-info-box">
                                <p>Expires On : 2021-05-22</p>
                                <div class="text-center"> 
                                    <a data-href="#" target="_blank" data-text="1513" class="btn">get coupon code</a>                                   
                                </div>
                            </div>
                        </div>
                        <ul class="btm-info" style="padding: 0px;">
                            <li class="col-xs-4"> 
                                <i class="fa fa-check-square-o"></i> Verified</li>							
                            <li class="col-xs-3">
                                <a href="#" data-id="79"> 
                                    <i class="fa fa-bookmark"></i> Save</a>
                            </li>							
                            <li class="col-xs-2">
                                <a href="#"> 
                                    <i class="fa fa-share"></i> Share</a>
                            </li>							
                            <li class="col-xs-3">
                                <a href="#" data-id="79" data-toggle="modal" data-target="#myModaltest"> 
                                    <i class="fa fa-comments"></i> Discuss</a>
                            </li>						
                        </ul>
                    </div>
                </div>
                <!--7-->
                <div class="col-md-4" style="margin-top: 40px; ">
                    <div class="coupon-inner">
                        <div class="top-tag"> 
                            <span class="ribn-red"><span>Exclusive</span></span> 
                            <span class="star"><i class="fa fa-star-o"></i></span>
                        </div>
                        <div class="c-img">
                            <div class="coupon-image" style="">
                                <img src="images/1.jpg" class="img-responsive">							
                            </div>
                            <div class="coupon-content-box">
                                <a class="head" href="#">Flat 40% off Hotel Bookings In 10 Cities Near you</a>
                            </div>
                            <div class="coupon-info-box">
                                <p>Expires On : 2021-05-22</p>
                                <div class="text-center"> 
                                    <a data-href="#" target="_blank" data-text="1513" class="btn">get coupon code</a>
                                </div>
                            </div>
                        </div>
                        <ul class="btm-info" style="padding: 0px;">
                            <li class="col-xs-4"> 
                                <i class="fa fa-check-square-o"></i> Verified</li>							
                            <li class="col-xs-3">
                                <a href="#" data-id="79"> 
                                    <i class="fa fa-bookmark"></i> Save</a>
                            </li>							
                            <li class="col-xs-2">
                                <a href="#"> 
                                    <i class="fa fa-share"></i> Share</a>
                            </li>							
                            <li class="col-xs-3">
                                <a href="#" data-id="79" data-toggle="modal" data-target="#myModaltest"> 
                                    <i class="fa fa-comments"></i> Discuss</a>
                            </li>						
                        </ul>
                    </div>
                </div>
                <!--8-->
                <div class="col-md-4" style="margin-top: 40px; ">
                    <div class="coupon-inner">
                        <div class="top-tag"> 
                            <span class="ribn-red"><span>Exclusive</span></span> 
                            <span class="star"><i class="fa fa-star-o"></i></span>
                        </div>
                        <div class="c-img">
                            <div class="coupon-image" style="">
                                <img src="images/1.jpg" class="img-responsive">							
                            </div>
                            <div class="coupon-content-box">
                                <a class="head" href="#">Flat 40% off Hotel Bookings In 10 Cities Near you</a>
                            </div>
                            <div class="coupon-info-box">
                                <p>Expires On : 2021-05-22</p>
                                <div class="text-center"> 
                                    <a data-href="#" target="_blank" data-text="1513" class="btn">get coupon code</a>
                                </div>
                            </div>
                        </div>
                        <ul class="btm-info" style="padding: 0px;">
                            <li class="col-xs-4"> 
                                <i class="fa fa-check-square-o"></i> Verified</li>							
                            <li class="col-xs-3">
                                <a href="#" data-id="79"> 
                                    <i class="fa fa-bookmark"></i> Save</a>
                            </li>							
                            <li class="col-xs-2">
                                <a href="#"> 
                                    <i class="fa fa-share"></i> Share</a>
                            </li>							
                            <li class="col-xs-3">
                                <a href="#" data-id="79" data-toggle="modal" data-target="#myModaltest"> 
                                    <i class="fa fa-comments"></i> Discuss</a>
                            </li>						
                        </ul>
                    </div>
                </div>
                <!--9-->
                <div class="col-md-4" style="margin-top: 40px; ">
                    <div class="coupon-inner">
                        <div class="top-tag"> 
                            <span class="ribn-red"><span>Exclusive</span></span> 
                            <span class="star"><i class="fa fa-star-o"></i></span>
                        </div>
                        <div class="c-img">
                            <div class="coupon-image" style="">
                                <img src="images/1.jpg" class="img-responsive">							
                            </div>
                            <div class="coupon-content-box">
                                <a class="head" href="#">Flat 40% off Hotel Bookings In 10 Cities Near you</a>
                            </div>
                            <div class="coupon-info-box">
                                <p>Expires On : 2021-05-22</p>
                                <div class="text-center"> 
                                    <a data-href="#" target="_blank" data-text="1513" class="btn">get coupon code</a>
                                </div>
                            </div>
                        </div>
                        <ul class="btm-info" style="padding: 0px;">
                            <li class="col-xs-4"> 
                                <i class="fa fa-check-square-o"></i> Verified</li>							
                            <li class="col-xs-3">
                                <a href="#" data-id="79"> 
                                    <i class="fa fa-bookmark"></i> Save</a>
                            </li>							
                            <li class="col-xs-2">
                                <a href="#"> 
                                    <i class="fa fa-share"></i> Share</a>
                            </li>							
                            <li class="col-xs-3">
                                <a href="#" data-id="79" data-toggle="modal" data-target="#myModaltest"> 
                                    <i class="fa fa-comments"></i> Discuss</a>
                            </li>						
                        </ul>
                    </div>
                </div>
            </div> 
        </div>
        <!--page-numbers-->
        <div class="row">
            <div class="blog-pagination col-md-12" style="margin-top: 30px; ">
                <ul class="pagination">
                    <li><a class="page-numbers" href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a class="page-numbers" href="#">3</a></li>
                    <li><a class="page-numbers" href="#">4</a></li>						   
                </ul>
            </div>
        </div>

        <footer>
            <div class="container">
                <div class="row">
                    <li class="col-md-4">
                        <h6>About Comre</h6>			
                        <div class="textwidget">
                            Hello we are Comre. We are here to provide you the best offers through our coupons. Hello we are Comre. We are here to provide you coupons. <br><br>
                            54/20 North Street, Melbourne, 18 Australia <br><br>
                            Contact@Comre.com <br><br>
                            http://Comre.com <br><br>
                        </div>
                    </li>
                    <li class="col-md-4">			
                        <h6>Quick Link</h6>               
                        <div class="row links">
                            <ul class="col-xs-4">
                                <li><a href="#">Home</a> </li>
                                <li><a href="#">stores</a> </li>
                                <li><a href="#">contact </a> </li>
                                <li><a href="#">careers</a> </li>
                                <li><a href="#">blog</a> </li>
                            </ul>
                            <ul class="col-xs-8">
                                <li><a href="#">Sitemap</a> </li>
                                <li><a href="#">Press</a> </li>
                                <li><a href="#">Privacy Policy &amp; Opt Out</a> </li>
                                <li><a href="#">List your business on CD</a> </li>
                                <li><a href="#">Terms of Service</a> </li>
                            </ul>
                        </div>
                    </li>
                    <li class="col-md-4">
                        <div class="subcribe">			
                            <h6>Subscribe to mail</h6>            
                            <p>Get our Daily email newsletter with Special Services, Updates, Offers and more!</p><br>
                            <form action="#" method="POST" target="popupwindow">
                                <input type="hidden" name="u" value="bd58b69cc8b502a1ae890b1b3">
                                <input type="hidden" name="id" value="b8e79867fc">
                                <input type="hidden" name="b_bd58b69cc8b502a1ae890b1b3_b8e79867fc" tabindex="-1" value="">
                                <input type="email" class="form-control" placeholder="Email Address" autocapitalize="off" autocorrect="off" name="MERGE0" size="25" value="">
                                <button type="submit">SIGNUP!</button>
                            </form>
                        </div>
                    </li>            
                </div>
            </div>
            <div class="rights">
                <p>copyright © 2015 comre. all rights reserved</p>
                <div class="social_icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-tumblr"></i></a>
                    </li>
                </div>
            </div>
        </footer>
    </div>
</body>