<?php

use yii\helpers\Html;
use humhub\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= Html::encode($this->pageTitle); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <?= Html::csrfMetaTags() ?>
        <?php $this->head() ?>
        <?= $this->render('@humhub/views/layouts/head'); ?>
        <meta charset="<?= Yii::$app->charset ?>">
    </head>

    <body class="login-container">
        <?php $this->beginBody() ?>
        <?= $content; ?>
        <?php $this->endBody() ?>
        
        <div class="text text-center powered">FYV<a href="https://community.futayuriverse.com/p/Terms" target="_blank"> Terms & Conditions</a></div>
        <div class="text text-center">FYV<a href="https://community.futayuriverse.com/p/Cookies" target="_blank"> Privacy Policy</a></div>
        <div class="text text-center">FYV<a href="https://community.futayuriverse.com/p/Cookies" target="_blank"> Cookies Policy</a></div>
        <div class="text text-center powered">Powered by <a href="http://www.humhub.org" target="_blank">HumHub</a></div>
    </body>

</html>
<?php $this->endPage() ?>