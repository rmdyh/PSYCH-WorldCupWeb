<?php
namespace frontend\components;

use yii\base\Widget;
use yii\helpers\Html;

class CutBarWidget extends Widget
{
    public $date;
    public $options;
    public $content;
    public $font;

    public function init()
    {
        parent::init();
        if ($this->date === null){
            $this->date = date_create('1970-1-1');
        }
        if ($this->content === null) {
            $this->content = date_format($this->date, "Y 年 m 月 d 日");
        }
    }

    public function run()
    {
        $options=$this->options;
        $font=$this->font;
        if(empty($options['class'])){
            Html::addCssClass($options, 'cut-bar');
        }
        echo Html::beginTag('div',$options);
        echo Html::Tag('hr');
        echo html::Tag('span',$this->content,['style'=>$font]);
        echo Html::endTag('div');
    }
}
