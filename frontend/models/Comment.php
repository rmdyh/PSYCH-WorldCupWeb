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
 * @property Passage $passage
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
            [['passage_ID', 'user_ID', 'parent'], 'integer'],
            [['user_ID', 'username', 'content', 'date'], 'required'],
            [['status'], 'string'],
            [['username'], 'string', 'max' => 255],
            [['content', 'date'], 'string', 'max' => 200],
            [['user_ID'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_ID' => 'id']],
            [['passage_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Passage::className(), 'targetAttribute' => ['passage_ID' => 'ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'passage_ID' => '被评论的文章ID',
            'user_ID' => '评论者ID',
            'username' => '评论者姓名',
            'content' => '评论内容',
            'date' => '评论日期',
            'ID' => '发表的评论的标号',
            'status' => '评论状态（normal正常；delete评论被删除）',
            'parent' => '评论回复哪条评论',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPassage()
    {
        return $this->hasOne(Passage::className(), ['ID' => 'passage_ID']);
    }
}
