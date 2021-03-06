<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Do Good</title>
    <!-- Style -->
    <link href="css/vendors/bootstrap.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
  </head>

<body class="page-<?php echo $page_name; ?>">
<header>
    <div class="main-header">
        <div class="col-md-12">
            <div class="header-nav main-nav hidden-xs col-md-4">
                <nav>
                    <ul>
                        <li><a class="dropdown" id="mujer" href="products-mujer.php">Mujer</a></li>
                        <li><a class="dropdown" id="hombre" href="products-hombre.php">Hombre</a></li>
                        <li><a class="dropdown" id="kits" href="kits.php">Kits</a></li>
                        <li><a class="dropdown" id="feeling-good" href="feeling-good.php">Feeling Good</a></li>
                    </ul>
                </nav>
            </div>

            <div class="dogood-logo col-md-4 col-xs-7">
              <a href="home.php"><img src="img/logo.svg" alt="dogood-logo" width="330" height="101"></a>
            </div>

            <div class="mobile-nav visible-xs visible-sm col-xs-5">
              <i class="fa fa-bars open-nav" aria-hidden="true"></i>
            </div>

            <div class="mobile-nav-content visible-xs visible-sm">
                <i class="fa fa-times close-nav" aria-hidden="true"></i>
              <ul class="main">
                    <li><a href="products-mujer.php">Mujer</a></li>
                    <li><a href="products-hombre.php">Hombre</a></li>
                    <li><a href="kits.php">Kits</a></li>
                    <li><a href="feeling-good.php">Feeling Good</a></li>
                </ul>
                <ul class="social">
                    <li><a href="#">Log in</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>


            <div class="header-nav social-nav hidden-xs col-md-4">
                <ul>
                    <li><a href="#">Log in</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div><!--col-->
        <div id="nav-mujer" class="sub-header">
            <div class="navbar-dropdown">
                <div class="dropdown-content">
                    <div class="col-md-2 navbar-sections">
                        <p class="navbar-title">Destacados</p>
                        <ul>
                            <li><a href="#">New In</a></li>
                            <li><a href="#">Kits</a></li>
                            <li><a href="#">Must Have</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 navbar-sections">
                        <p class="navbar-title">Tops</p>
                        <ul>
                            <li><a href="#">Ver todo</a></li>
                            <li><a href="#">Tops Deportivos</a></li>
                            <li><a href="#">Remeras</a></li>
                            <li><a href="#">Musculosas</a></li>
                            <li><a href="#">Buzos y Camperas</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 navbar-sections">
                        <p class="navbar-title">Pantalones y calzas</p>
                        <ul>
                            <li><a href="#">Leggins</a></li>
                            <li><a href="#">Shorts</a></li>
                            <li><a href="#">Pantalones</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 navbar-sections">
                        <p class="navbar-title">Pantalones y calzas</p>
                        <ul>
                            <li><a href="#">Leggins</a></li>
                            <li><a href="#">Shorts</a></li>
                            <li><a href="#">Pantalones</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--sub-header-->
        <div id="nav-hombre" class="sub-header">
            <div class="navbar-dropdown">
                <div class="dropdown-content">
                    <div class="col-md-2 navbar-sections">
                        <p class="navbar-title">Destacados Hombre</p>
                        <ul>
                            <li><a href="#">New In</a></li>
                            <li><a href="#">Kits</a></li>
                            <li><a href="#">Must Have</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 navbar-sections">
                        <p class="navbar-title">Remeras</p>
                        <ul>
                            <li><a href="#">Ver todo</a></li>
                            <li><a href="#">Tops Deportivos</a></li>
                            <li><a href="#">Remeras</a></li>
                            <li><a href="#">Musculosas</a></li>
                            <li><a href="#">Buzos y Camperas</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 navbar-sections">
                        <p class="navbar-title">Pantalones y calzas</p>
                        <ul>
                            <li><a href="#">Leggins</a></li>
                            <li><a href="#">Shorts</a></li>
                            <li><a href="#">Pantalones</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--sub-header-->
        <div id="nav-kits" class="sub-header">
            <div class="navbar-dropdown">
                <div class="dropdown-content">
                    <div class="col-md-2 navbar-sections">
                        <p class="navbar-title">Destacados Kits</p>
                        <ul>
                            <li><a href="#">New In</a></li>
                            <li><a href="#">Kits</a></li>
                            <li><a href="#">Must Have</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 navbar-sections">
                        <p class="navbar-title">Remeras</p>
                        <ul>
                            <li><a href="#">Ver todo</a></li>
                            <li><a href="#">Tops Deportivos</a></li>
                            <li><a href="#">Remeras</a></li>
                            <li><a href="#">Musculosas</a></li>
                            <li><a href="#">Buzos y Camperas</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 navbar-sections">
                        <p class="navbar-title">Pantalones y calzas</p>
                        <ul>
                            <li><a href="#">Leggins</a></li>
                            <li><a href="#">Shorts</a></li>
                            <li><a href="#">Pantalones</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--sub-header-->
    </div><!--row-->
</header>