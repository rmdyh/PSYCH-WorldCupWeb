<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use frontend\models\Player;

$this->title = '球员一览';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-group">
    <div class="wc-hd">
        <span>俄罗斯</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Player::find()->where(["country" => "俄罗斯"])->all();
         foreach($match as $mat): ?>
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


<div class="team-group">
    <div class="wc-hd">
        <span>埃及</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Player::find()->where(["country" => "埃及"])->all();
         foreach($match as $mat): ?>
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
</div>


<div class="team-group">
    <div class="wc-hd">
        <span>乌拉圭</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Player::find()->where(["country" => "乌拉圭"])->all();
         foreach($match as $mat): ?>
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
</div>


<div class="team-group">
    <div class="wc-hd">
        <span>沙特阿拉伯</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Player::find()->where(["country" => "沙特阿拉伯"])->all();
         foreach($match as $mat): ?>
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
</div>




<div class="team-group">
    <div class="wc-hd">
        <span>摩洛哥</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Player::find()->where(["country" => "摩洛哥"])->all();
         foreach($match as $mat): ?>
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
</div>




<div class="team-group">
    <div class="wc-hd">
        <span>伊朗</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Player::find()->where(["country" => "伊朗"])->all();
         foreach($match as $mat): ?>
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
</div>



<div class="team-group">
    <div class="wc-hd">
        <span>西班牙</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Player::find()->where(["country" => "西班牙"])->all();
         foreach($match as $mat): ?>
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
</div>


<div class="team-group">
    <div class="wc-hd">
        <span>葡萄牙</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Player::find()->where(["country" => "葡萄牙"])->all();
         foreach($match as $mat): ?>
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
</div>


<div class="team-group">
    <div class="wc-hd">
        <span>丹麦</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Player::find()->where(["country" => "丹麦"])->all();
         foreach($match as $mat): ?>
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
</div>


<div class="team-group">
    <div class="wc-hd">
        <span>法国</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Player::find()->where(["country" => "法国"])->all();
         foreach($match as $mat): ?>
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
</div>


<div class="team-group">
    <div class="wc-hd">
        <span>澳大利亚</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Player::find()->where(["country" => "澳大利亚"])->all();
         foreach($match as $mat): ?>
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
</div>


<div class="team-group">
    <div class="wc-hd">
        <span>秘鲁</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Player::find()->where(["country" => "秘鲁"])->all();
         foreach($match as $mat): ?>
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
</div>


<div class="team-group">
    <div class="wc-hd">
        <span>克罗地亚</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Player::find()->where(["country" => "克罗地亚"])->all();
         foreach($match as $mat): ?>
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
</div>


<div class="team-group">
    <div class="wc-hd">
        <span>冰岛</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Player::find()->where(["country" => "冰岛"])->all();
         foreach($match as $mat): ?>
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
</div>

<div class="team-group">
    <div class="wc-hd">
        <span>尼日利亚</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Player::find()->where(["country" => "尼日利亚"])->all();
         foreach($match as $mat): ?>
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
</div>


<div class="team-group">
    <div class="wc-hd">
        <span>阿根廷</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Player::find()->where(["country" => "阿根廷"])->all();
         foreach($match as $mat): ?>
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
</div>


  <div class="wc-hd">
        <span>哥斯达黎加</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Player::find()->where(["country" => "哥斯达黎加"])->all();
         foreach($match as $mat): ?>
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


<div class="team-group">
    <div class="wc-hd">
        <span>塞尔维亚
    </div>

    <div class="row">
        <?php $match=Player::find()->where(["country" => "塞尔维亚"])->all();
         foreach($match as $mat): ?>
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
</div>


<div class="team-group">
    <div class="wc-hd">
        <span>巴西</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Player::find()->where(["country" => "巴西"])->all();
         foreach($match as $mat): ?>
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
</div>


<div class="team-group">
    <div class="wc-hd">
        <span>瑞士</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Player::find()->where(["country" => "瑞士"])->all();
         foreach($match as $mat): ?>
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
</div>




<div class="team-group">
    <div class="wc-hd">
        <span>墨西哥</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Player::find()->where(["country" => "墨西哥"])->all();
         foreach($match as $mat): ?>
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
</div>




<div class="team-group">
    <div class="wc-hd">
        <span>瑞典</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Player::find()->where(["country" => "瑞典"])->all();
         foreach($match as $mat): ?>
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
</div>



<div class="team-group">
    <div class="wc-hd">
        <span>韩国</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Player::find()->where(["country" => "韩国"])->all();
         foreach($match as $mat): ?>
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
</div>


<div class="team-group">
    <div class="wc-hd">
        <span>德国</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Player::find()->where(["country" => "德国"])->all();
         foreach($match as $mat): ?>
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
</div>


<div class="team-group">
    <div class="wc-hd">
        <span>巴拿马</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Player::find()->where(["country" => "巴拿马"])->all();
         foreach($match as $mat): ?>
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
</div>


<div class="team-group">
    <div class="wc-hd">
        <span>比利时</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Player::find()->where(["country" => "比利时"])->all();
         foreach($match as $mat): ?>
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
</div>


<div class="team-group">
    <div class="wc-hd">
        <span>突尼斯</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Player::find()->where(["country" => "突尼斯"])->all();
         foreach($match as $mat): ?>
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
</div>


<div class="team-group">
    <div class="wc-hd">
        <span>英格兰</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Player::find()->where(["country" => "英格兰"])->all();
         foreach($match as $mat): ?>
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
</div>


<div class="team-group">
    <div class="wc-hd">
        <span>塞尔维亚</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Player::find()->where(["country" => "塞尔维亚"])->all();
         foreach($match as $mat): ?>
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
</div>


<div class="team-group">
    <div class="wc-hd">
        <span>哥伦比亚</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Player::find()->where(["country" => "哥伦比亚"])->all();
         foreach($match as $mat): ?>
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
</div>

<div class="team-group">
    <div class="wc-hd">
        <span>日本</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Player::find()->where(["country" => "日本"])->all();
         foreach($match as $mat): ?>
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
</div>


<div class="team-group">
    <div class="wc-hd">
        <span>波兰</span>
        <hr>
    </div>

    <div class="row">
        <?php $match=Player::find()->where(["country" => "波兰"])->all();
         foreach($match as $mat): ?>
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
</div>




</div>

