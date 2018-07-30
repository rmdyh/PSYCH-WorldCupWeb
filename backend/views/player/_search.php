<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PlayerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="player-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'haoma') ?>

    <?= $form->field($model, 'country') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'postion') ?>

    <?php // echo $form->field($model, 'height') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'birthdate') ?>

    <?php // echo $form->field($model, 'attended') ?>

    <?php // echo $form->field($model, 'totaltime') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'jinqiu') ?>

    <?php // echo $form->field($model, 'zhugong') ?>

    <?php // echo $form->field($model, 'shemen') ?>

    <?php // echo $form->field($model, 'shezheng') ?>

    <?php // echo $form->field($model, 'chuanqiu') ?>

    <?php // echo $form->field($model, 'shiqiu') ?>

    <?php // echo $form->field($model, 'pujiu') ?>

    <?php // echo $form->field($model, 'hongpai') ?>

    <?php // echo $form->field($model, 'huangpai') ?>

    <?php // echo $form->field($model, 'click') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
