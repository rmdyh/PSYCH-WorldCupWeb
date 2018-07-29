<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Match;

/**
 * MatchSearch represents the model behind the search form about `backend\models\Match`.
 */
class MatchSearch extends Match
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country', 'sec_country', 'time1', 'time2', 'time3', 'place', 'stage', 'status'], 'safe'],
            [['score', 'sec_score', 'ID', 'date', 'url'], 'integer'],
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
        $query = Match::find();

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
            'score' => $this->score,
            'sec_score' => $this->sec_score,
            'ID' => $this->ID,
            'date' => $this->date,
            'url' => $this->url,
        ]);

        $query->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'sec_country', $this->sec_country])
            ->andFilterWhere(['like', 'time1', $this->time1])
            ->andFilterWhere(['like', 'time2', $this->time2])
            ->andFilterWhere(['like', 'time3', $this->time3])
            ->andFilterWhere(['like', 'place', $this->place])
            ->andFilterWhere(['like', 'stage', $this->stage])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
