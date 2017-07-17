<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SellerSeller;

/**
 * SellerSellerSearch represents the model behind the search form about `app\models\SellerSeller`.
 */
class SellerSellerSearch extends SellerSeller
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['_id'], 'integer'],
            [['seller'], 'safe'],
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
        $query = SellerSeller::find();

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
            '_id' => $this->_id,
        ]);

        $query->andFilterWhere(['like', 'seller', $this->seller]);

        return $dataProvider;
    }
}
