<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "player_match".
 *
 * @property integer $player_ID
 * @property integer $match_ID
 * @property string $shoufa
 * @property integer $jinqiu
 * @property integer $zhugong
 * @property integer $shezheng
 * @property integer $huangpai
 * @property integer $hongpai
 * @property integer $qiangduan
 * @property integer $fengdu
 * @property integer $lanjie
 * @property integer $touqiu
 * @property integer $shepian
 * @property integer $chuanqiu
 * @property integer $chengchuan
 * @property integer $yuewei
 * @property integer $shiqiu
 * @property integer $pujiucheng
 * @property integer $pujiuzong
 * @property integer $dianqiucheng
 * @property integer $changchuan
 * @property integer $jihui
 *
 * @property Player $player
 * @property Match $match
 */
class PlayerMatch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'player_match';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['player_ID', 'match_ID', 'shoufa', 'jinqiu', 'zhugong', 'shezheng', 'huangpai', 'hongpai', 'shepian', 'chuanqiu', 'chengchuan', 'yuewei', 'shiqiu', 'pujiucheng', 'pujiuzong', 'dianqiucheng', 'changchuan', 'jihui'], 'required'],
            [['player_ID', 'match_ID', 'jinqiu', 'zhugong', 'shezheng', 'huangpai', 'hongpai', 'qiangduan', 'fengdu', 'lanjie', 'touqiu', 'shepian', 'chuanqiu', 'chengchuan', 'yuewei', 'shiqiu', 'pujiucheng', 'pujiuzong', 'dianqiucheng', 'changchuan', 'jihui'], 'integer'],
            [['shoufa'], 'string'],
            [['player_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Player::className(), 'targetAttribute' => ['player_ID' => 'ID']],
            [['match_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Match::className(), 'targetAttribute' => ['match_ID' => 'ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'player_ID' => '球员ID',
            'match_ID' => '参与的比赛ID',
            'shoufa' => '本场比赛是否是首发（0不是；1是）',
            'jinqiu' => '本场比赛进球数',
            'zhugong' => '助攻数',
            'shezheng' => '射正数',
            'huangpai' => '黄牌数',
            'hongpai' => '红牌数',
            'qiangduan' => '抢断成功',
            'fengdu' => '封堵射门',
            'lanjie' => '拦截',
            'touqiu' => '头球争抢',
            'shepian' => '射偏数',
            'chuanqiu' => '传球总数',
            'chengchuan' => '成功传球次数',
            'yuewei' => '越位次数',
            'shiqiu' => '失球数',
            'pujiucheng' => '扑救成功数',
            'pujiuzong' => '扑救总数',
            'dianqiucheng' => '点球扑救成功数',
            'changchuan' => '长传数',
            'jihui' => '创造机会数',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlayer()
    {
        return $this->hasOne(Player::className(), ['ID' => 'player_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatch()
    {
        return $this->hasOne(Match::className(), ['ID' => 'match_ID']);
    }
}
