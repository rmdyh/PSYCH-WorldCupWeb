<?php
namespace frontend\components;

use yii\base\Widget;
use yii\helpers\Html;

class TimeBarWidget extends Widget
{
    public $date;
    public $options;

    public function init()
    {
        parent::init();
        if ($this->date === null) {
            $this->date = date_create('1970-1-1');
        }
    }

    public function run()
    {
        $options=$this->options;
        if(empty($options['class'])){
            Html::addCssClass($options, 'time-bar');
        }
        echo Html::beginTag('div',$options);
        echo Html::Tag('hr');
        echo html::Tag('span',date_format($this->date, "Y 年 m 月 d 日"));
        echo Html::endTag('div');
    }
}
