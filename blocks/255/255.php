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
        $less->compileFile('less/255.less', 'css/255.css');
        ?>
        <link href="css/255.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="type-255">
            <section class="all_shops">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="caption category-caption ">
                                <h2>All Shops</h2>
                                <p></p>
                                <div class="line-divider">
                                    <span class="line-mask green-bg"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 main_content"></div>
                    </div>
                </div>

                <div class="shop-filter">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="list-unstyled list-inline">
                                    <li>
                                        <a href="#A">A</a>
                                    </li>
                                    <li>
                                        <a href="#B">B</a>
                                    </li>
                                    <li>
                                        <a href="#C">C</a>
                                    </li>
                                    <li>
                                        <a href="#K">K</a>
                                    </li>
                                    <li>
                                        <a href="#P">P</a>
                                    </li>
                                    <li>
                                        <a href="#R">R</a></li>
                                    <li>
                                        <a href="#S">S</a>
                                    </li>
                                    <li>
                                        <a href="#T">T</a>
                                    </li>					
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="body-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="single-letter">
                                    <a href="#" name="A"></a>
                                    <h3>A</h3>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="single-letter-list">
                                    <ul>
                                        <li><a href="#">Adibbas</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-letter-list">
                                    <ul>
                                        <li>
                                            <a href="#">Arabesk</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-letter-list">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-letter-list">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="to-top">
                                    <a href="#" class="pull-right">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">

                                <div class="single-letter">
                                    <a href="#" name="B"></a>
                                    <h3>B</h3>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- 1 -->
                            <div class="col-md-3">
                                <div class="single-letter-list">
                                    <ul>
                                        <li><a href="#">Big</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-letter-list">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-letter-list">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-letter-list">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="to-top">
                                    <a href="#" class="pull-right">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="single-letter">
                                    <a href="#" name="C"></a>
                                    <h3>C</h3>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="single-letter-list">
                                    <ul>
                                        <li><a href="#">Cornelius</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-letter-list">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-letter-list">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-letter-list">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="to-top">
                                    <a href="#" class="pull-right">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">

                                <div class="single-letter">
                                    <a href="#" name="K"></a>
                                    <h3>K</h3>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="single-letter-list">
                                    <ul>
                                        <li><a href="#">Kingsize</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-letter-list">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-letter-list">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-letter-list">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="to-top">
                                    <a href="#" class="pull-right">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="single-letter">
                                    <a href="#" name="P"></a>
                                    <h3>P</h3>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <!-- 1 -->
                            <div class="col-md-3">
                                <div class="single-letter-list">
                                    <ul>
                                        <li><a href="#">Playfair</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-letter-list">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-letter-list">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-letter-list">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="to-top">
                                    <a href="#" class="pull-right">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="single-letter">
                                    <a href="#" name="R"></a>
                                    <h3>R</h3>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <!-- 1 -->
                            <div class="col-md-3">
                                <div class="single-letter-list">
                                    <ul>
                                        <li><a href="#">Reepook</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-letter-list">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-letter-list">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-letter-list">
                                    <ul>

                                    </ul>
                                </div>
                            </div>                       
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="to-top">
                                    <a href="#" class="pull-right">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="single-letter">
                                    <a href="#" name="S"></a>
                                    <h3>S</h3>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="single-letter-list">
                                    <ul>
                                        <li><a href="#">Silicium</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-letter-list">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-letter-list">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-letter-list">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="to-top">
                                    <a href="#" class="pull-right">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="single-letter">
                                    <a href="#" name="T"></a>
                                    <h3>T</h3>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="single-letter-list">
                                    <ul>
                                        <li><a href="#">Tobisha</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-letter-list">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-letter-list">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-letter-list">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="to-top">
                                    <a href="#" class="pull-right">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                        </div>		
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>