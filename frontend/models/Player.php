<?php

namespace frontend\models;

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
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'haoma' => 'Haoma',
            'country' => 'Country',
            'name' => 'Name',
            'postion' => 'Postion',
            'height' => 'Height',
            'weight' => 'Weight',
            'birthdate' => 'Birthdate',
            'attended' => 'Attended',
            'totaltime' => 'Totaltime',
            'image' => 'Image',
            'jinqiu' => 'Jinqiu',
            'zhugong' => 'Zhugong',
            'shemen' => 'Shemen',
            'shezheng' => 'Shezheng',
            'chuanqiu' => 'Chuanqiu',
            'shiqiu' => 'Shiqiu',
            'pujiu' => 'Pujiu',
            'hongpai' => 'Hongpai',
            'huangpai' => 'Huangpai',
            'click' => 'Click',
        ];
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
