 <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>New Update</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="" />
      <meta name="keywords" content="" />
      <meta name="author" content="" />

        <!-- Facebook and Twitter integration -->
      <meta property="og:title" content=""/>
      <meta property="og:image" content=""/>
      <meta property="og:url" content=""/>
      <meta property="og:site_name" content=""/>
      <meta property="og:description" content=""/>
      <meta name="twitter:title" content="" />
      <meta name="twitter:image" content="" />
      <meta name="twitter:url" content="" />
      
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/flaticon.css"> 
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" type="text/css" href="css/responsive.css">
    </head>

    <body>
<!--menuTop-->
<div class="navbar-fixed">
 <nav>
      <a href="#" class="brand-logo"><img src="img/log1.png" class="responsive-img" width="32%" style="left: 20px;" id=""></a>
  </nav>
</div>

<video class="responsive-video" autoplay="  " loop="loop" style="width: 100%; height: 80%; margin-top: -62px;">
  <source src="sliderfinal01.mp4" type="video/mp4">
</video>

<!--botonndownrigth-->
<?php

include ('modulos/menuprincipal.php');

?>
<!--botonndownrigth-->


      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
      <script type="text/javascript" src="js/materialize.js"></script>

      <script type="text/javascript">
         $(document).ready(function(){
          $('.slider').slider({
            effect: 'random',
           // setTimeout: 1000;
            interval: 4000,
            indicators: false,
            autoplay: true,
            transition: 500
          });

 

    $('.tooltipped').tooltip({delay: 0});
      $(".button-collapse").sideNav();
   
    });
      </script>
    </body>
  </html>