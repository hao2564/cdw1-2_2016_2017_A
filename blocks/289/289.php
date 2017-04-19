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
    $less->compileFile('less/289.less', 'css/289.css');
    ?>
    <link href="css/289.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div class="type-289">
        <div class="container">
            <div class="row">
                <h2>icons &amp; icon with boxes</h2> 
                <div class="clear"></div>
                <div class="gdlr-space" style="margin-top: 40px;"></div>
                <div class="col-md-4 col-xs-12 col-lg-4">
                    <div class="gdlr-item gdlr-box-with-icon-item">
                        <i class="fa fa-cogs" aria-hidden="true" style="color:#404040;"></i><br>
                        <h4 class="box-with-icon-title">icon on the top</h4>
                        <div class="clear"></div>
                        <div class="box-with-icon-caption">
                            <p>Curabitur blandit tempus porttitor. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean eu leo quam.&nbsp;</p>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>

                <div class="col-md-4 col-xs-12 col-lg-4">
                    <div class="gdlr-item gdlr-box-with-icon-item">
                        <i class="fa fa-eye" aria-hidden="true" style="color:#404040;"></i><br>
                        <h4 class="box-with-icon-title">icon on the top</h4>
                        <div class="clear"></div>
                        <div class="box-with-icon-caption">
                            <p>Curabitur blandit tempus porttitor. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean eu leo quam.&nbsp;</p>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>

                <div class="col-md-4 col-xs-12 col-lg-4">
                    <div class="gdlr-item gdlr-box-with-icon-item">
                        <i class="fa fa-trophy" aria-hidden="true" style="color:#404040;"></i><br>
                        <h4 class="box-with-icon-title">icon on the top</h4>
                        <div class="clear"></div>
                        <div class="box-with-icon-caption">
                            <p>Curabitur blandit tempus porttitor. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean eu leo quam.&nbsp;</p>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>

                <div class="col-md-6 col-xs-12 col-lg-6">
                    <div class="gdlr-box-with-icon-ux" style="opacity: 1; padding-top: 0px; margin-bottom: 0px;">
                        <div class="gdlr-item gdlr-box-with-icon-item pos-left">
                            <i class="fa fa-files-o" aria-hidden="true" style="color:#4984d5;"></i><br>
                            <h4>icon on the top</h4>
                            <div class="clear"></div>
                            <div class="box-with-icon-caption">
                                <p>Curabitur blandit tempus porjusto odio, dapibus ac facilisis in, egestas eget quam. Aenen eu leo quam. Pellentesque otsem lacinia quam venenatis vestibulum.Donec id elit non mi porta gravida aeget. </p>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="col-md-6 col-xs-12 col-lg-6">
                    <div class="gdlr-box-with-icon-ux" style="opacity: 1; padding-top: 0px; margin-bottom: 0px;">
                        <div class="gdlr-item gdlr-box-with-icon-item pos-left">
                            <i class="fa fa-tachometer" aria-hidden="true" style="color:#d55949;"></i><br>
                            <h4>icon on the top</h4>
                            <div class="clear"></div>
                            <div class="box-with-icon-caption">
                                <p>Curabitur blandit tempus porjusto odio, dapibus ac facilisis in, egestas eget quam. Aenen eu leo quam. Pellentesque otsem lacinia quam venenatis vestibulum.Donec id elit non mi porta gravida aeget. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
</body>