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
    $less->compileFile('less/293.less', 'css/293.css');
    ?>
    <link href="css/293.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div class="type-293">
        <div class="container">
            <div class="row">
                <div class="title" style="margin: 15px;">
                    <h2>Horizontal Process</h2>
                </div>
                <div class="col-md-4 col-xs-12 col-lg-4" style="margin-top: 15px;">
                    <div class="gdlr-process-tab" style="min-height: 200px;">
                        <div class="gdlr-process-icon">
                            <i class="fa fa-rss" aria-hidden="true"></i>
                        </div>
                        <h3>Vehicula Egestas</h3>
                        <p>Qui ipsorum lingua Celtae, nostra Galli appellantur. Paullum deliquit, ponderibus mod lisque suis ratio utitur. Me non paenitet nullum festivior em excog itasse ad hoc.</p>
                    </div>
                </div>

                <div class="col-md-4 col-xs-12 col-lg-4" style="margin-top: 15px;">
                    <div class="gdlr-process-tab" style="min-height: 200px;">
                        <div class="gdlr-process-icon">
                            <i class="fa fa-flag" aria-hidden="true"></i>
                        </div>
                        <h3>Nocturnum Tempor</h3>
                        <p>Qui ipsorum lingua Celtae, nostra Galli appellantur. Paullum deliquit, ponderibus mod lisque suis ratio utitur. Me non paenitet nullum festivior em excog itasse ad hoc.</p>
                    </div>
                </div>

                <div class="col-md-4 col-xs-12 col-lg-4" style="margin-top: 15px;">
                    <div class="gdlr-process-tab" style="min-height: 200px;">
                        <div class="gdlr-process-icon">
                            <i class="fa fa-fire" aria-hidden="true"></i>
                        </div>
                        <h3>Concilium Totius</h3>
                        <p>Qui ipsorum lingua Celtae, nostra Galli appellantur. Paullum deliquit, ponderibus mod lisque suis ratio utitur. Me non paenitet nullum festivior em excog itasse ad hoc.</p>
                    </div>
                </div>

                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default" style="margin: 15px;">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="more-less glyphicon glyphicon-plus"></i>
                                    Get the code
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                [gdlr_process min_height="200px" type="horizontal" ]
                                <br><br>
                                [gdlr_tab icon="icon-rss" title="Vehicula Egestas" ]Qui ipsorum lingua Celtae, nostra Galli appellantur. Paullum deliquit, ponderibus mod lisque suis ratio utitur. Me non paenitet nullum festivior em excog itasse ad hoc.[/gdlr_tab]
                                <br><br>
                                [gdlr_tab icon="icon-flag" title="Nocturnum Tempor" ]Qui ipsorum lingua Celtae, nostra Galli appellantur. Paullum deliquit, ponderibus mod lisque suis ratio utitur. Me non paenitet nullum festivior em excog itasse ad hoc.[/gdlr_tab]
                                <br><br>
                                [gdlr_tab icon="icon-fire" title="Concilium Totius" ]Qui ipsorum lingua Celtae, nostra Galli appellantur. Paullum deliquit, ponderibus mod lisque suis ratio utitur. Me non paenitet nullum festivior em excog itasse ad hoc.[/gdlr_tab]
                                <br><br>
                                [/gdlr_process]
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleIcon(e) {
            $(e.target)
                    .prev('.panel-heading')
                    .find(".more-less")
                    .toggleClass('glyphicon-plus glyphicon-minus');
        }
        $('.panel-group').on('hidden.bs.collapse', toggleIcon);
        $('.panel-group').on('shown.bs.collapse', toggleIcon);
    </script>
</body>