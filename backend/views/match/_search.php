<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MatchSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="match-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'country') ?>

    <?= $form->field($model, 'score') ?>

    <?= $form->field($model, 'sec_country') ?>

    <?= $form->field($model, 'sec_score') ?>

    <?= $form->field($model, 'ID') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'time1') ?>

    <?php // echo $form->field($model, 'time2') ?>

    <?php // echo $form->field($model, 'time3') ?>

    <?php // echo $form->field($model, 'place') ?>

    <?php // echo $form->field($model, 'stage') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'url') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
