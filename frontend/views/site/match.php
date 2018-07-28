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
use frontend\models\Team;

$this->title = '小组赛';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-match">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>比赛日程查询:</p>

    <!-- <code><?= __FILE__ ?></code> -->
</div>

<?php
 $navUrls=[
     ['label'=>'小组赛','url'=>'./?r=site%2Fmatch'],
     ['label'=>'淘汰赛','url'=>'./?r=site%2Fmatch_'],
 ];
 $nowUrl=Yii::$app->request->url;
  for ($i=0;$i<count($navUrls);$i++) {
    $navTag=$navUrls[$i]['label'];
    $navUrl=$navUrls[$i]['url'];
    $options=['class'=>null];
       if(strpos($nowUrl,substr($navUrl,1,strlen($navUrl)-1))!==FALSE){
           Html::addCssClass($options, 'focusing');
           }
        echo Html::beginTag('li',$options);
        echo Html::tag('a',$navTag,['href'=>$navUrl]);
        echo Html::endTag('li');
     }
?>
<?= CutBarWidget::widget([
        'content' => '小组赛对阵',
        'font' => "font-size: 140%; color: #555;margin-top: -3px;"
    ]) ?>


<!-- <div class="site-info">

<button type="button" class="btn btn-link">小组赛赛程安排</button>

<button type="button" class="btn btn-link">淘汰赛赛程安排</button>
</div> -->

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
     <div class="col-md-8">
 <?php foreach ($matchs as $label => $match): ?> 
    <?= $label?>

 <table class="table table-striped table-hover">
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
 <?php 

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
         :
        <?= Html::encode("$mat->sec_score") ?>    
        </td>
        <td>
         <?= Html::encode("$mat->sec_country") ?>  
        </td>
       
    </tr>
  
   <?php endforeach;?>
  </table>

<?php endforeach;?>
  </div>


     <div class="col-md-4">
 <?php foreach ($group as $label => $group): ?> 
   <?= $label?>
 <table class="table table-striped table-hover">
    <tr>
       <!--  <th>
           排名
        </th> -->
       <th>
            国家
        </th>
         <th>
            赢
        </th>
         <th>
            输
        </th>
        <th>
            平
        </th>
        <th>
            得
        </th>
        <th>
            失
        </th>
        <th>
            净
        </th>
        <th>
            积分
        </th>

    <tr> 
 
<?php 

    foreach($group as $mat): ?>
        
        <td>
         <?= Html::encode("$mat->country") ?> 
        </td>
        <td>
         <?= Html::encode("$mat->win") ?>  
        </td>
        <td>
         <?= Html::encode("$mat->lose") ?>  
        </td>
        <td>
         <?= Html::encode("$mat->equal") ?>
        </td>
        <td>
         <?= Html::encode("$mat->get_score") ?>  
        </td>
        <td>
         <?= Html::encode("$mat->lose_score") ?>  
        </td>
        <td>
         <?= Html::encode("$mat->jing_score") ?>  
        </td>
        <td>
         <?= Html::encode("$mat->jifen") ?>  
        </td>
       
    </tr>
  
   <?php endforeach;?>
     </table>
     <br>
     <br>
     <br>
     <br>
  <?php endforeach;?>

  
  </div>