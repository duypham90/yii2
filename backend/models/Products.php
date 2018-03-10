<?php

namespace backend\models;
use yii\behaviors\TimestampBehavior;
use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property string $category_id
 * @property string $name
 * @property string $slug
 * @property integer $quantity
 * @property string $price
 * @property string $color
 * @property string $product_code
 * @property double $price_discount
 * @property string $cover_photo
 * @property string $description
 * @property integer $hot
 * @property integer $featured
 * @property integer $online
 * @property string $promotion_text
 * @property string $provider
 * @property string $meta_title
 * @property string $meta_keyword
 * @property string $meta_description
 * @property integer $status
 * @property integer $updated_by
 * @property integer $created_at
 * @property integer $updated_at
 */
class Products extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */

    public function rules()
    {
        return [
            [['name','category_id','quantity','price'], 'required','message'=>'Vui lòng nhập {attribute}'],
            [['price_discount','quantity','hot', 'featured', 'online', 'status', 'updated_by', 'created_at', 'updated_at', 'time'], 'integer','message'=>'Vui lòng nhập số'],
            ['cover_photo', 'image', 'skipOnEmpty' => true,'extensions' => 'png, jpg', 'maxFiles' => 4, 'minWidth' => 100, 'maxWidth' => 500, 'minHeight' => 100, 'maxHeight' => 500,'message'=>'Chi được chọn hình ảnh'],
            //[['price_discount','time'], 'number'],
            [['description'], 'string'],
            [['name', 'slug','category_id', 'promotion_text','short_description', 'meta_title', 'meta_keyword', 'meta_description'], 'string', 'max' => 256],
            //[['price','price_discount'], 'string', 'max' => 64],
            [['product_code'], 'string', 'max' => 20],
        ];
    }
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Danh mục',
            'name' => 'Tên',
            'slug' => 'Slug',
            'quantity' => 'Số lượng',
            'price' => 'Giá bán',
            'color' => 'Màu sắc',
            'product_code' => 'Bar Code',
            'price_discount' => 'Giảm giá',
            'cover_photo' => 'Hình ảnh',
            'description' => 'Chi tiết sản phẩm',
            'hot' => 'Hot',
            'featured' => 'Nổi bật',
            'online' => 'Online',
            'promotion_text' => 'Khuyến mãi',
            'short_description'=>'Mô tả ngắn',
            'provider' => 'Nhà cung cấp',
            'meta_title' => 'Tiêu đề trang',
            'meta_keyword' => 'Từ khóa tìm kiếm',
            'meta_description' => 'Mô tả thêm',
            'status' => 'Trạng thái',
            'updated_by' => 'Updated By',
            'created_at' => 'Created',
            'updated_at' => 'Updated',
        ];
    }
}
