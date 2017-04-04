<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />  
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/259.less', 'css/259.css');
        ?>
        <link href="css/259.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="type-259">
            <section class="blog-home">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="widget right_widget">
                                <div class="blog-inner widget-inner">
                                    <div class="line-divider widget-line-divider"></div>
                                    <div class="caption widget-caption">
                                        <h4>We Have Selected For You</h4>
                                    </div>
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <a href="#"> Test Daily Offer </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget right_widget">
                                <div class="blog-inner widget-inner">
                                    <div class="line-divider widget-line-divider"></div>
                                    <div class="caption widget-caption">
                                        <h4>Popular Shops</h4>
                                    </div>
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <span class="badge">3</span>
                                            <a href="#"> Tobisha </a>
                                        </li>
                                        <li class="list-group-item">
                                            <span class="badge">3</span>
                                            <a href="#"> Silicium </a>
                                        </li>
                                        <li class="list-group-item">
                                            <span class="badge">5</span>
                                            <a href="#"> Cornelius </a>
                                        </li>
                                        <li class="list-group-item">
                                            <span class="badge">1</span>
                                            <a href="#"> Kingsize </a>
                                        </li>
                                        <li class="list-group-item">
                                            <span class="badge">1</span>
                                            <a href="#"> Playfair </a>
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