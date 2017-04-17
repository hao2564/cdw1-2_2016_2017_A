
<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/300.less', 'css/300.css');
        ?>
        <link href="css/300.css" rel="stylesheet" type="text/css" />

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    </head>

    <body>   
        <div class="type-300">
            <div class="container">
                <div class="row">                                      

                    <div id="owl-demo" class="owl-carousel owl-theme">
                        <div class="bg">
                            <div class="item">
                                <p>
                                    Cum sociis natoque penatus et maed pognis dis parturient montes,
                                    scettur aieo ridiculus mus. Etiam portaem maleyo io suada magna
                                    mollis euismod.
                                </p>
                                <span class="nick-name">John Dow</span>,Head Chef

                            </div>
                            <div class="image">
                                <img src="images/testimonial-32-150x150.jpg" alt=""/>
                            </div>
                        </div>
                        <div class="bg">
                            <div class="item">  
                                <p>
                                    Cum sociis natoque penatus et maed pognis dis parturient montes,
                                    scettur aieo ridiculus mus. Etiam portaem maleyo io suada magna mollis euismod.
                                </p>
                                <span class="nick-name">Paul Smith</span>,Doctor
                                <div class="image">
                                    <img src="images/doctor.jpg" alt=""/>
                                </div>
                            </div>
                        </div>
                       <div class="bg">
                            <div class="item">  
                                <p>
                                    Cum sociis natoque penatus et maed pognis dis parturient montes,
                                    scettur aieo ridiculus mus. Etiam portaem maleyo io suada magna mollis euismod.
                                </p>
                                <span class="nick-name">John Dow</span>,Head Chef
                                <div class="image">
                                    <img src="images/cheft.jpg" alt=""/>
                                </div>
                            </div>
                        </div>
                        <div class="bg">
                            <div class="item">  
                                <p>
                                    Cum sociis natoque penatus et maed pognis dis parturient montes,
                                    scettur aieo ridiculus mus. Etiam portaem maleyo io suada magna mollis euismod.
                                </p>
                                <span class="nick-name">Ricardo goff</span>,Layers
                                <div class="image">
                                    <img src="images/testimonial-32-150x150.jpg" alt=""/>
                                </div>
                            </div>
                        </div>
                        <div class="bg">
                            <div class="item">  
                                <p>
                                    Cum sociis natoque penatus et maed pognis dis parturient montes,
                                    scettur aieo ridiculus mus. Etiam portaem maleyo io suada magna mollis euismod.
                                </p>
                                <span class="nick-name">Joan Coal</span>,Managers
                                <div class="image">
                                    <img src="images/manager.jpg" alt=""/>
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
</html>