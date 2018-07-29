<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Team */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Team',
]) . $model->country;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Teams'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->country, 'url' => ['view', 'id' => $model->country]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="team-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
