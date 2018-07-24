<?php

use yii\helpers\Html;
?>

<?= Html::beginTag('li',['class'=>$class." knockout-cell"])?>
    <?= Html::beginTag('a',['href'=>$url])?>        
        <div class="tx">
            <span class="tx-in">
				<span class="teaminfo">
                    <span class="teamflag_s teamflag_7589_s"></span>
                    <p><?=$countryA?></p>
                </span>
				<span class="teamscore"><em><?=$scoreA?></em>-<em><?=$scoreB?></em></span>
				<span class="teaminfo">
                    <span class="teamflag_s teamflag_7591_s"></span>
                <p><?=$countryB?></p>
                </span>
			</span>
            <i></i>
        </div>
        <div class="tx-floating">
            <span class="tx-in">
                <p style="color:#fff">世界杯[<?=$id?>]场 </p>
                <p style="color:#f3e448"><?=date_format($date,"m-d H:i")?><?php if($scoreA!='?') echo " 战报"?></p>
            </span>
            <i></i>
        </div>
    </a>
<?= Html::endTag('li')?>
