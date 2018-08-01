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

 
   
    <div class="col-lg-5 col-md-5">
           
            <table class="table table-striped" style="margin-top:0">
                 <?php PageHeadWidget::begin([
            'text' => "射手榜",
            'hasBorder' => true,
        ]) ?>
                <thead>
                    <tr>
                        <th>
                            球员姓名
                        </th>
                        <th>
                            所属国家
                        </th>
                        <th>
                            进球数
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php 

            foreach($sheshou as $mat): ?>

                    <tr>
                        <td>
                            <?= Html::beginTag('a',['href'=> "./?r=player%2Fview&id=".$mat->ID])?>
                                <?= Html::encode("$mat->name") ?>
                        </td>
                        <td>
                            <?= Html::encode("$mat->country") ?>
                        </td>
                        <td>
                            <?= Html::encode("$mat->jinqiu") ?>
                                个
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
    </div>
   
<div class="col-lg-5 col-md-5">

          <table class="table table-striped" style="margin-top:0">
              <?php PageHeadWidget::begin([
            'text' => "射手榜",
            'hasBorder' => true,
        ]) ?>
                <thead>
                    <tr>
                        <th>
                            球员姓名
                        </th>
                        <th>
                            所属国家
                        </th>
                        <th>
                            助攻数
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php 

            foreach($zhugong as $mat): ?>

                    <tr>
                        <td>
                            <?= Html::beginTag('a',['href'=> "./?r=player%2Fview&id=".$mat->ID])?>
                                <?= Html::encode("$mat->name") ?>
                        </td>
                        <td>
                            <?= Html::encode("$mat->country") ?>
                        </td>
                        <td>
                            <?= Html::encode("$mat->zhugong") ?>
                                个
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
</div>
   

</div>
