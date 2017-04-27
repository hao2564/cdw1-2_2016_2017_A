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
    $less->compileFile('less/282.less', 'css/282.css');
    ?>
    <link href="css/282.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div class="type-282">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                    <h5>Talk to us!</h5>
                    <div class="clear"></div>
                    <div role="form" class="wpcf7" lang="en-US" dir="ltr">
                        <form action="/realsoccer/demo2/contact-page/#wpcf7-f4-o1" method="post" novalidate="novalidate">
                            <div style="display: none;">
                                <input type="hidden" name="_wpcf7" value="4">
                                <input type="hidden" name="_wpcf7_version" value="4.7">
                                <input type="hidden" name="_wpcf7_locale" value="en_US">
                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f4-o1">
                                <input type="hidden" name="_wpnonce" value="e46c5f4e47">
                            </div>
                            <p>Your Name (required)<br>
                                <span class="wpcf7-form-control-wrap">
                                    <input type="text" name="your-name" value="" size="40" aria-required="true" aria-invalid="false"></span> </p>
                            <p>Your Email (required)<br>
                                <span class="wpcf7-form-control-wrap">
                                    <input type="email" name="your-email" value="" size="40" aria-required="true" aria-invalid="false"></span> </p>
                            <p>Subject<br>
                                <span class="wpcf7-form-control-wrap">
                                    <input type="text" name="your-subject" value="" size="40" aria-invalid="false"></span> </p>
                            <p>Your Message<br>
                                <span class="wpcf7-form-control-wrap">
                                    <textarea name="your-message" cols="40" rows="10" aria-invalid="false"></textarea></span> </p>
                            <p><input type="submit" value="Send"> </p>
                        </form>                             
                    </div>
                </div>

                <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                    <div class="widget gdlr-widget">
                        <h3 class="gdlr-widget-title">Before Contacting Us</h3>
                        <div class="clear"></div>			
                        <div>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Non equidem invideo, miror magis posuere velit aliquet.</div>
                    </div>
                    <div class="widget gdlr-widget">
                        <h3 class="gdlr-widget-title">Contact Information</h3>
                        <div class="clear"></div>			
                        <p>184 Main Collins Street West Victoria 8007 Australia</p>
                        <p><i class="fa fa-phone" aria-hidden="true" style="color: #444444; font-size: 16px; "></i> 1800-222-222</p>
                        <p><i class="fa fa-envelope" aria-hidden="true" style="color: #444444; font-size: 16px; "></i> contact@versatilewptheme.com</p>
                        <p><i class="fa fa-clock-o" aria-hidden="true" style="color: #444444; font-size: 16px; "></i> Everyday 9:00-17:00</p>
                    </div>
                    <div class="widget gdlr-widget">
                        <h3 class="gdlr-widget-title">Social Media</h3>
                        <div class="clear"></div>			
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true" style="color: #444444; font-size: 28px; "></i></a> 
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true" style="color: #444444; font-size: 28px; "></i></a> 
                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true" style="color: #444444; font-size: 28px; "></i></a> 
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true" style="color: #444444; font-size: 28px; "></i></a> 
                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true" style="color: #444444; font-size: 28px; "></i></a> 
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true" style="color: #444444; font-size: 28px; "></i></a>
                    </div>	
                </div>
            </div>
        </div>
    </div>
</body>