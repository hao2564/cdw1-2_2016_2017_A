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
        $less->compileFile('less/258.less', 'css/258.css');
        ?>
        <link href="css/258.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
        <div class="type-258">
            <section class="blog-home">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="widget right_widget">
                                <div class="blog-inner widget-inner">
                                    <div class="line-divider widget-line-divider">
                                    </div>
                                    <div class="caption widget-caption">
                                        <h4>Search Blog</h4>
                                    </div>
                                    <form role="search" method="get" id="searchform" class="searchform form-control-custom" action="#">
                                        <div>
                                            <input type="text" value="" name="s" id="s" placeholder="Search...">
                                            <input type="submit" id="searchsubmit" value="Search">
                                        </div>
                                        <input type="hidden" value="1" name="captcha">
                                    </form>
                                </div>
                            </div>
                            <div class="widget right_widget">
                                <div class="blog-inner widget-inner">
                                    <div class="line-divider widget-line-divider">                   
                                    </div>
                                    <div class="caption widget-caption">
                                        <h4>Archives</h4>
                                    </div>		
                                    <ul>
                                        <li>
                                            <a href="#">June 2015</a>
                                        </li>
                                        <li>
                                            <a href="#">June 2014</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget right_widget">
                                <div class="blog-inner widget-inner">
                                    <div class="line-divider widget-line-divider">
                                    </div>
                                    <div class="caption widget-caption">
                                        <h4>Coupon Categories</h4>
                                    </div>
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <span class="badge">2</span>
                                            <a href="#"> Computers </a>
                                        </li>
                                        <li class="list-group-item">
                                            <span class="badge">1</span>
                                            <a href="#"> House </a>
                                        </li>
                                        <li class="list-group-item">
                                            <span class="badge">1</span>
                                            <a href="#"> Photography </a>
                                        </li>
                                        <li class="list-group-item">
                                            <span class="badge">1</span>
                                            <a href="#"> Students </a>
                                        </li>
                                        <li class="list-group-item">
                                            <span class="badge">2</span>
                                            <a href="#"> Technology </a>
                                        </li>
                                        <li class="list-group-item">
                                            <span class="badge">2</span>
                                            <a href="#"> Baby </a>
                                        </li>
                                        <li class="list-group-item">
                                            <span class="badge">1</span>
                                            <a href="#"> Books &amp; Movies </a>
                                        </li>
                                        <li class="list-group-item">
                                            <span class="badge">2</span>
                                            <a href="#"> Cars </a>
                                        </li>
                                        <li class="list-group-item">
                                            <span class="badge">3</span>
                                            <a href="#"> Music </a>
                                        </li>
                                        <li class="list-group-item">
                                            <span class="badge">1</span>
                                            <a href="#"> Pet Care </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>		
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>