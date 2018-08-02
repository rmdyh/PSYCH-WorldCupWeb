<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\app\db;
use frontend\models\Match;
use yii\widgets\ActiveForm;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use frontend\components\NewsBarWidget;
use frontend\components\CutBarWidget;
use frontend\components\KnockoutCellWidget;
use frontend\models\Team;
use frontend\components\PageHeadWidget;
?>

<?= CutBarWidget::widget([
        'content' => '小组赛对阵',
        'font' => "font-size: 140%; color: #555;margin-top: -3px;"
    ]) ?>


<!-- <div class="site-info">

<button type="button" class="btn btn-link">小组赛赛程安排</button>

<button type="button" class="btn btn-link">淘汰赛赛程安排</button>
</div> -->

 <!-- <table class="tdlink" cellspacing="0" cellpadding="10" width="950" heigth="350" bgcolor="#ffffff" border="1">
    <tr>
        <td align="center" bgcolor="#fbfeff" colspan="11"><div align="left">
        	<div id="introduce1"></div>
        </td>
    </tr>
    <tr>
    	<td>日期</td>
    	<td>场馆</td>
    	<td>对阵</td>
    	<td>详情</td>
    <tr>
 </table> -->
<div class="col-lg-8 col-md-7">
    <?php foreach ($matchs as $label => $match): ?> 
        <?php PageHeadWidget::begin([
            'text' => $label."赛程",
            'hasBorder' => true,
        ])?>
        <div style="padding:5px 5px 10px">
            <table class="table table-striped">
                <thead><tr>
                    <th>比赛时间</th>
                    <th>比赛地点</th>
                    <th>对阵情况</th>
                </tr></thead>
                <tbody> 
                <?php foreach($match as $mat):
                   if ($mat->status=="0"):?>
                    <tr>
                        <td>
                            <?= Html::encode("$mat->time1") ?> 
                            <?= Html::encode("$mat->time2") ?> 
                            <?= Html::encode("$mat->time3") ?> 
                        </td>
                        <td>
                            <?= Html::encode("$mat->place") ?>  
                        </td>
                        <td>
                            <span><?= Html::encode("$mat->country") ?></span>
                            <span><?= Html::encode("$mat->score") ?>:<?= Html::encode("$mat->sec_score") ?></span>
                            <span><?= Html::encode("$mat->sec_country") ?></span>
                        </td>
                    </tr>
                <?php 
                endif;
                endforeach;?>
                </tbody>
            </table>
        </div>
        <?php PageHeadWidget::end()?>
    <?php endforeach;?>
</div>

<div class="col-lg-4 col-md-5">
    <?php foreach ($group as $label => $group): ?> 
        <?php PageHeadWidget::begin([
            'text' => $label."积分排行",
            'hasBorder' => true,
        ]) ?>
        <div style="padding:5px 5px 10px">
            <table class="table table-striped">
                <thead><tr>
                    <th>国家</th>
                    <th>赢</th>
                    <th>输</th>
                    <th>平</th>
                    <th>得</th>
                    <th>失</th>
                    <th>净</th>
                    <th>积分</th>
                </tr></head>
                <tbody>
                <?php foreach($group as $mat): 
                if ($mat->status=="1"):?>
                    <td>
                    <?= Html::encode("$mat->country") ?> 
                    </td>
                    <td>
                    <?= Html::encode("$mat->win") ?>  
                    </td>
                    <td>
                    <?= Html::encode("$mat->lose") ?>  
                    </td>
                    <td>
                    <?= Html::encode("$mat->equal") ?>
                    </td>
                    <td>
                    <?= Html::encode("$mat->get_score") ?>  
                    </td>
                    <td>
                    <?= Html::encode("$mat->lose_score") ?>  
                    </td>
                    <td>
                    <?= Html::encode("$mat->jing_score") ?>  
                    </td>
                    <td>
                    <?= Html::encode("$mat->jifen") ?>  
                    </td>
                </tr>
            <?php endif;
            endforeach;?>
            </tbody>
        </table>
        </div>
        <?php PageHeadWidget::end() ?>
    <?php endforeach;?>
</div>