<?php

namespace frontend\models;
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
class Product extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;
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
            [['quantity','hot', 'featured', 'online', 'status', 'updated_by', 'created_at', 'updated_at'], 'integer','message'=>'Vui lòng nhập số'],
            ['cover_photo', 'image', 'skipOnEmpty' => true,'extensions' => 'png, jpg', 'maxFiles' => 4, 'minWidth' => 100, 'maxWidth' => 500, 'minHeight' => 100, 'maxHeight' => 500,'message'=>'Chi được chọn hình ảnh'],
            [['price_discount'], 'number'],
            [['description'], 'string'],
            [['name', 'slug','category_id', 'promotion_text','short_description', 'meta_title', 'meta_keyword', 'meta_description'], 'string', 'max' => 256],
            //[['price','price_discount'], 'string', 'max' => 64],
            [['product_code'], 'string', 'max' => 20],
        ];
    }
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
    public function fields()
    {
        return [
            'id',
            'email' => 'email_address',
            'name' => function ($model) {
                return $model->first_name . ' ' . $model->last_name;
            },
        ];
    }


    // public function extraFields() {
    //     return [
    //       'a' => function($model){
    //         return $model->cate->id;
    //       },
    //       'b'=>function($model){
    //          return $model->cate->name;
    //        }
    //     ];
    // }
    // cách truy cập vào relationship trong table; bảng product và categories
    // get bắt buộc + Authors là tên truy cập relation.
    public function getCate()
    {
        return $this->hasOne(Categories::className(), ['id' => 'category_id']);
    }

    public function getListHot() {
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
    public function getList($limit) {
        $categories = Products::find()
        ->joinWith('categories')->limit(10);

        $rows = (new \yii\db\Query())
            ->select(['products.id','products.name', '.products.slug', 'products.quantity', 'products.price', 'categories.name as cate_name'])
            ->from('products')
            ->where(['products.status' => 0])
            ->join('LEFT JOIN', 'categories', 'categories.id = products.category_id')
            ->orderBy(['products.id' => SORT_DESC])
            ->limit(10)
            ->all();
            return $rows;
        //return Products::find()->joinWith('categories', true, 'INNER JOIN')->all();
        return Products::find()
            ->select(['id', 'name', 'slug', 'quantity', 'price'])
            ->where(['status' => 0])
            ->orderBy(['id' => SORT_DESC])->limit(10)->asArray()->all();
    }
   
}
