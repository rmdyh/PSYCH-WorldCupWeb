<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Useinfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="useinfo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'useID')->textInput() ?>

    <?= $form->field($model, 'sex')->dropDownList([ '男' => '男', '女' => '女', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'introduction')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
