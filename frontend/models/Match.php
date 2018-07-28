<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "match".
 *
 * @property string $country
 * @property integer $score
 * @property string $sec_country
 * @property integer $sec_score
 * @property integer $ID
 * @property string $time1
 * @property string $time2
 * @property string $time3
 * @property string $place
 * @property string $stage
 * @property string $url
 * @property int $date
 *
 * @property PlayerMatch[] $playerMatches
 * @property Player[] $players
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
            [['country', 'score', 'sec_country', 'sec_score', 'ID', 'time1', 'time2', 'time3', 'place', 'stage', 'url','date'], 'required'],
            [['score', 'sec_score', 'ID','date'], 'integer'],
            [['country', 'sec_country', 'time1', 'time2', 'time3', 'place', 'stage'], 'string', 'max' => 200],
            [['url'], 'string', 'max' => 1000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'country' => 'Country',
            'score' => 'Score',
            'sec_country' => 'Sec Country',
            'sec_score' => 'Sec Score',
            'ID' => 'ID',
            'time1' => 'Time1',
            'time2' => 'Time2',
            'time3' => 'Time3',
            'place' => 'Place',
            'stage' => 'Stage',
            'url' => 'Url',
            'date' =>'Date'
        ];
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
}
