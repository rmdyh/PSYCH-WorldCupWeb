<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Passage */

$this->title = 'Update Passage: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Passages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="passage-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
