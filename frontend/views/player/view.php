<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\models\Player;
use frontend\models\Match;
use frontend\models\PlayerMatch;
use frontend\components\PageHeadWidget;

/* @var $this yii\web\View */
/* @var $model frontend\models\Player */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Players', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="player-view">
   <?php PageHeadWidget::begin([
        'text' => "球员基本信息",
        'hasBorder' => true,
        ]) ?>

 <div class="page-wrap">
       <div class="row">
            <div class="col-md-4 team-flag">
                <img src=<?=$model->image?>>

            </div>
            <div class="col-md-4 team-info">
                <div class="text">
                    <span>姓名</span>
                        <h2 class="counter"><?=$model->name?></h2>  
                </div>      

                <div class="text">
                    <span>球队号码</span>
                        <h2 class="counter"><?=$model->haoma?>号</h2>
                </div>

                 <div class="text">
                    <span>球队位置</span>
                        <h2 class="counter"><?=$model->postion?></h2>         
                </div>
            </div>
            <div class="col-md-4 team-info">
                 <div class="text">
                     <span>身高</span>
                     <h2 class="counter"><?=$model->height?></h2>   
                </div>

                 <div class="text">
                    <span>体重</span>
                    <h2 class="counter"><?=$model->weight?></h2>
                </div>

                 <div class="text">
                     <span>生日</span>
                    <h2 class="counter"><?=$model->birthdate?></h2>
                </div>    
             </div>
        </div>
    </div>


   <?php PageHeadWidget::end() ?>


    <?php PageHeadWidget::begin([
        'text' => "本届世界杯技术统计",
        'hasBorder' => true,
        ]) ?>
<div class="page-wrap">
    <table class="table table-striped table-hover table table-bordered" style="margin-top:0">
        <thead>
             <tr>
                <th>
                    球员位置
                </th>
                <th>
                    上场次数
                </th>
                <th>
                    上场总时长
                </th>

                <th>
                    进球数
                </th>
                <th>
                    助攻数
                </th>
                <th>
                    射门次数
                </th>
                <th>
                    射正次数
                </th>
                <th>
                    传球次数
                </th>
                <th>
                    扑救次数
                </th>
                <th>
                    失球数
                </th>
                <th>
                    黄牌数
                </th>
                <th>
                    红牌数
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($player as $mat): ?>
                <tr>
                  <td>
                    <?= Html::encode("$mat->postion") ?>  
                    </td>
                    <td>
                    <?= Html::encode("$mat->attended") ?>次
                    </td>
                    <td>
                    <?= Html::encode("$mat->totaltime") ?> 分钟
                    </td>

                    <td>
                    <?= Html::encode("$mat->jinqiu") ?> 
                    </td>
                    <td>
                    <?= Html::encode("$mat->zhugong") ?>  
                    </td>

                    <td>
                    <?= Html::encode("$mat->shemen") ?> 
                    </td>
                    <td>
                    <?= Html::encode("$mat->shezheng") ?>  
                    </td>
                    <td>
                    <?= Html::encode("$mat->chuanqiu") ?> 
                    </td>
                    <td>
                    <?= Html::encode("$mat->pujiu") ?>  
                    </td>

                    <td>
                    <?= Html::encode("$mat->shiqiu") ?> 
                    </td>
                    <td>
                    <?= Html::encode("$mat->huangpai") ?>  
                    </td>
                    <td>
                    <?= Html::encode("$mat->hongpai") ?>  
                    </td>

                </tr>

            <?php endforeach;?>
        </tbody>
    </table>
</div>
  <?php PageHeadWidget::end() ?>

  <?php PageHeadWidget::begin([
        'text' => "球员各场比赛技术统计",
        'hasBorder' => true,
         ]) ?>
       <div class="page-wrap">
            <div class="row margin-none">
               <div class="col-md-4 padding-none">
                <br>
                <br>
                <br>
                  <table class="table table-striped" class="text-center">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    比赛阶段
                                </th>
                                <th class="text-center">
                                    对阵情况
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                         <?php  foreach($match as $mat):
                         if ($mat->status=="0"): ?> 
                            <tr>
                                <td>
                                    <?= Html::encode("$mat->stage") ?>  
                                </td>
                                <td>
                                    <?= Html::encode("$mat->country") ?>  
                                </td>
                                <td>
                                    <?= Html::encode("$mat->score") ?>
                                        :
                                    <?= Html::encode("$mat->sec_score") ?>    
                                </td>
                                <td>
                                    <?= Html::encode("$mat->sec_country") ?>  
                                </td>

                            </tr>

                        <?php endif;
                        endforeach;?>
                    </tbody>
                </table>
            </div>

           <div class="col-md-8 padding-none">
                <table class="table table-striped table-hover">
                    <thead>
                       <tr>
                            <th>首发</th>
                            <th>
                                进球数

                            </th>
                            <th>
                                助攻数
                            </th>
                            <th>
                                射正次数

                            </th>
                            <th>
                                射偏次数
                            </th>

                            <th>
                                黄牌数

                            </th>
                            <th>
                                红牌数

                            </th>
                            <th>
                                抢断次数

                            </th>
                            <th>
                                封堵次数

                            </th>
                            <th>
                                截断次数

                            </th>
                            <th>
                                头球次数

                            </th>
                            <th>
                                传球次数

                            </th>
                            <th>
                                成功传球次数

                            </th>
                            <th>
                                越位次数

                            </th>
                            <th>
                                失球数
                            </th>
                            <th>
                                扑救次数

                            </th>
                            <th>
                                扑救成功次数

                            </th>
                            <th>
                                长传次数

                            </th>
                            <th>
                                创造机会次数

                            </th>
                        </tr>
                    </thead>
                     <tbody>


                    <?php  foreach($playermatch1 as $mat): ?>
                        <tr> 
                            <td>
                                <?= Html::encode("$mat->shoufa") ?>  
                            </td>
                            <td>
                                <?= Html::encode("$mat->jinqiu") ?>  
                            </td>
                            <td>
                                <?= Html::encode("$mat->zhugong") ?>  
                            </td>
                            <td>
                                <?= Html::encode("$mat->shezheng") ?>
                            </td>
                            <td>
                                <?= Html::encode("$mat->shepian") ?>
                            </td>
                            <td>
                                <?= Html::encode("$mat->huangpai") ?>    
                            </td>
                            <td>
                                <?= Html::encode("$mat->hongpai") ?>  
                            </td>
                            <td>
                                <?= Html::encode("$mat->qiangduan") ?>  
                            </td>
                            <td>
                                <?= Html::encode("$mat->fengdu") ?>  
                            </td>
                            <td>
                                <?= Html::encode("$mat->lanjie") ?>  
                            </td>
                            <td>
                                <?= Html::encode("$mat->touqiu") ?>  
                            </td>

                            <td> 
                                <?= Html::encode("$mat->chuanqiu") ?>  
                            </td>
                            <td>
                                <?= Html::encode("$mat->chengchuan") ?>  
                            </td>
                            <td>
                                <?= Html::encode("$mat->yuewei") ?>
                            </td>
                            <td>
                                <?= Html::encode("$mat->shiqiu") ?>
                            </td>
                            <td>
                                <?= Html::encode("$mat->pujiuzong") ?>    
                            </td>
                            <td>
                                <?= Html::encode("$mat->pujiucheng") ?>  
                            </td>
                            <!--  <td>
                            <?= Html::encode("$mat->dianqiucheng") ?>  
                            </td> -->
                            <td>
                                <?= Html::encode("$mat->changchuan") ?>  
                            </td>
                            <td>
                                <?= Html::encode("$mat->jihui") ?>  
                            </td>
                        </tr>

                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
  <?php PageHeadWidget::end() ?>
</div>