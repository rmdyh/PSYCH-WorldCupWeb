<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TeamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Teams');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'country',
            'coach',
            'history',
            'jointime',
            'createtime',
            'attendedtime',
            'rank',
            //'image',
            'introduction:ntext',
            'f_group',
            'jifen',
            'win',
            'lose',
            'equal',
            'get_score',
            'lose_score',
            'jing_score',
            'status',
            'year',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
