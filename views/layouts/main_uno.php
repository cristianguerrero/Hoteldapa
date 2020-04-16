<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->


    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="../web/pagina/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="../web/pagina/css/flexslider.css" type="text/css" media="screen" property="" />
    <link rel="stylesheet" type="text/css" href="../web/pagina/css/zoomslider.css" />
    <link rel="stylesheet" type="text/css" href="../web/pagina/css/style.css" />
    <link href="../web/pagina/css/font-awesome.css" rel="stylesheet"> 
    <script type="text/javascript" src="../web/pagina/js/modernizr-2.6.2.min.js"></script>
    <!--/web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <!--//web-fonts-->



    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    

    <!--Navbar -->
      <div class="w3layouts-top-strip">
      <div class="top-srip-agileinfo">
        <div class="w3ls-social-icons text-left">
          <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
          <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
          <a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
          <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
          
        </div>
        <div class="agileits-contact-info text-right">
          <ul>
            <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +57 123456789</li>
            <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@ejemplo.com">info@ejemplo.com</a></li>
          </ul>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  <!--/.Navbar -->

  <!--/main-header-->
  <!--/banner-section-->
  <div id="demo-1" data-zs-src='["pagina/images/img/hote2.jpg", "pagina/images/img/hotel3.jpg", "pagina/images/img/hotel1.jpg","pagina/images/img/img7.jpg"]' data-zs-overlay="dots">
    <div class="demo-inner-content">
    <!--/header-w3l-->
      <div class="header-w3-agileits" id="home">
          <div class="inner-header-agile">  
          <nav class="navbar navbar-default">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <h1><a  href="index.php?r=site%2Findex"><span>H</span>otel <p class="s-log">Espejo</p></a>
               
              </h1>
            </div>
            <!-- navbar-header -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php?r=site%2Findex">Inicio</a></li>
                <li class="dropdown">
                  <a href="" class="dropdown-toggle hvr-bounce-to-bottom" data-hover="Pages" data-toggle="dropdown" aria-expanded="false">Habitaciones <b class="caret"></b></a>
                   <ul class="dropdown-menu">
                    <li>
                      <a href="index.php?r=site%2Fhabitacion1">Habitación 1</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">Galeria</a></li>
                <li><a href="#">Contacto</a></li>
              </ul>

            </div>
            <div class="clearfix"> </div> 
          </nav>
          <!-- <div class="w3ls_search">
            <div class="cd-main-header">
                <ul class="cd-header-buttons">
                  <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                </ul> cd-header-buttons
            </div>
            <div id="cd-search" class="cd-search">
              <form action="#" method="post">
                <input name="Search" type="search" placeholder="Buscar...">
              </form>
            </div>
          </div> -->
        </div> 
      
    <!--//header-w3l-->
      <!--/banner-info-->
         <div class="baner-info">   
            <h3>Bien<span>venido </span>a   <span>Hotel </span> Espejo</h3>
          <h4>Disfruta tu estadia!</h4>
          <!-- <p>Disfrute su estadia!</p> -->
         </div>
      <!--/banner-ingo-->
      
    </div>
       </div>
    </div>
  <!--/banner-section-->
 <!--//main-header-->

    <div class="">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<!-- Footer -->
  <div class="w3l-footer">
    <div class="container">
         <div class="footer-info-agile">
        <div class="col-md-2 footer-info-grid links">
          <h4>Hotel Espejo</h4>
          <ul>
                <li><a href="#">Inicio</a></li> 
                <li><a href="#">Habitaciones</a></li> 
                <li><a href="#">Galeria</a></li> 
                <li><a href="#">Contacto</a></li>
          </ul>
        </div>
        <div class="col-md-3 footer-info-grid address">
          <h4>Dirección</h4>
          <address>
            <ul>
              <li>xxxxxxxxxxxxx</li>
              <li>xxxxxxxxxxxxxxx</li>
              <li>Cali, Colombia</li>
              <li>Telephone: 123456789</li>
              <li>Email: <a class="mail" href="mailto:info@ejemplo.com">info@ejemplo.com</a></li>
            </ul>
          </address>
        </div>
        <div class="col-md-3 footer-grid">
           <h4>habitaciones</h4>
          <div class="footer-grid-instagram">
          <a href="#"><img src="pagina/images/f1.jpg" alt=" " class="img-responsive"></a>
          </div>
          <div class="footer-grid-instagram">
          <a href="#"><img src="pagina/images/f2.jpg" alt=" " class="img-responsive"></a>
          </div>
          <div class="footer-grid-instagram">
            <a href="#"><img src="pagina/images/f3.jpg" alt=" " class="img-responsive"></a>
          </div>
          <div class="footer-grid-instagram">
          <a href="#"><img src="pagina/images/f4.jpg" alt=" " class="img-responsive"></a>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="col-md-4 footer-info-grid">
        <div class="connect-social">
          <h4>Conecta con nosotros</h4>
          <section class="social">
                        <ul>
              <li><a class="icon fb" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="icon tw" href="#"><i class="fa fa-twitter"></i></a></li>
              
              
              <li><a class="icon pin" href="#"><i class="fa fa-pinterest"></i></a></li>
              <li><a class="icon db" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="icon gp" href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </section>
        </div>
          
        </div>
        <div class="clearfix"></div>
      </div>
      <br>

      <!-- <div class="connect-agileits newsletter">
        <h4>Newsletter</h4>
          <p>Subscribe to our newsletter and we will inform you about newest projects and promotions.
          </p>
          <form action="#" method="post" class="newsletter">
            <input class="email" type="email" placeholder="Your email address..." required="">
            <input type="submit" class="submit" value="Subscribe">
          </form>
      </div> -->
     </div>
     </div>
    
  <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<footer class="w3agile_footer_copy"> <!-- footer -->
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
