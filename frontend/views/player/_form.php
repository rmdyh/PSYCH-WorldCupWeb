<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Player */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="player-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID')->textInput() ?>

    <?= $form->field($model, 'haoma')->textInput() ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'postion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'height')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weight')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthdate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attended')->textInput() ?>

    <?= $form->field($model, 'totaltime')->textInput() ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jinqiu')->textInput() ?>

    <?= $form->field($model, 'zhugong')->textInput() ?>

    <?= $form->field($model, 'shemen')->textInput() ?>

    <?= $form->field($model, 'shezheng')->textInput() ?>

    <?= $form->field($model, 'chuanqiu')->textInput() ?>

    <?= $form->field($model, 'shiqiu')->textInput() ?>

    <?= $form->field($model, 'pujiu')->textInput() ?>

    <?= $form->field($model, 'hongpai')->textInput() ?>

    <?= $form->field($model, 'huangpai')->textInput() ?>

    <?= $form->field($model, 'click')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
