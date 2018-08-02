<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Passage */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Passages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
< class="passage-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'title',
            'date',
            'author_ID',
            'author',
            'content:ntext',
            'status',
            'seen',
        ],
    ]) ?>



<div class="preview">
    <p> 文章预览</p>
    <hr>
    <div>
        <?= HTML::encode($model->content)?>
    </div>
    <?php if($model->status == 'pending'){
        echo "  
            <div class=\"text-right\">
                <p style=\"display: inline-block\">审核结果：</p>
                <button type=\"button\" class=\"btn btn-success\" onclick=\"\">通过</button>
                <button type=\"button\" class=\"btn btn-warning\" onclick=\"\">不通过</button>
            </div>";
    }else if($model->status == 'success')
        {echo "
            <div class=\"text-right\">
                <p style=\"display: inline-block\">文章操作：</p>
                <button type=\"button\" class=\"btn btn-primary\" onclick=\"\">修改</button>
                <button type=\"button\" class=\"btn btn-success\" onclick=\"\">删除</button>
            </div>
        ";}
    else{ //aborted

    }
        ?>

</div>
