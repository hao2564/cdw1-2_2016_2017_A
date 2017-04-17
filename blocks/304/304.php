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
        $less->compileFile('less/304.less', 'css/304.css');
        ?>
        <link href="css/304.css" rel="stylesheet" type="text/css" />


    </head>
    <body>
        <div class="type-304">
            <div class="wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="progess">
                                <h2>    
                                    Skills & Progress Bar
                                </h2>
                            </div>
                            <div class="small">
                                <h3>Small Style</h3>
                            </div>
                            <div class="skillbar" data-percent="70%">
                                <div class="skillbar-title">Photoshop</div>
                                <div class="skillbar-bar photoshop"></div>
                            </div>

                            <div class="skillbar" data-percent="85%">
                                <div class="skillbar-title">Illustrator
                                </div>
                                <div class="skillbar-bar iilus"></div>
                            </div>

                            <div class="skillbar" data-percent="55%">
                                <div class="skillbar-title">HTML/CSS</div>
                                <div class="skillbar-bar ht"></div>
                            </div>
                            <!---------------get the code------------------->
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                <span class="glyphicon glyphicon-plus"></span>
                                                Get the code
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>[gdlr_skill_bar percent="70" size="small" text_color="#333333" background_color="#e9e9e9" </p>
                                            <p>progress_color="#a9e16e"]Photoshop[/gdlr_skill_bar]</p>
                                            <p>[gdlr_skill_bar percent="85" size="small" text_color="#333333" background_color="#e9e9e9" </p>
                                            <p>progress_color="#56d0d4"]Illustrator[/gdlr_skill_bar]</p>
                                            <p>[gdlr_skill_bar percent="55" size="small" text_color="#333333" background_color="#e9e9e9" </p>
                                            <p>progress_color="#da6545"]HTML/CSS[/gdlr_skill_bar]</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-------------------------->
                    </div>

                </div>
            </div>
        </div>

    </body>
</html>
<script>
    jQuery(document).ready(function () {
        jQuery('.skillbar').each(function () {
            jQuery(this).find('.skillbar-bar').animate({
                width: jQuery(this).attr('data-percent')
            }, 100);
        });
    });
</script>
