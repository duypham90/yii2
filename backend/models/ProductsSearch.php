<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * ProductsSearch represents the model behind the search form about `backend\models\Products`.
 */
class ProductsSearch extends Products
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'quantity', 'hot', 'featured', 'online', 'status', 'updated_by', 'created_at', 'updated_at'], 'integer'],
            [['category_id', 'name', 'slug', 'price', 'color', 'product_code', 'cover_photo', 'description', 'promotion_text', 'provider', 'meta_title', 'meta_keyword', 'meta_description'], 'safe'],
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
        $query = Products::find();
        //$query = Products::find()->sortDate();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination'=>[
                'pageSize'=>20
            ],
            'sort'=>[
                'defaultOrder'=>[
                    //'id'=> SORT_DESC,
                    'time' =>SORT_DESC
                ]
            ]
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
            //'quantity' => $this->quantity,
            'price_discount' => $this->price_discount,
            'hot' => $this->hot,
            'featured' => $this->featured,
            'online' => $this->online,
            'status' => $this->status,
            'updated_by' => $this->updated_by,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'category_id', $this->category_id])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'price', $this->price])
            ->andFilterWhere(['like', 'quantity', $this->quantity])
            ->andFilterWhere(['like', 'color', $this->color])
            ->andFilterWhere(['like', 'product_code', $this->product_code])
            ->andFilterWhere(['like', 'cover_photo', $this->cover_photo])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'promotion_text', $this->promotion_text])
            ->andFilterWhere(['like', 'provider', $this->provider])
            ->andFilterWhere(['like', 'meta_title', $this->meta_title])
            ->andFilterWhere(['like', 'meta_keyword', $this->meta_keyword])
            ->andFilterWhere(['like', 'meta_description', $this->meta_description]);

        return $dataProvider;
    }
    
}
