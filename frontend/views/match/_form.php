<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Match */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="match-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'score')->textInput() ?>

    <?= $form->field($model, 'sec_country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sec_score')->textInput() ?>

    <?= $form->field($model, 'ID')->textInput() ?>

    <?= $form->field($model, 'time1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'time2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'time3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
