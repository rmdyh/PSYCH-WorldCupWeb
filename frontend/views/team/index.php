<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TeamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teams';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Team', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'country',
            'coach',
            'history',
            'jointime:datetime',
            'createtime:datetime',
            // 'attendedtime:datetime',
            // 'rank',
            // 'image',
            // 'f_group',
            // 'jifen',
            // 'win',
            // 'lose',
            // 'equal',
            // 'get_score',
            // 'lose_score',
            // 'jing_score',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
