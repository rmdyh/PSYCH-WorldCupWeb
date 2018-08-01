<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Passage */

$this->title = 'Create Passage';
$this->params['breadcrumbs'][] = ['label' => 'Passages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="passage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
