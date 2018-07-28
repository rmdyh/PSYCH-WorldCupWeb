<?php

use yii\helpers\Html;
?>

<?= Html::beginTag('li',['class'=>$class." knockout-cell"])?>
    <?= Html::beginTag('a',['href'=>$url])?>        
        <div class="tx">
            <span class="tx-in">
				<span class="teaminfo">
                <?= Html::Tag('span',"",['class'=> "teamflag_s",'style'=>"background-image:url(../web/static/country/".$countryA.".png)"])?>  
                    <p><?=$countryA?></p>
                </span>
				<span class="teamscore"><span class="em"><?=$scoreA?></span>-<span class="em"><?=$scoreB?></span></span>
				<span class="teaminfo">
                    <?= Html::Tag('span', "", ['class' => "teamflag_s", 'style' => "background-image:url(../web/static/country/" . $countryB . ".png)"]) ?>  
                <p><?=$countryB?></p>
                </span>
			</span>
            <i></i>
        </div>
        <div class="tx-floating">
            <span class="tx-in">
                <p style="color:#fff">世界杯[<?=$id?>]场 </p>
                <p style="color:#f3e448"><?php date_default_timezone_set('Asia/Shanghai');echo date("m-d H:i", $timestamp)?><?php if($scoreA!='?') echo " 战报"?></p>
            </span>
            <i></i>
        </div>
    </a>
<?= Html::endTag('li')?>
