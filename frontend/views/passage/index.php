<?php

use frontend\components\NewsBarWidget;
use frontend\components\CutBarWidget;
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = '热门文章';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">    
    <?= CutBarWidget::widget([
        'date' => date_create("2018-07-25"),
    ]) ?>


   <?php foreach ($passage as $mat) : ?>
    <?php echo NewsBarWidget::widget([
        'title' => Html::encode("$mat->title"),
        'imgUrl' => '../web/static/news/20180723/cosmic.jpg',
        'brief' => Html::encode("$mat->content"),
        'author' => Html::encode("$mat->author"),
        'seen' => Html::encode("$mat->seen"),

    ]) ?> 


    <?php endforeach; ?>

   
    <!--下面需要一个分页
    https://www.yiichina.com/tutorial/93?sort=desc
    -->

</div>
