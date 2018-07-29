<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Team */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="team-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'coach')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'history')->textInput() ?>

    <?= $form->field($model, 'jointime')->textInput() ?>

    <?= $form->field($model, 'createtime')->textInput() ?>

    <?= $form->field($model, 'attendedtime')->textInput() ?>

    <?= $form->field($model, 'rank')->textInput() ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'introduction')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'f_group')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jifen')->textInput() ?>

    <?= $form->field($model, 'win')->textInput() ?>

    <?= $form->field($model, 'lose')->textInput() ?>

    <?= $form->field($model, 'equal')->textInput() ?>

    <?= $form->field($model, 'get_score')->textInput() ?>

    <?= $form->field($model, 'lose_score')->textInput() ?>

    <?= $form->field($model, 'jing_score')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
