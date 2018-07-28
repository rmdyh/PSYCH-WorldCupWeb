<?php
    use yii\helpers\Html;
?>

<?= Html::beginTag('div',['class'=> "thumbnail thumbnail-news",'onclick'=> "window.open('".$url."','_self')" ])?>
    <?php echo '<img class="hidden-xs" src="' . $imgUrl . '"/>'?><div class="caption">
        <div class="caption-title">
            <h3><?= $title ?></h3>
        </div>
        <hr></hr>
        <div class="text-overflow" >
            <p><?= $brief ?></p>
        </div>
    </div>
</div>