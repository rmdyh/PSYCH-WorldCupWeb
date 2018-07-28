<?php

use frontend\components\NewsBarWidget;
use frontend\components\CutBarWidget;
use frontend\components\KnockoutCellWidget;
use frontend\components\PageHeadWidget;
use frontend\models\Match;
use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'PSYCH-WorldCup';
?>
<div class="site-index">    
    <?= PageHeadWidget::widget([
        'text'=>"淘汰赛赛程"
    ])?>

    <div class="knockout-match">
        <img class="bg" src="../web/static/against_bg.png"/>
            <ul>
                <?php   $i=1;
                    foreach($model1 as $mat1):?>
                    <?php 
                        echo KnockoutCellWidget::widget([
                            'id' => Html::encode("$mat1->ID"),
                            'country_a' => Html::encode("$mat1->country"),
                            'country_b' => Html::encode("$mat1->sec_country"),
                            'timestamp' => $mat1->date,
                            'position' => $i,
                            'score_a' => Html::encode("$mat1->score"),
                            'score_b' => Html::encode("$mat1->sec_score"),
                            'url'=>"#",
                        ]);
                        if($i==4)
                            {
                            $i=13;
                            }else{
                        $i+=1;            
                            }  
                    ?>
                <?php endforeach;?>

                <?php   $i=5;
                    foreach($model2 as $mat2):?>
                    <?php echo KnockoutCellWidget::widget([
                        'id' => Html::encode("$mat2->ID"),
                        'country_a' => Html::encode("$mat2->country"),
                        'country_b' => Html::encode("$mat2->sec_country"),
                        'timestamp' => $mat2->date,
                        'position' => $i,
                        'score_a' => Html::encode("$mat2->score"),
                        'score_b' => Html::encode("$mat2->sec_score"),
                        'url'=>"#",
                    ]);
                    if($i==6)
                        {
                         $i=11;
                        }else{
                     $i+=1;            
                        }  
                    ?>
                <?php endforeach;?>

                <?php   $i=7;
                    foreach($model3 as $mat3):?>
                    <?php echo KnockoutCellWidget::widget([
                        'id' => Html::encode("$mat3->ID"),
                        'country_a' => Html::encode("$mat3->country"),
                        'country_b' => Html::encode("$mat3->sec_country"),
                        'timestamp' => $mat3->date,
                        'position' => $i,
                        'score_a' => Html::encode("$mat3->score"),
                        'score_b' => Html::encode("$mat3->sec_score"),
                        'url'=>"#",
                    ]);
                    if($i==7)
                        {
                         $i=10;
                        }else{
                     $i+=1;            
                        }  
                    ?>
                <?php endforeach;?>

                <?php  $i=9;
                    foreach($model4 as $mat4):?>
                    <?php echo KnockoutCellWidget::widget([
                        'id' => Html::encode("$mat4->ID"),
                        'country_a' => Html::encode("$mat4->country"),
                        'country_b' => Html::encode("$mat4->sec_country"),
                        'timestamp' => $mat4->date,
                        'position' => $i,
                        'score_a' => Html::encode("$mat4->score"),
                        'score_b' => Html::encode("$mat4->sec_score"),
                        'url'=>"#",
                    ]);
                    ?>
                <?php endforeach;?>

                <?php  $i=8;
                    foreach($model5 as $mat5):?>
                    <?php echo KnockoutCellWidget::widget([
                        'id' => Html::encode("$mat5->ID"),
                        'country_a' => Html::encode("$mat5->country"),
                        'country_b' => Html::encode("$mat5->sec_country"),
                        'timestamp' => $mat5->date,
                        'position' => $i,
                        'score_a' => Html::encode("$mat5->score"),
                        'score_b' => Html::encode("$mat5->sec_score"),
                        'url'=>"#",
                    ]);
                    ?>
                <?php endforeach;?>
        </ul> 
    </div>

    <?= PageHeadWidget::widget([
        'text' => "热门文章"
    ]) ?>

    <?php echo NewsBarWidget::widget([
        'title' => '2018世界杯“战报”:亚马逊上哪些国家级明星球员的球衣最热销?',
        'imgUrl'=> '../web/static/news/20180723/cosmic.jpg',
        'brief'=>'国际足联世界杯（FIFA）是世界上最高规格、最高竞技水平、最高知名度的足球
                比赛，共有32支球队参加，进行64场比赛，分别在11个不同的主办城市的12座体育场进行。
                根据国际足联的数据显示，2014年世界杯的收视率创下世界纪录，观看世界杯的观众超过32亿，
                其中，有超过10亿观众观看德国和阿根廷之间的决赛。在美国，观看世界杯的人数一直在增长，
                今年美国有望成为史上观看世界杯人数最多的国家。 ',
    ]) ?>
    <?php echo NewsBarWidget::widget([
        'title' => 'title',
        'imgUrl'=> '../web/static/news/20180723/cosmic.jpg',
        'brief'=>'a brief',
    ]) ?>
    <?php echo NewsBarWidget::widget([
        'title' => 'title',
        'imgUrl' => '../web/static/news/20180723/cosmic.jpg',
        'brief' => 'a brief',
    ]) ?>

    <div class="link-big text-right">
        <a href="./#">
            更多最新世界杯动态、对阵战报？立即查看
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>

</div>
