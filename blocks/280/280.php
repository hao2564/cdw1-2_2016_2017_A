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
        <div class="container">
            <div class="row">
                <footer class="footer-wrapper">
                    <div class="col-md-3 col-sm-6">
                        <div id="" class=" gdlr-item">
                            <h3 class="gdlr-widget-title">About Us</h3>
                            <div class="clear"></div>			
                            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <p><strong>Address</strong> : 269 Main Street<br>
                                London England</p>
                            <p><strong>Call</strong> : +1800-222-3333</p>
                        </div>				
                    </div>

                    <div class="col-md-3 col-sm-6">                     
                        <div id="" class="gdlr-item">
                            <h3 class="gdlr-widget-title">Recent News</h3>
                            <div class="clear"></div>
                            <div class="recent-post-widget">
                                <div class="recent-post-widget-thumbnail">
                                    <a href="#">
                                        <img src="images/photodune-3587877-soccer-players-team-m-150x150.jpg" alt="" width="150" height="150"></a>
                                </div>                         
                                <div class="recent-post-widget-content">
                                    <div class="recent-post-widget-title">
                                        <a href="#">Sem Porta Mollis Parturient</a>
                                    </div>                                           
                                    <i class="icon-calendar fa fa-calendar"></i>
                                    <a href="#">21 Mar 2014</a>
                                    <div class="clear"></div>                                              
                                </div>
                                <div class="clear"></div>                                     
                            </div>

                            <div class="recent-post-widget">
                                <div class="recent-post-widget-thumbnail">
                                    <a href="#">
                                        <img src="images/Fotolia_32413114_Subscription_Monthly_XXL-150x150" alt="" width="150" height="150"></a>
                                </div>                         
                                <div class="recent-post-widget-content">
                                    <div class="recent-post-widget-title">
                                        <a href="#">Nullam Lorem Mattis Purus</a>
                                    </div>
                                    <i class="icon-calendar fa fa-calendar"></i>
                                    <a href="#">21 Mar 2014</a>
                                    <div class="clear"></div>                                            
                                </div>
                                <div class="clear"></div>                                     
                            </div>

                            <div class="recent-post-widget">
                                <div class="recent-post-widget-thumbnail">
                                    <a href="#">
                                        <img src="images/photodune-4004965-two-football-players-striking-the-ball-m-150x150" alt="" width="150" height="150"></a>
                                </div>                         
                                <div class="recent-post-widget-content">
                                    <div class="recent-post-widget-title">
                                        <a href="#">Nibh Sem Sit Ullamcorper</a>
                                    </div>
                                    <i class="icon-calendar fa fa-calendar"></i>
                                    <a href="#">21 Mar 2014</a>                                           
                                </div>
                                <div class="clear"></div>                                     
                            </div>
                            <div class="clear"></div>                                                                 
                        </div>				
                    </div>

                    <div class="col-md-3 col-sm-6"> 
                        <div id="" class="gdlr-item">
                            <h3 class="gdlr-widget-title">Product Categories</h3>
                            <ul class="product-categories">
                                <div class="list">
                                    <li>
                                        <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                        <a href="#">Shoes</a> <span>(4)</span>
                                    </li>
                                </div>

                                <div class="list">
                                    <li>
                                        <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                        <a href="#">  Accessory</a> <span>(5)</span>
                                    </li>
                                </div>

                                <div class="list">
                                    <li>
                                        <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                        <a href="#">  T-Shirt</a> <span>(3)</span>
                                    </li>
                                </div>

                                <div class="list">
                                    <li>
                                        <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                        <a href="#">  Sport Wear</a> <span>(1)</span>
                                    </li>
                                </div>

                                <div class="list">
                                    <li>
                                        <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                        <a href="#">  Man</a> <span>(1)</span>
                                    </li>                                  
                                </div>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div id="" class="gdlr-item">
                            <h3 class="gdlr-widget-title">Recent Comments</h3>
                            <div class="clear"></div>
                            <div class="gdlr-recent-comment-widget">
                                <div class="recent-commnet-widget">
                                    <div class="recent-comment-widget-thumbnail">
                                        <a href="#">
                                            <img src="images/none.png" class=" photo" height="55" width="55"></a>
                                    </div>                                  
                                    <div class="recent-comment-widget-title">
                                        <a href="#">qewe</a>
                                    </div>
                                    <div class="recent-comment-widget-info">Commented On 02 Sep 2015</div>
                                    <div class="recent-comment-widget-excerpt">qwe</div>                                   
                                    <div class="clear"></div>                                       
                                </div>
                                <div class="recent-commnet-widget">
                                    <div class="recent-comment-widget-thumbnail">
                                        <a href="#">
                                            <img alt="" src="images/none.png" class="photo" height="55" width="55"></a>
                                    </div>                                  
                                    <div class="recent-comment-widget-title">
                                        <a href="#">John Doe</a>
                                    </div>
                                    <div class="recent-comment-widget-info">Commented On 26 Dec 2013</div>
                                    <div class="recent-comment-widget-excerpt">So Comfortable!</div>
                                    <div class="clear"></div>                                       
                                </div>
                                <div class="recent-commnet-widget">
                                    <div class="recent-comment-widget-thumbnail">
                                        <a href="#">
                                            <img alt="" src="images/none.png" class="photo" height="55" width="55"></a>
                                    </div>                                   
                                    <div class="recent-comment-widget-title">
                                        <a href="#">John Doe</a>
                                    </div>
                                    <div class="recent-comment-widget-info">Commented On 26 Dec 2013</div>
                                    <div class="recent-comment-widget-excerpt">Nice and good!</div>
                                    <div class="clear"></div>                                      
                                </div>
                                <div class="clear"></div>                                   
                            </div>                             
                        </div>				
                        <div class="clear"></div>
                    </div>                  
                </footer>
            </div>
        </div>
    </div>
</body>