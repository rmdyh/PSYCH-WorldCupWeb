<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Team */

$this->title = $model->country;
$this->params['breadcrumbs'][] = ['label' => 'Teams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->country], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->country], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'country',
            'coach',
            'history',
            'jointime:datetime',
            'createtime:datetime',
            'attendedtime:datetime',
            'rank',
            'image',
            'f_group',
            'jifen',
            'win',
            'lose',
            'equal',
            'get_score',
            'lose_score',
            'jing_score',
        ],
    ]) ?>

</div>
