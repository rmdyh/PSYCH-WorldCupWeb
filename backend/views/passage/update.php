<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Passage */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Passage',
]) . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Passages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="passage-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
