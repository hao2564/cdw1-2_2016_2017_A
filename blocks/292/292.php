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
    $less->compileFile('less/292.less', 'css/292.css');
    ?>
    <link href="css/292.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div class="type-292">
        <div class="container">
            <div class="row" style="margin-top: 20px;">
                <div class="col-md-8">
                    <div class="gdlr-blog-full">
                        <a href="#" data-rel="fancybox">
                            <img src="images/1.jpg">
                        </a>		
                        <a href="#"><h1 class="gdlr-blog-title">Eiusmod tempor incidunt</h1></a>
                        <div class="gdlr-blog-info">
                            <div class="blog-info">
                                <i class="fa fa-calendar"></i>
                                <a href="#">03 Dec 2013</a>
                            </div>
                            <div class="blog-info">
                                <i class="fa fa-user"></i>
                                <span class="fn">
                                    <a href="#" rel="author">John Smith</a>
                                </span>
                            </div>
                            <div class="blog-info">
                                <i class="fa fa-folder-o"></i>
                                <a href="#" rel="tag">Fit Row</a>
                                <span class="sep">,</span> 
                                <a href="h#" rel="tag">Life Style</a>
                            </div>
                            <div class="blog-info">
                                <i class="fa fa-comments"></i>
                                <a href="#">3</a>
                            </div>
                            <div class="clear"></div>                                                   
                        </div>
                        <div class="text" style="margin-top: 60px;">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Idque Caesaris facere voluntate liceret: sese habere. Magna pars studiorum, prodita quaerimus. Magna pars studiorum, prodita quaerimus. Fabio vel iudice vincam, sunt in culpa qui officia. Vivamus sagittis lacus vel augue laoreet rutrum faucibus.</p>
                            <p>Nihilne te nocturnum praesidium Palati, nihil urbis vigiliae. Non equidem invideo, miror magis posuere velit aliquet. Qui ipsorum lingua Celtae, nostra Galli appellantur. Prima luce, cum quibus mons aliud consensu ab eo. Petierunt uti sibi concilium totius Galliae in diem certam indicere.</p>
                            <div class="clear"></div>	                       
                        </div>					
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>