<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CommentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'passage_ID') ?>

    <?= $form->field($model, 'user_ID') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'content') ?>

    <?= $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'ID') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'parent') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
