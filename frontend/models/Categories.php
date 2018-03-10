<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property integer $id
 * @property integer $parent_id
 * @property string $name
 * @property integer $display_order
 * @property string $slug
 * @property string $alias
 * @property integer $type
 * @property integer $type_display
 * @property string $link
 * @property integer $new_id
 * @property integer $position
 * @property string $meta_title
 * @property string $meta_keyword
 * @property string $meta_description
 * @property integer $status
 * @property integer $updated_by
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
    public function rules()
    {
        return [
            [['parent_id', 'display_order', 'type', 'type_display', 'new_id', 'position', 'status', 'updated_by', 'created_at', 'updated_at'], 'integer'],
            [['name', 'slug', 'updated_by', 'created_at', 'updated_at'], 'required'],
            [['link'], 'string'],
            [['name', 'slug', 'meta_keyword', 'meta_description'], 'string', 'max' => 256],
            [['alias'], 'string', 'max' => 255],
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
            'parent_id' => 'Parent ID',
            'name' => 'Name',
            'display_order' => 'Display Order',
            'slug' => 'Slug',
            'alias' => 'Alias',
            'type' => 'Type',
            'type_display' => 'Type Display',
            'link' => 'Link',
            'new_id' => 'New ID',
            'position' => 'Position',
            'meta_title' => 'Meta Title',
            'meta_keyword' => 'Meta Keyword',
            'meta_description' => 'Meta Description',
            'status' => 'Status',
            'updated_by' => 'Updated By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @inheritdoc
     * @return CategoriesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CategoriesQuery(get_called_class());
    }
}
