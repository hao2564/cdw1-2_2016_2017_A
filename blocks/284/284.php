<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>


    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/284.less', 'css/284.css');
    ?>
    <link href="css/284.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div class="type-284">
        <div class="container">
            <div class="row padding">

                <div class="col-md-3 col-xs-12 col-sm-6 col-lg-3">
                    <div class="gdlr-classic-player">
                        <a href="#" data-rel="fancybox">
                            <img src="images/1.jpg"></a>
                        <div class="gdlr-classic-player-item-content">
                            <div class="gdlr-soccer-player-squad">11</div>
                            <h3 class="gdlr-soccer-player-title">
                                <a href="#">Roboto Carlos</a></h3>
                            <div class="gdlr-soccer-player-position">Forwarder</div>                                     
                        </div>                                                                
                    </div>                           
                </div>

                <div class="col-md-3 col-xs-12 col-sm-6 col-lg-3">
                    <div class="gdlr-classic-player">
                        <a href="#" data-rel="fancybox">
                            <img src="images/2.jpg"></a>
                        <div class="gdlr-classic-player-item-content">
                            <div class="gdlr-soccer-player-squad">08</div>
                            <h3 class="gdlr-soccer-player-title">
                                <a href="#">PAUL BAKANI</a></h3>
                            <div class="gdlr-soccer-player-position">Forwarder</div>                                      
                        </div>                                                                                         
                    </div>
                </div>

                <div class="col-md-3 col-xs-12 col-sm-6 col-lg-3">
                    <div class="gdlr-classic-player">
                        <a href="#" data-rel="fancybox">
                            <img src="images/3.jpg"></a>
                        <div class="gdlr-classic-player-item-content">
                            <div class="gdlr-soccer-player-squad">09</div>
                            <h3 class="gdlr-soccer-player-title">
                                <a href="#">ALLAN STINELY</a></h3>
                            <div class="gdlr-soccer-player-position">Midfielder</div>                                     
                        </div>                                                                                       
                    </div>
                </div>

                <div class="col-md-3 col-xs-12 col-sm-6 col-lg-3">
                    <div class="gdlr-classic-player">
                        <a href="#" data-rel="fancybox">
                            <img src="images/4.jpg"></a>
                        <div class="gdlr-classic-player-item-content">
                            <div class="gdlr-soccer-player-squad">05</div>
                            <h3 class="gdlr-soccer-player-title">
                                <a href="#">EDWARD SMITH</a></h3>
                            <div class="gdlr-soccer-player-position">Defender</div>                                      
                        </div>                                                                                      
                    </div>
                </div>

                <div class="col-md-3 col-xs-12 col-sm-6 col-lg-3 padding">
                    <div class="gdlr-classic-player">
                        <a href="#" data-rel="fancybox">
                            <img src="images/5.jpg"></a>
                        <div class="gdlr-classic-player-item-content">
                            <div class="gdlr-soccer-player-squad">04</div>
                            <h3 class="gdlr-soccer-player-title">
                                <a href="#">JONATHAN WEST</a></h3>
                            <div class="gdlr-soccer-player-position">Defender</div>                                    
                        </div>                                                                                       
                    </div>
                </div>

                <div class="col-md-3 col-xs-12 col-sm-6 col-lg-3 padding">
                    <div class="gdlr-classic-player">
                        <a href="#" data-rel="fancybox">
                            <img src="images/6.jpg"></a>
                        <div class="gdlr-classic-player-item-content">
                            <div class="gdlr-soccer-player-squad">15</div>
                            <h3 class="gdlr-soccer-player-title">
                                <a href="#">LUIS MIGUEL</a></h3>
                            <div class="gdlr-soccer-player-position">Defender</div>                                                                                  
                        </div>                                                                                      
                    </div>
                </div>

                <div class="col-md-3 col-xs-12 col-sm-6 col-lg-3 padding">
                    <div class="gdlr-classic-player">                       
                        <a href="#" data-rel="fancybox">
                            <img src="images/7.jpg"></a>           
                        <div class="gdlr-classic-player-item-content">
                            <div class="gdlr-soccer-player-squad">12</div>
                            <h3 class="gdlr-soccer-player-title">
                                <a href="#">FRANK MULLER</a></h3>
                            <div class="gdlr-soccer-player-position">Forwarder</div>                                                                                 
                        </div>                                                                                    
                    </div>
                </div>

                <div class="col-md-3 col-xs-12 col-sm-6 col-lg-3 padding">
                    <div class="gdlr-classic-player">
                        <a href="#" data-rel="fancybox">
                            <img src="images/8.jpg"></a>
                        <div class="gdlr-classic-player-item-content">
                            <div class="gdlr-soccer-player-squad">14</div>
                            <h3 class="gdlr-soccer-player-title">
                                <a href="#">DAVID MADEN</a></h3>
                            <div class="gdlr-soccer-player-position">Forwarder</div>                                                                                 
                        </div>                                   
                    </div>                                                     
                </div>

            </div>
        </div>
    </div>
</body>