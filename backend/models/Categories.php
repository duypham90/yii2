<?php

namespace backend\models;
use yii\behaviors\TimestampBehavior;
use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property integer $id
 * @property integer $parent_id
 * @property string $name
 * @property integer $display_order
 * @property string $slug
 * @property string $description
 * @property string $size
 * @property string $color
 * @property string $class_css
 * @property string $meta_title
 * @property string $meta_keyword
 * @property string $meta_description
 * @property integer $status
 * @property string $added_date
 * @property string $updated_date
 * @property integer $updated_by
 * @property integer $no_of_homepage
 * @property string $banner
 * @property string $get_by
 * @property string $url
 * @property string $background
 * @property integer $created_at
 * @property integer $updated_at
 */

class Categories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
    public function rules()
    {
        return [
            [['name'], 'required', 'message'=>'Vui lòng nhập {attribute}'], //attribute
            [['parent_id', 'display_order','type','type_display','position', 'new_id', 'status', 'updated_by', 'created_at', 'updated_at'], 'integer'],
            [['link'], 'string'],
            [['added_date', 'updated_date'], 'safe'],
            [['name', 'slug', 'meta_keyword', 'meta_description'], 'string', 'max' => 256],
            [['meta_title'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Danh mục',
            'name' => 'Tên',
            'display_order' => 'Display Order',
            'slug' => 'Slug',
            'link'=>'Liên kết',
            'new_id'=>'Chọn bài viết',
            'type' => 'Chọn loại',
            'type_display'=>'Kiểu hiển thị',
            'position' => 'Vị trí hiển thị',
            'description' => 'Mô tả',
            'meta_title' => 'Tiêu đề trang',
            'meta_keyword' => 'Từ khóa tìm kiếm',
            'meta_description' => 'Mô tả thêm',
            'status' => 'Trạng thái',
            'added_date' => 'Added Date',
            'updated_date' => 'Updated Date',
            'updated_by' => 'Updated By',
            'background' => 'Background',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
    public function getParent()
    {
        return $this->hasOne(Categories::className(), ['id' => 'parent_id']);
    }
    // public function getParent() {
    //     return $this->hasOne(self::classname(), ['id' => 'parent_id'])->
    //                 from(self::tableName() . ' AS parent');
    // }
}
