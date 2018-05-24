<?php include("cms/module/conexion.php"); ?>
<?php include("modules/session-core.php"); ?>
<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8"> <![endif]-->
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html> <!--<![endif]-->
    <head>
        <?php include("includes/head.php"); ?>
        <style id="custom-style">
        </style>
    </head>
    <body>
        <div id="wrapper">
            <?php include("includes/header.php"); ?>
            <section id="content">
            	<div id="slider-rev-container">
                    <div id="slider-rev">
                        <ul>
                            <?php
                                $consultarBanner = "SELECT * FROM banners WHERE estado='1' ORDER BY orden";
                                $resultadoBanner = mysqli_query($enlaces,$consultarBanner) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                while($filaBan = mysqli_fetch_array($resultadoBanner)){
                                    $xCodigo    = $filaBan['cod_banner'];
                                    $xImagen    = $filaBan['imagen'];
                                    $xLink      = $filaBan['link'];
                                    $xTitulo    = $filaBan['titulo'];
                                    $xTexto     = $filaBan['texto'];
                            ?>
                            <li data-transition="random" data-slotamount="10" data-masterspeed="400" data-saveperformance="on" data-title="<?php echo $xTitulo; ?>">
                                <img src="images/revslider/dummy.png" alt="slidebg2" data-lazyload="cms/assets/img/banner/<?php echo $xImagen; ?>" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                                <div class="tp-mask-wrap" data-x="700" data-y="200" data-speed="600" data-start="700" data-easing="Power3.easeIn" data-endspeed="300"></div>
                                <div class="tp-caption rev-text sfl stl" data-x="720" data-y="190" data-speed="800" data-start="1100" data-easing="Power3.easeIn" data-endspeed="300" style="background-color: rgba(0, 0, 0, 0.5); padding: 8px; color: #fff;"><span class="tp-caption rev-title" style="color: #f1ce9e;"><?php echo $xTitulo; ?></span><br><br><?php echo $xTexto; ?></div>
                                <div class="tp-caption sfb stb" data-x="720" data-y="400" data-speed="1200" data-start="2000" data-easing="Power3.easeIn" data-endspeed="300">
                                    <a href="<?php echo $xLink; ?>" class="btn btn-custom-2">Ver m&aacute;s</a>
                                </div>
                            </li>
                            <?php
                                }
                                mysqli_free_result($resultadoBanner);
                            ?>
                        </ul>
                    </div><!-- End #slider-rev -->
                </div><!-- End #slider-rev-container -->
                
                <div class="xlg-margin"></div><!-- Space -->

            	<div class="container">
            		<div class="row">
            			<div class="col-md-12">
            				
            				<div class="row">
            					
            					<div class="col-md-12 col-sm-12 col-xs-12 main-content">
                                    <div class="row home-banners">
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <a href="#"><img src="images/quemono001.jpg" alt="Home Big Banner 1" class="img-responsive"></a>
                                        </div><!-- End .col-md-4 -->
                                        
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <a href="#"><img src="images/quemono002.jpg" alt="Home Big Banner 2" class="img-responsive"></a>
                                        </div><!-- End .col-md-4 -->

                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <a href="#"><img src="images/quemono001.jpg" alt="Home Big Banner 2" class="img-responsive"></a>
                                        </div><!-- End .col-md-4 -->
                                    </div><!-- End .home-banners -->

                                    <div class="lg-margin"></div><!-- space -->

                                    <div class="latest-items carousel-wrapper">
                                        <header class="content-title">
                                            <div class="title-bg">
                                                <h2 class="title">Novedades</h2>
                                            </div><!-- End .title-bg -->
                                            <p class="title-desc">Suspendisse quis diam congue, pharetra tortor in, lobortis diam.</p>
                                        </header>

                                        <div class="carousel-controls">
                                            <div id="latest-items-slider-prev" class="carousel-btn carousel-btn-prev"></div><!-- End .carousel-prev -->
                                            <div id="latest-items-slider-next" class="carousel-btn carousel-btn-next carousel-space"></div><!-- End .carousel-next -->
                                        </div><!-- End .carousel-controls -->

                                        <div class="latest-items-slider owl-carousel">
                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="#">
                                                            <img src="images/item4.jpg" alt="item1" class="item-image">
                                                            <img src="images/item4.jpg" alt="item1  Hover" class="item-image-hover">
                                                        </a>
                                                    </figure>
                                                    <div class="item-price-container">
                                                        <span class="item-price">$120<span class="sub-price">.99</span></span>
                                                    </div><!-- End .item-price-container -->
                                                    <span class="new-rect">Nuevo</span>
                                                </div><!-- End .item-image-wrapper -->
                                                <div class="item-meta-container">
                                                    <h3 class="item-name"><a href="#">Phasellus consequat</a></h3>
                                                    <div class="item-action">
                                                        <a href="#" class="item-add-btn">
                                                            <span class="icon-cart-text"><i class="fa fa-shopping-cart" aria-hidden="true"></i> A&ntilde;adir</span>
                                                        </a>
                                                    </div><!-- End .item-action -->
                                                </div><!-- End .item-meta-container --> 
                                            </div><!-- End .item -->

                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="#">
                                                            <img src="images/item1.jpg" alt="item1" class="item-image">
                                                            <img src="images/item1.jpg" alt="item1  Hover" class="item-image-hover">
                                                        </a>
                                                    </figure>
                                                    <div class="item-price-container">
                                                        <span class="item-price">$60</span>
                                                    </div><!-- End .item-price-container -->
                                                </div><!-- End .item-image-wrapper -->
                                                <div class="item-meta-container">
                                                    <h3 class="item-name"><a href="#">Phasellus consequat</a></h3>
                                                    <div class="item-action">
                                                        <a href="#" class="item-add-btn">
                                                            <span class="icon-cart-text"><i class="fa fa-shopping-cart" aria-hidden="true"></i> A&ntilde;adir</span>
                                                        </a>
                                                    </div><!-- End .item-action -->
                                                </div><!-- End .item-meta-container --> 
                                            </div><!-- End .item -->

                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="#">
                                                            <img src="images/item2.jpg" alt="item1" class="item-image">
                                                            <img src="images/item2.jpg" alt="item1  Hover" class="item-image-hover">
                                                        </a>
                                                    </figure>
                                                    <div class="item-price-container">
                                                        <span class="old-price">$108</span>
                                                        <span class="item-price">$72</span>
                                                    </div><!-- End .item-price-container -->
                                                    <span class="discount-rect">-25%</span>
                                                </div><!-- End .item-image-wrapper -->
                                                <div class="item-meta-container">
                                                    <h3 class="item-name"><a href="#">Phasellus consequat</a></h3>
                                                    <div class="item-action">
                                                        <a href="#" class="item-add-btn">
                                                            <span class="icon-cart-text"><i class="fa fa-shopping-cart" aria-hidden="true"></i> A&ntilde;adir</span>
                                                        </a>
                                                    </div><!-- End .item-action -->
                                                </div><!-- End .item-meta-container --> 
                                            </div><!-- End .item -->

                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="#">
                                                            <img src="images/item3.jpg" alt="item1" class="item-image">
                                                            <img src="images/item3.jpg" alt="item1  Hover" class="item-image-hover">
                                                        </a>
                                                    </figure>
                                                    <div class="item-price-container">
                                                        <span class="item-price">$99</span>
                                                    </div><!-- End .item-price-container -->
                                                    <span class="new-rect">Nuevo</span>
                                                </div><!-- End .item-image-wrapper -->
                                                <div class="item-meta-container">
                                                    <h3 class="item-name"><a href="#">Phasellus consequat</a></h3>
                                                    <div class="item-action">
                                                        <a href="#" class="item-add-btn">
                                                            <span class="icon-cart-text"><i class="fa fa-shopping-cart" aria-hidden="true"></i> A&ntilde;adir</span>
                                                        </a>
                                                    </div><!-- End .item-action -->
                                                </div><!-- End .item-meta-container -->
                                            </div><!-- End .item -->

                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="#">
                                                            <img src="images/item5.jpg" alt="item1" class="item-image">
                                                            <img src="images/item5.jpg" alt="item1  Hover" class="item-image-hover">
                                                        </a>
                                                    </figure>
                                                    <div class="item-price-container">
                                                        <span class="item-price">$280</span>
                                                    </div><!-- End .item-price-container -->
                                                </div><!-- End .item-image-wrapper -->
                                                <div class="item-meta-container">
                                                    <h3 class="item-name"><a href="#">Phasellus consequat</a></h3>
                                                    <div class="item-action">
                                                        <a href="#" class="item-add-btn">
                                                            <span class="icon-cart-text"><i class="fa fa-shopping-cart" aria-hidden="true"></i> A&ntilde;adir</span>
                                                        </a>
                                                    </div><!-- End .item-action -->
                                                </div><!-- End .item-meta-container --> 
                                            </div><!-- End .item -->

                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="#">
                                                            <img src="images/item1.jpg" alt="item1" class="item-image">
                                                            <img src="images/item1.jpg" alt="item1  Hover" class="item-image-hover">
                                                        </a>
                                                    </figure>
                                                    <div class="item-price-container">
                                                        <span class="item-price">$280</span>
                                                    </div><!-- End .item-price-container -->
                                                </div><!-- End .item-image-wrapper -->
                                                <div class="item-meta-container">
                                                    <h3 class="item-name"><a href="#">Phasellus consequat</a></h3>
                                                    <div class="item-action">
                                                        <a href="#" class="item-add-btn">
                                                            <span class="icon-cart-text"><i class="fa fa-shopping-cart" aria-hidden="true"></i> A&ntilde;adir</span>
                                                        </a>
                                                    </div><!-- End .item-action -->
                                                </div><!-- End .item-meta-container --> 
                                            </div><!-- End .item -->
                                        </div><!--latest-items-slider -->
                                    </div><!-- End .latest-items -->

            						<div class="lg-margin"></div><!-- Space -->

    								<div class="row">
    									<div class="col-md-6 col-sm-6 col-xs-12">
                                            <header class="content-title">
                                                <h2 class="title">Bienvenido a Quemono</h2>
                                            </header>
    										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis diam congue, pharetra tortor in, lobortis diam. Pellentesque consequat, neque ut mattis scelerisque, nisi ligula ultrices sapien, nec blandit ante odio quis odio. In lorem ante, accumsan vitae faucibus eget, egestas non erat. Praesent id interdum felis. Praesent efficitur bibendum ex eget elementum.</p>
                                            <p>Fusce malesuada neque in purus lacinia imperdiet. Vivamus eget tincidunt velit. Suspendisse ligula erat, molestie et consectetur eget, bibendum nec enim. Aliquam luctus tempor arcu ut ultrices. Nam tincidunt venenatis pellentesque. Nulla facilisi. Morbi sed lorem laoreet, scelerisque lacus eget, congue tortor. <a href="#"><strong>[+] Ver M&aacute;s</strong></a></p>
    									</div><!-- End .col-md-6 -->
    									<div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="sm-margin visible-xs"></div><!-- space -->
    										<img src="images/nosotros.jpg" alt="Showcase Venedor" class="img-responsive">
    									</div><!-- End .col-md-5 -->
    								</div><!-- End .row -->

            						<div class="xlg-margin"></div><!-- Space -->
            						
            						<div class="hot-items carousel-wrapper">
            							<header class="content-title">
    										<div class="title-bg">
    											<h2 class="title">En Venta</h2>
    										</div><!-- End .title-bg -->
    										<p class="title-desc">Suspendisse quis diam congue, pharetra tortor in.</p>
    									</header>

                                    <div class="carousel-controls">
                                        <div id="hot-items-slider-prev" class="carousel-btn carousel-btn-prev">
                                        </div><!-- End .carousel-prev -->
                                        <div id="hot-items-slider-next" class="carousel-btn carousel-btn-next carousel-space">
                                        </div><!-- End .carousel-next -->
                                    </div><!-- End .carousel-controls -->

            						<div class="hot-items-slider owl-carousel">
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container">
                                                    <a href="#">
                                                        <img src="images/item1.jpg" alt="item1" class="item-image">
                                                        <img src="images/item1.jpg" alt="item1  Hover" class="item-image-hover">
                                                    </a>
                                                </figure>
                                                <div class="item-price-container">
                                                    <span class="item-price">$280</span>
                                                </div><!-- End .item-price-container -->
                                            </div><!-- End .item-image-wrapper -->
                                            <div class="item-meta-container">
                                                <h3 class="item-name"><a href="#">Phasellus consequat</a></h3>
                                                <div class="item-action">
                                                    <a href="#" class="item-add-btn">
                                                        <span class="icon-cart-text"><i class="fa fa-shopping-cart" aria-hidden="true"></i> A&ntilde;adir</span>
                                                    </a>
                                                </div><!-- End .item-action -->
                                            </div><!-- End .item-meta-container --> 
                                        </div><!-- End .item -->
            							<div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container">
                                                    <a href="#">
                                                        <img src="images/item2.jpg" alt="item1" class="item-image">
                                                        <img src="images/item2.jpg" alt="item1  Hover" class="item-image-hover">
                                                    </a>
                                                </figure>
                                                <div class="item-price-container">
                                                    <span class="item-price">$160<span class="sub-price">.99</span></span>
                                                </div><!-- End .item-price-container -->
                                                <span class="new-rect">Nuevo</span>
                                            </div><!-- End .item-image-wrapper -->
                                            <div class="item-meta-container">
                                                <h3 class="item-name"><a href="#">Phasellus consequat</a></h3>
                                                <div class="item-action">
                                                    <a href="#" class="item-add-btn">
                                                        <span class="icon-cart-text"><i class="fa fa-shopping-cart" aria-hidden="true"></i> A&ntilde;adir</span>
                                                    </a>
                                                </div><!-- End .item-action -->
                                            </div><!-- End .item-meta-container --> 
                                        </div><!-- End .item -->

    									<div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container">
                                                    <a href="#">
                                                        <img src="images/item3.jpg" alt="item1" class="item-image">
                                                        <img src="images/item3.jpg" alt="item1  Hover" class="item-image-hover">
                                                    </a>
                                                </figure>
                                                <div class="item-price-container">
                                                    <span class="item-price">$100</span>
                                                </div><!-- End .item-price-container -->
                                                <span class="new-rect">Nuevo</span>
                                            </div><!-- End .item-image-wrapper -->
                                            <div class="item-meta-container">
                                                <h3 class="item-name"><a href="#">Phasellus consequat</a></h3>
                                                <div class="item-action">
                                                    <a href="#" class="item-add-btn">
                                                        <span class="icon-cart-text"><i class="fa fa-shopping-cart" aria-hidden="true"></i> A&ntilde;adir</span>
                                                    </a>
                                                </div><!-- End .item-action -->
                                            </div><!-- End .item-meta-container --> 
                                        </div><!-- End .item -->

    									<div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container">
                                                    <a href="#">
                                                        <img src="images/item4.jpg" alt="item1" class="item-image">
                                                        <img src="images/item4.jpg" alt="item1  Hover" class="item-image-hover">
                                                    </a>
                                                </figure>
                                                <div class="item-price-container">
                                                    <span class="old-price">$100</span>
                                                    <span class="item-price">$80</span>
                                                </div><!-- End .item-price-container -->
                                                <span class="discount-rect">-20%</span>
                                            </div><!-- End .item-image-wrapper -->
                                            <div class="item-meta-container">
                                                <h3 class="item-name"><a href="#">Phasellus consequat</a></h3>
                                                <div class="item-action">
                                                    <a href="#" class="item-add-btn">
                                                        <span class="icon-cart-text"><i class="fa fa-shopping-cart" aria-hidden="true"></i> A&ntilde;adir</span>
                                                    </a>
                                                </div><!-- End .item-action -->
                                            </div><!-- End .item-meta-container --> 
                                        </div><!-- End .item -->

    									<div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container">
                                                    <a href="#">
                                                        <img src="images/item5.jpg" alt="item1" class="item-image">
                                                        <img src="images/item5.jpg" alt="item1  Hover" class="item-image-hover">
                                                    </a>
                                                </figure>
                                                <div class="item-price-container">
                                                    <span class="item-price">$99</span>
                                                </div><!-- End .item-price-container -->
                                                <span class="new-rect">Nuevo</span>
                                            </div><!-- End .item-image-wrapper -->
                                            <div class="item-meta-container">
                                                <h3 class="item-name"><a href="#">Phasellus consequat</a></h3>
                                                <div class="item-action">
                                                    <a href="#" class="item-add-btn">
                                                        <span class="icon-cart-text"><i class="fa fa-shopping-cart" aria-hidden="true"></i> A&ntilde;adir</span>
                                                    </a>
                                                </div><!-- End .item-action -->
                                            </div><!-- End .item-meta-container --> 
                                        </div><!-- End .item -->

                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container">
                                                    <a href="#">
                                                        <img src="images/item1.jpg" alt="item1" class="item-image">
                                                        <img src="images/item1.jpg" alt="item1  Hover" class="item-image-hover">
                                                    </a>
                                                </figure>
                                                <div class="item-price-container">
                                                    <span class="item-price">$280</span>
                                                </div><!-- End .item-price-container -->
                                            </div><!-- End .item-image-wrapper -->
                                            <div class="item-meta-container">
                                                <h3 class="item-name"><a href="#">Phasellus consequat</a></h3>
                                                <div class="item-action">
                                                    <a href="#" class="item-add-btn">
                                                        <span class="icon-cart-text"><i class="fa fa-shopping-cart" aria-hidden="true"></i> A&ntilde;adir</span>
                                                    </a>
                                                </div><!-- End .item-action -->
                                            </div><!-- End .item-meta-container --> 
                                        </div><!-- End .item -->

            						</div><!--hot-items-slider -->

        						</div><!-- End .hot-items -->

                                </div><!-- End .col-md-12 -->
                            </div><!-- End .row -->

                            <div class="lg-margin"></div><!-- Space -->
            				
            				<div id="brand-slider-container" class="carousel-wrapper">
            					<header class="content-title">
    								<div class="title-bg">
    									<h2 class="title">Nuestras Marcas</h2>
    								</div><!-- End .title-bg -->
    							</header>
                                <div class="carousel-controls">
                                    <div id="brand-slider-prev" class="carousel-btn carousel-btn-prev">
                                    </div><!-- End .carousel-prev -->
                                    <div id="brand-slider-next" class="carousel-btn carousel-btn-next carousel-space">
                                    </div><!-- End .carousel-next -->
                                </div><!-- End .carousel-controllers -->
                                <div class="sm-margin"></div><!-- space -->
                                <div class="row">
                                    <div class="brand-slider owl-carousel">
                                        <?php
                                            $consultarCarrusel = "SELECT * FROM carrusel WHERE estado='1' ORDER BY orden";
                                            $resultadoCarrusel = mysqli_query($enlaces,$consultarCarrusel) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                            while($filaCar = mysqli_fetch_array($resultadoCarrusel)){
                                                $xMarca = $filaCar['imagen'];
                                        ?>
                                        <a href="#"><img src="cms/assets/img/carrusel/<?php echo $xMarca; ?>" /></a>
                                        <?php
                                            }
                                            mysqli_free_result($resultadoCarrusel);
                                        ?>
                                    </div><!-- End .brand-slider -->
                                </div><!-- End .row -->
            				</div><!-- End #brand-slider-container -->
            			</div><!-- End .col-md-12 -->
            		</div><!-- End .row -->
    			</div><!-- End .container -->
            </section><!-- End #content -->
            <?php include("includes/footer.php"); ?>
        </div><!-- End #wrapper -->
    </body>
</html>