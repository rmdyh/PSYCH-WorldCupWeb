<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PlayerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Players');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="player-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'haoma',
            'country',
            'name',
            'postion',
            'height',
            'weight',
            'birthdate',
            'attended',
            'totaltime',
            //'image',
            'jinqiu',
            'zhugong',
            'shemen',
            'shezheng',
            'chuanqiu',
            'shiqiu',
            'pujiu',
            'hongpai',
            'huangpai',
            //'click',
            'status',
            //'year',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
