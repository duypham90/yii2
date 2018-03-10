<?php


namespace api\modules\v1\models;

use Yii;

/**
 * This is the model class for table "cms".
 *
 * @property integer $id
 * @property integer $parent_id
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property string $short_content
 * @property string $cover_photo
 * @property string $size
 * @property string $type
 * @property string $files
 * @property integer $hotel_id
 * @property integer $display_order
 * @property integer $status
 * @property string $added_date
 * @property string $updated_date
 * @property integer $updated_by
 */
class Cms extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'title', 'slug', 'description', 'short_content', 'cover_photo', 'size', 'type', 'files', 'hotel_id', 'display_order', 'status', 'added_date', 'updated_date', 'updated_by'], 'required'],
            [['parent_id', 'hotel_id', 'display_order', 'status', 'updated_by'], 'integer'],
            [['title', 'description'], 'string'],
            [['added_date', 'updated_date'], 'safe'],
            [['slug'], 'string', 'max' => 256],
            [['short_content', 'files'], 'string', 'max' => 255],
            [['cover_photo', 'type'], 'string', 'max' => 128],
            [['size'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'parent_id' => Yii::t('app', 'Parent ID'),
            'title' => Yii::t('app', 'Title'),
            'slug' => Yii::t('app', 'Slug'),
            'description' => Yii::t('app', 'Description'),
            'short_content' => Yii::t('app', 'Short Content'),
            'cover_photo' => Yii::t('app', 'Cover Photo'),
            'size' => Yii::t('app', 'Size'),
            'type' => Yii::t('app', 'Type'),
            'files' => Yii::t('app', 'Files'),
            'hotel_id' => Yii::t('app', 'Hotel ID'),
            'display_order' => Yii::t('app', 'Display Order'),
            'status' => Yii::t('app', 'Status'),
            'added_date' => Yii::t('app', 'Added Date'),
            'updated_date' => Yii::t('app', 'Updated Date'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }
}
