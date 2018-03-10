<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use frontend\components\Cart;
use backend\models\Orders;
use backend\models\OrderDetails;

/**
 * ContactForm is the model behind the contact form.
 */
class CheckOut extends Model
{
    public $fullname;
    public $email;
    public $address;
    public $phone;
    public $shipping_method;
    public $payment_method;
    public $payment_status;
    public $notes;
    public $amount;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['fullname', 'email', 'phone'], 'required','message' =>'Vui lòng nhập {attribute}'],
            [['fullname', 'address', 'notes', 'email','payment_status'], 'string', 'max' => 128],
            [['phone'], 'string', 'max' => 20],
            [['payment_method', 'amount'], 'integer'],
            // email has to be a valid email address
            ['email', 'email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fullname' => 'Tên khách hàng',
            'address' => 'Địa chỉ',
            'district_id' => 'Quận huyện',
            'city' => 'Thành phố',
            'phone' => 'Điện thoại',
            'notes' => 'Notes',
            'fee_ship' => 'Fee Ship',
            'payment_status' => 'Trạng thái giao hàng',
            'payment_method' => 'Thanh toán',
            'email' => 'Email',
        ];
    }
    public function addOrder() {
        if (!$this->validate()){
            return null;
        }
        $order = new Orders;
        $post = Yii::$app->request->post()['CheckOut'];
        $order->order_no = rand(10,100000);
        $order->request_date = date('Y-m-d H:m:i');
        $order->fullname = $this->fullname;
        $order->phone = $this->phone;
        $order->email = $this->email;
        $order->address = $this->address;
        $order->district_id = 1;
        $order->city = 2;
        $order->payment_status = 'new';
        $order->notes = 'ghi chú';
        $order->total = $this->amount;
        return $order->save() ? $order : null;
    }
    public function addOrderItem($orderID) {
        $flag = false;
        $cart =  new Cart();
        $cartstore = $cart->cartstore;
        $cost = $cart->getTotal();

        if (!$this->validate()){
            return null;
        }
        foreach ($cartstore as $item){
            $orderItem = new OrderDetails();
            $orderItem->order_id = $orderID;
            $orderItem->product_id = $item->id;
            $orderItem->product_name = $item->name;                   
            $orderItem->price = $item->price;
            $orderItem->quantity =$item->qtt;
            if($orderItem->save()){
                $flag = true;
            }
        }
        return $flag;
    }
}
