<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>


    <div class="">
        <h1><?= Yii::t('app', 'NAV_SIGNUP') ?>
        <h1><?= Yii::t('app', 'foo') ?>
        <p><?= Yii::t('app', 'NAV_LOGIN') ?></p>
        <p><?= Yii::t('app', 'FOLLOW_TO_CONFIRM_EMAIL') ?></p>
        <div class="btn btn-default"><?= Yii::t('app', 'FOLLOW_TO_CONFIRM_EMAIL') ?></div>

    </div>



    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
</div>
