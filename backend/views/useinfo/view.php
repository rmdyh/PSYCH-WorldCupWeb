<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Useinfo */

$this->title = $model->useID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Useinfos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="useinfo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->useID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->useID], [
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
            'useID',
            'sex',
            'image',
            'introduction',
        ],
    ]) ?>

</div>
