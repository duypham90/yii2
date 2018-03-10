<?php
namespace frontend\components;

use Yii;

use yii\web\Controller;
use frontend\components\Cart;

/**
 * Cart controller
 */
class Cart {
    /*  
        Cart include values:
        @data = get by Id or slug
        @quantity = number add to cart usually is 1
    */
    /*
        Create session in Yii: Yii::$app()->session['ten_session'] =  $value
        get session variable 'name': $value = Yii::$app()->session['name']
        
    */
    public $cartstore;
    public $getCost = 0;

    public function __construct() {
        $this->cartstore = Yii::$app->session['cart'];
    }   

    public function add($data, $quantity = 1) {
        $flag = false;
        if(isset($this->cartstore[$data->id])){
            $this->cartstore[$data->id]->qtt = $this->cartstore[$data->id]->qtt + 1;
            Yii::$app->session['cart'] = $this->cartstore;
            $flag = true;
        }else{
            $this->cartstore[$data->id] = $data;
            $this->cartstore[$data->id]->qtt = $quantity;
            Yii::$app->session['cart'] = $this->cartstore;
             $flag = true;
        } 
        return $flag;
    }

    public function remove($data) {
        unset($this->cartstore[$data->id]);
        Yii::$app->session['cart'] = $this->cartstore;
        return true;
    }

    public function reomveAll(){
        $this->cartstore = [];
        Yii::$app->session['cart'] = $this->cartstore;
    }

    public function update($id, $quantity){
        $this->cartstore[$id]->qtt = $quantity;
        Yii::$app->session['cart'] = $this->cartstore;
        return true;
    }

    public function getTotal() {
        if($this->cartstore){
            foreach ($this->cartstore as $item) {
                $this->getCost += $item->qtt * $item->price;
            }
        }
        return $this->getCost;
    }
    public function getTotalPriceItem($id) {
        $total = 0;
        if($this->cartstore){
            $total = $this->cartstore[$id]->qtt * $this->cartstore[$id]->price;
        }
        return $total;
    }
    public function getTotalItem(){
        $total = 0;
        if($this->cartstore){
            foreach ($this->cartstore as $item) {
                $total += $item->qtt;
            }
        }
        return $total;
    }

}
