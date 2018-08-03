<?php
    use yii\helpers\Html;
?>

    <?= Html::beginTag('div',['class'=> "thumbnail thumbnail-news",'onclick'=> "window.open('".$url."','_self')" ])?>
        <div class="img-wrap">
            <?= Html::Tag('div',"",['style'=>"background-image:url(".$imgUrl.")",'class'=>"img"]) ?>
        </div>
        <div class="caption">
            <div class="caption-title">
                <h3>
                    <?= $title ?>
                </h3>
            </div>
            <hr>
            <div class="text-overflow">
                <div class="text-content">
                    <?= $brief ?>
                </div>
            </div>
            <hr style="margin:5px 0">
            <div class="end-bar row">
                <div class="col-xs-4" style="white-space:nowrap">
                    作者：<?=$author?>
                </div>
                <div class="col-xs-8 row">
                    <div class="col-xs-4">
                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true" style="display: inline-block"></span>
                        <?= $seen?>
                    </div>
                    <div class="col-xs-4">
                        <span class="glyphicon glyphicon-heart" aria-hidden="true" style="display: inline-block"></span>
                            <?= $like ?>
                    </div>
                    <div class="col-xs-4">
                        <span class="glyphicon glyphicon-comment" aria-hidden="true" style="display: inline-block"></span>
                        <?= $comment ?>
                    </div>
                </div>
            </div>
        </div>
        </div>