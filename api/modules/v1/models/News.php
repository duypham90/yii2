<?php

namespace api\modules\v1\models;
use Yii;


class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news2';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['secid', 'catid', 'date', 'hot', 'published', 'view', 'scatid'], 'integer'],
            [['title', 'summary', 'content', 'image', 'tag', 'mo_ta_ngan'], 'string'],
            [['thu', 'tag', 'mo_ta_ngan', 'alias'], 'required'],
            [['dateadd'], 'safe'],
            [['thu'], 'string', 'max' => 255],
            [['alias'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'secid' => Yii::t('app', 'Secid'),
            'catid' => Yii::t('app', 'Catid'),
            'title' => Yii::t('app', 'Title'),
            'summary' => Yii::t('app', 'Summary'),
            'content' => Yii::t('app', 'Content'),
            'image' => Yii::t('app', 'Image'),
            'date' => Yii::t('app', 'Date'),
            'thu' => Yii::t('app', 'Thu'),
            'dateadd' => Yii::t('app', 'Dateadd'),
            'hot' => Yii::t('app', 'Hot'),
            'published' => Yii::t('app', 'Published'),
            'view' => Yii::t('app', 'View'),
            'scatid' => Yii::t('app', 'Scatid'),
            'tag' => Yii::t('app', 'Tag'),
            'mo_ta_ngan' => Yii::t('app', 'Mo Ta Ngan'),
            'alias' => Yii::t('app', 'Alias'),
        ];
    }
}
