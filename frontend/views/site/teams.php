<?php

use frontend\components\NewsBarWidget;
use frontend\models\Match;
use yii\helpers\Html;
use frontend\models\Team;
use frontend\components\PageHeadWidget;

/* @var $this yii\web\View */

$this->title = '球队一览-PSYCH-WorldCup';
?>

<div class="team-group">
    <div class="row">
        <?php
            $groups=["A", "B", "C", "D", "E", "F", "G", "H"];
            foreach ($groups as $group) :?>
             
            <div class="col-md-6 col-xs-12">
                <div class="wc-hd">
                    <span><?=$group?>组</span>
                    <hr>
                </div>

                <div>
                    <?php $match=Team::find()->where(["f_group" => $group])->all();
                    foreach($match as $mat): ?>
                        <div class="col-xs-3">
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
        <?php endforeach;?>
    </div>
</div>