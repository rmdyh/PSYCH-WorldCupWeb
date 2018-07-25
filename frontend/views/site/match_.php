<?php

use frontend\components\NewsBarWidget;
use frontend\components\CutBarWidget;
use frontend\components\KnockoutCellWidget;
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title = '淘汰赛';
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
        'content' => '淘汰赛对阵',
        'font' => "font-size: 140%; color: #555;margin-top: -3px;"
    ]) ?>
    <div class="knockout-match">
        <img class="bg" src="../web/static/against_bg.png"/>
        <ul>
            <?php
                for($i=1;$i<=16;$i++)
                    echo KnockoutCellWidget::widget([
                        'id' => 1,
                        'country_a' => "巴西",
                        'country_b' => "巴东",
                        'date' => date_create("2018-07-13"),
                        'position' => $i,
                        'score_a' => '1',
                        'score_b' => '0',
                        'url'=>"#",
                    ])
            ?>
        </ul>
    </div>