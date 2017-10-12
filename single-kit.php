<?php $page_name = "single-kit" ?>
<?php include('header.php'); ?>

<section class="page-intro">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title">Shop Mujer</h3>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
</section>

<section class="product-description">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="img/single-product2.jpg">
                <p class="img-number">1 - 4</p>
                <div class="col-xs-4 col-md-4 kit-parts">
                   <img src="img/kit-part1.jpg">
                   <h4 class="subtitle">Nombre Top</h4>
               </div>

               <div class="col-xs-4 col-md-4 kit-parts">
                   <img src="img/kit-part2.jpg">
                   <h4 class="subtitle">Nombre Legging</h4>
               </div>

               <div class="col-xs-4 col-md-4 kit-parts">
                   <img src="img/kit-part3.jpg">
                   <h4 class="subtitle">Mochila</h4>
               </div>
            </div>
            <div class="col-md-6 content">
                <h3 class="product-name">Nombre Producto <span>- $XXX</span><span class="like"><i class="fa fa-heart-o" aria-hidden="true"></i><i class="fa fa-heart hidden" aria-hidden="true"></i></span></h3>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>

                <div class="product-options">
                    <p class="option">Talle Top: <span>Falta seleccionar</span></p>
                    <div class="talles" id="talle1">
                     <a class="btn-sizes">XS</a>
                      <a class="btn-sizes">S</a>
                      <a class="btn-sizes">M</a>
                      <a class="btn-sizes">L</a>
                    </div>
                    <a href="#" class="tabla-talles">Tabla de talles</a>

                    <p class="option">Talle Pantalón: <span>Falta seleccionar</span></p>
                    <div class="talles" id="talle2">
                     <a class="btn-sizes">XS</a>
                      <a class="btn-sizes">S</a>
                      <a class="btn-sizes">M</a>
                      <a class="btn-sizes">L</a>
                    </div>
                    <a href="#" class="tabla-talles">Tabla de talles</a>
                    
                    <div class="cantidad">
                        <p class="option">Cantidad:</p>
                        <select name="cantidad">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                        </select>
                    </div>

                </div>

                <div class="product-bottom">
                    <a  href="#" class="btn-gray">Agregar al carrito</a>
                    <p class="envio">Envío gratis a partir de $899 </p>
                    <p class="plazo">Plazo de 4 a 7 días hábiles (ciudades principales).</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="kits">
    <div class="container">
        <div class="row">
<div class="col-sm-6 col-xs-12 kit">
           <a href="single-kit.php">
               <h3 class="title">Kit Mujer</h3>
               <img src="img/kit-combo.jpg" class="main-img">
            </a>

               <div class="col-md-4 col-xs-4 kit-parts">
                   <a href="single-kit.php"><img src="img/kit-part1.jpg"></a>
                   <h4 class="subtitle">Nombre Top</h4>
                   <p>Talle Top:</p>
                   <a class="btn-sizes">XS</a>
                    <a class="btn-sizes">S</a>
                    <a class="btn-sizes">M</a>
                    <a class="btn-sizes">L</a>
               </div>

               <div class="col-md-4 col-xs-4 kit-parts">
                   <a href="single-kit.php"><img src="img/kit-part2.jpg"></a>
                   <h4 class="subtitle">Nombre Legging</h4>
                   <p>Talle Pantalón:</p>
                   <a class="btn-sizes">XS</a>
                    <a class="btn-sizes">S</a>
                    <a class="btn-sizes">M</a>
                    <a class="btn-sizes">L</a>
               </div>

               <div class="col-md-4 col-xs-4 kit-parts">
                   <a href="single-kit.php"><img src="img/kit-part3.jpg"></a>
                   <h4 class="subtitle">Mochila</h4>
                   <a href="#" class="tabla-talles">Ver tabla de talles</a>
               </div>
              <div class="like">
                 <i class="fa fa-heart-o" aria-hidden="true"></i>
                 <i class="fa fa-heart hidden" aria-hidden="true"></i>
               </div>
           </div>

           <div class="col-sm-6 col-xs-12 kit">
           <a href="single-kit.php">
               <h3 class="title">Kit Hombre</h3>
               <img src="img/kit-combo.jpg" class="main-img">
           </a>

               <div class="col-md-4 col-xs-4 kit-parts">
                   <a href="single-kit.php"><img src="img/kit-part1.jpg"></a>
                   <h4 class="subtitle">Nombre Top</h4>
                   <p>Talle Top:</p>
                   <a class="btn-sizes">XS</a>
                    <a class="btn-sizes">S</a>
                    <a class="btn-sizes">M</a>
                    <a class="btn-sizes">L</a>
               </div>

               <div class="col-md-4 col-xs-4 kit-parts">
                   <a href="single-kit.php"><img src="img/kit-part2.jpg"></a>
                   <h4 class="subtitle">Nombre Legging</h4>
                   <p>Talle Pantalón:</p>
                   <a class="btn-sizes">XS</a>
                    <a class="btn-sizes">S</a>
                    <a class="btn-sizes">M</a>
                    <a class="btn-sizes">L</a>
               </div>

               <div class="col-md-4 col-xs-4 kit-parts">
                   <a href="single-kit.php"><img src="img/kit-part3.jpg"></a>
                   <h4 class="subtitle">Mochila</h4>
                   <a href="#" class="tabla-talles">Ver tabla de talles</a>
               </div>
               <div class="like">
                 <i class="fa fa-heart-o" aria-hidden="true"></i>
                 <i class="fa fa-heart hidden" aria-hidden="true"></i>
               </div>
           </div>
        </div>
    </div>
</section>

<section class="product-list">
    <div class="container">
        <div class="row">
            <div class="col-md-12 list-title">
                <h3>Te podría interesar</h3>
            </div>
                        <a href="single-product.php">
            <div class="col-sm-3  col-xs-6 product">
                <img src="img/product1.jpg">
                <h3 class="title">Nombre Producto - <span>$XX</span></h3>
                <p class="description">Leve descripción</p>
                <a href="#" class="btn-colors navy selected"></a>
                <a href="#" class="btn-colors gray"></a>
                <div class=" arrows left-arrow">
                    <div class="arrow-1"></div>
                    <div class="arrow-2"></div>
                    <div class="arrow-3"></div>
                </div>
                <div class=" arrows right-arrow">
                    <div class="arrow-1"></div>
                    <div class="arrow-2"></div>
                    <div class="arrow-3"></div>
                </div>
                <div class="lnk-carrito">
                    <a href="">+ Sumar al carrito</a>
                </div>
                <div class="like">
                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                    <i class="fa fa-heart hidden" aria-hidden="true"></i>
                </div>

            </div>
            </a>
            <a href="single-product.php">
            <div class="col-sm-3  col-xs-6 product">
                <img src="img/product1.jpg">
                <h3 class="title">Nombre Producto - <span>$XX</span></h3>
                <p class="description">Leve descripción</p>
                <a href="#" class="btn-colors navy selected"></a>
                <a href="#" class="btn-colors gray"></a>
                <div class=" arrows left-arrow">
                    <div class="arrow-1"></div>
                    <div class="arrow-2"></div>
                    <div class="arrow-3"></div>
                </div>
                <div class=" arrows right-arrow">
                    <div class="arrow-1"></div>
                    <div class="arrow-2"></div>
                    <div class="arrow-3"></div>
                </div>
                <div class="lnk-carrito">
                    <a href="">+ Sumar al carrito</a>
                </div>
                <div class="like">
                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                    <i class="fa fa-heart hidden" aria-hidden="true"></i>
                </div>

            </div>
            </a>
             <a href="single-product.php">
            <div class="col-sm-3  col-xs-6 product">
                <img src="img/product1.jpg">
                <h3 class="title">Nombre Producto - <span>$XX</span></h3>
                <p class="description">Leve descripción</p>
                <a href="#" class="btn-colors navy selected"></a>
                <a href="#" class="btn-colors gray"></a>
                <div class=" arrows left-arrow">
                    <div class="arrow-1"></div>
                    <div class="arrow-2"></div>
                    <div class="arrow-3"></div>
                </div>
                <div class=" arrows right-arrow">
                    <div class="arrow-1"></div>
                    <div class="arrow-2"></div>
                    <div class="arrow-3"></div>
                </div>
                <div class="lnk-carrito">
                    <a href="">+ Sumar al carrito</a>
                </div>
                <div class="like">
                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                    <i class="fa fa-heart hidden" aria-hidden="true"></i>
                </div>

            </div>
            </a>
             <a href="single-product.php">
            <div class="col-sm-3  col-xs-6 product">
                <img src="img/product1.jpg">
                <h3 class="title">Nombre Producto - <span>$XX</span></h3>
                <p class="description">Leve descripción</p>
                <a href="#" class="btn-colors navy selected"></a>
                <a href="#" class="btn-colors gray"></a>
                <div class=" arrows left-arrow">
                    <div class="arrow-1"></div>
                    <div class="arrow-2"></div>
                    <div class="arrow-3"></div>
                </div>
                <div class=" arrows right-arrow">
                    <div class="arrow-1"></div>
                    <div class="arrow-2"></div>
                    <div class="arrow-3"></div>
                </div>
                <div class="lnk-carrito">
                    <a href="">+ Sumar al carrito</a>
                </div>
                <div class="like">
                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                    <i class="fa fa-heart hidden" aria-hidden="true"></i>
                </div>

            </div>
            </a>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>