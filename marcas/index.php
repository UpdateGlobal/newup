
<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>New Update</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="DESCRIPCION DEL SITIO" />
      <meta name="keywords" content="PALABRAS CLAVER" />
      <meta name="author" content="luis alberto bernal fuentes" />

        <!-- Facebook and Twitter integration -->
      <meta property="og:title" content=""/>
      <meta property="og:image" content=""/>
      <meta property="og:url" content=""/>
      <meta property="og:site_name" content=""/>
      <meta property="og:description" content=""/>
      <meta name="twitter:title" content="" />
      <meta name="twitter:image" content="" />
      <meta name="twitter:url" content="" />

<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/> 
<link rel="stylesheet" type="text/css" href="css/animate.css">  

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.css">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fira+Sans+Extra+Condensed" rel="stylesheet">
<script src="https://use.fontawesome.com/3c86cf9c2d.js"></script>
  <!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--<link rel="stylesheet" href="css/style.css">-->

<style>
@media only screen and (min-width: 500px) {

/* estas es la version que se vera en moviles*/  

.responform {
  display: none;   !important;
 }
}

@media only screen and (max-width: 499px) {
.responform2 {
  display: none;   !important;
 }
}


.c-test {
  position: absolute: ;
  width: 320px;
  height: 320px;
  margin: 0 auto;
  /*
  display: flex;
  */
  align-items: center;
  justify-content: center;
  transform-style: preserve-3d;
}

  .rotar{
    
   transform: rotate(90deg) scale(3);
   margin-left: 20%;
   color: #50bdbe;
   opacity: 0.2;  
   font-size: 80px;
   padding-left: 15%;
   padding-top: 25%;


  }


  .ba-slider {
  position: relative;
  overflow: hidden;
}
.ba-slider img {
  width: 100%;
  display: block;
}
.resize {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 50%;
  overflow: hidden;
}
.handle {
  /* Thin line seperator */
  position: absolute;
  left: 50%;
  top: 0;
  bottom: 0;
  width: 4px;
  margin-left: -2px;
    background: rgb(81, 189, 190);
  cursor: ew-resize;
}
.handle:after {
  /* Big orange knob  */
  position: absolute;
  top: 50%;
  width: 64px;
  height: 64px;
  margin: -32px 0 0 -30px;
  content: '\21d4';
  color: #51bdbe;
  font-weight: bold;
  font-size: 36px;
  text-align: center;
  line-height: 64px;
  /* darken(@orange, 5%) */
  border-radius: 50%;
  transition: all 0.3s ease;

}
.draggable:after {
  width: 48px;
  height: 48px;
  margin: -24px 0 0 -24px;
  line-height: 48px;
  font-size: 30px;
}

</style>

</head>
<body>
<!--desktop-->
<div class="responform2">

<?php

include('../modulos/menuprincipal.php');

?>

  


  <div class="ba-slider">
    <img src="img/1.1.jpg" alt="">       
    <div class="resize">
      <img src="img/1.2.jpg" alt="">
    </div>
    <span class="handle"></span>
  </div>

        <div class="container dir">
          <div class="row">
                <div class="col s2 animated fadeInLeft">
                   <h1 class="rotar">Marcas</h1>
                </div>
            <div class="col s10">
              <div class="row" style="display: inline-block;">
                               <div class="col s4 c-test js-tilt responsive-img"  style="background-image: url(img/1.jpg); background-repeat: no-repeat;">
                                 
                               </div>
                                <div class="col s8 thin animated fadeInRightBig">
                                  <h5 style=" color: #50bdbe;">Descripcion</h5>
                                  <h5>Empresa</h5>
                                  <span>Conceptualizacion</span>
                                  <p class="thin" style="font-size: 2em;">The first CSS block is similar to the code in Example 1. In addition, we have added what should happen when a user hovers over one of the images.</p>
                                          <div class="chip">
                                            Jane Doe
                                          </div>
                                          <div class="chip">
                                            Jane Doe
                                          </div>
                                          <div class="chip">
                                            Jane Doe
                                          </div>
                                </div>
                          
              </div>
              <div class="row" align="right" style="display: inline-block;">
                                <div class="col s8 thin animated fadeInLeftBig" >
                                  <h5 style=" color: #50bdbe;">Descripcion</h5>
                                  <h5>Empresa</h5>
                                  <span>Conceptualizacion</span>
                                  <p class="thin" style="font-size: 2em;">The first CSS block is similar to the code in Example 1. In addition, we have added what should happen when a user hovers over one of the images.</p>
                                          <div class="chip">
                                            Jane Doe
                                          </div>
                                          <div class="chip">
                                            Jane Doe
                                          </div>
                                          <div class="chip">
                                            Jane Doe
                                          </div>
                                </div>
                                <div class="col s4 c-test js-tilt responsive-img"  style="background-image: url(img/1.jpg); background-repeat: no-repeat; "> 
                                </div>
              </div>
          </div>
        </div>


<style type="text/css">
#padre{

    border-radius: 4px;
    font-size: 120px;
    color: #50bdbe;
    opacity: 0.2;
    margin-bottom: -80px;
    padding-top: 67px;
    margin-left: -72px;
}
</style>

<div style="background-attachment: fixed; background-clip: all; background: "></div>



  <div id="padre">Servicios</div>
    <div id="uno">
      <div class="row">
        <div class="col s4" align="center">
        <blockquote>
          <i class="fa fa-cubes fa-5x" aria-hidden="true"></i>
          <br><br><br>
          This is an example quotation that uses the blockquote tag.
        </blockquote>  
        </div> 
        <div class="col s4" align="center">
        <blockquote>
         <i class="fa fa-line-chart fa-5x" aria-hidden="true"></i>
          <br><br><br>
          This is an example quotation that uses the blockquote tag.
        </blockquote>  
        </div>
        <div class="col s4" align="center">
        <blockquote>
          <i class="fa fa-pied-piper fa-5x" aria-hidden="true"></i>
          <br><br><br>
          This is an example quotation that uses the blockquote tag.
        </blockquote>  
        </div>  
      </div>

    </div>
  </div>

  <div class="row responform2" style="background-color: #51bdbe; margin: 0px; padding-bottom: 4%; padding-top: 4%;">
    <div class="container">
    <p class="thin white-text"> Derechos reservados Desktop</p>
    </div>
  </div>




</div> 
<!--desktop-->

<!--version only movil-->

<style type="text/css">
  
.updateservices{
      margin: 51px -10px 30px;

}

.fa-5x2{
  font-size: 12rem;
}

.titlesmoviles{
    font-size: 40px;
    color: #56bfc0;
    letter-spacing: 15px;
    padding-left: 10px;

}
</style>


        


<?php

include('../modulos/menuprincipal.php');

?>




<div class="row responform" align="left">
  <div class="col">
    <h1 class="thin titlesmoviles">Diseñamos Marcas</h1>
  </div>
</div>


<div class="row responform">
  <div class="col m6 container"><img src="img/1.jpg"></div>
    <div class="col m6 thin animated fadeInLeftBig" >
      <h5 style=" color: #50bdbe;">Descripcion</h5>
        <h5>Empresa</h5>
        <span>Conceptualizacion</span>
        <p class="thin" style="font-size: 2em;">The first CSS block is similar to the code in Example 1. In addition, we have added what should happen when a user hovers over one of the images.</p>
      <div class="chip">
        Jane Doe
      </div>
      <div class="chip">
        Jane Doe
      </div>
      <div class="chip">
        Jane Doe
      </div>
    </div>
  </div>
</div>

<div class="row responform">
  <div class="col m6 container"><img src="img/1.jpg" style="animation-delay: 1s;"></div>
    <div class="col m6 thin animated fadeInRightBig" style="animation-delay: 1s;">
      <h5 style=" color: #50bdbe;">Descripcion</h5>
        <h5>Empresa</h5>
        <span>Conceptualizacion</span>
        <p class="thin" style="font-size: 2em;">The first CSS block is similar to the code in Example 1. In addition, we have added what should happen when a user hovers over one of the images.</p>
      <div class="chip">
        Jane Doe
      </div>
      <div class="chip">
        Jane Doe
      </div>
      <div class="chip">
        Jane Doe
      </div>
    </div>
  </div>
</div>





<div class="row responform" align="left">
<h1 class="thin titlesmoviles">Servicios</h1>
</div>


      
      <div class="row responform">
        <div class="col m4 updateservices" align="center">
          <i class="fa fa-cubes fa-5x2" aria-hidden="true"></i>
          <br><br>
          <h5 class="thin"  >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. </h5>
        </div> 
        <div class="col m4 updateservices" align="center">
         <i class="fa fa-line-chart fa-5x2" aria-hidden="true"></i>
         <br><br>
          <h5 class="thin"  >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. </h5>
        </div>
        <div class="col m4 updateservices" align="center">
          <i class="fa fa-pied-piper fa-5x2" aria-hidden="true"></i>
          <br><br>
           <h5 class="thin"  >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. </h5>
        </div>  
      </div>

    </div>











<div class="row responform" style="background-color: #51bdbe; margin: 0px; padding-bottom: 4%; padding-top: 4%;">
  <div class="container">
  <p class="thin white-text"> Derechos reservados movil</p>
  </div>
</div>





<!--version only movil-->








<!--beforandaftersslider-->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/index.js"></script>
<!--beforandaftersslider-->
<script type="text/javascript" src="js/materialize.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script> 
<script type="text/javascript" src="js/vaiven.js"></script>
<script type="text/javascript" src="js/vaiven2.js"></script>
<script type="text/javascript" src="js/jquery-3.2.1.js"></script>



 <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>


  <script type="text/javascript">
    $(document).ready(function() {
        $('select').material_select();
        $('.slider').slider({
          indicators: false,
          height: 600
        });
        $(".button-collapse").sideNav();

      });
    </script>




</body>
</html>