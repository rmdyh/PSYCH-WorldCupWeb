<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Team */

$this->title = 'Update Team: ' . $model->country;
$this->params['breadcrumbs'][] = ['label' => 'Teams', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->country, 'url' => ['view', 'id' => $model->country]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="team-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
