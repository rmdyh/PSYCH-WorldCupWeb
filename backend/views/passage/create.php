<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Passage */

$this->title = Yii::t('app', 'Create Passage');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Passages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="passage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
