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
    $less->compileFile('less/291.less', 'css/291.css');
    ?>
    <link href="css/291.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div class="type-291">
        <div class="container">
            <div class="row" style="margin-top: 30px;">

                <div class="col-md-3 col-xs-12 col-lg-3">
                    <h3>Text Widget</h3>
                    <div class="clear"></div>			
                    <div class="textwidget">
                        Vestibulum id ligula porta felis euismod semper. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                    </div>
                    <div class="widget_recent_comments">
                        <h3>Recent Comments</h3>
                        <div class="clear"></div>
                        <ul>
                            <li class="recentcomments">
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                <span>qewe</span> on 
                                <a href="#">Green Sport T-Shirt</a>
                            </li>
                            <li class="recentcomments">
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                <span>John Doe</span> on 
                                <a href="#">Blue Sport T-Shirt</a>
                            </li>
                            <li class="recentcomments">
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                <span>John Doe</span> on 
                                <a href="#">Green Sport T-Shirt</a>
                            </li>
                            <li class="recentcomments">
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                <span>John Doe</span> on 
                                <a href="#">Orange Sport T-Shirt</a>
                            </li>
                            <li class="recentcomments">
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                <span>John Doe</span> on 
                                <a href="#">Yellow Sport T-Shirt</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>

                <div class="col-md-6 col-xs-12 col-lg-6">
                    <div class="portfolio-thumbnail">
                        <div class="demo">
                            <a href="#">
                                <img class="" src="images/1.jpg">
                                <div class="overlay thumb"></div>
                                <div class="text thumb">
                                    <i class="fa fa-search icon" aria-hidden="true"></i>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                        </div>
                    </div>
                    <h3 class="portfolio-title">
                        <a href="#">Thumbnail open lightbox</a>
                    </h3>
                    <div class="portfolio-info">
                        <span class="info-head">Tags </span>
                        <a href="#" rel="tag">Fashion</a>
                        <span class="sep">,</span> 
                        <a href="#" rel="tag">Photograph</a>
                        <span class="sep">,</span> 
                        <a href="#" rel="tag">Vacation</a>
                    </div>
                    <div class="clear"></div>                          
                    <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Vivamus sagittis lacus vel augue laoreet rutrum faucibus. Integer legentibus erat a ante historiarum dapibus.... </p>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>                                       

                <div class="col-md-3 col-xs-12 col-lg-3">
                    <div class="widget_recent_entries">	
                        <h3>Recent Posts</h3>
                        <div class="clear"></div>		
                        <ul>
                            <li>
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                <a href="#">Sem Porta Mollis Parturient</a>
                            </li>
                            <li>
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                <a href="#">Nullam Lorem Mattis Purus</a>
                            </li>
                            <li>
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                <a href="#">Nibh Sem Sit Ullamcorper</a>
                            </li>
                            <li>
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                <a href="#">Donec luctus imperdiet</a>
                            </li>
                            <li>
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                <a href="#">Magna pars studiorum</a>
                            </li>
                            <li>
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                <a href="#">Sedial eiusmod tempor</a>
                            </li>
                            <li>
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                <a href="#">Eiusmod tempor incidunt</a>
                            </li>
                        </ul>
                    </div>

                    <h3>Recent Works</h3>
                    <div class="clear"></div>
                    <div class="gdlr-recent-port2-widget">
                        <div class="recent-port-widget-thumbnail">
                            <a href="#">
                                <img src="images/2.jpg" style="opacity: 1;">
                            </a>
                        </div>
                        <div class="recent-port-widget-thumbnail">
                            <a href="#">
                                <img src="images/3.jpg" style="opacity: 1;">
                            </a>
                        </div>
                        <div class="recent-port-widget-thumbnail">
                            <a href="#">
                                <img src="images/4.jpg" style="opacity: 1;">
                            </a>
                        </div>
                        <div class="recent-port-widget-thumbnail">
                            <a href="#">
                                <img src="images/5.jpg" style="opacity: 1;">
                            </a>
                        </div>
                        <div class="recent-port-widget-thumbnail">
                            <a href="#">
                                <img src="images/2.jpg" style="opacity: 1;">
                            </a>
                        </div>
                        <div class="recent-port-widget-thumbnail">
                            <a href="#">
                                <img src="images/7.jpg" style="opacity: 1;">
                            </a>
                        </div>
                        <div class="recent-port-widget-thumbnail">
                            <a href="#">
                                <img src="images/8.jpg" style="opacity: 1;">
                            </a>
                        </div>
                        <div class="recent-port-widget-thumbnail">
                            <a href="#">
                                <img src="images/9.jpg" style="opacity: 1;">
                            </a>
                        </div>
                        <div class="clear"></div>                                                
                    </div>			
                </div>
            </div>
        </div>
    </div>
</body>