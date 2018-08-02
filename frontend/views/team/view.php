<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\components\KnockoutCellWidget;
use frontend\components\CutBarWidget;
use yii\helpers\URL;
use frontend\models\Player;
use frontend\components\NewsBarWidget;
use frontend\models\Match;
use frontend\models\TeamMatch;
use frontend\components\PageHeadWidget;

/* @var $this yii\web\View */
/* @var $model frontend\models\Team */

$this->title = $model->country;
$this->params['breadcrumbs'][] = ['label' => 'Teams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
    <div class="team-view">
        <?php PageHeadWidget::begin([
                   'text' => "球队基本信息",
                    'hasBorder' => true,
                     ]) ?>
        <div class="page-wrap">
            <h3 class="team-name">
                <?= Html::encode($this->title) ?>
            </h3>
            <div class="row">
                <div class="col-md-4 team-flag">
                    <img src=<?php echo URL::to( 'static/country/'.$model->country.'.png')?> alt>
                </div>
                <div class="col-md-4 team-info">
                    <div class="text">
                        <span class="counter">
                            <?=$model->coach?>
                        </span>
                        <span class="tag">球队教练</span>
                    </div>
                    <div class="text">
                        <span class="counter">
                            <?=$model->createtime?>年</span>
                        <span class="tag">球队成立时间</span>
                    </div>
                    <div class="text">
                        <span class="counter">
                            <?=$model->jointime?>年</span>
                        <span class="tag">加入世界杯时间</span>
                    </div>
                </div>
                <div class="col-md-4 team-info">
                    <div class="text">
                        <span class="counter">
                            <?=$model->attendedtime?>次</span>
                        <span class="tag">参加世界杯次数</span>
                    </div>
                    <div class="text">
                        <span class="counter">
                            <?=$model->history?>次</span>
                        <span class="tag">冠军次数</span>
                    </div>
                    <div class="text">
                        <span class="counter">
                            <?=$model->rank?>名</span>
                        <span class="tag">世界排名</span>
                    </div>
                </div>
            </div>
        </div>
        <?php PageHeadWidget::end() ?>

        <?php PageHeadWidget::begin([
                   'text' => "对内球员本届世界杯技术统计",
                    'hasBorder' => true,
                     ]) ?>
        <div class="page-wrap">
            <table class="table table-striped" style="margin-top:0">
                <thead>
                    <tr>
                        <th>
                            号码
                        </th>
                        <th>
                            球员姓名
                        </th>
                        <th>
                            球员位置
                        </th>
                        <th>
                            上场次数
                        </th>
                        <th>
                            总出场时间
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $player=Player::find()->where(["country" => $model->country])->all();

            foreach($player as $mat): 
                if ($mat->status=="0"):?>

                    <tr>
                        <td>

                            <?= Html::encode("$mat->haoma") ?>
                        </td>
                        <td>
                            <?= Html::beginTag('a',['href'=> "./?r=player%2Fview&id=".$mat->name])?>
                                <?= Html::encode("$mat->name") ?>
                        </td>
                        <td>
                            <?= Html::encode("$mat->postion") ?>
                        </td>
                        <td>
                            <?= Html::encode("$mat->attended") ?>
                                次
                        </td>
                        <td>
                            <?= Html::encode("$mat->totaltime") ?>
                                分钟
                        </td>
                    </tr>
                    <?php endif;
                    endforeach;?>
                </tbody>
            </table>
        </div>
        <?php PageHeadWidget::end() ?>

        <?php PageHeadWidget::begin([
                   'text' => "球队本届世界杯各场比赛技术统计",
                    'hasBorder' => true,
                     ]) ?>
        <div class="page-wrap">
            <div class="row margin-none">
                <div class="col-md-4 padding-none">
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
                            <?php  $match=Match::find()->where(['or',['country'=>$model->country],['sec_country'=>$model->country]])->all();
                        foreach($match as $mat): 
                            if($mat->status=="0"):?>
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
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    角球

                                </th>
                                <th>
                                    越位

                                </th>
                                <th>
                                    射门

                                </th>
                                <th>
                                    换人

                                </th>
                                <th>
                                    犯规

                                </th>
                                <th>
                                    任意球

                                </th>
                                <th>
                                    救球

                                </th>
                                <th>
                                    黄牌

                                </th>
                                <th>
                                    控球率

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  $teammatch=TeamMatch::find()->where(["team"=>$model->country])->orderBy("match_ID")->all();
                        foreach($teammatch as $mat): ?>
                            <tr>
                                <td>
                                    <?= Html::encode("$mat->jiaoqiu") ?>
                                </td>
                                <td>
                                    <?= Html::encode("$mat->yuewei") ?>
                                </td>
                                <td>
                                    <?= Html::encode("$mat->shemen") ?>
                                </td>
                                <td>
                                    <?= Html::encode("$mat->huanren") ?>
                                </td>
                                <td>
                                    <?= Html::encode("$mat->fangui") ?>
                                </td>
                                <td>
                                    <?= Html::encode("$mat->renyiqiu") ?>
                                </td>
                                <td>
                                    <?= Html::encode("$mat->jiuqiu") ?>
                                </td>
                                <td>
                                    <?= Html::encode("$mat->huangpai") ?>
                                </td>
                                <td>
                                    <?= Html::encode("$mat->kongqiulv") ?>
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