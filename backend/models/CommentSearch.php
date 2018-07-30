<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Comment;

/**
 * CommentSearch represents the model behind the search form about `backend\models\Comment`.
 */
class CommentSearch extends Comment
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['passage_ID', 'user_ID', 'ID', 'parent'], 'integer'],
            [['username', 'content', 'date', 'status'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Comment::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'passage_ID' => $this->passage_ID,
            'user_ID' => $this->user_ID,
            'ID' => $this->ID,
            'parent' => $this->parent,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'date', $this->date])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
