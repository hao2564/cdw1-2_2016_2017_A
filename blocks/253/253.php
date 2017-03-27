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
    $less->compileFile('less/253.less', 'css/253.css');
    ?>
    <link href="css/253.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div class="type-253">
        <section class="categories">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="caption category-caption">
                            <h2>General Categories</h2>
                            <div class="line-divider">
                                <span class="line-mask green-bg"></span>
                            </div>
                        </div>
                    </div>
                    <div class="category-row col-md-12">
                        <div class="row">						
                            <div class="special-item col-md-3">
                                <a href="#">
                                    <div class="special-item-inner">
                                        <div class="special-icon">
                                            <span class="fa fa-child"></span>
                                            <h3>Baby</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="special-item col-md-3">
                                <a href="#">
                                    <div class="special-item-inner">
                                        <div class="special-icon">
                                            <span class="fa fa-book"></span>
                                            <h3>Books &amp; Movies</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="special-item col-md-3">
                                <a href="#">
                                    <div class="special-item-inner">
                                        <div class="special-icon">
                                            <span class="fa fa-car"></span>
                                            <h3>Cars</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="special-item col-md-3">
                                <a href="#">
                                    <div class="special-item-inner">
                                        <div class="special-icon">
                                            <span class="fa fa-music"></span>
                                            <h3>Music</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="category-row col-md-12">
                        <div class="row">
                            <div class="special-item col-md-3">
                                <a href="#">
                                    <div class="special-item-inner">
                                        <div class="special-icon">
                                            <span class="fa fa-paw"></span>
                                            <h3>Pet Care</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="special-item col-md-3">
                                <a href="#">
                                    <div class="special-item-inner">
                                        <div class="special-icon">
                                            <span class="fa fa-plane"></span>
                                            <h3>Travel</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>