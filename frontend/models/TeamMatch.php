<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "team_match".
 *
 * @property string $team
 * @property integer $match_ID
 * @property integer $jiaoqiu
 * @property integer $yuewei
 * @property integer $shemen
 * @property integer $huangpai
 * @property integer $huanren
 * @property integer $fangui
 * @property integer $renyiqiu
 * @property integer $jiuqiu
 * @property string $kongqiulv
 *
 * @property Team $team0
 * @property Match $match
 */
class TeamMatch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'team_match';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['team', 'match_ID', 'jiaoqiu', 'yuewei', 'shemen', 'huangpai', 'huanren', 'fangui', 'renyiqiu', 'jiuqiu', 'kongqiulv'], 'required'],
            [['match_ID', 'jiaoqiu', 'yuewei', 'shemen', 'huangpai', 'huanren', 'fangui', 'renyiqiu', 'jiuqiu'], 'integer'],
            [['team'], 'string', 'max' => 200],
            [['kongqiulv'], 'string', 'max' => 10],
            [['team'], 'exist', 'skipOnError' => true, 'targetClass' => Team::className(), 'targetAttribute' => ['team' => 'country']],
            [['match_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Match::className(), 'targetAttribute' => ['match_ID' => 'ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'team' => '球队名称',
            'match_ID' => '比赛编号',
            'jiaoqiu' => '球队单场比赛角球数',
            'yuewei' => '球队单场比赛越位数',
            'shemen' => '球队单场比赛射门数',
            'huangpai' => '球队单场比赛黄牌数',
            'huanren' => '球队单场比赛换人数',
            'fangui' => '球队单场比赛犯规数',
            'renyiqiu' => '球队单场比赛任意球数',
            'jiuqiu' => 'Jiuqiu',
            'kongqiulv' => '球队单场比赛控球率',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeam0()
    {
        return $this->hasOne(Team::className(), ['country' => 'team']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatch()
    {
        return $this->hasOne(Match::className(), ['ID' => 'match_ID']);
    }
}
