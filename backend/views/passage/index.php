<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Passage;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\PassageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Passages');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="passage-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

</div>

<div class="admin-psgspan" style="margin-bottom:40px;">
    <p class="text-center" style="font-size: 140%; color: #555;margin-top:8px; ">
        待审核文章
    </p>
    <hr>
    <table class="table table-hover">
        <thead><tr>
            <th>文章id</th>
            <th>文章作者</th>
            <th>发表时间</th>
            <th>文章标题</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php $res = passage::find()->where(['status'=>'pending'])->all();
        foreach($res as $cols):?>
        <tr>
            <td>
                <?= $cols->ID?>
            </td>
            <td>
                <?= $cols->author?>
            </td>
            <td>
                <?= $cols->date?>
            </td>
            <td>
                <?= $cols->title?>
            </td>
            <td>
                <a href="http://localhost/PSYCH-WorldCupWeb/backend/web/index.php?r=passage%2Fview&id=<?= $cols->ID?>">详细信息</a>
            </td>
        </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>

<div class="admin-psgspan" style="margin-bottom:40px;">
    <p class="text-center" style="font-size: 140%; color: #555;margin-top:8px;">
        通过文章
    </p>
    <hr>
    <table class="table table-hover">
        <thead><tr>
            <th>文章id</th>
            <th>文章作者</th>
            <th>发表时间</th>
            <th>文章标题</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php $res = passage::find()->where(['status'=>'success'])->all();
        foreach($res as $cols):?>
            <tr>
                <td>
                    <?= $cols->ID?>
                </td>
                <td>
                    <?= $cols->author?>
                </td>
                <td>
                    <?= $cols->date?>
                </td>
                <td>
                    <?= $cols->title?>
                </td>
                <td>
                    <a href="http://localhost/PSYCH-WorldCupWeb/backend/web/index.php?r=passage%2Fview&id=<?= $cols->ID?>">详细信息</a>
                </td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>

<div class="admin-psgspan" style="margin-bottom:40px;">
    <p class="text-center" style="font-size: 140%; color: #555;margin-top:8px;">
        未通过文章
    </p>
    <hr>
    <table class="table table-hover">
        <thead><tr>
            <th>文章id</th>
            <th>文章作者</th>
            <th>发表时间</th>
            <th>文章标题</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php $res = passage::find()->where(['status'=>'abort'])->all();
        foreach($res as $cols):?>
            <tr>
                <td>
                    <?= $cols->ID?>
                </td>
                <td>
                    <?= $cols->author?>
                </td>
                <td>
                    <?= $cols->date?>
                </td>
                <td>
                    <?= $cols->title?>
                </td>
                <td>
                    <a href="http://localhost/PSYCH-WorldCupWeb/backend/web/index.php?r=passage%2Fview&id=<?= $cols->ID?>">详细信息</a>
                </td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>
