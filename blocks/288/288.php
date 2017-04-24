<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/288.less', 'css/288.css');
    ?>
    <link href="css/288.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div class="type-288">
        <div class="container">
            <div class="row"> 

                <div class="col-md-8 col-xs-12 col-sm-8 col-lg-8">
                    <h2>Without Space Shortcode</h2>
                    <div class="head1">
                        <div class="text">
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras justo odio, daijdnimsaie
                                pibus ac facilisis in, egestas eget quam. Aenean eu leo quam. Pellentesque ornare sem laikume ask
                                cinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue. Fusce dapibusju itmaolie ko
                                tellus ac cursus commodo, tortor mauris condimentum nibh, ut ferment</p>
                        </div>
                        <div class="clearfix"></div>
                        <div class="panel-group" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="glyphicon glyphicon-plus"></i>
                                            Get the code
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        [gdlr_heading tag="h3" size="24px" font_weight="normal"]Without Space Shortcode[/gdlr_heading]
                                        <br><br>
                                        Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras justo odio, daijdnimsaie
                                        pibus ac facilisis in, egestas eget quam. Aenean eu leo quam. Pellentesque ornare sem laikume ask
                                        cinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue. Fusce dapibusju itmaolie ko
                                        tellus ac cursus commodo, tortor mauris condimentum nibh, ut ferment
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   

                <div class="col-md-8 col-xs-12 col-sm-8 col-lg-8">
                    <h2>With Space Shortcode</h2>
                    <div class="head1">
                        <div class="text">
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras justo odio, daijdnimsaie
                                pibus ac facilisis in, egestas eget quam. Aenean eu leo quam. Pellentesque ornare sem laikume ask
                                cinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue. Fusce dapibusju itmaolie ko
                                tellus ac cursus commodo, tortor mauris condimentum nibh, ut ferment</p>
                        </div>
                        <div class="clearfix"></div>
                        <div class="panel-group" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            <i class="glyphicon glyphicon-plus"></i>
                                            Get the code
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        [gdlr_heading tag="h3" size="24px" font_weight="normal"]With Space Shortcode[/gdlr_heading]<br>
                                        [gdlr_space height="50px"]
                                        <br><br>
                                        Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras justo odio, daijdnimsaie
                                        pibus ac facilisis in, egestas eget quam. Aenean eu leo quam. Pellentesque ornare sem laikume ask
                                        cinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue. Fusce dapibusju itmaolie ko
                                        tellus ac cursus commodo, tortor mauris condimentum nibh, ut ferment.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-xs-12 col-sm-8 col-lg-8">
                    <h2>With Minus Space Shortcode</h2>
                    <div class="head1">
                        <div class="text">
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras justo odio, daijdnimsaie
                                pibus ac facilisis in, egestas eget quam. Aenean eu leo quam. Pellentesque ornare sem laikume ask
                                cinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue. Fusce dapibusju itmaolie ko
                                tellus ac cursus commodo, tortor mauris condimentum nibh, ut ferment</p>
                        </div>
                        <div class="clearfix"></div>
                        <div class="panel-group" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                            <i class="glyphicon glyphicon-plus"></i>
                                            Get the code
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        [gdlr_heading tag="h3" size="24px" font_weight="normal"]Without Space Shortcode[/gdlr_heading]<br>
                                        [gdlr_space height="-20px"]
                                        <br><br>
                                        Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras justo odio, daijdnimsaie
                                        pibus ac facilisis in, egestas eget quam. Aenean eu leo quam. Pellentesque ornare sem laikume ask
                                        cinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue. Fusce dapibusju itmaolie ko
                                        tellus ac cursus commodo, tortor mauris condimentum nibh, ut ferment
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleIcon(e) {
            $(e.target)
                    .prev('.panel-heading')
                    .find(".more-less")
                    .toggleClass('glyphicon-plus glyphicon-minus');
        }
        $('.panel-group').on('hidden.bs.collapse', toggleIcon);
        $('.panel-group').on('shown.bs.collapse', toggleIcon);


    </script>
</body>