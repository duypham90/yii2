<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Orders;

/**
 * OrdersSearch represents the model behind the search form about `backend\models\Orders`.
 */
class OrdersSearch extends Orders
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'order_no', 'district_id', 'city', 'user_id', 'status', 'view'], 'integer'],
            [['total', 'fee_ship', 'promotion_code_value'], 'number'],
            [['request_date', 'fullname', 'address', 'phone', 'notes', 'payment_method', 'payment_status', 'payment_date', 'updated_date', 'promotion_code', 'email', 'reason'], 'safe'],
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
        $query = Orders::find()->sortDate();
        //$query = Orders::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC,
                    //'title' => SORT_ASC, 
                ]
            ],
            'pagination' => [
                'pageSize' => 10,
            ],
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
            //'order_no' => $this->order_no,
            //'total' => $this->total,
            'DATE(request_date)'=>$this->changeDate($this->request_date),
            'district_id' => $this->district_id,
            'city' => $this->city,
            'user_id' => $this->user_id,
            'status' => $this->status,
            'fee_ship' => $this->fee_ship,
            'view' => $this->view,
            'payment_date' => $this->payment_date,
            'updated_date' => $this->updated_date,
            'promotion_code_value' => $this->promotion_code_value,
        ]);

        $query->andFilterWhere(['like', 'fullname', $this->fullname])
            ->andFilterWhere(['like', 'order_no', $this->order_no])
            ->andFilterWhere(['like', 'total', $this->total])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'payment_method', $this->payment_method])
            ->andFilterWhere(['like', 'payment_status', $this->payment_status])
            ->andFilterWhere(['like', 'promotion_code', $this->promotion_code])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'reason', $this->reason]);

        return $dataProvider;
    }
    private function changeDate($value)
    {
        // if($value != "" && preg_match('/^(?:\s*(<>|<=|>=|<|>|=))?(.*)$/',$value,$matches))
        //     return $matches[1] . date("Y-m-d",strtotime($matches[2]));
        if($value !=""){
            return date('Y-m-d',strtotime($value));
        }
        else
            return $value;
    }
    public function getListByOrdreID($orderID){
        $query=OrderDetails::find()
               ->where(['order_id',$orderID]); // where(['điều kiện', cột so sánh, 'Giá trị'])
               //return parent::find()->where(['storeActive' => 1]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' =>false,
            'sort' => ['defaultOrder' => ['id' => SORT_DESC]
            ],
        ]);
        return $dataProvider->getModels();
    }
    public static function sortDate()
    {
        $this->orderBy(['time' => SORT_DESC]);
        return $this;
    }
}

