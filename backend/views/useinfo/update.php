<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Useinfo */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Useinfo',
]) . $model->useID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Useinfos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->useID, 'url' => ['view', 'id' => $model->useID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="useinfo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
