<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="css/bootstrap.min.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/308.less', 'css/308.css');
        ?>
        <link href="css/308.css" rel="stylesheet" type="text/css" />


    </head>

    <body>
        <div class="type-308">

            <div class="container">
                <div class="row">
                    <div class="col-md-9">

                        <div class="row">
                            <div class="price-table">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="deluxe">
                                        <h4>Deluxe</h4>
                                    </div>
                                    <div class="price">
                                        $39.99/mo
                                    </div>
                                    <div class="price-content">
                                        <ul>
                                            <li>30 GB</li>
                                            <li>12 Email Accounts</li>
                                            <li>50 GB Bandwidth</li>
                                            <li>Live Chat Support</li>
                                            <li>Enchanced SSL Security</li>
                                        </ul>
                                    </div>
                                    <div class="btn-buy">
                                        <a href="#">Buy Now</a>
                                    </div>
                                </div>
                                <!------prenium-------->

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="distance">
                                        <div class="deluxe1">
                                            <h4>Premium</h4>
                                        </div>
                                        <div class="price1">
                                            $49.99/mo
                                        </div>
                                        <div class="price-content">
                                            <ul>
                                                <li>30 GB</li>
                                                <li>12 Email Accounts</li>
                                                <li>50 GB Bandwidth</li>
                                                <li>Live Chat Support</li>
                                                <li>Enchanced SSL Security</li>
                                            </ul>
                                        </div>
                                        <div class="btn-buy">
                                            <a href="#">Buy Now</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="deluxe">
                                        <h4>Deluxe</h4>
                                    </div>
                                    <div class="price">
                                        $39.99/mo
                                    </div>
                                    <div class="price-content">
                                        <ul>
                                            <li>30 GB</li>
                                            <li>12 Email Accounts</li>
                                            <li>50 GB Bandwidth</li>
                                            <li>Live Chat Support</li>
                                            <li>Enchanced SSL Security</li>
                                        </ul>
                                    </div>
                                    <div class="btn-buy">
                                        <a href="#">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-----get the code----->
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
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
                                        <p>[gdlr_price_table columns="3" ]<br>
                                            [gdlr_tab title="Deluxe" price="$39.99/mo" link="#" ]</p>
                                        <ul>
                                            <li>30 GB</li>
                                            <li>12 Email Accounts</li>
                                            <li>50 GB Bandwidth</li>
                                            <li>Live Chat Support</li>
                                            <li>Enchanced SSL Security</li>
                                        </ul>
                                        <p>[/gdlr_tab]<br>
                                            [gdlr_tab title="Premium" price="$49.99/mo" link="#" active="yes" ]
                                        </p>

                                        <ul>
                                            <li>30 GB</li>
                                            <li>12 Email Accounts</li>
                                            <li>50 GB Bandwidth</li>
                                            <li>Live Chat Support</li>
                                            <li>Enchanced SSL Security</li>
                                        </ul>
                                        <p>[/gdlr_tab]<br>
                                            [/gdlr_price_table]</p>
                                    </div>
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
    function toggleIcon(e) {
        $(e.target)
                .prev('.panel-heading')
                .find(".more-less")
                .toggleClass('glyphicon-plus glyphicon-minus');
    }
    $('.panel-group').on('hidden.bs.collapse', toggleIcon);
    $('.panel-group').on('shown.bs.collapse', toggleIcon);
</script>
