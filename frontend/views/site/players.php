<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Player;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;

use yii\data\ActiveDataProvider;


$this->title = '球员一览';
$this->params['breadcrumbs'][] = $this->title;
                            
?>
<?= Html::beginForm(['site/players'], 'get', ['enctype' => 'multipart/form-data','class'=>"form-inline"]) ?>
    <?php
        echo "球队检索:"; 
        echo Html::activeDropDownList($model, 'country',array_merge([""=>"全部"], ArrayHelper::map($data,'country', 'country'))); 
    ?>
    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('查询', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
    
<!--button class="btn btn-default" type="submit">确定</button>
<input type="text" class="form-control" placeholder="Text input">
<button class="btn btn-default" type="submit">确定</button-->
<?= Html::endForm() ?>


<br>
<br>
<br>
<?php foreach ($players as $label => $player): ?> 
 <?= $label?> 


<!-- <div class="team-group"> -->

    <!-- <div class="wc-hd">
        <span></span>
        <hr>
    </div> -->

    <div class="row">

        <?php 
         foreach($player as $mat): ?>
        <div class="col-xs-6 col-md-3">
               <?= Html::beginTag('a',['class'=> "wrap-team-icon" ,'href'=> "./?r=player%2Fview&id=".$mat->ID])?>
            <div class="wc-team-icon">
                <div class="caption">
                    <p> <?= Html::encode("$mat->name") ?></p>
                </div>
            </div>
        </a>
            </div>
     
        <?php endforeach;?>
    </div>
    <?php endforeach;?>






