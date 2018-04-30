<?php include("cms/module/conexion.php"); ?>
<?php $slug = $_REQUEST['slug']; ?>
<?php 
  $consultaNoticias = "SELECT * FROM noticias WHERE slug='$slug'";
  $ejecutarNoticias = mysqli_query($enlaces,$consultaNoticias) or die('Consulta fallida: ' . mysqli_error($enlaces));
  $filaNot = mysqli_fetch_array($ejecutarNoticias);
    $cod_noticia    = $filaNot['cod_noticia'];
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include("modulos/head_blog.php"); ?>
    <?php
      $consultaNoticias = "SELECT * FROM noticias WHERE cod_noticia='$cod_noticia'";
      $ejecutarNoticias = mysqli_query($enlaces,$consultaNoticias) or die('Consulta fallida: ' . mysqli_error($enlaces));
      $filaNot = mysqli_fetch_array($ejecutarNoticias);
        $xImagen   = $filaNot['imagen'];
        $xTitulo_n = $filaNot['titulo'];
        $xNoticia  = strip_tags($filaNot['noticia']);
        $xAutor    = $filaNot['autor'];
        $xFecha    = $filaNot['fecha'];
    ?>
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="<?php echo $xTitulo_n; ?>" />
    <meta property="og:description" content="<?php echo htmlspecialchars($xNoticia); ?>" />
    <meta property="og:image" content="/cms/assets/img/noticias/<?php echo $xImagen; ?>" />
    <meta name="twitter:title" content="<?php echo $xTitulo_n; ?>" />
    <meta name="twitter:image" content="/cms/assets/img/noticias/<?php echo $xImagen; ?>" />
    <?php
       mysqli_free_result($ejecutarNoticias);
    ?>
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
    <!-- {/literal} END JIVOSITE CODE -->
    <div class="parallax-container">
      <div class="parallax"><img src="/img/base-icon.jpg" style=" opacity: 0.5"></div>
      <div class="row" align="center">
        <h1 class="uptext2 gris" style="font-size: 72px; margin-top: 90px;" >Blog de Noticias Update</h1>
      </div>
    </div>
    <!--efectmachiwrite-->
    <?php
      $consultaNoticias = "SELECT * FROM noticias WHERE cod_noticia='$cod_noticia'";
      $ejecutarNoticias = mysqli_query($enlaces,$consultaNoticias) or die('Consulta fallida: ' . mysqli_error($enlaces));
      $filaNot = mysqli_fetch_array($ejecutarNoticias);
        $xTitulo   = $filaNot['titulo'];
        $xAutor    = $filaNot['autor'];
    ?>
    <div style="background-color: #53bcbd; margin-top: 0px;" align="center">
      <div class="row" style="padding: 30px 30px 30px; margin-bottom: 50px;">
        <h2 class="uptext2" style="color: white; font-size: 42px;"><?php echo $xTitulo ?></h2>
        <h2 class="uptextregular">By <?php echo $xAutor; ?></h2>
      </div>
    </div>
    <?php
      mysqli_free_result($ejecutarNoticias);
    ?>
    <!--efectmachiwrite-->
    <div class="container">
      <div class="row">
        <div class="col s12 m3">
          <?php include("modulos/categorias-lista.php"); ?>
        </div>
        <?php
          $consultaNoticias = "SELECT * FROM noticias WHERE cod_noticia='$cod_noticia'";
          $ejecutarNoticias = mysqli_query($enlaces,$consultaNoticias) or die('Consulta fallida: ' . mysqli_error($enlaces));
          $filaNot = mysqli_fetch_array($ejecutarNoticias);
            $xImagen   = $filaNot['imagen'];
            $xTitulo   = $filaNot['titulo'];
            $xNoticia  = $filaNot['noticia'];
            $xAutor    = $filaNot['autor'];
            $xFecha    = $filaNot['fecha']; 
        ?>
        <div class="col s12 m9">
          <div class="row">
            <div class="col s12 m12">
              <div class="card">
                <div class="card-image">
                  <img src="/cms/assets/img/noticias/<?php echo $xImagen; ?>" />
                </div>
                <div class="card-content">
                  <?php echo $xNoticia; ?>
                  <!-- Go to www.addthis.com/dashboard to customize your tools -->
                  <br>
                  <div class="addthis_inline_share_toolbox_5bu0"></div>
                  <div class="card_foo">
                    <span style="float: left;"><?php echo $xFecha; ?></span> <span style="float: right;">BY: <?php echo $xAutor; ?></span>
                  </div>
                  <div class="divider" style="margin-bottom: 20px; margin-top: 20px;"></div>
                  <a href="/blog.php" class="waves-effect waves-light btn"><i class="material-icons left">keyboard_arrow_left</i> Volver</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
          mysqli_free_result($ejecutarNoticias);
        ?>
      </div>
    </div>
    <?php include('modulos/footer.php'); ?>
    <!--Import jQuery before materialize.js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/js/materialize.min.js"></script>
    <script type="text/javascript" src="/js/materialize.js"></script>
    <script  src="/js/index.js"></script><!--slider-->
    <script type="text/javascript">
      $(document).ready(function() {
        $('.parallax').parallax();
      });
    </script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a392b411b1ea275"></script>
  </body>
</html>