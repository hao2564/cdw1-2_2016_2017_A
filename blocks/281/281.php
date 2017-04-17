<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/281.less', 'css/281.css');
    ?>
    <link href="css/281.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div class="type-281">
        <div class="container">
            <div class="row padding">
                <div class="col-md-3 col-xs-12 col-sm-6 col-lg-3">
                    <div class="portfolio-thumbnail">
                        <a class="image"  href="#">
                            <span class="roll" ></span>
                            <img class="imgborder" src="images/photodune-7717723-soccer-players-m-440x550">
                        </a>
                    </div>
                    <h3 class="portfolio-title">
                        <a href="#">Thumbnail open lightbox</a>
                    </h3>
                    <div class="gdlr-portfolio-info">
                        <div class="portfolio-info">
                            <span class="info-head">Tags </span>
                            <a href="#" rel="tag">Fashion</a>
                            <span class="sep">,</span> <a href="#" rel="tag">Photograph</a>
                            <span class="sep">,</span> <a href="#" rel="tag">Vacation</a>
                        </div>
                        <div class="clear"></div>                                   
                    </div>
                    <div class="portfolio-excerpt">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis lacus vel augue laoreet rutrum... 
                        <div class="clear"></div>
                        <a href="#" class="excerpt-read-more">Read More</a>
                    </div>
                </div> 

                <div class="col-md-3 col-xs-12 col-sm-6 col-lg-3">
                    <div class="portfolio-thumbnail">                             
                        <a class="image"  href="#">
                            <span class="roll" ></span>
                            <img class="imgborder" src="images/photodune-4026532-green-tshirt-isolated-on-white-background-m-2-440x550">
                        </a>
                    </div>
                    <h3 class="portfolio-title">
                        <a href="#">Thumbnail link to post</a>
                    </h3>
                    <div class="gdlr-portfolio-info">
                        <div class="portfolio-info">
                            <span class="info-head">Tags </span>
                            <a href="#" rel="tag">Fashion</a>
                            <span class="sep">,</span> <a href="#" rel="tag">Photograph</a>
                            <span class="sep">,</span> <a href="#" rel="tag">Vacation</a>
                        </div>
                        <div class="clear"></div>                                   
                    </div>
                    <div class="portfolio-excerpt">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis lacus vel augue laoreet rutrum... 
                        <div class="clear"></div>
                        <a href="#" class="excerpt-read-more">Read More</a>
                    </div>
                </div> 

                <div class="col-md-3 col-xs-12 col-sm-6 col-lg-3">
                    <div class="portfolio-thumbnail">
                        <a class="image"  href="#">
                            <span class="roll" ></span>
                            <img class="imgborder" src="images/Fotolia_32413114_Subscription_Monthly_XXL-440x550">
                        </a>
                    </div>
                    <h3 class="portfolio-title">
                        <a href="#">Open video lightbox</a>
                    </h3>
                    <div class="gdlr-portfolio-info">
                        <div class="portfolio-info">
                            <span class="info-head">Tags </span>
                            <a href="#" rel="tag">flyers</a>
                            <span class="sep">,</span> <a href="#" rel="tag">identity</a>
                            <span class="sep">,</span> <a href="#" rel="tag">website</a>
                        </div>
                        <div class="clear"></div>                                   
                    </div>
                    <div class="portfolio-excerpt">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis lacus vel augue laoreet rutrum... 
                        <div class="clear"></div>
                        <a href="#" class="excerpt-read-more">Read More</a>
                    </div>
                </div> 

                <div class="col-md-3 col-xs-12 col-sm-6 col-lg-3">
                    <div class="portfolio-thumbnail">
                        <a class="image"  href="#">
                            <span class="roll" ></span>
                            <img class="imgborder" src="images/card04-440x550.jpg">
                        </a>
                    </div>
                    <h3 class="portfolio-title">
                        <a href="#">Thumbnail as slider</a>
                    </h3>
                    <div class="gdlr-portfolio-info">
                        <div class="portfolio-info">
                            <span class="info-head">Tags </span>
                            <a href="#" rel="tag">flyers</a>
                            <span class="sep">,</span> <a href="#" rel="tag">identity</a>
                            <span class="sep">,</span> <a href="#" rel="tag">website</a>
                        </div>
                        <div class="clear"></div>                                   
                    </div>
                    <div class="portfolio-excerpt">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis lacus vel augue laoreet rutrum... 
                        <div class="clear"></div>
                        <a href="#" class="excerpt-read-more">Read More</a>
                    </div>
                </div> 

                <div class="col-md-3 col-xs-12 col-sm-6 col-lg-3 padding">
                    <div class="portfolio-thumbnail">
                        <a class="image"  href="#">
                            <span class="roll" ></span>
                            <img class="imgborder" src="images/Fotolia_41546445_Subscription_Monthly_XXL-440x550">
                        </a>
                    </div>
                    <h3 class="portfolio-title">
                        <a href="#">Video inside this post</a>
                    </h3>
                    <div class="gdlr-portfolio-info">
                        <div class="portfolio-info">
                            <span class="info-head">Tags </span>
                            <a href="#" rel="tag">identity</a>
                            <span class="sep">,</span> <a href="#" rel="tag">typography</a>
                        </div>
                        <div class="clear"></div>                                   
                    </div>
                    <div class="portfolio-excerpt">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis lacus vel augue laoreet rutrum... 
                        <div class="clear"></div>
                        <a href="#" class="excerpt-read-more">Read More</a>
                    </div>
                </div> 

                <div class="col-md-3 col-xs-12 col-sm-6 col-lg-3 padding">
                    <div class="portfolio-thumbnail">
                        <a class="image"  href="#">
                            <span class="roll" ></span>
                            <img class="imgborder" src="images/Fotolia_35748983_Subscription_Monthly_XXL-440x550">
                        </a>
                    </div>
                    <h3 class="portfolio-title">
                        <a href="#">Stack images inside</a>
                    </h3>
                    <div class="gdlr-portfolio-info">
                        <div class="portfolio-info">
                            <span class="info-head">Tags </span>
                            <a href="#" rel="tag">Branding</a>
                            <span class="sep">,</span> <a href="#" rel="tag">Identity</a>
                            <span class="sep">,</span> <a href="#" rel="tag">Logo</a>
                        </div>
                        <div class="clear"></div>                                   
                    </div>
                    <div class="portfolio-excerpt">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis lacus vel augue laoreet rutrum... 
                        <div class="clear"></div>
                        <a href="#" class="excerpt-read-more">Read More</a>
                    </div>
                </div> 

                <div class="col-md-3 col-xs-12 col-sm-6 col-lg-3 padding">
                    <div class="portfolio-thumbnail">
                        <a class="image"  href="#">
                            <span class="roll" ></span>
                            <img class="imgborder" src="images/photodune-4004965-two-football-players-striking-the-ball-m-440x550">
                        </a>
                    </div>
                    <h3 class="portfolio-title">
                        <a href="#">Proin pellentesque</a>
                    </h3>
                    <div class="gdlr-portfolio-info">
                        <div class="portfolio-info">
                            <span class="info-head">Tags </span>
                            <a href="#" rel="tag">Identity</a>
                            <span class="sep">,</span> <a href="#" rel="tag">Typography</a>
                            <span class="sep">,</span> <a href="#" rel="tag">Website</a>
                        </div>
                        <div class="clear"></div>                                   
                    </div>
                    <div class="portfolio-excerpt">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis lacus vel augue laoreet rutrum... 
                        <div class="clear"></div>
                        <a href="#" class="excerpt-read-more">Read More</a>
                    </div>
                </div> 

                <div class="col-md-3 col-xs-12 col-sm-6 col-lg-3 padding">
                    <div class="portfolio-thumbnail">
                        <a class="image"  href="#">
                            <span class="roll" ></span>
                            <img class="imgborder" src="images/photodune-8534664-soccer-shoes-m-2-440x550">
                        </a>
                    </div>
                    <h3 class="portfolio-title">
                        <a href="#">QUISQUE TEMPOR</a>
                    </h3>
                    <div class="gdlr-portfolio-info">
                        <div class="portfolio-info">
                            <span class="info-head">Tags </span>
                            <a href="#" rel="tag">Branding</a>
                            <span class="sep">,</span> <a href="#" rel="tag">Logo</a>                           
                        </div>
                        <div class="clear"></div>                                   
                    </div>
                    <div class="portfolio-excerpt">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis lacus vel augue laoreet rutrum... 
                        <div class="clear"></div>
                        <a href="#" class="excerpt-read-more">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>