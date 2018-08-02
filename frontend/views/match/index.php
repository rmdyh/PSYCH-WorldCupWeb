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
use frontend\components\PageHeadWidget;

?>
<!--div class="site-match">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>比赛日程查询:</p>

    <!-- <code><?= __FILE__ ?></code> -->
</div-->

<!--?php
$navUrls = [
    ['label' => '小组赛', 'url' => './?r=site%2Fmatch'],
    ['label' => '淘汰赛', 'url' => './?r=site%2Fmatch_'],
];
$nowUrl = Yii::$app->request->url;
for ($i = 0; $i < count($navUrls); $i++) {
    $navTag = $navUrls[$i]['label'];
    $navUrl = $navUrls[$i]['url'];
    $options = ['class' => null];
    if (strpos($nowUrl, substr($navUrl, 1, strlen($navUrl) - 1)) !== false) {
        Html::addCssClass($options, 'focusing');
    }
    echo Html::beginTag('li', $options);
    echo Html::tag('a', $navTag, ['href' => $navUrl]);
    echo Html::endTag('li');
}
?-->
<div class="row select-wrap">
    <?=Html::beginTag('div',['class'=>"select-number ".($type=="小组赛"?"op1":"op2")])?>
        <div class="col-xs-6 select-option" onclick="window.open('./?r=match&type=小组赛','_self')">
            <span>小组赛</span>
        </div>
        <div class = "col-xs-6 select-option" onclick = "window.open('./?r=match&type=淘汰赛','_self')">
            <span>淘汰赛</span>
        </div>
        <div class="cut"></div>
        <div class ="bg"></div>
    </div>
</div>
<?php
    if($type=="小组赛"){
        echo $this->render('match/match.php',[
            'matchs' => $matchs,
            'group' => $group,
        ]);
    }
    else{
        echo $this->render('match/match_.php',[
            'match_' => $match_,
        ]);
    }
?>