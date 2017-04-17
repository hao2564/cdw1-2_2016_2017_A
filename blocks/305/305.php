<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script src="css/bootstrap.min.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/305.less', 'css/305.css');
        ?>
        <link href="css/305.css" rel="stylesheet" type="text/css" />


    </head>
    <body>
        <div class="type-305">
            <div class="container-fluid distance">
                <div class="bg">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">PLAYER STATS  |</a></li>
                        <li><a data-toggle="tab" href="#menu1">BIOGRAPHY |</a></li>
                        <li><a data-toggle="tab" href="#menu2"> GALLERY</a></li>
                    </ul>
                </div>


                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <div class="content">
                            <ul>
                                <li>
                                    <span class="soccerhead">DF</span>
                                    <span class="soccertail">POSITION</span>
                                </li>
                                 <li>
                                    <span class="soccerhead">109</span>
                                    <span class="soccertail">GAMES PLAYED</span>
                                </li>
                                 <li>
                                    <span class="soccerhead">2534</span>
                                    <span class="soccertail">MINUTES PLAYED</span>
                                </li>
                                 <li>
                                    <span class="soccerhead">55</span>
                                    <span class="soccertail">STARTS</span>
                                </li>
                                 <li>
                                    <span class="soccerhead">4</span>
                                    <span class="soccertail">SUBSTITUTION ON</span>
                                </li>
                                 <li>
                                    <span class="soccerhead">2</span>
                                    <span class="soccertail">SUBSTITUTION OFF</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <h3>Sollicitudin Commodo Inceptos Ridiculus</h3>
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas faucibus mollis interdum. Cras mattis consectetur purus sit amet fermentum.</p>
                        <p>Cras mattis consectetur purus sit amet fermentum. Etiam porta sem malesuada magna mollis euismod. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed posuere consectetur est at lobortis. Sed posuere consectetur est at lobortis. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <div class="lightbox">
                            <!----yatch--->
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <a  href="#"><img class="thumbnail img-responsive" src="images/yatch.jpg"></a>
                                <span class="text">Yatch</span>
                            </div>
                            <!----run------>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <a  href="#"><img class="thumbnail img-responsive" src="images/run.jpg"></a>
                                <span class="text">Run</span>
                            </div>
                            <!-----resort---->
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <a  href="#"><img class="thumbnail img-responsive" src="images/resort.jpg"></a>
                                <span class="text">Resort</span>
                            </div>
                            <!------goal------>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <a  href="#"><img class="thumbnail img-responsive" src="images/goal.jpg"></a>
                                <span class="text">Goal</span>
                            </div>
                            <!------bike------->
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <a  href="#"><img class="thumbnail img-responsive" src="images/bike.jpg"></a>
                                <span class="text">Bike</span>
                            </div>
                            <!------beach------->
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <a  href="#"><img class="thumbnail img-responsive" src="images/beach.jpg"></a>
                                <span class="text">Beach</span>
                            </div>
                            <!------field-------->
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <a  href="#"><img class="thumbnail img-responsive" src="images/field.jpg"></a>
                                <span class="text">Field</span>
                            </div>
                            <!--------cheers------->
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <a  href="#"><img class="thumbnail img-responsive" src="images/cheers.jpg"></a>
                                <span class="text">Cheers</span>
                            </div>
                            <!--------team----------->
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <a  href="#"><img class="thumbnail img-responsive" src="images/team.jpg"></a>
                                <span class="text">Team</span>
                            </div>
                            <!--------real soccer----------->
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <a  href="#"><img class="thumbnail img-responsive" src="images/realsoccer.jpg"></a>
                                <span class="text">Real soccer</span>
                            </div>
                            <!--------girl----------->

                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <a  href="#"><img class="thumbnail img-responsive" src="images/girl.jpg"></a>
                                <span class="text">Girl</span>
                            </div>
                            <!--------man----------->

                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <a  href="#"><img class="thumbnail img-responsive" src="images/man.jpg"></a>
                                <span class="text">Man</span>
                            </div>
                            <hr>
                            <hr>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>



