<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TeamSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="team-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'country') ?>

    <?= $form->field($model, 'coach') ?>

    <?= $form->field($model, 'history') ?>

    <?= $form->field($model, 'jointime') ?>

    <?= $form->field($model, 'createtime') ?>

    <?php // echo $form->field($model, 'attendedtime') ?>

    <?php // echo $form->field($model, 'rank') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'f_group') ?>

    <?php // echo $form->field($model, 'jifen') ?>

    <?php // echo $form->field($model, 'win') ?>

    <?php // echo $form->field($model, 'lose') ?>

    <?php // echo $form->field($model, 'equal') ?>

    <?php // echo $form->field($model, 'get_score') ?>

    <?php // echo $form->field($model, 'lose_score') ?>

    <?php // echo $form->field($model, 'jing_score') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
