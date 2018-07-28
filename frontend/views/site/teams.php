<?php

use frontend\components\NewsBarWidget;
use frontend\models\Match;
use yii\helpers\Html;
use frontend\models\Team;

/* @var $this yii\web\View */

$this->title = '球队一览-PSYCH-WorldCup';
?>

<div class="team-group">
    <div class="wc-hd">
        <span><em>A</em>组</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Team::find()->where(["f_group" => "A"])->all();
         foreach($match as $mat): ?>
        <div class="col-xs-6 col-md-3">
            <?= Html::beginTag('a',['class'=> "wrap-team-icon" ,'href'=> "./?r=team%2Fview&id=".$mat->country])?>
            <div class="wc-team-icon">
                  <?= Html::Tag('span','', ['class'=>"teamflag_m" ,'style'=>"background-image: url('../web/static/country/".$mat->country.".png')"])?>
                <div class="caption">
                    <p> <?= Html::encode("$mat->country") ?></p>
                </div>
            </div>
            </a>
        </div>
        <?php endforeach;?>
    </div>


 <div class="wc-hd">
        <span><em>B</em>组</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Team::find()->where(["f_group" => "B"])->all();
         foreach($match as $mat): ?>
        <div class="col-xs-6 col-md-3">
            <?= Html::beginTag('a',['class'=> "wrap-team-icon" ,'href'=> "./?r=team%2Fview&id=".$mat->country])?>
            <div class="wc-team-icon">
                  <?= Html::Tag('span','', ['class'=>"teamflag_m" ,'style'=>"background-image: url('../web/static/country/".$mat->country.".png')"])?>
                <div class="caption">
                    <p> <?= Html::encode("$mat->country") ?></p>
                </div>
            </div>
            </a>
        </div>
        <?php endforeach;?>
    </div>


     <div class="wc-hd">
        <span><em>C</em>组</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Team::find()->where(["f_group" => "C"])->all();
         foreach($match as $mat): ?>
        <div class="col-xs-6 col-md-3">
            <?= Html::beginTag('a',['class'=> "wrap-team-icon" ,'href'=> "./?r=team%2Fview&id=".$mat->country])?>
            <div class="wc-team-icon">
                  <?= Html::Tag('span','', ['class'=>"teamflag_m" ,'style'=>"background-image: url('../web/static/country/".$mat->country.".png')"])?>
                <div class="caption">
                    <p> <?= Html::encode("$mat->country") ?></p>
                </div>
            </div>
            </a>
        </div>
        <?php endforeach;?>
    </div>
   
    <div class="wc-hd">
        <span><em>D</em>组</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Team::find()->where(["f_group" => "D"])->all();
         foreach($match as $mat): ?>
        <div class="col-xs-6 col-md-3">
            <?= Html::beginTag('a',['class'=> "wrap-team-icon" ,'href'=> "./?r=team%2Fview&id=".$mat->country])?>
            <div class="wc-team-icon">
                  <?= Html::Tag('span','', ['class'=>"teamflag_m" ,'style'=>"background-image: url('../web/static/country/".$mat->country.".png')"])?>
                <div class="caption">
                    <p> <?= Html::encode("$mat->country") ?></p>
                </div>
            </div>
            </a>
        </div>
        <?php endforeach;?>
    </div>


 <div class="wc-hd">
        <span><em>E</em>组</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Team::find()->where(["f_group" => "E"])->all();
         foreach($match as $mat): ?>
        <div class="col-xs-6 col-md-3">
            <?= Html::beginTag('a',['class'=> "wrap-team-icon" ,'href'=> "./?r=team%2Fview&id=".$mat->country])?>
            <div class="wc-team-icon">
                  <?= Html::Tag('span','', ['class'=>"teamflag_m" ,'style'=>"background-image: url('../web/static/country/".$mat->country.".png')"])?>
                <div class="caption">
                    <p> <?= Html::encode("$mat->country") ?></p>
                </div>
            </div>
            </a>
        </div>
        <?php endforeach;?>
    </div>

     <div class="wc-hd">
        <span><em>F</em>组</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Team::find()->where(["f_group" => "F"])->all();
         foreach($match as $mat): ?>
        <div class="col-xs-6 col-md-3">
            <?= Html::beginTag('a',['class'=> "wrap-team-icon" ,'href'=> "./?r=team%2Fview&id=".$mat->country])?>
            <div class="wc-team-icon">
                  <?= Html::Tag('span','', ['class'=>"teamflag_m" ,'style'=>"background-image: url('../web/static/country/".$mat->country.".png')"])?>
                <div class="caption">
                    <p> <?= Html::encode("$mat->country") ?></p>
                </div>
            </div>
            </a>
        </div>
        <?php endforeach;?>
    </div>

     <div class="wc-hd">
        <span><em>G</em>组</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Team::find()->where(["f_group" => "G"])->all();
         foreach($match as $mat): ?>
        <div class="col-xs-6 col-md-3">
            <?= Html::beginTag('a',['class'=> "wrap-team-icon" ,'href'=> "./?r=team%2Fview&id=".$mat->country])?>
            <div class="wc-team-icon">
                  <?= Html::Tag('span','', ['class'=>"teamflag_m" ,'style'=>"background-image: url('../web/static/country/".$mat->country.".png')"])?>
                <div class="caption">
                    <p> <?= Html::encode("$mat->country") ?></p>
                </div>
            </div>
            </a>
        </div>
        <?php endforeach;?>
    </div>

     <div class="wc-hd">
        <span><em>H</em>组</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Team::find()->where(["f_group" => "H"])->all();
         foreach($match as $mat): ?>
        <div class="col-xs-6 col-md-3">
            <?= Html::beginTag('a',['class'=> "wrap-team-icon" ,'href'=> "./?r=team%2Fview&id=".$mat->country])?>
            <div class="wc-team-icon">
                  <?= Html::Tag('span','', ['class'=>"teamflag_m" ,'style'=>"background-image: url('../web/static/country/".$mat->country.".png')"])?>
                <div class="caption">
                    <p> <?= Html::encode("$mat->country") ?></p>
                </div>
            </div>
            </a>
        </div>
        <?php endforeach;?>
    </div>



</div>