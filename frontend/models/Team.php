<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property string $country
 * @property string $coach
 * @property integer $history
 * @property string $image
 * @property string $f_group
 * @property integer $jifen
 * @property integer $win
 * @property integer $lose
 * @property integer $equal
 * @property integer $get_score
 * @property integer $lose_score
 * @property integer $jing_score
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
            [['country', 'coach', 'history', 'image', 'f_group', 'jifen', 'win', 'lose', 'equal', 'get_score', 'lose_score', 'jing_score'], 'required'],
            [['history', 'jifen', 'win', 'lose', 'equal', 'get_score', 'lose_score', 'jing_score'], 'integer'],
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
            'country' => 'Country',
            'coach' => 'Coach',
            'history' => 'History',
            'image' => 'Image',
            'f_group' => 'F Group',
            'jifen' => 'Jifen',
            'win' => 'Win',
            'lose' => 'Lose',
            'equal' => 'Equal',
            'get_score' => 'Get Score',
            'lose_score' => 'Lose Score',
            'jing_score' => 'Jing Score',
        ];
    }
}
