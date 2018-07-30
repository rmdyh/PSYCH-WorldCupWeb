<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "favorite".
 *
 * @property integer $ID
 * @property integer $passage_ID
 * @property integer $user_ID
 * @property string $username
 *
 * @property Passage $passage
 * @property User $user
 */
class Favorite extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'favorite';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['passage_ID', 'user_ID', 'username'], 'required'],
            [['passage_ID', 'user_ID'], 'integer'],
            [['username'], 'string', 'max' => 255],
            [['passage_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Passage::className(), 'targetAttribute' => ['passage_ID' => 'ID']],
            [['user_ID'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_ID' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => '编号',
            'passage_ID' => '文章ID',
            'user_ID' => '收藏者ID',
            'username' => '收藏者姓名',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPassage()
    {
        return $this->hasOne(Passage::className(), ['ID' => 'passage_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_ID']);
    }
}
