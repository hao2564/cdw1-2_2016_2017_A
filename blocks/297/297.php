<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/297.less', 'css/297.css');
        ?>
        <link href="css/297.css" rel="stylesheet" type="text/css" />


    </head>

    <body>
        <div class="type-297">

            <div class="bg">
                <div class="container">
                    <div class="thumb">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="text">
                                    <span> REAL SOCCER
                                        <img src="images/flag-13.png" alt=""/></span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="result">
                                    <span class="two">2</span>
                                    <span class="line"> - </span>
                                    <span class="one"> 1 </span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <img src="images/flag-19.png" alt=""/>
                                <span class="orange">ORANGE UNITED</span>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="datetime">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <span>15 Jan 2017 - 17:00</span>
                    <span class="location">
                        <i class="fa fa-location-arrow" aria-hidden="true"></i>
                        Real stadium
                    </span>
                </div>
                <div class="view">
                    <a href="#">VIEW MATCH REPORT</a>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="line-top"></div>
            <div class="bg-pink">
                <div class="uping">Upcoming Match</div>
                <div class="team">
                    <img src="images/flag-9.png" alt=""/><span class="soccer">REAL SOCCER</span>
                    <span class="vs">VS</span>
                    <span class="city">HAKWARD CITY</span>
                    <img src="images/flag-1.png" alt=""/>
                </div>
                 <div class="bg-brown">
                <div class="datetime">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <span>15 Jan 2017 - 17:00</span>
                    <span class="location">
                        <i class="fa fa-location-arrow" aria-hidden="true"></i>
                        Real stadium
                    </span>
                </div>
            </div>
            </div>
           
        </div>
    </div>
</body>

</html>