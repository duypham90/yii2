<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property integer $id
 * @property integer $order_no
 * @property double $total
 * @property string $request_date
 * @property string $fullname
 * @property string $address
 * @property integer $district_id
 * @property integer $city
 * @property integer $user_id
 * @property string $phone
 * @property string $notes
 * @property integer $status
 * @property double $fee_ship
 * @property integer $view
 * @property string $payment_method
 * @property string $payment_status
 * @property string $payment_date
 * @property string $updated_date
 * @property string $promotion_code
 * @property double $promotion_code_value
 * @property string $email
 * @property string $reason
 */
//class Orders extends \yii\db\ActiveRecord
class Orders extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_no', 'total', 'request_date', 'fullname', 'address', 'district_id', 'city', 'user_id', 'phone', 'notes', 'status', 'fee_ship', 'view', 'payment_method', 'payment_status', 'payment_date', 'updated_date', 'promotion_code', 'promotion_code_value', 'email', 'reason'], 'required'],
            [['order_no', 'district_id', 'city', 'user_id', 'status', 'view'], 'integer'],
            [['total', 'fee_ship', 'promotion_code_value'], 'number'],
            [['request_date', 'payment_date', 'updated_date'], 'safe'],
            [['fullname', 'address', 'payment_method', 'payment_status', 'email'], 'string', 'max' => 128],
            [['phone', 'promotion_code'], 'string', 'max' => 20],
            [['notes'], 'string', 'max' => 765],
            [['reason'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_no' => 'Mã đơn hàng',
            'total' => 'Tổng tiền',
            'request_date' => 'Ngày đặt hàng',
            'fullname' => 'Tên khách hàng',
            'address' => 'Địa chỉ',
            'district_id' => 'Quận huyện',
            'city' => 'Thành phố',
            'user_id' => 'User ID',
            'phone' => 'Điên thoại',
            'notes' => 'Notes',
            'status' => 'Trạng thái',
            'fee_ship' => 'Fee Ship',
            'view' => 'View',
            'payment_method' => 'Payment Method',
            'payment_status' => 'Payment Status',
            'payment_date' => 'Payment Date',
            'updated_date' => 'Updated Date',
            'promotion_code' => 'Promotion Code',
            'promotion_code_value' => 'Promotion Code Value',
            'email' => 'Email',
            'reason' => 'Reason',
        ];
    }
}
