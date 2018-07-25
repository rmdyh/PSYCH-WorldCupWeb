<?php
namespace frontend\components;

use yii\base\Widget;
use yii\helpers\Html;


/*
position:
1                       13
    5               11
2                       14
        7   8   10
3                       15
    6       9       12
4                       16
*/
class KnockoutCellWidget extends Widget
{
    public $id;
    public $country_a;
    public $country_b;
    public $date;
    public $position;
    public $score_a;
    public $score_b;
    public $url;

    public function init()
    {
        parent::init();
        if($this->score_a === null){
            $this->score_a=$this->score_b='?';
            $this->url='#';
        }
    }

    public function run()
    {
        $class;
        switch ($this->position) {
            case '1':
                $class="cell-x-1 cell-y-1 rank-1";
                break;
            case '2':
                $class="cell-x-1 cell-y-3 rank-1";
                break;
            case '3':
                $class="cell-x-1 cell-y-6 rank-1";
                break;
            case '4':
                $class="cell-x-1 cell-y-9 rank-1";
                break;
            case '5':
                $class="cell-x-2 cell-y-2 rank-1";
                break;
            case '6':
                $class="cell-x-2 cell-y-8 rank-1";
                break;
            case '7':
                $class="cell-x-3 cell-y-5 rank-2";
                break;
            case '8':
                $class="cell-x-4 cell-y-4 rank-3";
                break;
            case '9':
                $class="cell-x-4 cell-y-7 rank-1";
                break;
            case '10':
                $class="cell-x-5 cell-y-5 rank-2";
                break;
            case '11':
                $class="cell-x-6 cell-y-2 rank-1";
                break;
            case '12':
                $class="cell-x-6 cell-y-8 rank-1";
                break;
            case '13':
                $class="cell-x-7 cell-y-1 rank-1";
                break;
            case '14':
                $class="cell-x-7 cell-y-3 rank-1";
                break;
            case '15':
                $class="cell-x-7 cell-y-6 rank-1";
                break;
            case '16':
                $class="cell-x-7 cell-y-9 rank-1";
                break;
            
            default:
                # code...
                break;
        }
        return $this->render('knockoutCell',[
            'class' => $class,
            'id' => $this->id,
            'countryA' => $this->country_a,
            'countryB' => $this->country_b,
            'date' => $this->date,
            'scoreA' => $this->score_a,
            'scoreB' => $this->score_b,
            'url' => $this->url,
        ]);
    }
}
