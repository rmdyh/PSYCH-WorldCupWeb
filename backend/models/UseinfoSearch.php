<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Useinfo;

/**
 * UseinfoSearch represents the model behind the search form about `backend\models\Useinfo`.
 */
class UseinfoSearch extends Useinfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['useID'], 'integer'],
            [['sex', 'image', 'introduction'], 'safe'],
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
        $query = Useinfo::find();

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
            'useID' => $this->useID,
        ]);

        $query->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'introduction', $this->introduction]);

        return $dataProvider;
    }
}
