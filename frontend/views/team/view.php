<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\components\KnockoutCellWidget;
use frontend\components\CutBarWidget;
use yii\helpers\URL;
use frontend\models\Player;
use frontend\components\NewsBarWidget;
use frontend\models\Match;
use frontend\models\TeamMatch;
use frontend\components\PageHeadWidget;

/* @var $this yii\web\View */
/* @var $model frontend\models\Team */

$this->title = $model->country;
$this->params['breadcrumbs'][] = ['label' => 'Teams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-view">
<?php PageHeadWidget::begin([
                   'text' => "球队基本信息",
                    'hasBorder' => true,
                     ]) ?>
   <h1><?= Html::encode($this->title) ?></h1> 

 <!--    <p>
        <?= Html::a('Update', ['update', 'id' => $model->country], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->country], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p> -->
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'country',
            //'coach',
           // 'history',
            // 'jointime:datetime',
            // 'createtime:datetime',
            // 'attendedtime:datetime',
           // 'rank',
           // 'image',
            // 'f_group',
            // 'jifen',
            // 'win',
            // 'lose',
            // 'equal',
            // 'get_score',
            // 'lose_score',
            // 'jing_score',
        ],
    ]) ?>
   
    <div class="col-md-4">
        <img src=<?php echo URL::to('static/country/'.$model->country.'.png')?> alt>
        <!-- <img src=<?php echo URL::to('static/country/俄罗斯.png')?> alt> -->
    </div>
     <div class="col-md-4">
                                    <div class="row">
                                      
                                            <!--Team Stats End-->
                                            <div class="text">
                                                <h2 class="counter"><?=$model->coach?></h2>
                                                <span>球队教练</span>
                                            </div>
                                            <!--Team Stats End-->
                             
                                  
                                            <!--Team Stats End-->
                                            <div class="text">
                                                <h2 class="counter"><?=$model->createtime?>年</h2>
                                                <span>球队成立时间</span>
                                            </div>
                                            <!--Team Stats End-->
                             
                                            <!--Team Stats End-->
                                            <div class="text">
                                                <h2 class="counter"><?=$model->jointime?>年</h2>
                                                <span>加入世界杯时间</span>
                                            </div>
                                            <!--Team Stats End-->
                                      
                                  </div>
                              </div>
                                    <div class="col-md-4">

                                            <!--Team Stats End-->
                                            <div class="text">
                                                <h2 class="counter"><?=$model->attendedtime?>次</h2>
                                                <span>参加世界杯次数</span>
                                            </div>
                                            <!--Team Stats End-->
                                      
                                       
                                            <!--Team Stats End-->
                                            <div class="text">
                                                <h2 class="counter"><?=$model->history?>次</h2>
                                                <span>冠军次数</span>
                                            </div>
                                            <!--Team Stats End-->
                                      
                                      
                                            <!--Team Stats End-->
                                            <div class="text">
                                                <h2 class="counter"><?=$model->rank?>名</h2>
                                                <span>世界排名</span>
                                         
                                            <!--Team Stats End-->
                                        </div>
                                    </div>

      </div>
                       
 <?php PageHeadWidget::begin([
                   'text' => "对内球员本届世界杯技术统计",
                    'hasBorder' => true,
                     ]) ?>
                     <br>
                     <br>
 <table class="table table-striped table-hover table table-bordered" style="margin-top:0">
    <tr>
       <th>
            号码
        </th>
         <th>
           球员姓名
        </th>
         <th>
            球员位置
        </th>
        <th>
            上场次数
        </th>
        <th>
            总出场时间
        </th>
    <tr> 
         <?php $player=Player::find()->where(["country" => $model->country])->all();

    foreach($player as $mat): ?>
        
        <td>

         <?= Html::encode("$mat->haoma") ?> 
        </td>
        <td>
            <?= Html::beginTag('a',['class'=> "wrap-team-icon" ,'href'=> "./?r=player%2Fview&id=".$mat->name])?>
         <?= Html::encode("$mat->name") ?>  
        </td>
        <td>
         <?= Html::encode("$mat->postion") ?>  
        </td>
        <td>
         <?= Html::encode("$mat->attended") ?>
          次
        </td>
        <td>
        <?= Html::encode("$mat->totaltime") ?> 
        分钟
             </td>
       
    </tr>
  
   <?php endforeach;?>
  </table>

 <?php PageHeadWidget::begin([
                   'text' => "球队本届世界杯各场比赛技术统计",
                    'hasBorder' => true,
                     ]) ?>
                     <br>
                     <br>
 <div class="col-md-4">
   <table class="table table-striped table-hover">
    <tr>
       <th>
            比赛阶段
        </th>
         <th>    
        </th>
         <th>
          对阵情况
        </th>
        <th>
        </th>
        
    <tr> 
  <?php  $match=Match::find()->where(['or',['country'=>$model->country],['sec_country'=>$model->country]])->all();

    foreach($match as $mat): ?> 
        <td>
          <?= Html::encode("$mat->stage") ?>  
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
</div>
 <div class="col-md-8">
 <table class="table table-striped table-hover">
    <tr>
       <th>
            角球次数

        </th>
        <th>
            越位次数

        </th>
        <th>
            射门数

        </th>
        <th>
           换人次数

        </th>
        <th>
            犯规次数

        </th>
        <th>
           任意球次数

        </th>
        <th>
            救球次数

        </th>
        <th>
            黄牌次数

        </th>
        <th>
            全场控球率

        </th>
    </tr>
    <?php  $teammatch=TeamMatch::find()->where(["team"=>$model->country])->orderBy("match_ID")->all();

    foreach($teammatch as $mat): ?> 
        <td>
          <?= Html::encode("$mat->jiaoqiu") ?>  
         </td>
        <td>
         <?= Html::encode("$mat->yuewei") ?>  
        </td>
        <td>
         <?= Html::encode("$mat->shemen") ?>
     </td>
     <td>
        <?= Html::encode("$mat->huanren") ?>    
        </td>
        <td>
         <?= Html::encode("$mat->fangui") ?>  
        </td>
         <td>
         <?= Html::encode("$mat->renyiqiu") ?>  
        </td>
         <td>
         <?= Html::encode("$mat->jiuqiu") ?>  
        </td>
         <td>
         <?= Html::encode("$mat->huangpai") ?>  
        </td>
         <td>
         <?= Html::encode("$mat->kongqiulv") ?>  
        </td>
       
    </tr>
  
   <?php endforeach;?>
  </table>
</div>
