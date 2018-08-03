<?php

use yii\helpers\Html;
use yii\helpers\URL;
use yii\widgets\ActiveForm;
/**
 * Created by PhpStorm.
 * User: WZZ
 * Date: 2018/8/2
 * Time: 10:29
 */

$this->title='发表文章';
?>


<div class="edit-psgspan" style="background: white; padding:100px 40px;">
    <strong>写文章</strong>
    <p>您的文章审核后才会被发表。</p>
    <?php $form = ActiveForm::begin(['action' => '?r=user/writepost&id='.$model->id]);
    //echo "<li></li>";
    echo $form->field($psg, 'title')->textInput();// textarea;
    echo $form->field($psg, 'author_ID')->textInput()->hiddenInput(['value'=>$model->id])->label(false);
    echo $form->field($psg, 'author')->textInput()->hiddenInput(['value'=>$model->username])->label(false);
    echo $form->field($psg, 'seen')->textInput()->hiddenInput(['value'=>0])->label(false);
    echo $form->field($psg, 'content')->widget(\yii\redactor\widgets\Redactor::className());
    echo Html::submitButton('提交', ['class'=>'btn btn-primary']);
    ActiveForm::end();
    ?>

</div>
