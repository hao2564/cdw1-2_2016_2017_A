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
        $less->compileFile('less/295.less', 'css/295.css');
        ?>
        <link href="css/295.css" rel="stylesheet" type="text/css" />


    </head>
    <body>
        <div class="type-lightbox">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 icon-pause">
                        <span> 
                            <i class="fa fa-pause" aria-hidden="true"></i>
                            GALLERY 4 COLUMNS WITH CAPTION
                        </span> 
                    </div>

                    <div class="lightbox">
                        <!----yatch--->
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                            <a  href="#"><img class="thumbnail img-responsive" src="images/yatch.jpg"></a>
                            <span class="text">Yatch</span>
                        </div>
                        <!----run------>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                            <a  href="#"><img class="thumbnail img-responsive" src="images/run.jpg"></a>
                            <span class="text">Run</span>
                        </div>
                        <!-----resort---->
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                            <a  href="#"><img class="thumbnail img-responsive" src="images/resort.jpg"></a>
                            <span class="text">Resort</span>
                        </div>
                        <!------goal------>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                            <a  href="#"><img class="thumbnail img-responsive" src="images/goal.jpg"></a>
                            <span class="text">Goal</span>
                        </div>
                        <!------bike------->
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                            <a  href="#"><img class="thumbnail img-responsive" src="images/bike.jpg"></a>
                            <span class="text">Bike</span>
                        </div>
                        <!------beach------->
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                            <a  href="#"><img class="thumbnail img-responsive" src="images/beach.jpg"></a>
                            <span class="text">Beach</span>
                        </div>
                        <!------field-------->
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                            <a  href="#"><img class="thumbnail img-responsive" src="images/field.jpg"></a>
                            <span class="text">Field</span>
                        </div>
                        <!--------cheers------->
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                            <a  href="#"><img class="thumbnail img-responsive" src="images/cheers.jpg"></a>
                            <span class="text">Cheers</span>
                        </div>
                        <!--------team----------->
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                            <a  href="#"><img class="thumbnail img-responsive" src="images/team.jpg"></a>
                            <span class="text">Team</span>
                        </div>
                        <!--------real soccer----------->
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                            <a  href="#"><img class="thumbnail img-responsive" src="images/realsoccer.jpg"></a>
                            <span class="text">Real soccer</span>
                        </div>
                        <!--------girl----------->

                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                            <a  href="#"><img class="thumbnail img-responsive" src="images/girl.jpg"></a>
                            <span class="text">Girl</span>
                        </div>
                        <!--------man----------->

                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                            <a  href="#"><img class="thumbnail img-responsive" src="images/man.jpg"></a>
                            <span class="text">Man</span>
                        </div>
                        <hr>
                        <hr>

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
