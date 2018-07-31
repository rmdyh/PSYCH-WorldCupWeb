<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property string $country
 * @property string $coach
 * @property integer $history
 * @property integer $jointime
 * @property integer $createtime
 * @property integer $attendedtime
 * @property integer $rank
 * @property string $image
 * @property string $introduction
 * @property string $f_group
 * @property integer $jifen
 * @property integer $win
 * @property integer $lose
 * @property integer $equal
 * @property integer $get_score
 * @property integer $lose_score
 * @property integer $jing_score
 * @property string $status
 * @property integer $year
 *
 * @property Player[] $players
 * @property TeamMatch[] $teamMatches
 * @property Match[] $matches
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country', 'coach', 'history', 'jointime', 'createtime', 'attendedtime', 'rank', 'image', 'introduction', 'f_group', 'jifen', 'win', 'lose', 'equal', 'get_score', 'lose_score', 'jing_score'], 'required'],
            [['history', 'jointime', 'createtime', 'attendedtime', 'rank', 'jifen', 'win', 'lose', 'equal', 'get_score', 'lose_score', 'jing_score', 'year'], 'integer'],
            [['introduction', 'status'], 'string'],
            [['country', 'coach'], 'string', 'max' => 200],
            [['image'], 'string', 'max' => 1000],
            [['f_group'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'country' => '球队所属国家',
            'coach' => '球队教练',
            'history' => '历史冠军次数',
            'jointime' => '加入足联时间',
            'createtime' => '球队成立时间',
            'attendedtime' => '参加世界杯次数',
            'rank' => '球队世界排名',
            'image' => 'Image',
            'introduction' => '简介',
            'f_group' => '小组赛组别',
            'jifen' => '小组赛积分',
            'win' => '小组赛赢球的次数',
            'lose' => '小组赛失球的次数',
            'equal' => '小组赛平局的次数',
            'get_score' => '小组赛进球数',
            'lose_score' => '小组赛失球数',
            'jing_score' => '小组赛净胜球',
            'status' => '状态',
            'year' => '年份',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlayers()
    {
        return $this->hasMany(Player::className(), ['country' => 'country']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamMatches()
    {
        return $this->hasMany(TeamMatch::className(), ['team' => 'country']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatches()
    {
        return $this->hasMany(Match::className(), ['ID' => 'match_ID'])->viaTable('team_match', ['team' => 'country']);
    }
}
