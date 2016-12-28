<?php
use \common\widgets\views\HelloWidget;
use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
    <div class="site-about">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>This is the About page. You may modify the following file to customize its content:</p>
        <br>
        <p><?= HelloWidget::widget(['message' => ' Yii2.0']) ?></p>

        <code><?= __FILE__ ?></code>
    </div>

