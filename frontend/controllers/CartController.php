<?php
namespace frontend\controllers;

use Yii;

use yii\web\Controller;
use frontend\components\Cart;
use frontend\models\Products;

/**
 * Cart controller
 */
class CartController extends Controller
{

    // public function actions()
    // {
    //     return [
    //         'error' => [
    //             'class' => 'yii\web\ErrorAction',
    //         ],
    //     ];
    // }
    public function actionIndex(){
        $cart =  new Cart();
        $cartstore = $cart->cartstore;
        $cost = $cart->getTotal();
        $total = $cart->getTotalItem();
        return $this->render('index', compact('cartstore','cost','total'));
    }
    public function actionAddcart(){
        if(Yii::$app->request->isAjax){
            $id = $_POST['id'];
            $cart = new Cart();
            //$model = Products::findOne(['id'=>$id]);
            //$model = Products::find()->select(['username','email'])->where('id=1')->One();
            $model = Products::find()
            ->select(['id','name', 'slug','quantity','price','cover_photo'])
            ->where('id=:id', [ ':id' => $id ])
            ->One();

            if(!$cart->add($model)){
                echo json_encode(array('success'=>false,'message'=>'Đặt thất bại'));
            }
            echo json_encode(array('success'=>true,'message'=>'Đặt thành công','model' => $model->name)); 
           // return $this->redirect(['/cart']);
        }   
    }
    public function actionRemove(){
        if(Yii::$app->request->isAjax){
            $id = $_POST['id'];
            $cart = new Cart();
            $model =  Products::findOne(['id' => $id]);
            if(!$cart->remove($model)){
                return json_encode(array('success'=>false,'message'=>'Xóa thất bại'));
            }
            if($cart->cartstore == null){
            	return json_encode(array('success'=>true,'sumtotal'=>null,'message'=>'Xóa thành công'));
            }else{
            	 return json_encode(array('success'=>true,'sumtotal'=>$cart->getTotal(),'message'=>'Xóa thành công'));
            }
           
        }
        // $cart->remove($model);
        // return $this->redirect(['/cart']);
    }
    public function actionUpdateitemcart(){
        if(Yii::$app->request->isAjax){
            $cart = new Cart();
            $id = $_POST['id'];
            $qtt = $_POST['qtt'];
            if(!$cart->update($id, $qtt)){
                echo json_encode(array('success'=>false,'message'=>'Cập nhật thất bại'));
            }
            $result = array('success'=>true,
            	'total' => number_format($cart->getTotalPriceItem($id),0,' ', ','),
            	'sumtotal' => number_format($cart->getTotal(),0,' ', ','),
            	'message' => 'Cập nhật thành công');   
            echo json_encode($result);
        }
    }
    public function actionUpdatecart($data, $id){
        if(Yii::$app->request->isAjax){
            $cart = new Cart();
            $id = $_POST['id'];
            $qtt = $_POST['qtt'];
            $cart = $cart->update($id, $qtt);
            if(!$cart->remove($model)){
                echo json_encode(array('success'=>false,'message'=>'Xóa thất bại'));
            }
            echo json_encode(array('success'=>true,'total'=>$cart->getTotal(),'message'=>'Xóa thành công'));
        }
    }
}
