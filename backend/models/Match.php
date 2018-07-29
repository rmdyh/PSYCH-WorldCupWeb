<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "match".
 *
 * @property string $country
 * @property integer $score
 * @property string $sec_country
 * @property integer $sec_score
 * @property integer $ID
 * @property integer $date
 * @property string $time1
 * @property string $time2
 * @property string $time3
 * @property string $place
 * @property string $stage
 * @property string $status
 * @property integer $url
 *
 * @property Passage $url0
 * @property PlayerMatch[] $playerMatches
 * @property Player[] $players
 * @property TeamMatch[] $teamMatches
 * @property Team[] $teams
 */
class Match extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'match';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country', 'score', 'sec_country', 'sec_score', 'ID', 'date', 'time1', 'time2', 'time3', 'place', 'stage', 'status'], 'required'],
            [['score', 'sec_score', 'ID', 'date', 'url'], 'integer'],
            [['status'], 'string'],
            [['country', 'sec_country', 'time1', 'time2', 'time3', 'place', 'stage'], 'string', 'max' => 200],
            [['url'], 'exist', 'skipOnError' => true, 'targetClass' => Passage::className(), 'targetAttribute' => ['url' => 'ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'country' => '主队',
            'score' => '主队得分',
            'sec_country' => '客队',
            'sec_score' => '客队得分',
            'ID' => '比赛ID',
            'date' => '比赛时间戳',
            'time1' => 'Time1',
            'time2' => 'Time2',
            'time3' => 'Time3',
            'place' => '比赛地点',
            'stage' => '比赛类型',
            'status' => '比赛状态（0未开始；1已结束）',
            'url' => '战报的文章ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUrl0()
    {
        return $this->hasOne(Passage::className(), ['ID' => 'url']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlayerMatches()
    {
        return $this->hasMany(PlayerMatch::className(), ['match_ID' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlayers()
    {
        return $this->hasMany(Player::className(), ['ID' => 'player_ID'])->viaTable('player_match', ['match_ID' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamMatches()
    {
        return $this->hasMany(TeamMatch::className(), ['match_ID' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeams()
    {
        return $this->hasMany(Team::className(), ['country' => 'team'])->viaTable('team_match', ['match_ID' => 'ID']);
    }
}
