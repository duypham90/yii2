<?php
namespace frontend\controllers;

use Yii;

use yii\web\Controller;
use frontend\components\Cart;
use frontend\models\CheckOut;
use backend\models\Orders;
use backend\models\OrderDetails;

/**
 * Cart controller
 */
class CheckoutController extends Controller
{
    public function actionIndex(){
        $model =  new CheckOut();
        $cart =  new Cart();
        $cartstore = $cart->cartstore;
        $cost = $cart->getTotal();
        $total = $cart->getTotalItem();
        if($model->load(Yii::$app->request->post())){
            if ($order = $model->addOrder()){
                 $model->addOrderItem($order->id);
            }
        }
        return $this->render('index', [
            'model' => $model,
            'cartstore' => $cartstore,
            'cost' => $cost
        ]);
    }

}
