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

    <div class="">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

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
