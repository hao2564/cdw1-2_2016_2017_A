<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">       
        <?php if (!class_exists( 'lessc')) { include ( './libs/lessc.inc.php'); }
        $less=new lessc;
        $less->compileFile('less/type-271.less', 'css/type-271.css');
        ?>      
        <link href="css/type-271.css" rel="stylesheet" type="text/css" /> 
        <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">   
        <title>type-271</title>
    </head>

    <body>
        <?php
            include 'type-271.php';
        ?>
       
     
    </body>

</html>




