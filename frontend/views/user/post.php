<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
/**
 * Created by PhpStorm.
 * User: WZZ
 * Date: 2018/8/2
 * Time: 10:29
 */
?>


<div class="edit-psgspan" style="background: white; padding:100px 40px;">
    <strong>Edit Passage</strong>
    <p>here you can edit the passage</p>
    <div class="psg-msg" style="color: darkgrey">
        <p> author: <?= $model->author?> posttime: <?= $model->date?></p>
    </div>
    <?php $form = ActiveForm::begin(['action' => '?r=user/editpost&id='.$model->ID]);
    //echo "<li></li>";
    echo $form->field($model, 'title')->textInput();// textarea;
    echo $form->field($model, 'ID')->textInput()->hiddenInput(['value'=>$model->ID])->label(false);
    echo $form->field($model, 'content')->widget(\yii\redactor\widgets\Redactor::className());
    echo Html::submitButton('save', ['class'=>'btn btn-primary']);
    ActiveForm::end();
    ?>

</div>
