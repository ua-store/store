<?php
use ua\helpers\Html;
use ua\web\AuthAsset;
use ua\widgets\ActiveForm;
use admin\models\auth\LoginForm;

AuthAsset::register($this);

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
<div class="auth-wrapper">
    <div class="auth-form">
        <div class="store-logo">
            <img src="logo.png" />
        </div>
        <div class="auth">
            <div class="auth-login-form">
                <?php $model = new LoginForm; ?>
                <?php $form = ActiveForm::begin(); ?>
                <div class="fields">
                    <?php echo $form->field($model, 'email', ['template' => '{input}'])->textInput(['placeholder' => 'Email']); ?>
                    <?php echo $form->field($model, 'password', ['template' => '{input}'])->passwordInput(['placeholder' => 'Password']); ?>
                </div>
                <div class="actions">
                    <?php echo Html::button('Sign In'); ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
            <div class="auth-recovery-form"></div>
        </div>
    </div>
</div>
<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>