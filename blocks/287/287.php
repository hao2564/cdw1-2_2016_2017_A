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
    $less->compileFile('less/287.less', 'css/287.css');
    ?>
    <link href="css/287.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div class="type-287">
        <div class="container">
            <div class="row">             
                <h3>Personnel Box Style</h3>
                <div class="gdlr-space" style="margin-top: 30px;"></div>
                <div class="clear"></div>
                <div class="gdlr-space" style="margin-top: 60px;"></div>
                <div class="clear"></div>

                <div class="col-md-4">
                    <div class="gdlr-personnel-item box-style">
                        <div class="gdlr-ux" style="opacity: 1; padding-top: 0px; margin-bottom: 0px;">
                            <div class="personnel-item">
                                <div class="personnel-item-inner">
                                    <div class="personnel-author-image">
                                        <img src="images/1.jpg">
                                    </div>
                                    <div class="personnel-info">
                                        <div class="personnel-author"> 
                                            <a href="#">Rebecca Smith</a>
                                        </div>
                                        <div class="personnel-position">Web Developer</div>                                              
                                    </div>
                                    <div class="personnel-content">
                                        <div class="text">
                                            <p>Curabitur blandit tempus porttitor. Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec ullamcorper nulla non metus auctor.</p>
                                        </div>
                                        <div class="link">
                                            <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="gdlr-personnel-item box-style">
                        <div class="gdlr-ux" style="opacity: 1; padding-top: 0px; margin-bottom: 0px;">
                            <div class="personnel-item">
                                <div class="personnel-item-inner">
                                    <div class="personnel-author-image">
                                        <img src="images/2.jpg">
                                    </div>
                                    <div class="personnel-info">
                                        <div class="personnel-author"> 
                                            <a href="#">Jack Slayer</a>
                                        </div>
                                        <div class="personnel-position">C.E.O</div>                                              
                                    </div>
                                    <div class="personnel-content">
                                        <div class="text">
                                            <p>Curabitur blandit tempus porttitor. Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec ullamcorper nulla non metus auctor.</p>
                                        </div>
                                        <div class="link">
                                            <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="gdlr-personnel-item box-style">
                        <div class="gdlr-ux" style="opacity: 1; padding-top: 0px; margin-bottom: 0px;">
                            <div class="personnel-item">
                                <div class="personnel-item-inner">
                                    <div class="personnel-author-image">
                                        <img src="images/3.jpg">
                                    </div>
                                    <div class="personnel-info">
                                        <div class="personnel-author"> 
                                            <a href="#">John Looper</a>
                                        </div>
                                        <div class="personnel-position">General Manager</div>                                              
                                    </div>
                                    <div class="personnel-content">
                                        <div class="text">
                                            <p>Curabitur blandit tempus porttitor. Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec ullamcorper nulla non metus auctor.</p>
                                        </div>
                                        <div class="link">
                                            <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>