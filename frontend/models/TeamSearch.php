<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Team;

/**
 * TeamSearch represents the model behind the search form about `frontend\models\Team`.
 */
class TeamSearch extends Team
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country', 'coach', 'image', 'f_group'], 'safe'],
            [['history', 'jointime', 'createtime', 'attendedtime', 'rank', 'jifen', 'win', 'lose', 'equal', 'get_score', 'lose_score', 'jing_score'], 'integer'],
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
        $query = Team::find();

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
            'history' => $this->history,
            'jointime' => $this->jointime,
            'createtime' => $this->createtime,
            'attendedtime' => $this->attendedtime,
            'rank' => $this->rank,
            'jifen' => $this->jifen,
            'win' => $this->win,
            'lose' => $this->lose,
            'equal' => $this->equal,
            'get_score' => $this->get_score,
            'lose_score' => $this->lose_score,
            'jing_score' => $this->jing_score,
        ]);

        $query->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'coach', $this->coach])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'f_group', $this->f_group]);

        return $dataProvider;
    }
}
