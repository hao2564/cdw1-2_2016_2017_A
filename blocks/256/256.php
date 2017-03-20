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
        $less->compileFile('less/256.less', 'css/256.css');
        ?>
        <link href="css/256.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
        <div class="type-256">
            <section class="contact">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="caption category-caption">
                                <h2>Contact</h2>
                                <p></p>
                                <div class="line-divider">
                                    <span class="line-mask green-bg"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="register clearfix">

                                        <!-- title -->
                                        <div class="caption contact-caption">
                                            <h2>
                                                <span class="green"><i class="fa fa-envelope-o"></i>
                                                </span>Send Us A Mesage</h2>
                                        </div>
                                        <!-- .title -->

                                        <!-- form -->
                                        <div class="form register-form">
                                            <div class="send_result"></div>
                                            <form action="" method="" class="contact_form">
                                                <fieldset>
                                                    <div class="form-group">
                                                        <label>Your name</label>
                                                        <input type="text" class="form-control form-control-custom" name="name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Your email</label>
                                                        <input type="email" class="form-control form-control-custom" name="email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Subject</label>
                                                        <input type="text" class="form-control form-control-custom" name="subject">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Message</label>
                                                        <textarea class="form-control form-control-custom message-control" name="message"></textarea>
                                                    </div>
                                                    <div class="clearfix">
                                                        <button type="button" class="btn btn-custom btn-default send_contact">Send Message</button>
                                                    </div>
                                                </fieldset>
                                                <input type="hidden" value="1" name="captcha"></form>
                                        </div>
                                        <!-- .form -->
                                    </div>
                                </div>

                                <div class="col-md-6 main_content">
                                    <h3 style="text-align: left;"><strong>Lorem ipsum dolor sit</strong></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, dolorum, placeat, pariatur fugit earum ex quidem esse mollitia maiores similique dicta quas hic delectus numquam aspernatur aperiam suscipit doloribus sint autem sequi eligendi tempora temporibus ad blanditiis debitis atque perspiciatis.</p>
                                    <h3 style="text-align: left;"><strong>Lorem ipsum dolor sit</strong></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, dolorum, placeat, pariatur fugit earum ex quidem esse mollitia maiores similique dicta quas hic delectus numquam aspernatur aperiam suscipit doloribus sint autem sequi eligendi tempora temporibus ad blanditiis debitis atque perspiciatis.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, inventore laboriosam at error veniam ducimus commodi eius sint unde voluptate.</p>
                                    <p>Our address:</p>
                                    <p>E-mail:info@gmail.com</p>
                                    <p>Phone:+(000)111-222-444</p>
                                    <p>Fax:+(000)111-222-333</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>

