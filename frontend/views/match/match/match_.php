<?php

use frontend\components\NewsBarWidget;
use frontend\components\CutBarWidget;
use frontend\components\KnockoutCellWidget;
use yii\helpers\Html;
use frontend\models\Match;
use frontend\components\PageHeadWidget;
/* @var $this yii\web\View */
$this->title = '淘汰赛';
?>
<!--div class="site-match">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>比赛日程查询:</p>

    <!-- <code><?= __FILE__ ?></code> -->
</div-->

<!--?php
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
?-->

<?= CutBarWidget::widget([
    'content' => '淘汰赛对阵',
    'font' => "font-size: 140%; color: #555;margin-top: -3px;"
]) ?>

    <?php foreach ($match_ as $label => $match_) : ?> 
        <?php PageHeadWidget::begin([
            'text' => $label,
            'hasBorder' => true,
        ]) ?>
        <div style="padding:5px 5px 10px">
            <table class="table table-striped">
                <thead><tr>
                    <th>比赛时间</th>
                    <th>比赛地点</th>
                    <th>对阵情况</th>
                </tr></thead>
                <tbody> 
                    <?php foreach($match_ as $mat):
                    if ($mat->status=="0"): ?>
                        <tr>
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
                                <?= Html::encode("$mat->score") ?>:<?= Html::encode("$mat->sec_score") ?>    
                                <?= Html::encode("$mat->sec_country") ?>  
                            </td>
                        </tr>
                    <?php endif;
                    endforeach; ?>  
                </tbody>
            </table>
        </div>
        <?php PageHeadWidget::end() ?>
    <?php endforeach; ?>
