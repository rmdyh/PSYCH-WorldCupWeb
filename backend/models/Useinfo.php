<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "useinfo".
 *
 * @property integer $useID
 * @property string $sex
 * @property string $image
 * @property string $introduction
 *
 * @property User $use
 */
class Useinfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'useinfo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['useID', 'sex', 'image', 'introduction'], 'required'],
            [['useID'], 'integer'],
            [['sex'], 'string'],
            [['image', 'introduction'], 'string', 'max' => 200],
            [['useID'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['useID' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'useID' => '用户ID',
            'sex' => '用户性别',
            'image' => '头像',
            'introduction' => '个人简介',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUse()
    {
        return $this->hasOne(User::className(), ['id' => 'useID']);
    }
}
