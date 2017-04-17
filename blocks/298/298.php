<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <script src = "js/jquery-2.2.4.min.js" type = "text/javascript" ></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />   
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/298.less', 'css/298.css');
        ?>
        <link href="css/298.css" rel="stylesheet" type="text/css" />


    </head>
    <body>
        <div class="type-298">
            <div class="video-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="iconpause">
                                <i class="fa fa-pause" aria-hidden="true"></i>
                                <span class="fix">TOP SOCCERS</span>
                            </div>
                            <!-----thumb----->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="thumb-img">
                                        <img src="images/jonathan.jpg" alt=""/>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="name">
                                        <h4>JONATHAN WEST</h4>
                                        <p>3 Goals</p>
                                    </div>
                                </div>

                                <hr>
                            </div>
                            <div class="clearfix"></div>
                            <!-----thumb----->
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="thumb-img">
                                        <img src="images/luis.jpg" alt=""/>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="name">
                                        <h4>LUIS MIGUEL</h4>
                                        <p>3 Goals</p>
                                    </div>
                                </div>

                                <hr>
                            </div>
                            <!-----thumb----->
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="thumb-img">
                                        <img src="images/edward.jpg" alt=""/>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="name">
                                        <h4>EDWARD SMITH</h4>
                                        <p>3 Goals</p>
                                    </div>
                                </div>

                                <hr>
                            </div>
                            <!-----thumb----->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="thumb-img">
                                        <img src="images/david maden.jpg" alt=""/>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="name">
                                        <h4>ALLAN STINELY</h4>
                                        <p>3 Goals</p>
                                    </div>
                                </div>
                            </div>
                            <!----------->
                        </div>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <div class="iconpause">
                                <i class="fa fa-pause" aria-hidden="true"></i>
                                <span class="fix">FEATURED VIDEO</span>
                            </div>

                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="images/Highlights FC Barcelona vs Real Sociedad (3-2).mp4"></iframe>>
                            </div>
                            <div class="higlight">
                                <h4>Highlight From Last Match</h4>
                            </div>
                        </div><!--.col -->




                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
