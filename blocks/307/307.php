<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>
        <script src="css/bootstrap.min.js" type="text/javascript"></script>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/307.less', 'css/307.css');
        ?>
        <link href="css/307.css" rel="stylesheet" type="text/css" />


    </head>

    <body>
        <div class="type-307">
            <div class="container">

                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">ALL  |</a></li>
                    <li><a data-toggle="tab" href="#menu1">WEBSITE |</a></li>
                    <li><a data-toggle="tab" href="#menu2"> LOGO |</a></li>
                    <li><a data-toggle="tab" href="#menu3"> TYPOGRAPHY</a></li>
                </ul>

                <div class="tab-content">
                    <!----All-------->
                    <div id="home" class="tab-pane fade in active">
                        <div class="row">
                            <div class="lightbox">
                                <!----thumb nail open lightbox--->
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="overlay">
                                        <a  href="#"><img class="thumbnail img-responsive" src="images/1.jpg"></a>
                                        <div class="text">thumb nail open lightbox</div>
                                        <div class="text-thumb thumbnail">
                                            <i class="fa fa-search icon" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Click me"></i>
                                        </div>
                                    </div>
                                </div>
                                <!----thumb nail open lightbox--->
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="overlay">
                                        <a  href="#"><img class="thumbnail img-responsive" src="images/clothes.jpg"></a>
                                        <div class="text">thumb nail link to post</div>
                                        <div class="text-thumb thumbnail">
                                            <i class="fa fa-search icon" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Click me"></i>
                                        </div>
                                    </div>
                                </div>
                                <!----thumb nail open lightbox--->
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="overlay">
                                        <a  href="#"><img class="thumbnail img-responsive" src="images/grass.jpg"></a>
                                        <div class="text">open video lightbox</div>
                                        <div class="text-thumb thumbnail">
                                            <i class="fa fa-video-camera icon" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Click me"></i>
                                        </div>
                                    </div>
                                </div>
                                <!------Sliveshow------>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="owl-carousel owl-theme">
                                        <div class="item">
                                            <img src="images/roc.jpg" alt=""/>
                                        </div>
                                        <div class="item">
                                            <img src="images/kable.jpg" alt=""/>
                                        </div>
                                    </div>
                                    <div class="text">thumb nail link to post</div>
                                </div>
                            </div>
                            <div tabindex="-1" class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button class="close" type="button" data-dismiss="modal">×</button>
                                        </div>
                                        <div class="modal-body">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---Clear Fix----------->
                        <div class="clearfix"></div>
                        <!----thumb nail open lightbox--->
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="overlay">
                                    <a  href="#"><img class="thumbnail img-responsive" src="images/roc.jpg"></a>
                                    <div class="text">open video lightbox</div>
                                    <div class="text-thumb thumbnail">
                                        <i class="fa fa-video-camera icon" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Click me"></i>
                                    </div>
                                </div>
                            </div>
                            <!--thumb nail open lightbox-->
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="overlay">
                                    <a  href="#"><img class="thumbnail img-responsive" src="images/clothes.jpg"></a>
                                    <div class="text">thumb nail link to post</div>
                                    <div class="text-thumb thumbnail">
                                        <i class="fa fa-search icon" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Click me"></i>
                                    </div>
                                </div>
                            </div>
                            <!--thumb nail open lightbox-->
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="overlay">
                                    <a  href="#"><img class="thumbnail img-responsive" src="images/football.jpg"></a>
                                    <div class="text">thumb nail link to post</div>
                                    <div class="text-thumb thumbnail">
                                        <i class="fa fa-search icon" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Click me"></i>
                                    </div>
                                </div>
                            </div>
                            <!--thumb nail open lightbox--->
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="overlay">
                                    <a  href="#"><img class="thumbnail img-responsive" src="images/shoes.jpg"></a>
                                    <div class="text">thumb nail link to post</div>
                                    <div class="text-thumb thumbnail">
                                        <i class="fa fa-search icon" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Click me"></i>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!----thumb nail open lightbox--->
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="overlay">
                                    <a  href="#"><img class="thumbnail img-responsive" src="images/house.jpg"></a>
                                    <div class="text">open video lightbox</div>
                                    <div class="text-thumb thumbnail">
                                        <i class="fa fa-video-camera icon" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Click me"></i>
                                    </div>
                                </div>
                            </div>
                            <!----thumb nail open lightbox--->
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="overlay">
                                    <a  href="#"><img class="thumbnail img-responsive" src="images/brige.jpg"></a>
                                    <div class="text">thumb nail link to post</div>
                                    <div class="text-thumb thumbnail">
                                        <i class="fa fa-search icon" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Click me"></i>
                                    </div>
                                </div>
                            </div>
                            <!----thumb nail open lightbox--->
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="overlay">
                                    <a  href="#"><img class="thumbnail img-responsive" src="images/roc.jpg"></a>
                                    <div class="text">thumb nail link to post</div>
                                    <div class="text-thumb thumbnail">
                                        <i class="fa fa-search icon" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Click me"></i>
                                    </div>
                                </div>
                            </div>
                            <!----thumb nail open lightbox--->
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="overlay">
                                    <a  href="#"><img class="thumbnail img-responsive" src="images/football1.jpg"></a>
                                    <div class="text">thumb nail link to post</div>
                                    <div class="text-thumb thumbnail">
                                        <i class="fa fa-search icon" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Click me"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-----Website------->
                    <div id="menu1" class="tab-pane fade">
                      <div class="row">
                            <div class="lightbox">
                                <!----thumb nail open lightbox--->
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="overlay">
                                        <a  href="#"><img class="img-responsive" src="images/1.jpg"></a>
                                        <div class="text">thumb nail open lightbox</div>
                                        <div class="text-thumb">
                                            <i class="fa fa-search icon" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <!----thumb nail open lightbox--->
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="overlay">
                                        <a  href="#"><img class="img-responsive" src="images/shoes.jpg"></a>
                                        <div class="text">thumb nail link to post</div>
                                        <div class="text-thumb">
                                            <i class="fa fa-search icon" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <!----thumb nail open lightbox--->
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="overlay">
                                        <a  href="#"><img class="img-responsive" src="images/football.jpg"></a>
                                        <div class="text">open video lightbox</div>
                                        <div class="text-thumb">
                                            <i class="fa fa-video-camera icon" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <!------Sliveshow------>
                                
                            </div>

                        </div>

                    </div>
                    <!---------Logo--------->
                    <div id="menu2" class="tab-pane fade">
                        <div class="row">
                            <div class="lightbox">
                                <!----thumb nail open lightbox--->
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="overlay">
                                        <a  href="#"><img class=" img-responsive" src="images/1.jpg"></a>
                                        <div class="text">thumb nail open lightbox</div>
                                        <div class="text-thumb">
                                            <i class="fa fa-search icon" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <!----thumb nail open lightbox--->
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="overlay">
                                        <a  href="#"><img class=" img-responsive" src="images/clothes.jpg"></a>
                                        <div class="text">thumb nail link to post</div>
                                        <div class="text-thumb">
                                            <i class="fa fa-search icon" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <!----thumb nail open lightbox--->
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="overlay">
                                        <a  href="#"><img class=" img-responsive" src="images/grass.jpg"></a>
                                        <div class="text">open video lightbox</div>
                                        <div class="text-thumb">
                                            <i class="fa fa-video-camera icon" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <!------Sliveshow------>
                               
                            </div>

                        </div>

                    </div>
                    <!---------TYPOGRAPHY-------------->
                    <div id="menu3" class="tab-pane fade">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="overlay">
                                    <a  href="#"><img class=" img-responsive" src="images/house.jpg"></a>
                                    <div class="text">thumb nail open lightbox</div>
                                    <div class="text-thumb">
                                        <i class="fa fa-search icon" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <!---------thum-------->
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="overlay">
                                    <a  href="#"><img class=" img-responsive" src="images/brige.jpg"></a>
                                    <div class="text">thumb nail open lightbox</div>
                                    <div class="text-thumb">
                                        <i class="fa fa-search icon" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<script>
    $(document).ready(function () {
        $('.thumbnail').click(function () {
            $('.modal-body').empty();
            var title = $(this).parent('a').attr("title");
            $('.modal-title').html(title);
            $($(this).parents('div').html()).appendTo('.modal-body');
            $('#myModal').modal({show: true});
        });
    });
</script>

<script>
    $(document).ready(function () {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
            margin: 10,
            nav: true,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    })
</script>
<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>