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



<style type="text/css">
  

  @media only screen and (min-width: 720px) {
.less {
  display: none;   !important;
 }
}
@media only screen and (max-width: 720px) {
.less2 {
  display: none;   !important;
 }
}
</style>

<body>

  <video class="responsive-video less2" autoplay="" muted="" loop="loop" style="width: 100%; height: 80%; margin-top: 0px; color-interpolation: ">
    <source src="sliderfinal01.mp4" type="video/mp4">
  </video>

    <video class="responsive-video less" autoplay="" muted="" loop="loop">
      <source src="slider-responsive.mp4" type="video/mp4">
    </video>


    <?php
        include ('modulos/menuprincipal.php');
    ?>

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



<div class="row" align="left">
  <div class="col m12 s12">
    
      <!-- BEGIN JIVOSITE CODE {literal} -->
      <script type='text/javascript'>
      (function(){ var widget_id = 'h1kdq1YcU2';var d=document;var w=window;function l(){
      var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
      <!-- {/literal} END JIVOSITE CODE -->

  </div>
</div>




    </body>
  </html>