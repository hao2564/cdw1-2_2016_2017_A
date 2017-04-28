<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <?php if (!class_exists( 'lessc')) { include ( './libs/lessc.inc.php'); }
        $less=new lessc;
        $less->compileFile('less/type-324.less', 'css/type-324.css');
        ?>
        <link href="css/type-324.css" rel="stylesheet" type="text/css" /> 
        <link href="css/bootstrap.min.css" rel="stylesheet">    
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
            
        <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>       
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <title>type-324</title>
    </head>

    <body>
      
        <?php
            include 'type-324.php';
        ?>
        
   
     
    </body>

</html>




