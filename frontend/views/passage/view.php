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
$this->title='热门文章';
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
        $('#commentarea').val("< Re: " + recname + " content: " + content + " >");
    }
</script>
<div class="row">
    <div class="postspan passagespan col-md-8" style="margin-bottom:50px">

        <div class="page-header">
            <h2><?=$model->title?></h2>
        </div>
        <p class="passage-author text-right">作者:<a href="../user/view&id=1"><?=$model->author?></a> 发表于 <?=$model->date?></p>
        <div class="passage-content">
            <?=$model->content?>
            <br>

            段落3：<strong>这是粗体</strong>

            段落4：<em>这是斜体</em>
            <ul>
                <li>有些东西要分条</li>
                <li>还有写东西要分条</li>
            </ul>
            <ol>
                <li>有些东西要编号</li>
                <li>还有些东西要编号</li>
                <li></
            </ol>
            <blockquote>“据说引用别人的话要打引号” ——鲁迅

                &nbsp;</blockquote>
            

            <img class="alignnone size-medium" src=<?php echo URL::to('extra-images/feature_'.$model->ID.'.jpg')?> width="474" height="293" />
        </div>

    </div>
    <div class="postspan commentspan col-md-4 column " style="padding-top: 200px">
        <!--p></p-->
        <strong class="recommendPassage">Relative Passages</strong>
        <hr>
        <a class="relpassage bg-success" href="#" style="display:block; margin-bottom:10px">
            <div class="thumbnail thumbnail-relpassage" >
                <img class="hidden-xs" src="https://tse1.mm.bing.net/th?id=OIP.TqIbghYiQ7q587pYIgdVsQHaEo&pid=Api">
                <div class="caption">
                    <p>New passage titles</p>
                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true" style="display: inline-block"></span>
                    <p style="display: inline-block; margin-right: 10px">114514</p>
                    <span class="glyphicon glyphicon-heart" aria-hidden="true" style="display: inline-block"></span>
                    <p style="display: inline-block; margin-right: 10px">1919</p>
                    <span class="glyphicon glyphicon-comment" aria-hidden="true" style="display: inline-block"></span>
                    <p style="display: inline-block; margin-right: 10px">810</p>
                </div>
            </div>
        </a>
    </div>

</div>


<div class="row">
    <div class="col-md-8 text-right" style="margin-bottom:60px">
        <span class="glyphicon glyphicon-eye-open" aria-hidden="true" style="display: inline-block"></span>
        <p style="display: inline-block; margin-right: 10px"><?=Html::encode("$model->seen")?></p>
          <?php //$like=passage::find()->select(['$mat->ID']);
      $amount=favorite::find()->where(["passage_ID" => $model->ID])->count();?>
        <span class="glyphicon glyphicon-heart" aria-hidden="true" style="display: inline-block"></span>
        <p style="display: inline-block; margin-right: 10px"><?= Html::encode("$amount") ?></p>
         <?php //$like=passage::find()->select(['$mat->ID']);
    $amount=comment::find()->where(["passage_ID" => $model->ID])->count();?>
        <span class="glyphicon glyphicon-comment" aria-hidden="true" style="display: inline-block"></span>
        <p style="display: inline-block; margin-right: 10px"><?= Html::encode("$amount") ?></p>
    </div>
</div>
<div class="row">
    <div class="commentspan col-md-8">
        <div class="media">
            <div class="media-left">
                <a href="#">
                    <img class="media-object" src="..." alt="...">
                </a>
            </div>

            <?php $comment=comment::find()->where(["passage_ID" => $model->ID])->all();?>
            <?php foreach ($comment as $mat):?>
            <div class="media-body">
                <span class="media-heading" style="display:inline-block; margin-right:10px" ><?= Html::encode("$mat->username") ?></span>
                <span class="time" style="display:inline-block"><?= Html::encode("$mat->date") ?></span>
                <div><?= Html::encode("$mat->content") ?></div>
                <a href="#comments" onclick="reply(1)">回复</a>
            </div>
        <?php endforeach;?>
            <hr>


           <!--  评论回复parent具体不太会操作 -->
            <div class="return">
                <div class="reply-body">
                    <div class="reply-content">
                        <span class="repmsg">
                        <p>回复 321 在 2018-7-30 的评论:</p>
                        </span>
                        <p>NM$L, WSNGG, WMLGDSNMDEZ.</p>
                    </div>
                </div>
            <div class="media-left">
                <a href="#">
                    <img class="media-object" src="..." alt="...">
                </a>
            </div>
           
            </div>
        </div>
        <hr>

       <!--  评论和后台的对接不太会 -->
        <form id="comments">
            <strong>回复评论。您的评论将会对所有用户可见。</strong>
            <textarea name="commentarea" id="commentarea" class="form-control" rows="4" style="margin:16px 0"></textarea>
            <button class="btn btn-primary" type="submit">
                提交
            </button>
        </form>
    </div>
</div>
