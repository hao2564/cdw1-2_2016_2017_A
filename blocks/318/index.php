<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <?php if (!class_exists( 'lessc')) { include ( './libs/lessc.inc.php'); }
        $less=new lessc;
        $less->compileFile('less/type-318.less', 'css/type-318.css');
        ?>
        <script src="js/scripts.js" type="text/javascript"></script>
        <link href="css/type-318.css" rel="stylesheet" type="text/css" /> 
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>      
             
        <title>type-317</title>
    </head>

    <body>
      
        <?php
            include 'type-318.php';
        ?>
        <script>
            $(".tab_content").hide();
             $(".tab_content:first").show();

           /* if in tab mode */
             $("ul.tabs li").click(function() {

               $(".tab_content").hide();
               var activeTab = $(this).attr("rel"); 
               $("#"+activeTab).fadeIn();		

               $("ul.tabs li").removeClass("active");
               $(this).addClass("active");

                   $(".tab_drawer_heading").removeClass("d_active");
                   $(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");

             });
                 /* if in drawer mode */
                 $(".tab_drawer_heading").click(function() {

               $(".tab_content").hide();
               var d_activeTab = $(this).attr("rel"); 
               $("#"+d_activeTab).fadeIn();

                   $(".tab_drawer_heading").removeClass("d_active");
               $(this).addClass("d_active");

                   $("ul.tabs li").removeClass("active");
                   $("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
             });

	
	/* Extra class "tab_last" 
	   to add border to right side
	   of last tab */
	$('ul.tabs li').last().addClass("tab_last");
	
        
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

</html>




