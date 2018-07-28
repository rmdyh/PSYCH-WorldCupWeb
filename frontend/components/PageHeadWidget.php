<?php
namespace frontend\components;

use yii\base\Widget;
use yii\helpers\Html;


/**
 * |--------------div css---------------------|
 * |----wrap css----|
 *  |font css(text)|
 */
class PageHeadWidget extends Widget
{
    public $text;
    public $fontCss;
    public $wrapCss;
    public $divCss;

    public function init()
    {
        parent::init();
        if ($this->fontCss === null) {
            $this->fontCss = "page-head-font";
        }
        if ($this->wrapCss === null) {
            $this->wrapCss = "page-head-wrap";
        }
        if ($this->divCss === null) {
            $this->divCss = "page-head-div";
        }
    }

    public function run()
    {
        echo Html::beginTag('div', ['class'=>$this->divCss]);
        echo Html::beginTag('span', ['class'=>$this->wrapCss]);
        echo Html::Tag('hr3',$this->text, ['class' => $this->fontCss]);
        echo Html::endTag('span');
        echo Html::endTag('div');
    }
}
