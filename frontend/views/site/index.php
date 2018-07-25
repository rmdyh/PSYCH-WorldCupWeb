<?php

use frontend\components\NewsBarWidget;
/* @var $this yii\web\View */

$this->title = 'PSYCH-WorldCup';
?>
<div class="site-index">

    <?php echo NewsBarWidget::widget([
        'title' => '2018世界杯“战报”:亚马逊上哪些国家级明星球员的球衣最热销?',
        'imgUrl'=> '../web/static/news/20180723/cosmic.jpg',
        'brief'=>'国际足联世界杯（FIFA）是世界上最高规格、最高竞技水平、最高知名度的足球
                比赛，共有32支球队参加，进行64场比赛，分别在11个不同的主办城市的12座体育场进行。
                根据国际足联的数据显示，2014年世界杯的收视率创下世界纪录，观看世界杯的观众超过32亿，
                其中，有超过10亿观众观看德国和阿根廷之间的决赛。在美国，观看世界杯的人数一直在增长，
                今年美国有望成为史上观看世界杯人数最多的国家。 ',
    ]) ?>
    <?php echo NewsBarWidget::widget([
        'title' => 'title',
        'imgUrl'=> '../web/static/news/20180723/cosmic.jpg',
        'brief'=>'a brief',
    ]) ?>
    <?php echo NewsBarWidget::widget([
        'title' => 'title',
        'imgUrl' => '../web/static/news/20180723/cosmic.jpg',
        'brief' => 'a brief',
    ]) ?>


    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
    <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Dropdown
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
</div>
