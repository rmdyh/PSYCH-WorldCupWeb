<?php
/**
 * Created by PhpStorm.
 * User: WZZ
 * Date: 2018/8/3
 * Time: 10:08
 */

use frontend\components\NewsBarWidget;
use frontend\components\CutBarWidget;
use yii\helpers\Html;
use yii\helpers\URL;
use frontend\models\user;
use frontend\models\Favorite;
use frontend\models\Passage;
use frontend\models\Comment;
use yii\widgets\LinkPager;
use frontend\components\PageHeadWidget;

$this->title = '用户界面';

?>

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 body">
        <?php PageHeadWidget::begin([
            'text' => "用户信息",
            'hasBorder' => true,
        ]) ?>
        <table class="table table-striped" style="margin-top:0">
            <thead>
            <tr>
                <th>username</th>
                <th>userid</th>
                <th>mail</th>
                <th>created at</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?= $model->username?></td>
                <td><?= $model->id?></td>
                <td><?= $model->email?></td>
                <td><?= date("Y-m-d", $model->created_at);?></td>
            </tr>
            </tbody>
        </table>
        <?php \frontend\components\PageHeadWidget::end();?>
        <hr>
        <?php PageHeadWidget::begin([
            'text' => "收藏文章",
            'hasBorder' => true,
        ]) ?>
        <table class="table table-striped" style="margin-top:0">
            <thead>
            <tr>
                <th>title</th>
                <th>author</th>
                <th>posttime</th>
                <th>href</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($favors as $favor):?>
                <tr>

                    <td><?= $favor->title?></td>
                    <td><?= $favor->author?></td>
                    <td><?= $favor->date?></td>
                    <td><a href="./?r=passage/view&id=<?= $favor->ID?>">click to go</a></td>

                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
        <?php \frontend\components\PageHeadWidget::end();?>
        <hr>
        <?php PageHeadWidget::begin([
            'text' => "投稿情况",
            'hasBorder' => true,
        ]) ?>
        <table class="table table-striped" style="margin-top:0">
            <thead>
            <tr>
                <th>title</th>
                <th>posttime</th>
                <th>status</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($posts as $post):?>
                <tr>

                    <td><?= $post->title?></td>
                    <td><?= $post->date?></td>
                    <td><?= $post->status?></td>

                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
        <?php \frontend\components\PageHeadWidget::end();?>
        <hr>
        <div class="postnewpsg">
            <a href="./?r=user/write&id=<?=$model->id?>"><button class="btn btn-primary">post new messages</button></a>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
