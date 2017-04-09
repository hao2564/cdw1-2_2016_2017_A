<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="css/bootstrap.min.js" type="text/javascript"></script>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/296.less', 'css/296.css');
        ?>
        <link href="css/296.css" rel="stylesheet" type="text/css" />


    </head>

    <body>
        <div class="type-296">
            <div class="player">
                <div class="container">
                    <div class="icon-player">
                        <span> 
                            <i class="fa fa-pause" aria-hidden="true"></i> PLAYER 
                            <span class="view">View All Players</span>
                        </span> 
                    </div>
                    <div class="row">
                        <div class="well"> 
                            <div id="myCarousel" class="carousel slide">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="row-fluid">
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <div class="span3">
                                                    <a href="#" class="thumbnail"><img src="images/roboto carlos.jpg" alt=""/></a>
                                                </div>
                                                <!----Thumb---->
                                                <div class="thumb">
                                                    <div class="number">11</div>
                                                    <div class="name">
                                                        <h3>ROBOTO CARLOS</h3>
                                                        <p>Forwarder</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <div class="span3">
                                                    <a href="#" class="thumbnail"><img src="images/banaki.jpg" alt=""/></a>
                                                </div>
                                                <!----Thumb---->
                                                <div class="thumb">
                                                    <div class="number">09</div>
                                                    <div class="name">
                                                        <h3>PAUL BAKANI</h3>
                                                        <p>Forwarder</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <div class="span3">
                                                    <a href="#" class="thumbnail"><img src="images/allan.jpg" alt=""/></a>
                                                </div>
                                               <!----Thumb---->
                                                <div class="thumb">
                                                    <div class="number">08</div>
                                                    <div class="name">
                                                        <h3>ALLAN STINELY</h3>
                                                        <p>Midfielder</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <div class="span3">
                                                    <a href="#" class="thumbnail"><img src="images/edward.jpg" alt=""/></a>
                                                </div>
                                               <!----Thumb---->
                                                <div class="thumb">
                                                    <div class="number">05</div>
                                                    <div class="name">
                                                        <h3>EDWARD SMITH</h3>
                                                        <p>Defender</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="row-fluid">
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <div class="span3">
                                                    <a href="#" class="thumbnail"><img src="images/jonathan.jpg" alt=""/></a>
                                                </div>
                                                <!----Thumb---->
                                                <div class="thumb">
                                                    <div class="number">04</div>
                                                    <div class="name">
                                                        <h3>JONATHAN WEST</h3>
                                                        <p>Defender</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <div class="span3">
                                                    <a href="#" class="thumbnail"><img src="images/luis.jpg" alt=""/></a>
                                                </div>
                                                 <!----Thumb---->
                                                <div class="thumb">
                                                    <div class="number">15</div>
                                                    <div class="name">
                                                        <h3>LUIS MIGUEL</h3>
                                                        <p>Defender</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <div class="span3">
                                                    <a href="#x" class="thumbnail"><img src="images/frank.jpg" alt=""/></a>
                                                </div>
                                                 <!----Thumb---->
                                                <div class="thumb">
                                                    <div class="number">12</div>
                                                    <div class="name">
                                                        <h3>FRANK MULLER</h3>
                                                        <p>Forwarder</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <div class="span3">
                                                    <a href="#x" class="thumbnail"><img src="images/david maden.jpg" alt=""/></a>
                                                </div>
                                                 <!----Thumb---->
                                                <div class="thumb">
                                                    <div class="number">14</div>
                                                    <div class="name">
                                                        <h3>DAVID MADEN</h3>
                                                        <p>Forwarder</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--/item-->

                                </div>

                                <div class="clearfix"></div>
                                <div class="btn-click">
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
                                </div>
                            </div><!--/myCarousel-->

                        </div><!--/well-->   

                    </div>
                </div>
            </div>
        </div>
    </body>

</html>