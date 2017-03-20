<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/250.less', 'css/250.css');
    ?>

    <link href="css/250.css" rel="stylesheet" type="text/css"/>

</head>

<body>
    <div class="type-250">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="navbar-header">
                        <small>All rights reserved 2014-by pebas</small>
                    </div>
                </div>
                <div  class="col-md-8">
                    <div class="navbar-menu">
                        <nav class="navbar navbar-default collapsed bottom-nav" role="navigation">
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">					
                                <ul class="nav navbar-nav">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-38 current_page_item menu-item-397"><a title="Home" href="#" class=" active">Home</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-401"><a title="All Shops" href="#">All Shops</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-398"><a title="Top 20" href="#">Top 20</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-395"><a title="Daily Offers" href="#">Daily Offers</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-396"><a title="Expiring" href="#">Expiring</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-399"><a title="Categories" href="#">Categories</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-394"><a title="Contact" href="#">Contact</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-400"><a title="Blog" href="#">Blog</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>