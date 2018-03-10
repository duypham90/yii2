<?php

namespace api\modules\v1\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property string $meta_title
 * @property integer $id
 * @property string $category_id
 * @property string $name
 * @property string $product_code
 * @property string $slug
 * @property integer $quantity
 * @property string $price
 * @property double $price_discount
 * @property integer $type
 * @property string $cover_photo
 * @property string $material
 * @property string $height
 * @property string $clothesline
 * @property string $description
 * @property string $added_date
 * @property string $updated_date
 * @property integer $updated_by
 * @property integer $status
 * @property string $meta_keyword
 * @property string $meta_description
 * @property integer $hot
 * @property integer $online
 * @property integer $selling
 * @property integer $2x
 * @property integer $promotion_flag
 * @property string $promotion_text
 * @property string $unit
 * @property double $weight
 * @property integer $featured
 * @property string $combination
 * @property string $provider
 * @property string $barcode
 * @property integer $multiversion
 * @property string $color
 * @property string $size
 * @property integer $show_hidden
 */
class Products extends \yii\db\ActiveRecord
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
            [['meta_title', 'category_id', 'name', 'product_code', 'slug', 'quantity', 'price', 'price_discount', 'type', 'cover_photo', 'material', 'height', 'clothesline', 'description', 'added_date', 'updated_date', 'updated_by', 'status', 'meta_keyword', 'meta_description', 'hot', 'online', 'selling', '2x', 'promotion_flag', 'promotion_text', 'unit', 'weight', 'featured', 'combination', 'provider', 'barcode', 'multiversion'], 'required'],
            [['quantity', 'type', 'updated_by', 'status', 'hot', 'online', 'selling', '2x', 'promotion_flag', 'featured', 'multiversion', 'show_hidden'], 'integer'],
            [['price_discount', 'weight'], 'number'],
            [['material', 'clothesline', 'description'], 'string'],
            [['added_date', 'updated_date'], 'safe'],
            [['meta_title', 'name', 'slug', 'meta_keyword', 'meta_description', 'promotion_text', 'color', 'size'], 'string', 'max' => 256],
            [['category_id'], 'string', 'max' => 255],
            [['product_code'], 'string', 'max' => 20],
            [['price'], 'string', 'max' => 64],
            [['cover_photo', 'unit', 'provider', 'barcode'], 'string', 'max' => 128],
            [['height'], 'string', 'max' => 28],
            [['combination'], 'string', 'max' => 765],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'meta_title' => Yii::t('app', 'Meta Title'),
            'id' => Yii::t('app', 'ID'),
            'category_id' => Yii::t('app', 'Category ID'),
            'name' => Yii::t('app', 'Name'),
            'product_code' => Yii::t('app', 'Product Code'),
            'slug' => Yii::t('app', 'Slug'),
            'quantity' => Yii::t('app', 'Quantity'),
            'price' => Yii::t('app', 'Price'),
            'price_discount' => Yii::t('app', 'Price Discount'),
            'type' => Yii::t('app', 'Type'),
            'cover_photo' => Yii::t('app', 'Cover Photo'),
            'material' => Yii::t('app', 'Material'),
            'height' => Yii::t('app', 'Height'),
            'clothesline' => Yii::t('app', 'Clothesline'),
            'description' => Yii::t('app', 'Description'),
            'added_date' => Yii::t('app', 'Added Date'),
            'updated_date' => Yii::t('app', 'Updated Date'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'status' => Yii::t('app', 'Status'),
            'meta_keyword' => Yii::t('app', 'Meta Keyword'),
            'meta_description' => Yii::t('app', 'Meta Description'),
            'hot' => Yii::t('app', 'Hot'),
            'online' => Yii::t('app', 'Online'),
            'selling' => Yii::t('app', 'Selling'),
            '2x' => Yii::t('app', '2x'),
            'promotion_flag' => Yii::t('app', 'Promotion Flag'),
            'promotion_text' => Yii::t('app', 'Promotion Text'),
            'unit' => Yii::t('app', 'Unit'),
            'weight' => Yii::t('app', 'Weight'),
            'featured' => Yii::t('app', 'Featured'),
            'combination' => Yii::t('app', 'Combination'),
            'provider' => Yii::t('app', 'Provider'),
            'barcode' => Yii::t('app', 'Barcode'),
            'multiversion' => Yii::t('app', 'Multiversion'),
            'color' => Yii::t('app', 'Color'),
            'size' => Yii::t('app', 'Size'),
            'show_hidden' => Yii::t('app', 'Show Hidden'),
        ];
    }
}
