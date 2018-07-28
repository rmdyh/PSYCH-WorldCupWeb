<?php
namespace frontend\components;

use yii\base\Widget;

class NewsBarWidget extends Widget
{
    public $title;
    public $imgUrl;
    public $brief;
    public $author;
    public $seen;
    public $like;
    public $comment;
    public $model;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('newsBar', [
            'title' => $this->title,
            'imgUrl' => $this->imgUrl,
            'brief' => $this->brief,
            "author"=>$this->author,
            "seen"=>$this->seen,
             "like"=>$this->like,
             "comment"=>$this->comment,
        ]);
    }
}
?>