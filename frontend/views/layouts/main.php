<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta content="David Warui Portfolio" name="descriptison">
    <meta content="David,Warui, Python, Developer" name="keywords">
      <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
 
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  
    
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo"><a href="<?= Url::to(['site/index'])?>">David Warui</a></h1>
      
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?= Url::to(['site/index'])?>">Home</a></li>
          <li><a href="<?= Url::to(['site/about'])?>">About</a></li>
          <li><a href="<?= Url::to(['resume/resume'])?>">Resume</a></li>
          <li><a href="<?= Url::to(['resume/services'])?>">Services</a></li>
          <li><a href="<?= Url::to(['resume/portfolio'])?>">Portfolio</a></li>
          <li><a href="<?= Url::to(['site/contact'])?>">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        <a href="https://twitter.com/waruidavid57" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100008416186499" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/warui_david/" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="https://www.linkedin.com/in/david-warui-949336154/" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>

    </div>

  </header><!-- End Header -->

  
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>David Warui</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End  Footer -->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
