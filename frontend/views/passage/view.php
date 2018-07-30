<?php
/**
 * Created by wzz 1610652 18.7.28
 * Passage view page.
 */

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\models\passage;
use frontend\components\CutBarWidget;
$this->title='This is the title';
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
            <h1>Example page header <small>Subtext for header</small></h1>
        </div>
        <p class="passage-author text-right">作者:<a href="../user/view&id=1">admin</a> 发表于 2018/7/29</p>
        <p class="text-right">关键词：a, b, c</p>
        <div class="passage-content">
            <h1>这是文章标题需要大写</h1>
            <h2>这是文章的副标题也要大写</h2>
            段落1：A quick brown fox jumps over the lazy dog.

            段落2：this is another paragraph.

            <!--more-->

            段落3：<strong>这是粗体</strong>

            段落4：<em>这是斜体</em>
            <ul>
                <li>有些东西要分条</li>
                <li>还有写东西要分条</li>
            </ul>
            <ol>
                <li>有些东西要编号</li>
                <li>还有些东西要编号</li>
                <li></li>
            </ol>
            <blockquote>“据说引用别人的话要打引号” ——鲁迅

                &nbsp;</blockquote>
            <a href="https://localhost/PSYCH-WorldCupWeb/frontend/web/">https://localhost/PSYCH-WorldCupWeb/frontend/web/</a>

            <img class="alignnone size-medium" src="https://tse3.mm.bing.net/th?id=OIP.OFwCUUmhnE2IBfZWXru1hAHaEl&amp;amp" width="474" height="293" />
        </div>
        <!-- by wzz 18-7-30:
        下面是将来对接数据库之后的版本demo，现在由于model还没有办法编译（表的实例还没有实现）所以不能用这个版本

            <?php /*$passage=Passage::find()->where(["ID" => $model->ID])->all();
            foreach($passage as $psg): */?>
            <?php /*
               echo Html::encode("$psg->content")
            */?>
            <?php /*endforeach;*/?>

         -->
        <hr>
        <div class="text-right" style="margin-bottom:60px">
            <div class="passageMsg">
                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                <p style="display: inline-block; margin-right: 10px">114514</p>
                <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                <p style="display: inline-block; margin-right: 10px">1919</p>
                <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                <p style="display: inline-block; margin-right: 10px">810</p>
            </div>
        </div>
    </div>
    <div class="postspan commentspan col-md-4 column " style="padding-top: 40px">
        <!--p></p-->
        <div class="page-head-div"><span class="page-head-wrap">
                <span class="page-head-font">相关文章推荐</span>
            </span>
        </div>
        <a class="relpassage bg-success" href="#" style="display:block; margin:10px 0">
            <div class="thumbnail thumbnail-relpassage" >
                <img class="hidden-xs" src="https://tse1.mm.bing.net/th?id=OIP.TqIbghYiQ7q587pYIgdVsQHaEo&pid=Api">
                <div class="caption">
                    <div class="passageMsg">
                    <p>New passage titles</p>
                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                    <p style="display: inline-block; margin-right: 10px">114514</p>
                    <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                    <p style="display: inline-block; margin-right: 10px">1919</p>
                    <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                    <p style="display: inline-block; margin-right: 10px">810</p>
                    </div>
                </div>
            </div>
        </a>
        <hr>
    </div>

</div>
<div class="row">
    <div class="commentspan col-md-8">
        <div class="page-head-div"><span class="page-head-wrap">
                <span class="page-head-font">评论</span>
            </span>
        </div>
        <div class="media">
            <div class="media-left">
                <a href="#">
                    <img class="media-object" src="http://emoji.fileformat.info/gemoji/laughing.png" alt="...">
                </a>
            </div>
            <div class="media-body">
                <span class="media-heading" style="display:inline-block; margin-right:10px" >Media heading</span>
                <span class="time" style="display:inline-block">2 天前</span>
                <div>NM$L, WSNGG, WMLGDSNMDEZ.</div>
                <a href="#comments" onclick="reply(1)">回复</a>
            </div>
            <hr>
            <div class="return">
                <div class="reply-body">
                    <div class="reply-content">
                        <span class="repmsg">
                        <p>回复 Media heading 在 2018/7/29 的评论:</p>
                        </span>
                        <p>NM$L, WSNGG, WMLGDSNMDEZ.</p>
                    </div>
                </div>
            <div class="media-left">
                <a href="#">
                    <img class="media-object" src="http://emoji.fileformat.info/gemoji/broken_heart.png" alt="...">
                </a>
            </div>
            <div class="media-body">
                <span class="media-heading" style="display:inline-block; margin-right:10px" >Media heading</span>
                <span class="time" style="display:inline-block">2 天前</span>
                <div>hello world</div>
                <a href="#comments" onclick="reply(1)">回复</a>
            </div>
            </div>
        </div>
        <hr>
        <form id="comments">
            <strong>回复评论。您的评论将会对所有用户可见。</strong>
            <textarea name="commentarea" id="commentarea" class="form-control" rows="4" style="margin:16px 0"></textarea>
            <button class="btn btn-primary" type="submit">
                提交
            </button>
        </form>
    </div>
</div>
