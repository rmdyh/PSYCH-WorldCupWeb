<?php
/**
 * Created by wzz 1610652 18.7.28
 * Passage view page.
 */

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\URL;
use frontend\models\Favorite;
use frontend\models\Passage;
use frontend\models\Comment;
use frontend\models\PassageKey;
use yii\widgets\ActiveForm;
$this->title=$model->title;
/* @var $this yii\web\View */
/* @var $model frontend\models\Passage */
?>


<script>
    /**
     * by wzz tips: 这里的函数还需要修改，最后有两种方案：
     * 1.点击回复之后在回复文本框，或者在文本框外出现<re: xxx y/m/d content: xx>这样的字段，然后输入数据库的时候进行一次字段操作
     * 2.回复的id和评论id在url中显示出来，点击回复之后进行一次url修改
     */
    /*
    function getUrlParam(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
        var r = window.location.search.substr(1).match(reg); //匹配目标参数
        if (r != null) return unescape(r[2]); return null; //返回参数值
    }
    */
    function reply(recname, content){
        /*
        $.get(window.location.href + (!getUrlParam('repid')?('&repid=' + recid):'') + '#comment',
            function(data){
                return data;
            });
        alert(window.location.href + (getUrlParam('repid')?('&repid=' + recid):'') + '#comment');
        var something = getUrlParam('repid');
    */
        $('#comment-parent').val(recname);
        $('#commentarea').val("< Re: " + recname + " content: " + content + " >");
    }
</script>
<div class="row">
    <div class="postspan passagespan col-md-8"">

    <div class="page-header">
        <h2><?=$model->title?></h2>
    </div>
    <p class="passage-author text-right">作者:<a href="../user/view&id=1"><?=$model->author?></a> 发表于 <?=$model->date?></p>
 
    <div class="passage-content">
        <?=$model->content?>
        <br>
        <img class="alignnone size-medium" src=<?php echo URL::to('extra-images/feature_'.$model->ID.'.jpg')?> width="474" height="293" />
    </div>
    <div class="passage-msg text-right" style="margin:40px 0;">
        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
        <p><?=Html::encode("$model->seen")?></p>

        <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
        <p><?= Html::encode("$amount") ?></p>
        
        <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
        <p><?= Html::encode("$amount1") ?></p>
    </div>

</div>



<div class="postspan commentspan col-md-4 column " style="padding-top: 40px">
    <!--p></p-->
    <div class="page-head-div">
            <span class="page-head-wrap">
                <span class="page-head-font">
                    相关文章
                </span>
            </span>
    </div>
 <?php 
// $key=passagekey::find()->select(["keyword"])->where(["passage_ID" => $model->ID]);
//  var_dump($key);
//  return;
// $related=passagekey::find()->select(["passage_ID"])->where(["keyword"=>$key]);
// $passage_related=passage::find()->where(["ID"=>$related])->all();
?>

    <a class="relpassage bg-success" href="#" style="display:block; margin:10px 0;">
        <div class="thumbnail thumbnail-relpassage" >
            <img class="hidden-xs" src="https://tse1.mm.bing.net/th?id=OIP.TqIbghYiQ7q587pYIgdVsQHaEo&pid=Api">
            <div class="caption">
                <p>1</p>
                <div class="passage-msg">
                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true" style="display: inline-block"></span>
                    <p>114514</p>
                    <span class="glyphicon glyphicon-heart" aria-hidden="true" style="display: inline-block"></span>
                    <p>1919</p>
                    <span class="glyphicon glyphicon-comment" aria-hidden="true" style="display: inline-block"></span>
                    <p>810</p>
                </div>
            </div>
        </div>
    </a>
</div>

</div>

<div class="row">

    <div class="commentspan col-md-8">
        <div class="page-head-div">
            <span class="page-head-wrap">
                <span class="page-head-font">
                    评论区
                </span>
            </span>
        </div>
       
        <?php foreach ($comment1 as $mat):?>
            <?php if($mat->parent != 0){
                $parentmat = comment::find()->where(["ID"=> $mat->parent])->all();
                foreach($parentmat as $newmat){
                    echo
                        '<div class="return">
                            <div class="reply-body">
                                <div class="reply-content">
                                    <span class="repmsg">
                                        <p>回复 ' . $newmat->username .' 在 '.$newmat->date .' 的评论:</p>
                                    </span>
                                    <p>'. $newmat->content .'</p>
                                </div>
                            </div>
                        </div>';}
            }
            ?>
            <div class="media"">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="..." alt="..."> <!--source is users/img-->
                    </a>
                </div>
                <div class="media-body">
                    <span class="media-heading" style="display:inline-block; margin-right:10px" ><?= Html::encode("$mat->username") ?></span>
                    <span class="time" style="display:inline-block"><?= Html::encode("$mat->date") ?></span>
                    <div style="margin-bottom: 4px;"><?= Html::encode("$mat->content") ?></div>
                    <a href="#comments" onclick="reply(1)">回复</a>
                </div>
            </div>
            <hr>
        <?php endforeach;?>


        <!--  评论回复parent具体不太会操作 -->
        <hr>

        <div class="comment-create">
         
        <?php 

            $form = ActiveForm::begin(['action' => '?r=passage/create']);
            echo $form->field($commentd, 'content')->textInput(['maxlength' => true]);
            echo $form->field($commentd, 'passage_ID')->textInput()->hiddenInput(['value'=>$model->ID])->label(false);
            echo $form->field($commentd, 'parent')->textInput()->hiddenInput(['value'=>'0'])->label(false);
            ?>
        </div>
                <div>
                    <?= Html::submitButton('save', ['class' => 'btn btn-primary'])?>
                </div>
        <?php ActiveForm::end();?>
        </div>

        <!--  评论和后台的对接不太会 -->
<!--        <form id="comments">-->
<!--            <strong>回复评论。您的评论将会对所有用户可见。</strong>-->
<!--            <textarea name="commentarea" id="commentarea" class="form-control" rows="4" style="margin:16px 0"></textarea>-->
<!--            <button class="btn btn-primary" type="submit">-->
<!--                提交-->
<!--            </button>-->
<!--        </form>-->
<a class="fav-icon" title="喜欢！收藏这篇文章">
    <span class="glyphicon glyphicon-heart"></span>
</a>
    </div>


<!--收藏按钮-->
