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
 A组
 <table class="table table-border">
    <tr>
       <th>
            比赛时间
        </th>
         <th>
            比赛地点
        </th>
         <th>
        </th>
        <th>
            对阵情况
        </th>
        <th>
        </th>
    <tr> 
 <?php $match=Match::find()->where(["stage" => "小组赛A"])->all();

    foreach($match as $mat): ?>
        
        <td>
         <?= Html::encode("$mat->time1") ?> 
          <?= Html::encode("$mat->time2") ?> 
          <?= Html::encode("$mat->time3") ?> 
        </td>
        <td>
         <?= Html::encode("$mat->place") ?>  
        </td>
        <td>
         <?= Html::encode("$mat->country") ?>  
        </td>
        <td>
         <?= Html::encode("$mat->score") ?>
         ——
        <?= Html::encode("$mat->sec_score") ?>    
        </td>
        <td>
         <?= Html::encode("$mat->sec_country") ?>  
        </td>
       
    </tr>
  
   <?php endforeach;?>
  </table>


   B组
 <table class="table table-border">
   <tr>
       <th>
            比赛时间
        </th>
         <th>
            比赛地点
        </th>
         <th>
        </th>
        <th>
            对阵情况
        </th>
        <th>
        </th>
    <tr> 
 <?php $match=Match::find()->where(["stage" => "小组赛B"])->all();

    foreach($match as $mat): ?>
        
        <td>
         <?= Html::encode("$mat->time1") ?> 
          <?= Html::encode("$mat->time2") ?> 
          <?= Html::encode("$mat->time3") ?> 
        </td>
        <td>
         <?= Html::encode("$mat->place") ?>  
        </td>
        <td>
         <?= Html::encode("$mat->country") ?>  
        </td>
        <td>
         <?= Html::encode("$mat->score") ?>
         ——
        <?= Html::encode("$mat->sec_score") ?>    
        </td>
        <td>
         <?= Html::encode("$mat->sec_country") ?>  
        </td>
       
    </tr>
  
   <?php endforeach;?>
  </table>

 C组
 <table class="table table-border">
   <tr>
       <th>
            比赛时间
        </th>
         <th>
            比赛地点
        </th>
         <th>
        </th>
        <th>
            对阵情况
        </th>
        <th>
        </th>
    <tr> 
 <?php $match=Match::find()->where(["stage" => "小组赛C"])->all();

    foreach($match as $mat): ?>
        
        <td>
         <?= Html::encode("$mat->time1") ?> 
          <?= Html::encode("$mat->time2") ?> 
          <?= Html::encode("$mat->time3") ?> 
        </td>
        <td>
         <?= Html::encode("$mat->place") ?>  
        </td>
        <td>
         <?= Html::encode("$mat->country") ?>  
        </td>
        <td>
         <?= Html::encode("$mat->score") ?>
         ——
        <?= Html::encode("$mat->sec_score") ?>    
        </td>
        <td>
         <?= Html::encode("$mat->sec_country") ?>  
        </td>
       
    </tr>
  
   <?php endforeach;?>
  </table>

 D组
 <table class="table table-border">
   <tr>
       <th>
            比赛时间
        </th>
         <th>
            比赛地点
        </th>
         <th>
        </th>
        <th>
            对阵情况
        </th>
        <th>
        </th>
    <tr> 
 <?php $match=Match::find()->where(["stage" => "小组赛D"])->all();

    foreach($match as $mat): ?>
        
        <td>
         <?= Html::encode("$mat->time1") ?> 
          <?= Html::encode("$mat->time2") ?> 
          <?= Html::encode("$mat->time3") ?> 
        </td>
        <td>
         <?= Html::encode("$mat->place") ?>  
        </td>
        <td>
         <?= Html::encode("$mat->country") ?>  
        </td>
        <td>
         <?= Html::encode("$mat->score") ?>
         ——
        <?= Html::encode("$mat->sec_score") ?>    
        </td>
        <td>
         <?= Html::encode("$mat->sec_country") ?>  
        </td>
       
    </tr>
  
   <?php endforeach;?>
  </table>

 E组
 <table class="table table-border">
    <tr>
       <th>
            比赛时间
        </th>
         <th>
            比赛地点
        </th>
         <th>
        </th>
        <th>
            对阵情况
        </th>
        <th>
        </th>
    <tr> 
 <?php $match=Match::find()->where(["stage" => "小组赛E"])->all();

    foreach($match as $mat): ?>
        
        <td>
         <?= Html::encode("$mat->time1") ?> 
          <?= Html::encode("$mat->time2") ?> 
          <?= Html::encode("$mat->time3") ?> 
        </td>
        <td>
         <?= Html::encode("$mat->place") ?>  
        </td>
        <td>
         <?= Html::encode("$mat->country") ?>  
        </td>
        <td>
         <?= Html::encode("$mat->score") ?>
         ——
        <?= Html::encode("$mat->sec_score") ?>    
        </td>
        <td>
         <?= Html::encode("$mat->sec_country") ?>  
        </td>
       
    </tr>
  
   <?php endforeach;?>
  </table>

 F组
 <table class="table table-border">
  <tr>
       <th>
            比赛时间
        </th>
         <th>
            比赛地点
        </th>
         <th>
        </th>
        <th>
            对阵情况
        </th>
        <th>
        </th>
    <tr> 
 <?php $match=Match::find()->where(["stage" => "小组赛F"])->all();

    foreach($match as $mat): ?>
        
        <td>
         <?= Html::encode("$mat->time1") ?> 
          <?= Html::encode("$mat->time2") ?> 
          <?= Html::encode("$mat->time3") ?> 
        </td>
        <td>
         <?= Html::encode("$mat->place") ?>  
        </td>
        <td>
         <?= Html::encode("$mat->country") ?>  
        </td>
        <td>
         <?= Html::encode("$mat->score") ?>
         ——
        <?= Html::encode("$mat->sec_score") ?>    
        </td>
        <td>
         <?= Html::encode("$mat->sec_country") ?>  
        </td>
       
    </tr>
  
   <?php endforeach;?>
  </table>

 G组
 <table class="table table-border">
   <tr>
       <th>
            比赛时间
        </th>
         <th>
            比赛地点
        </th>
         <th>
        </th>
        <th>
            对阵情况
        </th>
        <th>
        </th>
    <tr> 
 <?php $match=Match::find()->where(["stage" => "小组赛G"])->all();

    foreach($match as $mat): ?>
        
        <td>
         <?= Html::encode("$mat->time1") ?> 
          <?= Html::encode("$mat->time2") ?> 
          <?= Html::encode("$mat->time3") ?> 
        </td>
        <td>
         <?= Html::encode("$mat->place") ?>  
        </td>
        <td>
         <?= Html::encode("$mat->country") ?>  
        </td>
        <td>
         <?= Html::encode("$mat->score") ?>
         ——
        <?= Html::encode("$mat->sec_score") ?>    
        </td>
        <td>
         <?= Html::encode("$mat->sec_country") ?>  
        </td>
       
    </tr>
  
   <?php endforeach;?>
  </table>

 H组
 <table class="table table-border">
    <tr>
       <th>
            比赛时间
        </th>
         <th>
            比赛地点
        </th>
         <th>
        </th>
        <th>
            对阵情况
        </th>
        <th>
        </th>
    <tr> 
 <?php $match=Match::find()->where(["stage" => "小组赛H"])->all();

    foreach($match as $mat): ?>
        
        <td>
         <?= Html::encode("$mat->time1") ?> 
          <?= Html::encode("$mat->time2") ?> 
          <?= Html::encode("$mat->time3") ?> 
        </td>
        <td>
         <?= Html::encode("$mat->place") ?>  
        </td>
        <td>
         <?= Html::encode("$mat->country") ?>  
        </td>
        <td>
         <?= Html::encode("$mat->score") ?>
         ——
        <?= Html::encode("$mat->sec_score") ?>    
        </td>
        <td>
         <?= Html::encode("$mat->sec_country") ?>  
        </td>
       
    </tr>
  
   <?php endforeach;?>
  </table>




