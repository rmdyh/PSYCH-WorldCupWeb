<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Match */

$this->title = 'Update Match: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Matches', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="match-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
