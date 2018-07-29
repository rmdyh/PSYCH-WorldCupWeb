<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "player".
 *
 * @property integer $ID
 * @property integer $haoma
 * @property string $country
 * @property string $name
 * @property string $postion
 * @property string $height
 * @property string $weight
 * @property string $birthdate
 * @property integer $attended
 * @property integer $totaltime
 * @property string $image
 * @property integer $jinqiu
 * @property integer $zhugong
 * @property integer $shemen
 * @property integer $shezheng
 * @property integer $chuanqiu
 * @property integer $shiqiu
 * @property integer $pujiu
 * @property integer $hongpai
 * @property integer $huangpai
 * @property integer $click
 *
 * @property Team $country0
 * @property PlayerMatch[] $playerMatches
 * @property Match[] $matches
 */
class Player extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'player';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'haoma', 'country', 'name', 'postion', 'height', 'weight', 'birthdate', 'attended', 'totaltime', 'image', 'jinqiu', 'zhugong', 'shemen', 'shezheng', 'chuanqiu', 'shiqiu', 'pujiu', 'hongpai', 'huangpai', 'click'], 'required'],
            [['ID', 'haoma', 'attended', 'totaltime', 'jinqiu', 'zhugong', 'shemen', 'shezheng', 'chuanqiu', 'shiqiu', 'pujiu', 'hongpai', 'huangpai', 'click'], 'integer'],
            [['country', 'name', 'postion', 'weight', 'birthdate'], 'string', 'max' => 200],
            [['height'], 'string', 'max' => 20],
            [['image'], 'string', 'max' => 1000],
            [['country'], 'exist', 'skipOnError' => true, 'targetClass' => Team::className(), 'targetAttribute' => ['country' => 'country']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => '队员ID',
            'haoma' => '队员号码',
            'country' => '队员所属国家',
            'name' => '队员姓名',
            'postion' => '位置',
            'height' => '球员身高',
            'weight' => '球员体重',
            'birthdate' => '队员生日',
            'attended' => '本届世界杯出场次数',
            'totaltime' => '队员总出场时间',
            'image' => 'Image',
            'jinqiu' => '总进球数',
            'zhugong' => '总助攻数',
            'shemen' => '总射门次数',
            'shezheng' => '射正次数',
            'chuanqiu' => '传球次数',
            'shiqiu' => '总失球数（对于门将）',
            'pujiu' => '总扑救数（对于门将）',
            'hongpai' => '总红牌数',
            'huangpai' => '总黄牌数',
            'click' => '球员被点击次数',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry0()
    {
        return $this->hasOne(Team::className(), ['country' => 'country']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlayerMatches()
    {
        return $this->hasMany(PlayerMatch::className(), ['player_ID' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatches()
    {
        return $this->hasMany(Match::className(), ['ID' => 'match_ID'])->viaTable('player_match', ['player_ID' => 'ID']);
    }
}
