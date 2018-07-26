<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\app\db;
use frontend\models\Match;
use yii\widgets\ActiveForm;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use frontend\components\NewsBarWidget;
use frontend\components\CutBarWidget;
use frontend\components\KnockoutCellWidget;


$this->title = '球队详细信息';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-match">
    <h1><?= Html::encode($this->title) ?></h1>

    <!-- <code><?= __FILE__ ?></code> -->
</div>


 <?php echo NewsBarWidget::widget([
        'title' => '俄罗斯',
        'imgUrl'=> '../web/static/country/俄罗斯.png',
         
    ]) ?>
   


