<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Player */

$this->title = Yii::t('app', 'Create Player');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Players'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="player-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
