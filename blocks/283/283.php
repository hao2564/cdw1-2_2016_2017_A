<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/283.less', 'css/283.css');
    ?>
    <link href="css/283.css" rel="stylesheet" type="text/css" />
</head>

<body>   
    <div class="type-283">
        <div class="container">
            <div class="row"> 
                <div class="gdlr-item-title-head">
                    <h3>Box Style With Carousel</h3>
                    <div id="owl-demo" class="owl-carousel owl-theme">
                        <!--1-->
                        <div class="colum">
                            <div class="background">
                                <div class="item">
                                    <p>
                                        Cum sociis natoque penatus et maed pognis dis parturient montes,
                                        scettur aieo ridiculus mus. Etiam portaem maleyo io suada magna
                                        mollis euismod.
                                    </p>
                                    <span class="name">Ricardo Goff</span>, Lawyer
                                </div>
                            </div>
                            <div class="image">
                                <img src="images/testimonial-12-150x150.jpg" alt=""/>
                            </div>
                        </div>
                        <!--2-->
                        <div class="colum">
                            <div class="background">
                                <div class="item">
                                    <p>
                                        Cum sociis natoque penatus et maed pognis dis parturient montes,
                                        scettur aieo ridiculus mus. Etiam portaem maleyo io suada magna
                                        mollis euismod.
                                    </p>
                                    <span class="name">Jennifer Dawn</span>, Doctor
                                </div>
                            </div>
                            <div class="image">
                                <img src="images/testimonial-22-150x150.jpg" alt=""/>
                            </div>
                        </div>
                        <!--3-->
                        <div class="colum">
                            <div class="background">
                                <div class="item">
                                    <p>
                                        Cum sociis natoque penatus et maed pognis dis parturient montes,
                                        scettur aieo ridiculus mus. Etiam portaem maleyo io suada magna
                                        mollis euismod.
                                    </p>
                                    <span class="name">Paul Smith</span>, Doctor
                                </div>
                            </div>
                            <div class="image">
                                <img src="images/testimonial-32-150x150.jpg" alt=""/>
                            </div>
                        </div>
                        <!--4-->
                        <div class="colum">
                            <div class="background">
                                <div class="item">
                                    <p>
                                        Cum sociis natoque penatus et maed pognis dis parturient montes,
                                        scettur aieo ridiculus mus. Etiam portaem maleyo io suada magna
                                        mollis euismod.
                                    </p>
                                    <span class="name">Alan Christier</span>, Accountant
                                </div>
                            </div>
                            <div class="image">
                                <img src="images/testimonial-42-150x150.jpg" alt=""/>
                            </div>
                        </div>
                        <!--5-->
                        <div class="colum">
                            <div class="background">
                                <div class="item">
                                    <p>
                                        Cum sociis natoque penatus et maed pognis dis parturient montes,
                                        scettur aieo ridiculus mus. Etiam portaem maleyo io suada magna
                                        mollis euismod.
                                    </p>
                                    <span class="name">Joan Coal</span>, Sales Manager
                                </div>
                            </div>
                            <div class="image">
                                <img src="images/testimonial-52-150x150.jpg" alt=""/>
                            </div>
                        </div>
                        <!--6-->
                        <div class="colum">
                            <div class="background">
                                <div class="item">
                                    <p>
                                        Cum sociis natoque penatus et maed pognis dis parturient montes,
                                        scettur aieo ridiculus mus. Etiam portaem maleyo io suada magna
                                        mollis euismod.
                                    </p>
                                    <span class="name">John Dow</span>, Head Chef
                                </div>
                            </div>
                            <div class="image">
                                <img src="images/testimonial-62-150x150.jpg" alt=""/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <script>
        $(document).ready(function () {
            $('#owl-demo').owlCarousel({
                loop: true,
                autoPlay: 3000,
                nav: true,
                navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
                responsive: {
                    0: {
                        items: 1
                    },
                    769: {
                        items: 3
                    }
                }
            })
        });
    </script>
</body>