<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Products;

/**
 * ProductsSearch represents the model behind the search form about `app\models\Products`.
 */
class ProductsSearch extends Products
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['_id'], 'integer'],
            [['uploaded_date', 'brand', 'seller_name', 'seller_email', 'sku_id', 'product_title', 'uploaded_on', 'createdon', 'city'], 'safe'],
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
        $query = Products::find();

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
            'uploaded_date' => $this->uploaded_date,
            'createdon' => $this->createdon,
        ]);

        $query->andFilterWhere(['like', 'brand', $this->brand])
            ->andFilterWhere(['like', 'seller_name', $this->seller_name])
            ->andFilterWhere(['like', 'seller_email', $this->seller_email])
            ->andFilterWhere(['like', 'sku_id', $this->sku_id])
            ->andFilterWhere(['like', 'product_title', $this->product_title])
            ->andFilterWhere(['like', 'uploaded_on', $this->uploaded_on])
            ->andFilterWhere(['like', 'city', $this->city]);

        return $dataProvider;
    }
}
