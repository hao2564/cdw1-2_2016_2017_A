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
        <section class="blog-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="post col-md-12">
                                <div class="blog-inner">
                                    <div class="post-image">
                                        <img width="848" height="530" src="images/Fotolia_12377076_XXL2-848x530.jpg" class="listing-blog-wull-width img-responsive wp-post-image">								
                                    </div>
                                    <div class="blog-post-content blog-single-content">
                                        <div class="item-meta blog-meta">
                                            <ul class="list-inline">
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="fa fa-clock-o"></span>June 19, 2015</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="fa fa-user"></span>admin</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="fa fa-bars"></span>
                                                    </a>
                                                    <a href="#">Discounts</a> 										</li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="fa fa-comment"></span>1</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="caption blog-caption">
                                            <h3>Lorem ipsum dolor sit amet.</h3>
                                        </div>
                                        <div class="text main_content">
                                            <p>Lorem ipsum dolor sit consectetur adiscipit</p>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                            <div class="item-meta blog-meta meta-tags">
                                                <ul class="list-inline">
                                                    <li>
                                                        <span class="fa fa-tags"></span>
                                                    </li>
                                                    <li>
                                                        <a href="#">amet consect</a></li>, 
                                                    <li>
                                                        <a href="#">dolor</a></li>, 
                                                    <li>
                                                        <a href="#">ipsum</a></li>, 
                                                    <li>
                                                        <a href="#">lorem</a></li>, 
                                                    <li>
                                                        <a href="#">sit</a></li>										</ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>