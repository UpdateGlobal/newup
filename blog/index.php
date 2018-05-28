<?php include("../cms/module/conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include("include/head.php"); ?>
  </head>
  <body>
    <!--Start of Zendesk Chat Script-->
    <script type="text/javascript">
      window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
      d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
      _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
      $.src="https://v2.zopim.com/?5eb2dhLOYkK9hUr7TrwizgJSyPxysQlv";z.t=+new Date;$.
      type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
    </script>
    <!--End of Zendesk Chat Script-->
    <!--menuluis-->
    <style type="text/css">
      .colormenu4{background-color: #4db6ac;}
    </style>
    <ul id="slide-out" class="side-nav">
      <li>
        <script id="bx24_form_inline" data-skip-moving="true">
          (function(w,d,u,b){w['Bitrix24FormObject']=b;w[b] = w[b] || function(){arguments[0].ref=u;
            (w[b].forms=w[b].forms||[]).push(arguments[0])};
            if(w[b]['forms']) return;
            var s=d.createElement('script');s.async=1;s.src=u+'?'+(1*new Date());
            var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
          })(window,document,'https://updatemarketing.bitrix24.es/bitrix/js/crm/form_loader.js','b24form');
                 
          b24form({"id":"8","lang":"la","sec":"82jy61","type":"inline"});
        </script>
      </li>
    </ul>
    <div class="fixed-action-btn vertical click-to-toggle">
      <a class="btn-floating btn-large colormenu1 pulse">
        <i class="large material-icons">apps</i>
      </a>
      <ul>
        <li><a href="#" class="btn-floating colormenu4 tooltipped button-collapse" data-position="left"  data-delay="50" data-tooltip="Contacto" data-activates="slide-out"><i class="material-icons">perm_phone_msg</i></a></li>
        <li><a href="https://api.whatsapp.com/send?phone=0051934244258" class="btn-floating colormenu4 tooltipped" data-position="left"  data-delay="50" data-tooltip="Puedes Escribir por Whatsapp"><img src="img/whatsapp.svg" width="27" style="color: white; padding-top: 6px;"></a></li>
        <li><a href="../webs/index.php" class="btn-floating colormenu4 tooltipped" data-position="left" data-delay="50" data-tooltip="Diseño Web">  <i class="material-icons">desktop_mac</i></a></li>
           <li><a href="../marketing-digital/index.php" class="btn-floating colormenu4 tooltipped" data-position="left" data-delay="50" data-tooltip="Marketing Digital"><i class="material-icons">touch_app</i></a></li>
        <li><a href="marcas/index.php" class="btn-floating colormenu4 tooltipped" data-position="left" data-delay="50" data-tooltip="Desarrollo de Marcas" href=""><i class="material-icons">brush</i></a></li>
        <li><a href="../index.php" class="btn-floating colormenu4 tooltipped" data-position="left"  data-delay="50" data-tooltip="Ir al Inicio"><img src="img/home.svg" width="27" style="color: white; padding-top: 8px;"></a></li>
      </ul>
    </div>
    <!--menuluis-->
    <div class="parallax-container">
      <div class="parallax"><img src="img/base-icon.jpg" style=" opacity: 0.5"></div>
      <div class="row" align="center">
        <h1 class="uptext2 gris" style="font-size: 72px; margin-top: 90px;" >Blog de Noticias Update</h1>
      </div>
    </div>
    <!--efectmachiwrite-->
    <div style="background-color: #53bcbd; margin-top: 0px;" align="center">
      <div class="row" style="padding: 30px 30px 30px; margin-bottom: 50px;">
        <h2 class="uptext2" style="color: white; font-size: 42px;" >Nuestro Blog hay Noticias de: <span class="gris" id="typed"></span></h2>
        <h2 class="uptextregular">Con los más altos estandares</h2>
        <script type="text/javascript">
          $(function(){
            $("#typed").typed({
              strings: ["Tecnología", "Desarrollo", "Robótica", "de cualquier interés", "Páginas Webs"],
              typeSpeed: 30,
              backDelay: 1500,
              loop: true,
              loopCount: false,
              callback: function(){ foo(); }
            });
            function foo(){ console.log("Callback"); }
          });
        </script>
      </div>
    </div>
  <!--efectmachiwrite-->
  <div class="container">
    <div class="row">
      <div class="col s12 m3">
        <?php include("include/categorias-lista.php"); ?>
      </div>
      <div class="col s12 m9">
        <div class="row">
          <?php
            $consultarNoticias = "SELECT * FROM noticias WHERE estado='1'";
            $resultadoNoticias = mysqli_query($enlaces, $consultarNoticias);
            $total_registros = mysqli_num_rows($resultadoNoticias);
            if($total_registros==0){ 
          ?>
            <h2>No hay entradas en nuestro blog, pronto tendremos novedades.</h2>
            <div style="height: 40px;"></div>
          <?php 
            }else{
              $registros_por_paginas = 4;
              $total_paginas = ceil($total_registros/$registros_por_paginas);
              $pagina = intval($_GET['p']);
              if($pagina<1 or $pagina>$total_paginas){
                $pagina=1;
              }
              $posicion = ($pagina-1)*$registros_por_paginas;
              $limite = "LIMIT $posicion, $registros_por_paginas";

              $consultarNoticias = "SELECT * FROM noticias WHERE estado='1' ORDER BY fecha,cod_noticia ASC $limite";
              $resultadoNoticias = mysqli_query($enlaces,$consultarNoticias) or die('Consulta fallida: ' . mysqli_error($enlaces));
              while($filaNot = mysqli_fetch_array($resultadoNoticias)){
                $xCodigo    = $filaNot['cod_noticia'];
                $xTitulo    = $filaNot['titulo'];
                $xImagen    = $filaNot['imagen'];
                $xNoticia   = $filaNot['noticia'];
                $xFecha     = $filaNot['fecha'];
                $xAutor     = $filaNot['autor']; 
                $xSlugn     = $filaNot['slug'];
          ?>
          <div class="col s12 m12 l6 xl6">
            <div class="card">
              <div class="card-image">
                <img src="../cms/assets/img/noticias/<?php echo $xImagen; ?>">
                <a class="btn-floating halfway-fab waves-effect waves-light red" href="post.php?cod_noticia=<?php echo $xCodigo; ?>" target="blank_"><i class="material-icons">add</i></a>
              </div>
              <div class="card-content">
                <span class="card-title uptext"><?php echo $xTitulo; ?></span>
                <div class="card_text" align="justify">
                  <?php
                    $strCut = substr($xNoticia,0,280);
                    $xNoticia = substr($strCut,0,strrpos($strCut, ' ')).'...';
                    echo strip_tags($xNoticia);
                  ?>
                </div>
                <div class="card_foo post-blog-update">
                  <div class="row" style="margin-bottom: 0px;">
                    <div class="col s4 m4 l5 xl5 left-align"><?php echo $xFecha; ?></div>
                    <div class="col s8 m8 l7 xl7 right-align">BY: <?php echo $xAutor; ?></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php 
            }
            mysqli_free_result($resultadoNoticias);
          ?>
        </div>
      </div>
    </div>
      <?php   
        $paginas_mostrar = 10;
        if ($total_paginas>1){
          echo "<div align='center'>
                  <ul class='pagination'>";
          if($pagina>1){
            echo "<li class='waves-effect'><a href='?p=".($pagina-1)."'><i class='material-icons'>chevron_left</i></a></li>";
          }
          for($i=$pagina; $i<=$total_paginas && $i<=($pagina+$paginas_mostrar); $i++){
            if($i==$pagina){
              echo "<li class='active'><a>$i</a></li>";
            }else{
              echo "<li class='waves-effect'><a href='?p=$i'>$i</a></li>";
            }
          }
          if(($pagina+$paginas_mostrar)<$total_paginas){
            echo "<li>...</li>";
          }
          if($pagina<$total_paginas){
            echo "<li class='waves-effect'><a href='?p=".($pagina+1)."'><i class='material-icons'>chevron_right</i></a></li>";
          }
            echo "</ul>
              </div>";
          }
        }
      ?>
  </div>
  <?php include('../modulos/footer.php'); ?>
    <!--contenidoBODY-->
    <!--Import jQuery before materialize.js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script  src="js/index.js"></script><!--slider-->
    <script type="text/javascript">
      $(document).ready(function() {
        $('.parallax').parallax();
        $('.scrollspy').scrollSpy();
        $('.carousel').carousel();
        $('.materialboxed').materialbox();
        $('.modal').modal();
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