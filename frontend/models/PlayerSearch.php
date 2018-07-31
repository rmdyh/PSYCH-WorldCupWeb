<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Player;
use yii\data\Pagination;
use yii\data\Sort;

/**
 * PlayerSearch represents the model behind the search form about `frontend\models\Player`.
 */
class PlayerSearch extends Player
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'haoma', 'attended', 'totaltime', 'jinqiu', 'zhugong', 'shemen', 'shezheng', 'chuanqiu', 'shiqiu', 'pujiu', 'hongpai', 'huangpai', 'click'], 'integer'],
            [['country', 'name', 'postion', 'height', 'weight', 'birthdate', 'image'], 'safe'],
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
        $query = Player::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => new Pagination([
                'pageSize' => $query->count(),
            ]),
            'sort' => new Sort([
                'attributes' => [
                    'ID','country'
                ],
            ])
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'ID' => $this->ID,
            'haoma' => $this->haoma,
            'attended' => $this->attended,
            'totaltime' => $this->totaltime,
            'jinqiu' => $this->jinqiu,
            'zhugong' => $this->zhugong,
            'shemen' => $this->shemen,
            'shezheng' => $this->shezheng,
            'chuanqiu' => $this->chuanqiu,
            'shiqiu' => $this->shiqiu,
            'pujiu' => $this->pujiu,
            'hongpai' => $this->hongpai,
            'huangpai' => $this->huangpai,
            'click' => $this->click,
        ]);

        $query->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'postion', $this->postion])
            ->andFilterWhere(['like', 'height', $this->height])
            ->andFilterWhere(['like', 'weight', $this->weight])
            ->andFilterWhere(['like', 'birthdate', $this->birthdate])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
