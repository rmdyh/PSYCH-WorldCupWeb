<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Match */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Matches'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="match-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'country',
            'score',
            'sec_country',
            'sec_score',
            'ID',
            'date',
            'time1',
            'time2',
            'time3',
            'place',
            'stage',
            'status',
            'url:url',
        ],
    ]) ?>

</div>
