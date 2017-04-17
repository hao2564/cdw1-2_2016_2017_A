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
    $less->compileFile('less/285.less', 'css/285.css');
    ?>
    <link href="css/285.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div class="type-285">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12 col-sm-6">
                    <div class="gdlr-item gdlr-content-item" style="margin-bottom: 60px;">
                        <p></p>
                        <div class="clear"></div>
                        <div class="gdlr-space" style="margin-top: -22px;"></div>
                        <h5 class="gdlr-heading-shortcode" style="font-weight: bold;">Talk to us!</h5>
                        <div class="clear"></div>
                        <div class="gdlr-space" style="margin-top: 45px;"></div>
                        <div role="form" class="wpcf7" id="wpcf7-f4-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <form action="/realsoccer/demo2/contact-page/#wpcf7-f4-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                                <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="4">
                                    <input type="hidden" name="_wpcf7_version" value="4.7">
                                    <input type="hidden" name="_wpcf7_locale" value="en_US">
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f4-o1">
                                    <input type="hidden" name="_wpnonce" value="e46c5f4e47">
                                </div>
                                <p>Your Name (required)<br>
                                    <span class="wpcf7-form-control-wrap your-name">
                                        <input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </p>
                                <p>Your Email (required)<br>
                                    <span class="wpcf7-form-control-wrap your-email">
                                        <input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span> </p>
                                <p>Subject<br>
                                    <span class="wpcf7-form-control-wrap your-subject">
                                        <input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"></span> </p>
                                <p>Your Message<br>
                                    <span class="wpcf7-form-control-wrap your-message">
                                        <textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </p>
                                <p><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span></p>
                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                            </form>                             
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xs-12 col-sm-6">
                    <div class="gdlr-item-start-content sidebar-right-item">
                        <div id="text-6" class="widget widget_text gdlr-item gdlr-widget">
                            <h3 class="gdlr-widget-title">Before Contacting Us</h3>
                            <div class="clear"></div>			
                            <div class="textwidget">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Non equidem invideo, miror magis posuere velit aliquet.</div>
                        </div>
                        <div id="text-7" class="widget widget_text gdlr-item gdlr-widget">
                            <h3 class="gdlr-widget-title">Contact Information</h3>
                            <div class="clear"></div>			
                            <div class="textwidget">
                                <p>184 Main Collins Street West Victoria 8007 Australia</p>
                                <p><i class="fa fa-phone" aria-hidden="true" style="color: #444444; font-size: 16px; "></i> 1800-222-222</p>
                                <p><i class="fa fa-envelope" aria-hidden="true" style="color: #444444; font-size: 16px; "></i> contact@versatilewptheme.com</p>
                                <p><i class="fa fa-clock-o" aria-hidden="true" style="color: #444444; font-size: 16px; "></i> Everyday 9:00-17:00</p>
                            </div>
                        </div>
                        <div id="text-8" class="widget widget_text gdlr-item gdlr-widget">
                            <h3 class="gdlr-widget-title">Social Media</h3><div class="clear"></div>			
                            <div class="textwidget">
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
        </div>
    </div>
</body>