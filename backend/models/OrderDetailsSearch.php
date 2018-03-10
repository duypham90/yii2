<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\OrderDetails;

/**
 * OrderDetailsSearch represents the model behind the search form about `app\models\OrderDetails`.
 */
class OrderDetailsSearch extends OrderDetails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'order_id', 'product_id', 'price', 'quantity', 'user_id'], 'integer'],
            [['category_id', 'size', 'color', 'product_name', 'attributes'], 'safe'],
            [['price_discount'], 'number'],
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
        $query = OrderDetails::find();

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
            'id' => $this->id,
            'order_id' => $this->order_id,
            'product_id' => $this->product_id,
            'price' => $this->price,
            'price_discount' => $this->price_discount,
            'quantity' => $this->quantity,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'category_id', $this->category_id])
            ->andFilterWhere(['like', 'size', $this->size])
            ->andFilterWhere(['like', 'color', $this->color])
            ->andFilterWhere(['like', 'product_name', $this->product_name])
            ->andFilterWhere(['like', 'attributes', $this->attributes]);

        return $dataProvider;
    }
    public function getListByOrdreID($orderID){
        $query=OrderDetailsSearch::find()
               ->where(['order_id'=>$orderID]); // where(['điều kiện', cột so sánh, 'Giá trị'])
               //return parent::find()->where(['storeActive' => 1]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            //'pagination' =>false,
            'pagination' => [
                'pageSize' => 20,
            ],
            'sort' => ['defaultOrder' => ['id' => SORT_DESC]
            ],
        ]);
        return $dataProvider;
    }

}
