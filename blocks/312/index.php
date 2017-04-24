<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">     
        <?php
        if (!class_exists('lessc')) {
            include ( './libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-312.less', 'css/type-312.css');
        ?>
        <link href="css/type-312.css" rel="stylesheet" type="text/css" /> 
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>        

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    </head>

    <body>

<?php
include 'type-312.php';
?>
        <script>
            $(document).ready(function () {
                $('#owl-demo').owlCarousel({
                    loop: true,
                    autoPlay: 500,
                    nav: true,
                    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 2
                        },
                        1000: {
                            items: 3
                        }
                    }
                })
            });
        </script>


    </body>

</html>




