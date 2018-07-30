<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use frontend\models\Player;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;

use yii\data\ActiveDataProvider;


$this->title = '球员一览';
$this->params['breadcrumbs'][] = $this->title;
                            
?>
<form class="form-inline" method="post" action="">
  <div class="form-group">
    <label class="sr-only" for="exampleInputAmount">要查找的队员姓名</label>
    <div class="input-group">
      <input type="text" class="form-control" name="exampleInputAmount" placeholder="要查找的队员姓名">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">快速查找</button>
</form>


  


<br>
<br>
<br>
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
               <?= Html::beginTag('a',['class'=> "wrap-team-icon" ,'href'=> "./?r=player%2Fview&id=".$mat->ID])?>
            <div class="wc-team-icon">
                <div class="caption">
                    <p> <?= Html::encode("$mat->name") ?></p>
                </div>
            </div>
        </a>
            </div>
     
        <?php endforeach;?>
    </div>
    <?php endforeach;?>






