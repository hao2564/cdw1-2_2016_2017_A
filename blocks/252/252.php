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
    $less->compileFile('less/252.less', 'css/252.css');
    ?>
    <link href="css/252.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div class="type-252">
        <section class="categories">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="caption category-caption">
                            <h2>Extra Categories</h2>
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
                                            <span class="fa fa-laptop"></span>
                                            <h3>Computers</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="special-item col-md-3">
                                <a href="#">
                                    <div class="special-item-inner">
                                        <div class="special-icon">
                                            <span class="fa fa-home"></span>
                                            <h3>House</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="special-item col-md-3">
                                <a href="#">
                                    <div class="special-item-inner">
                                        <div class="special-icon">
                                            <span class="fa fa-picture-o"></span>
                                            <h3>Photography</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="special-item col-md-3">
                                <a href="#">
                                    <div class="special-item-inner">
                                        <div class="special-icon">
                                            <span class="fa fa-users"></span>
                                            <h3>Students</h3>
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
                                            <span class="fa fa-scissors"></span>
                                            <h3>Technology</h3>
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