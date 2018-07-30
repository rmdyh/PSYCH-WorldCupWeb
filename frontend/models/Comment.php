<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property integer $passage_ID
 * @property integer $user_ID
 * @property string $username
 * @property string $content
 * @property string $date
 * @property integer $ID
 * @property string $status
 * @property integer $parent
 *
 * @property User $user
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['passage_ID', 'user_ID', 'username', 'content', 'date', 'ID'], 'required'],
            [['passage_ID', 'user_ID', 'ID', 'parent'], 'integer'],
            [['status'], 'string'],
            [['username'], 'string', 'max' => 255],
            [['content', 'date'], 'string', 'max' => 200],
            [['user_ID'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_ID' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'passage_ID' => Yii::t('app', '被评论的文章ID'),
            'user_ID' => Yii::t('app', '评论者ID'),
            'username' => Yii::t('app', '评论者姓名'),
            'content' => Yii::t('app', '评论内容'),
            'date' => Yii::t('app', '评论日期'),
            'ID' => Yii::t('app', '发表的评论的标号'),
            'status' => Yii::t('app', '评论状态（normal正常；delete评论被删除）'),
            'parent' => Yii::t('app', '评论回复哪条评论'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_ID']);
    }
}
