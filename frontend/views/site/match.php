<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\app\db;
use frontend\models\Match;
use yii\widgets\ActiveForm;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;

$this->title = '赛程一览';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-match">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>比赛日程查询:</p>

    <!-- <code><?= __FILE__ ?></code> -->
</div>

<div class="site-info">
<button type="button" class="btn btn-link">小组赛赛程安排</button>
<button type="button" class="btn btn-link">淘汰赛赛程安排</button>
</div>

 <!-- <table class="tdlink" cellspacing="0" cellpadding="10" width="950" heigth="350" bgcolor="#ffffff" border="1">
    <tr>
        <td align="center" bgcolor="#fbfeff" colspan="11"><div align="left">
        	<div id="introduce1"></div>
        </td>
    </tr>
    <tr>
    	<td>日期</td>
    	<td>场馆</td>
    	<td>对阵</td>
    	<td>详情</td>
    <tr>
 </table> -->


   




