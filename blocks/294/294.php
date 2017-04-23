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
    $less->compileFile('less/294.less', 'css/294.css');
    ?>
    <link href="css/294.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div class="type-294">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="gdlr-post-author">
                        <h3>About Post Author</h3>
                        <div class="post-author-avartar">
                            <img src="images/1.png" class="photo" height="90" width="90" style="opacity: 1;">
                        </div>
                        <h4 class="post-author">
                            <a href="#" rel="author">John Smith</a>
                        </h4>
                        Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                        <div class="clear"></div>
                    </div>
                    <div id="comments" class="gdlr-comments-area">
                        <h3 class="comments-title">
                            3 Responses	</h3>
                        <ol class="commentlist">
                            <li class="comment even">
                                <article class="comment-article">
                                    <div class="comment-avatar">
                                        <img src="images/2.png" class="photo" height="60" width="60" style="opacity: 1;">
                                    </div>
                                    <div class="comment-author">John Doe</div>
                                    <div class="comment-time">
                                        <i class="fa fa-clock-o"></i>
                                        <a href="#">
                                            <time datetime="2013-12-03T19:25:04+00:00">
                                                December 3, 2013 at 7:25 pm						
                                            </time>
                                        </a>
                                    </div>
                                    <div class="comment-reply">
                                        <i class="fa fa-mail-reply"></i>
                                        <a href="#" onclick="return addComment.moveForm( & quot; comment - 13 & quot; , & quot; 13 & quot; , & quot; respond & quot; , & quot; 858 & quot; )" aria-label="Reply to John Doe">Reply</a>			
                                    </div>
                                    <section class="comment-content">
                                        <p>Ipsum Portalion</p>
                                    </section>
                                </article>

                                <ol class="children">
                                    <li class="comment odd alt">
                                        <article class="comment-article">
                                            <div class="comment-avatar">
                                                <img src="images/2.png" class="photo" height="60" width="60" style="opacity: 1;">
                                            </div>
                                            <div class="comment-author">John Doe</div>
                                            <div class="comment-time">
                                                <i class="fa fa-clock-o"></i>
                                                <a href="#">
                                                    <time datetime="2013-12-03T19:25:32+00:00">
                                                        December 3, 2013 at 7:25 pm						
                                                    </time>
                                                </a>
                                            </div>
                                            <div class="comment-reply">
                                                <i class="fa fa-mail-reply"></i>
                                                <a href="#" onclick="return addComment.moveForm( & quot; comment - 15 & quot; , & quot; 15 & quot; , & quot; respond & quot; , & quot; 858 & quot; )" aria-label="Reply to John Doe">Reply</a>			
                                            </div>
                                            <section class="comment-content">
                                                <p>egestas eget</p>
                                            </section>
                                        </article>
                                    </li>
                                </ol>
                            </li>

                            <li class="comment even">
                                <article class="comment-article">
                                    <div class="comment-avatar">
                                        <img src="images/2.png" class="photo" height="60" width="60" style="opacity: 1;">
                                    </div>
                                    <div class="comment-author">John Doe</div>
                                    <div class="comment-time">
                                        <i class="fa fa-clock-o"></i>
                                        <a href="#">
                                            <time datetime="2013-12-03T19:25:20+00:00">
                                                December 3, 2013 at 7:25 pm						
                                            </time>
                                        </a>
                                    </div>
                                    <div class="comment-reply">
                                        <i class="fa fa-mail-reply"></i>
                                        <a href="#" onclick="return addComment.moveForm( & quot; comment - 14 & quot; , & quot; 14 & quot; , & quot; respond & quot; , & quot; 858 & quot; )" aria-label="Reply to John Doe">Reply</a>			
                                    </div>					
                                    <section class="comment-content">
                                        <p>dapibus ac facilisis</p>
                                    </section>
                                </article>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>