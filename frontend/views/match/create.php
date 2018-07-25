<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Match */

$this->title = 'Create Match';
$this->params['breadcrumbs'][] = ['label' => 'Matches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="match-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
