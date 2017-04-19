<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <?php if (!class_exists( 'lessc')) { include ( './libs/lessc.inc.php'); }
        $less=new lessc;
        $less->compileFile('less/type-323.less', 'css/type-323.css');
        ?>
        <link href="css/type-323.css" rel="stylesheet" type="text/css" /> 
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/circle-progress.min.js" type="text/javascript"></script>
        <title>type-323</title>
    </head>

    <body>
      
        <?php
            include 'type-323.php';
        ?>
        
        <script>
            function toggleIcon(e) {
                $(e.target)
                    .prev('.panel-heading')
                    .find(".more-less")
                    .toggleClass('glyphicon-plus glyphicon-minus');
            }
            $('.panel-group').on('hidden.bs.collapse', toggleIcon);
            $('.panel-group').on('shown.bs.collapse', toggleIcon);
            
            
              $('.second.circle').circleProgress({
                value:0.85,
                size:150,
                fill: { color: '#8abf5b' }
              }).on('circle-animation-progress', function(event, progress) {
                $(this).find('strong').html(Math.round(85 * progress) + '<i>%</i>');
              });
              
              
        </script>
     
    </body>

</html>




