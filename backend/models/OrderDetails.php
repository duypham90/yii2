<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "order_details".
 *
 * @property integer $id
 * @property integer $order_id
 * @property integer $product_id
 * @property string $category_id
 * @property integer $price
 * @property integer $quantity
 * @property string $product_name
 * @property integer $user_id
 * @property string $attributes
 */
class OrderDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'product_id', 'price', 'quantity', 'product_name'], 'required'],
            [['order_id', 'product_id', 'price', 'quantity', 'user_id'], 'integer'],
            [['attributes'], 'string'],
            [['category_id', 'product_name'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_id' => 'Order ID',
            'product_id' => 'Tên sản phẩm',
            'category_id' => 'Category ID',
            'price' => 'Giá bán',
            'quantity' => 'Số lượng',
            'product_name' => 'Product Name',
            'user_id' => 'User ID',
            'attributes' => 'Attributes',
        ];
    }
}
