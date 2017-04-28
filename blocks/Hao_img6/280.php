<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>

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
        <header class="header style-1 sticky">	
            <div class="upper-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="search">
                                <form action="#" method="get" style="height: 28px;">
                                    <select class="form-control" name="post_type" style="height: 42px;">
                                        <option>USD</option>
                                        <option value="post">GBP</option>
                                        <option value="product">EUR</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="login">
                                <ul>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Checkout</a></li>
                                    <li><a href="#"><i class="fa fa-lock"></i> Login/Register</a></li>
                                    <li><a href="#"><i class="fa fa-phone"></i> 123 456 789</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space" style="margin-top: 20px;"></div>
            <div class="brand-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="brand" style="margin-left: -15px;">                             
                                <a href="#">
                                    <img src="images/logo.PNG" style="width: 180px;">
                                </a>
                            </div>						
                        </div>
                        <!-- Search Form -->
                        <div class="col-md-7">
                            <div class="search-form" style="margin-top: 12px;">
                                <form action="#" method="get" style="height: 28px;">
                                    <input class="form-control" name="s" value="" placeholder="Enter your keyword...">
                                    <button type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--menu-->
            <div class="space" style="margin-top: 20px;"></div>
            <nav>
                <div class="container"> 
                    <ul class="ownmenu">
                        <li class="menu-item" style="display: block;">
                            <a title="Home" href="#">HOME</a>   
                        </li>
                        <li class="menu-item" style="display: block;">
                            <a title="ABOUT US" href="#">SHOP</a>
                        </li>
                        <li class="menu-item" style="display: block;">
                            <a title="CATEGORIES" href="#">PAGES</a>                                                           
                        </li>
                        <li class="menu-item" style="display: block;">
                            <a title="Stores" href="#">SHORTCODES</a>
                        </li>
                        <li class="active menu-item" style="display: block;">
                            <a title="coupon codes" href="#">BLOG</a>
                        </li>
                        <li class="menu-item" style="display: block;">
                            <a title="Blog" href="#"> ACCOUNT</a>
                        </li>
                        <li class="menu-item" style="display: block;">
                            <a title="Contact" href="#">CONTACT</a>
                        </li>
                    </ul>
                </div>

                <div class="right-block">
                    <ul class="social-block">
                        <li>
                            <a href="#"><i class="fa fa-google-plus-square" style="font-size: 25px;"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter-square" style="font-size: 25px;"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-facebook-square" style="font-size: 25px;"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="space" style="margin-top: 40px;"></div>
        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="product-info">
                            <h1>Your favourite shoes on sale</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                <br>Quisque ultrices justo sed vehicula fringilla.</p>
                            <a href="#" class="theme-btn-1">Buy now</a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="product-image right">
                            <div class="images">
                                <img src="images/sale-product-2.png" style="margin-left: 50px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--content 1-->
        <section class="new-collection">
            <div class="container">
                <div class="section-header">
                    <h1>New collection</h1>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="product">
                            <div class="image">
                                <img src="images/new-collection-1.jpg" style="margin-top: 15px;">
                            </div>
                            <div class="details">
                                <h3>
                                    <a href="#">Skinny Low Jeans</a>
                                </h3>
                                <div class="price-bag">
                                    <span class="price">$54</span>
                                </div>
                            </div>
                        </div>	
                    </div>

                    <div class="col-md-3">
                        <div class="product">
                            <div class="image">
                                <img src="images/new-collection-1.jpg" style="margin-top: 15px;">
                            </div>
                            <div class="details">
                                <h3>
                                    <a href="#">Skinny Low Jeans</a>
                                </h3>
                                <div class="price-bag">
                                    <span class="price">$54</span>
                                </div>
                            </div>
                        </div>	
                    </div>

                    <div class="col-md-3">
                        <div class="product">
                            <div class="image">
                                <img src="images/new-collection-1.jpg" style="margin-top: 15px;">
                            </div>
                            <div class="details">
                                <h3>
                                    <a href="#">Skinny Low Jeans</a>
                                </h3>
                                <div class="price-bag">
                                    <span class="price">$54</span>
                                </div>
                            </div>
                        </div>	
                    </div>

                    <div class="col-md-3">
                        <div class="product">
                            <div class="image">
                                <img src="images/new-collection-1.jpg" style="margin-top: 15px;">
                            </div>
                            <div class="details">
                                <h3>
                                    <a href="#">Skinny Low Jeans</a>
                                </h3>
                                <div class="price-bag">
                                    <span class="price">$54</span>
                                </div>
                            </div>
                        </div>	
                    </div>
                </div>
            </div>
        </section>

        <div class="space" style="margin-top: 20px;"></div>
        <section class="banner shipping-banner" style="background-image: url(images/aaa.jpg); background-size: cover;">
            <div class="bg-wrapper">
                <div class="container">
                    <h3>Free Shipping</h3>
                    <p>Enjoy new collection</p>
                    <h4>50% off</h4>
                    <a href="#" class="theme-btn-1">Buy Now</a>
                </div> 
            </div>
        </section>

        <section class="categories">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="category">
                            <img src="images/category-women.png">
                            <div class="category-info hidden-xs">
                                <a href="#"><h2>Women</h2></a>
                                <p>Choose this category</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="category">
                            <img src="images/category-men.png">
                            <div class="category-info hidden-xs">
                                <a href="#"><h2>Men</h2></a>
                                <p>Choose this category</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="tabs">
            <div class="bg-xam">
                <div class="container">
                    <ul class="heading">
                        <li class="ui-state-active">
                            <a href="#">Best Seller</a>
                        </li>
                        <li>
                            <a href="#">Just in</a>
                        </li>
                        <li>
                            <a href="#">Sale</a>
                        </li>
                    </ul>
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="product">
                                <div class="image">
                                    <img src="images/new-collection-4.jpg" style="margin-top: 15px;">
                                </div>
                                <div class="details">
                                    <h3>
                                        <a href="#">Skinny Low Jeans</a>
                                    </h3>
                                    <div class="price-bag">
                                        <span class="price">$54</span>
                                    </div>
                                </div>
                            </div>	
                        </div>

                        <div class="item">
                            <div class="product">
                                <div class="image">
                                    <img src="images/new-collection-1.jpg" style="margin-top: 15px;">
                                </div>
                                <div class="details">
                                    <h3>
                                        <a href="#">Skinny Low Jeans</a>
                                    </h3>
                                    <div class="price-bag">
                                        <span class="price">$54</span>
                                    </div>
                                </div>
                            </div>	
                        </div>

                        <div class="item">
                            <div class="product">
                                <div class="image">
                                    <img src="images/new-collection-4.jpg" style="margin-top: 15px;">
                                </div>
                                <div class="details">
                                    <h3>
                                        <a href="#">Skinny Low Jeans</a>
                                    </h3>
                                    <div class="price-bag">
                                        <span class="price">$54</span>
                                    </div>
                                </div>
                            </div>	
                        </div>

                        <div class="item">
                            <div class="product">
                                <div class="image">
                                    <img src="images/new-collection-1.jpg" style="margin-top: 15px;">
                                </div>
                                <div class="details">
                                    <h3>
                                        <a href="#">Skinny Low Jeans</a>
                                    </h3>
                                    <div class="price-bag">
                                        <span class="price">$54</span>
                                    </div>
                                </div>
                            </div>	
                        </div>

                        <div class="item">
                            <div class="product">
                                <div class="image">
                                    <img src="images/new-collection-4.jpg" style="margin-top: 15px;">
                                </div>
                                <div class="details">
                                    <h3>
                                        <a href="#">Skinny Low Jeans</a>
                                    </h3>
                                    <div class="price-bag">
                                        <span class="price">$54</span>
                                    </div>
                                </div>
                            </div>	
                        </div>

                        <div class="item">
                            <div class="product">
                                <div class="image">
                                    <img src="images/new-collection-1.jpg" style="margin-top: 15px;">
                                </div>
                                <div class="details">
                                    <h3>
                                        <a href="#">Skinny Low Jeans</a>
                                    </h3>
                                    <div class="price-bag">
                                        <span class="price">$54</span>
                                    </div>
                                </div>
                            </div>	
                        </div>

                        <div class="item">
                            <div class="product">
                                <div class="image">
                                    <img src="images/new-collection-4.jpg" style="margin-top: 15px;">
                                </div>
                                <div class="details">
                                    <h3>
                                        <a href="#">Skinny Low Jeans</a>
                                    </h3>
                                    <div class="price-bag">
                                        <span class="price">$54</span>
                                    </div>
                                </div>
                            </div>	
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="from-blog">
            <div class="container">
                <div class="row">
                    <div class="section-header" style="margin-left: 15px;">
                        <h1>From Blog</h1>
                    </div>
                    <div class="col-md-2 col-xs-12">
                        <div class="blogpost">
                            <div class="image">
                                <img src="images/index-blog-3.jpg">
                            </div>
                            <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                            <p>Integer iaculis ante vel orci varius congue. Aenean eu augue <a href="#">{...}</a></p>
                        </div>
                    </div>

                    <div class="col-md-2 col-xs-12">
                        <div class="blogpost">
                            <div class="image">
                                <img src="images/index-blog-3.jpg">
                            </div>
                            <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                            <p>Integer iaculis ante vel orci varius congue. Aenean eu augue <a href="#">{...}</a></p>
                        </div>
                    </div>

                    <div class="col-md-2 col-xs-12">
                        <div class="blogpost">
                            <div class="image">
                                <img src="images/index-blog-3.jpg">
                            </div>
                            <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                            <p>Integer iaculis ante vel orci varius congue. Aenean eu augue <a href="#">{...}</a></p>
                        </div>
                    </div>

                    <div class="col-md-2 col-xs-12">
                        <div class="blogpost">
                            <div class="image">
                                <img src="images/index-blog-3.jpg">
                            </div>
                            <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                            <p>Integer iaculis ante vel orci varius congue. Aenean eu augue <a href="#">{...}</a></p>
                        </div>
                    </div>

                    <div class="col-md-2 col-xs-12">
                        <div class="blogpost">
                            <div class="image">
                                <img src="images/index-blog-3.jpg">
                            </div>
                            <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                            <p>Integer iaculis ante vel orci varius congue. Aenean eu augue <a href="#">{...}</a></p>
                        </div>
                    </div>

                    <div class="col-md-2 col-xs-12">
                        <div class="blogpost">
                            <div class="image">
                                <img src="images/index-blog-3.jpg">
                            </div>
                            <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                            <p>Integer iaculis ante vel orci varius congue. Aenean eu augue <a href="#">{...}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="preview-cards">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="preview-card">
                            <div class="preview-card-header">
                                <h2>Top rated</h2>
                            </div>
                            <div class="preview-card-body">
                                <ul>
                                    <li>
                                        <div class="image">
                                            <a href="#">
                                                <img src="images/top-rated-1.jpg">
                                            </a>
                                        </div>
                                        <h5><a href="#">Skinny Jeans</a></h5>
                                        <span class="price">$54</span>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <a href="#">
                                                <img src="images/top-rated-1.jpg">
                                            </a>
                                        </div>
                                        <h5><a href="#">Pleated Skirt</a></h5>
                                        <span class="price">$20</span>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <a href="#">
                                                <img src="images/top-rated-1.jpg">
                                            </a>
                                        </div>
                                        <h5><a href="#">Long-sleeved blouse</a></h5>
                                        <span class="price">$20</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="preview-card">
                            <div class="preview-card-header">
                                <h2>BEST SELLER</h2>
                            </div>
                            <div class="preview-card-body">
                                <ul>
                                    <li>
                                        <div class="image">
                                            <a href="#">
                                                <img src="images/top-rated-1.jpg">
                                            </a>
                                        </div>
                                        <h5><a href="#">Skinny Jeans</a></h5>
                                        <span class="price">$54</span>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <a href="#">
                                                <img src="images/top-rated-1.jpg">
                                            </a>
                                        </div>
                                        <h5><a href="#">Pleated Skirt</a></h5>
                                        <span class="price">$20</span>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <a href="#">
                                                <img src="images/top-rated-1.jpg">
                                            </a>
                                        </div>
                                        <h5><a href="#">Long-sleeved blouse</a></h5>
                                        <span class="price">$20</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="preview-card">
                            <div class="preview-card-header">
                                <h2>sale</h2>
                            </div>
                            <div class="preview-card-body">
                                <ul>
                                    <li>
                                        <div class="image">
                                            <a href="#">
                                                <img src="images/top-rated-1.jpg">
                                            </a>
                                        </div>
                                        <h5><a href="#">Skinny Jeans</a></h5>
                                        <span class="price">$54</span>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <a href="#">
                                                <img src="images/top-rated-1.jpg">
                                            </a>
                                        </div>
                                        <h5><a href="#">Pleated Skirt</a></h5>
                                        <span class="price">$20</span>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <a href="#">
                                                <img src="images/top-rated-1.jpg">
                                            </a>
                                        </div>
                                        <h5><a href="#">Long-sleeved blouse</a></h5>
                                        <span class="price">$20</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="preview-card">
                            <div class="preview-card-header">
                                <h2>new</h2>
                            </div>
                            <div class="preview-card-body">
                                <ul>
                                    <li>
                                        <div class="image">
                                            <a href="#">
                                                <img src="images/top-rated-1.jpg">
                                            </a>
                                        </div>
                                        <h5><a href="#">Skinny Jeans</a></h5>
                                        <span class="price">$54</span>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <a href="#">
                                                <img src="images/top-rated-1.jpg">
                                            </a>
                                        </div>
                                        <h5><a href="#">Pleated Skirt</a></h5>
                                        <span class="price">$20</span>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <a href="#">
                                                <img src="images/top-rated-1.jpg">
                                            </a>
                                        </div>
                                        <h5><a href="#">Long-sleeved blouse</a></h5>
                                        <span class="price">$20</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="container">               
                <div class="social-block">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>

                <div class="footer-sections" style="margin-top: 30px;">
                    <div class="row">
                        <div class="col-md-4 col-xs-12">
                            <div class="footer-section menu">
                                <ul>
                                    <li><a href="#">Categories</a></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">Sitemap</a></li>
                                    <li><a href="#">Ladies</a></li>
                                    <li><a href="#">Men</a></li>
                                    <li><a href="#">Sale</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">About</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#">Products</a></li>
                                    <li><a href="#">Lookbook</a></li>
                                    <li><a href="#">Delivery</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms and Conditions</a></li>
                                    <li><a href="#">My account</a></li>
                                    <li><a href="#">Wishlist</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4 col-xs-12">
                            <div class="footer-section tags">
                                <ul>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Women</a></li>
                                    <li><a href="#">Men</a></li>
                                    <li><a href="#">Skirts</a></li>
                                    <li><a href="#">Delivery</a></li>
                                    <li><a href="#">Terms and Conditions</a></li>
                                    <li><a href="#">Dungarees</a></li>
                                    <li><a href="#">Blouse</a></li>
                                    <li><a href="#">Jeans</a></li>
                                    <li><a href="#">Shorts</a></li>
                                    <li><a href="#">Long Sleeve</a></li>
                                    <li><a href="#">Lookbook</a></li>
                                </ul>

                                <form class="subscribe-form">
                                    <input type="email" class="subscribe-input" placeholder="Enter email address">
                                    <input type="submit" class="subscribe-submit" value="Newsletter subscribe">
                                </form>
                            </div>
                        </div>

                        <div class="col-md-4 col-xs-12">
                            <div class="footer-section contact">
                                <p>Yuppy, LA8549</p>
                                <p>Email: bishop@gmail.com</p>
                                <p>Phone: 045 584 878 658</p>
                                <p>Phone: 245 847 888 999</p>

                                <div class="cards" style="margin-top: 44px;">
                                    <img src="images/card-1.png">
                                    <img src="images/card-2.png">
                                    <img src="images//card-3.png">
                                    <img src="images/card-4.png">
                                    <img src="images/card-5.png">
                                    <img src="images/card-6.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="copyrights" style="margin-top: 20px;">
                    <p>Copyright 2015. Designed by TeslaThemes</p>
                </div>
            </div>
        </footer>
    </div>
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
</body>