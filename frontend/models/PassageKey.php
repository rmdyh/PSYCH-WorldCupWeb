<?php

namespace frontend\models;

use Yii;
use frontend\models\Passage;

/**
 * This is the model class for table "passage_key".
 *
 * @property integer $catid
 * @property integer $passage_ID
 * @property string $keyword
 *
 * @property Passage $passage
 */
class PassageKey extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'passage_key';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['passage_ID', 'keyword'], 'required'],
            [['passage_ID'], 'integer'],
            [['keyword'], 'string', 'max' => 200],
            [['passage_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Passage::className(), 'targetAttribute' => ['passage_ID' => 'ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'catid' => '关键词ID',
            'passage_ID' => '文章ID',
            'keyword' => '文章关键词',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPassage()
    {
        return $this->hasMany(Passage::className(), ['ID' => 'passage_ID']);
    }
}
