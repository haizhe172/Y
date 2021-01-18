<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Bar;

/**
 * BarModel represents the model behind the search form of `app\models\Bar`.
 */
class BarModel extends Bar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bar_id'], 'integer'],
            [['bra_name', 'bra_open', 'add_time'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Bar::find();

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
            'bar_id' => $this->bar_id,
        ]);

        $query->andFilterWhere(['like', 'bra_name', $this->bra_name])
            ->andFilterWhere(['like', 'bra_open', $this->bra_open])
            ->andFilterWhere(['like', 'add_time', $this->add_time]);
        return $dataProvider;
    }
}
