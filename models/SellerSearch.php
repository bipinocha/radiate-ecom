<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Seller;

/**
 * SellerSearch represents the model behind the search form about `app\models\Seller`.
 */
class SellerSearch extends Seller
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['_id', 'amazon', 'flipkart', 'snapdeal', 'myntra', 'shopclues'], 'integer'],
            [['seller_name', 'seller_city', 'seller_email', 'seller_seller'], 'safe'],
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
        $query = Seller::find();

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
            'amazon' => $this->amazon,
            'flipkart' => $this->flipkart,
            'snapdeal' => $this->snapdeal,
            'myntra' => $this->myntra,
            'shopclues' => $this->shopclues,
        ]);

        $query->andFilterWhere(['like', 'seller_name', $this->seller_name])
            ->andFilterWhere(['like', 'seller_city', $this->seller_city])
            ->andFilterWhere(['like', 'seller_email', $this->seller_email])
            ->andFilterWhere(['like', 'seller_seller', $this->seller_seller]);

        return $dataProvider;
    }
}
