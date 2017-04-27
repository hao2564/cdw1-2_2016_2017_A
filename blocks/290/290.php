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
    $less->compileFile('less/290.less', 'css/290.css');
    ?>
    <link href="css/290.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div class="type-290">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-not-found-block">
                        <div class="page-not-found-icon">
                            <i class="fa fa-frown-o" aria-hidden="true"></i>
                        </div>
                        <div class="page-not-found-title">
                            Error 404				
                        </div>
                        <div class="page-not-found-caption">
                            Sorry, we couldn't find the page you're looking for.				
                        </div>
                        <div class="page-not-found-search">
                            <div class="gdl-search-form">
                                <form method="get" id="searchform" action="#">
                                    <div class="search-text" id="search-text">
                                        <input type="text" name="s" id="s" autocomplete="off" placeholder="Type keywords...">
                                        <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    </div>                                 
                                    <div class="clear"></div>
                                </form>
                            </div>				
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</body>