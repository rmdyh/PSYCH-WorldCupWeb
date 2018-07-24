<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'PSYCH',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'Homework', 'url' => ['/site/contact']],
        ['label' => 'About', 'url' => ['/site/about']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="head-band jumbotron">
        <div class="container">
            <h1>预留标题区域</h1>
        </div>
    </div>

    <div class="navbar_web">
        <div class="container">
            <ul class="navbar_content">
                <?php
                    $navUrls=[
                        ['label'=>'主页','url'=>'./?r=site%2Findex'],
                        ['label'=>'最新动态','url'=>'./#'],
                        ['label'=>'赛程','url'=>'./?r=site%2Fschedule'],
                        ['label'=>'球队一览','url'=>'./#'],
                        ['label'=>'球员一览','url'=>'./#'],
                    ];
                    $nowUrl=Yii::$app->request->url;
                    for ($i=0;$i<count($navUrls);$i++) {
                        $navTag=$navUrls[$i]['label'];
                        $navUrl=$navUrls[$i]['url'];
                        $options=['class'=>null];
                        if(strpos($nowUrl,substr($navUrl,1,strlen($navUrl)-1))!==FALSE){
                            Html::addCssClass($options, 'focusing');
                        }
                        echo Html::beginTag('li',$options);
                        echo Html::tag('a',$navTag,['href'=>$navUrl]);
                        echo Html::endTag('li');
                    }
                ?>
            </ul>
        </div>
    </div>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; PSYCH <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
