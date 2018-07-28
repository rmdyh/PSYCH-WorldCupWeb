<?php
namespace frontend\components;

use yii\base\Widget;

class NewsBarWidget extends Widget
{
    public $title;
    public $imgUrl;
    public $brief;
    public $url;

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
            'url' => $this->url,
        ]);
    }
}
?>