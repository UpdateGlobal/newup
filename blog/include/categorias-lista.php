<h5 class="regular uptext">Categorias</h5>
<ul class="categorias">
<?php
  $consultarCategoria = "SELECT * FROM noticias_categorias WHERE estado='1' ORDER BY orden";
  $resultadoCategoria = mysqli_query($enlaces,$consultarCategoria) or die('Consulta fallida: ' . mysqli_error($enlaces));
  while($filaCat = mysqli_fetch_array($resultadoCategoria)){
    $xCodigo    = $filaCat['cod_categoria'];
    $xCategoria = $filaCat['categoria'];
    $xSlugc     = $filaCat['slug'];
?>
  <li class="thin spacelist uptext"><a href="categorias.php?cod_categoria=<?php echo $xCodigo; ?>"><?php echo $xCategoria; ?></a></li>
<?php
  }
  mysqli_free_result($resultadoCategoria);
?>
</ul>
<div class="divider"></div>
<h5 class="regular uptext">Tags</h5>
<div class="chip uptext_chip">Webs</div>
<div class="chip uptext_chip">Plataformas</div>
<div class="chip uptext_chip">Redes sociales</div>
<div class="chip uptext_chip">Frontend</div>
<div class="chip uptext_chip">Backend</div>
<div class="chip uptext_chip">Diseño</div>
<div class="chip uptext_chip">Luis</div>
<br><br>