<?php
use yii\helpers\Html;
use ua\web\AdminAsset;

AdminAsset::register($this);

$this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<?= $this->registerMetaTag(['charset' => Yii::$app->charset]); ?>
<title><?= Html::encode($this->title) ?></title>
<?= $this->registerMetaTag(['http-equiv' => 'X-UA-Compatible', 'content' => 'IE=edge']); ?>
<?= $this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']); ?>
<?= $this->registerMetaTag(['name' => 'apple-touch-fullscreen', 'content' => 'yes']); ?>
<?= $this->registerMetaTag(['name' => 'apple-mobile-web-app-capable', 'content' => 'yes']); ?>
<?= Html::csrfMetaTags() ?>
<?= $this->registerLinkTag(['rel' => 'shortcut icon', 'href' => '/uploads/favicon.ico']); ?>
<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody(); ?>
<header id="header">
    <div class="header-holder">
        <div class="sidebar-trigger">
            <div class="trigger">
                <a href="#">
                    <span></span>
                </a>
            </div>
        </div>
        <div class="header-panel">
            <div class="top-bar-header">
                <ul class="top-bar-nav">
                    <li><a href="#"><span class="shake"><i class="flaticon-music-2"></i></span></a></li>
                    <li><a href="#"><span><i class="flaticon-share"></i></span></a></li>
                    <li><a href="#"><span><i class="flaticon-grid-menu"></i></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<div class="main">
    <div class="sidebar">
        <ul class="sidebar-nav">
            <li>
                <a href="#">
                    <i class="flaticon-line-graph"></i>
                    <span></span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="flaticon-layers"></i>
                    <span></span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="flaticon-share"></i>
                    <span></span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="flaticon-interface-6"></i>
                    <span></span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="flaticon-multimedia-1"></i>
                    <span></span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="flaticon-tabs"></i>
                    <span></span>
                </a>
            </li>
        </ul>
    </div>
    <div class="content">
        <?php echo $content ?>
    </div>
</div>
<footer id="footer"></footer>
<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>