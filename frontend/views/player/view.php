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
                <div class="col-md-4 team-info col-xs-6">
                    <div class="text">
                        <span class="counter">
                            <?=$model->name?>
                        </span>
                        <span class="tag">姓名</span>
                    </div>
                    <div class="text">
                        <span class="counter">
                            <?=$model->haoma?>号</span>
                        <span class="tag">球队号码</span>
                    </div>
                    <div class="text">
                        <span class="counter">
                            <?=$model->postion?>
                        </span>
                        <span class="tag">球队位置</span>
                    </div>
                </div>
                <div class="col-md-4 team-info col-xs-6">
                    <div class="text">
                        <span class="counter">
                            <?=$model->height?>
                        </span>
                        <span class="tag">身高</span>
                    </div>
                    <div class="text">
                        <span class="counter">
                            <?=$model->weight?>
                        </span>
                        <span class="tag">体重</span>
                    </div>
                    <div class="text">
                        <span class="counter">
                            <?=$model->birthdate?>
                        </span>
                        <span class="tag">生日</span>
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
            <table class="table table-striped text-center" style="margin-top:0">
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
                    <table class="table table-striped text-center">
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
                                    <?= Html::encode("$mat->score") ?>
                                        :
                                    <?= Html::encode("$mat->sec_score") ?>
                                    <?= Html::encode("$mat->sec_country") ?>
                                </td>
                            </tr>
                            <?php endif;
                        endforeach;?>
                        </tbody>
                    </table>
                </div>

                <div class="col-md-8 padding-none">
                    <table class="table table-striped text-center"">
                        <thead>
                            <tr>
                                <th>首发</th>
                                <th>
                                    进球
                                </th>
                                <th>
                                    助攻
                                </th>
                                <th>
                                    射正
                                </th>
                                <th>
                                    黄牌

                                </th>
                                <th>
                                    红牌

                                </th>
                                <th>
                                    传球

                                </th>
                                <th>
                                    成功传球

                                </th>
                                <th>
                                    长传

                                </th>
                                <th>
                                    创造机会
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
                                    <?= Html::encode("$mat->huangpai") ?>
                                </td>
                                <td>
                                    <?= Html::encode("$mat->hongpai") ?>
                                </td>
                                <td>
                                    <?= Html::encode("$mat->chuanqiu") ?>
                                </td>
                                <td>
                                    <?= Html::encode("$mat->chengchuan") ?>
                                </td>
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