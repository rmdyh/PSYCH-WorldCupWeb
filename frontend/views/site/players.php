<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use frontend\models\Player;

$this->title = '球员一览';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php foreach ($players as $label => $player): ?> 
 <?= $label?> 


<!-- <div class="team-group"> -->

    <!-- <div class="wc-hd">
        <span></span>
        <hr>
    </div> -->

    <div class="row">

        <?php 
         foreach($player as $mat): ?>
        <div class="col-xs-6 col-md-3">
            <div class="wrap-team-icon">
            <div class="wc-team-icon">
                <div class="caption">
                    <p> <?= Html::encode("$mat->name") ?></p>
                </div>
            </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
    <?php endforeach;?>







