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
    $less->compileFile('less/286.less', 'css/286.css');
    ?>
    <link href="css/286.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div class="type-286">
        <div class="container">
            <div class="row">              
                <div  class="col-md-8 col-sm-8 col-xs-12 col-lg-8">
                    <div class="gdlr-item-start-content">
                        <div class="gdlr-item">
                            <h2>Notification Boxes</h2>
                            <div class="clear"></div>
                            <div class="gdlr-space"></div>
                            <h3>Color Background</h3>
                            <div class="clear"></div>
                            <div class="gdlr-space"></div>

                            <div class="gdlr-shortcode-wrapper">
                                <div class="gdlr-notification gdlr-item color-background" style="color:#ffffff;background-color:#99d15e;">
                                    <i class="fa fa-flag" aria-hidden="true"></i>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut.</div>
                                    <div class="clear"></div>                                     
                                </div>                                    
                            </div>

                            <div class="gdlr-shortcode-wrapper">
                                <div class="gdlr-notification gdlr-item color-background" style="color:#ffffff; background-color:#d15e5e;">
                                    <i class="fa fa-flag" aria-hidden="true"></i>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut.</div>
                                    <div class="clear"></div>                                       
                                </div>                                   
                            </div>

                            <div class="gdlr-shortcode-wrapper">                          
                                <div class="gdlr-notification gdlr-item color-background" style="color:#ffffff; background-color:#5eafd1;">
                                    <i class="fa fa-flag" aria-hidden="true"></i>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut.</div>
                                    <div class="clear"></div>
                                </div>
                            </div>

                            <div class="gdlr-shortcode-wrapper">
                                <div class="gdlr-notification gdlr-item color-background" style="color:#ffffff; background-color:#e2872e;">
                                    <i class="fa fa-flag" aria-hidden="true"></i>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut.</div>
                                    <div class="clear"></div>                                   
                                </div>                                      
                            </div>

                            <div class="clear"></div>
                            <div class="gdlr-space"></div>
                            <h3>Color Border</h3>
                            <div class="clear"></div>
                            <div class="gdlr-space"></div>

                            <div class="gdlr-shortcode-wrapper">
                                <div class="gdlr-notification gdlr-item color-border" style="color:#000000; border-color:#99d15e;">
                                    <i class="fa fa-flag" aria-hidden="true"></i>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut.</div>
                                    <div class="clear"></div>                                       
                                </div>                                  
                            </div>

                            <div class="gdlr-shortcode-wrapper">
                                <div class="gdlr-notification gdlr-item color-border" style="color:#000000; border-color:#d15e5e;">
                                    <i class="fa fa-flag" aria-hidden="true"></i>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut.</div>
                                    <div class="clear"></div>                                      
                                </div>                                  
                            </div>

                            <div class="gdlr-shortcode-wrapper">
                                <div class="gdlr-notification gdlr-item color-border" style="color:#000000; border-color:#5eafd1;">
                                    <i class="fa fa-flag" aria-hidden="true"></i>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut.</div>
                                    <div class="clear"></div>                                      
                                </div>                                   
                            </div>

                            <div class="gdlr-shortcode-wrapper">
                                <div class="gdlr-notification gdlr-item color-border" style="color:#000000; border-color:#e2872e;">
                                    <i class="fa fa-flag" aria-hidden="true"></i>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut.</div>
                                    <div class="clear"></div>                                       
                                </div>                                  
                            </div>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>