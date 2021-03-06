<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Passage */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Passages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="preview">
    <p> 文章预览</p>
    <hr>
    <div>
        <?= $model->content?>
    </div>
    <?php if($model->status == 'pending'){
        echo "  
            <div class=\"text-right\">
                <p style=\"display: inline-block\">审核结果：</p>
                <a href='./?r=passage/censor&res=1&id=".$model->ID."'><button type=\"button\" class=\"btn btn-success\" onclick=\"\">通过</button></a>
                <a href='./?r=passage/censor&res=0&id=".$model->ID."'><button type=\"button\" class=\"btn btn-warning\" onclick=\"\">不通过</button></a>
            </div>";
    }else if($model->status == 'success')
        {echo "
            <div class=\"text-right\">
                <p style=\"display: inline-block\">文章操作：</p>
                <a href='./?r=passage/edit&id=".$model->ID."'><button type=\"button\" class=\"btn btn-primary\" onclick=\"\">修改</button></a>
                <a href='./?r=passage/censor&res=2&id=".$model->ID."'><button type=\"button\" class=\"btn btn-success\" onclick=\"\">删除</button></a>
            </div>
        ";}
    else{ //aborted

    }
        ?>

</div>
