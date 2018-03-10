<?php
namespace api\modules\v1\models;
use \yii\db\ActiveRecord;
use Yii;
/**
 * Country Model
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class Hotel extends ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'hotels';
	}

    /**
     * @inheritdoc
     */
    // public static function primaryKey()
    // {
    //     return ['code'];
    // }

    /**
     * Define rules for validation
     */
    public function rules()
    {
         return [
            [['name'], 'required','message' => '{attribute} is required'],
            [['display_order', 'no_of_rooms', 'updated_by', 'status'], 'integer'],
            [['graded_star', 'lat', 'lng'], 'number'],
            //[['address', 'city', 'country', 'home_description', 'description', 'short_description', 'location', 'promotion'], 'string'],
            //[['facilities','home_description'], 'default'],
            [['special_offer', 'address', 'city', 'country', 'home_description', 'description', 'short_description', 'facilities', 'sports', 'location', 'promotion'], 'default','value'=>''],

            [['name', 'slug', 'email_info', 'email_sales'], 'string', 'max' => 100],
            [['short_name'], 'string', 'max' => 50],
            [['hotline', 'fax'], 'string', 'max' => 20],
            [['tel'], 'string', 'max' => 64],

            //[['cover_photo', 'logo'], 'string', 'max' => 128],
            [['cover_photo','logo'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
        ];
    }
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'short_name' => Yii::t('app', 'Short Name'),
            'slug' => Yii::t('app', 'Slug'),
            'display_order' => Yii::t('app', 'Display Order'),
            'graded_star' => Yii::t('app', 'Graded Star'),
            'email_info' => Yii::t('app', 'Email Info'),
            'email_sales' => Yii::t('app', 'Email Sales'),
            'hotline' => Yii::t('app', 'Hotline'),
            'tel' => Yii::t('app', 'Tel'),
            'fax' => Yii::t('app', 'Fax'),
            'no_of_rooms' => Yii::t('app', 'No Of Rooms'),
            'special_offer' => Yii::t('app', 'Special Offer'),
            'address' => Yii::t('app', 'Address'),
            'city' => Yii::t('app', 'City'),
            'country' => Yii::t('app', 'Country'),
            'home_description' => Yii::t('app', 'Home Description'),
            'description' => Yii::t('app', 'Description'),
            'term_condition' => Yii::t('app', 'Term Condition'),
            'short_description' => Yii::t('app', 'Short Description'),
            'added_date' => Yii::t('app', 'Added Date'),
            'updated_date' => Yii::t('app', 'Updated Date'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'facilities' => Yii::t('app', 'Facilities'),
            'sports' => Yii::t('app', 'Sports'),
            'location' => Yii::t('app', 'Location'),
            'cover_photo' => Yii::t('app', 'Cover Photo'),
            'status' => Yii::t('app', 'Status'),
            'promotion' => Yii::t('app', 'Promotion'),
            'logo' => Yii::t('app', 'Logo'),
            'lat' => Yii::t('app', 'Lat'),
            'lng' => Yii::t('app', 'Lng'),
        ];
    }
    // public function fields(){
    //     return [
    //         'id',
    //         Yii::t('app', 'name') =>'name',
    //         Yii::t('app', 'shortname') => 'short_name',
    //         Yii::t('app', 'slug') => 'slug',
    //         Yii::t('app', 'display_order') => 'display_order',
    //         Yii::t('app', 'graded_star') => 'graded_star',
    //         Yii::t('app', 'email_info') => 'email_info',
    //         Yii::t('app', 'email_sales') => 'email_sales',
    //         Yii::t('app', 'hotline') => 'hotline',
    //         Yii::t('app', 'tel') => 'tel',
    //         Yii::t('app', 'fax') => 'fax',
    //         // Yii::t('app', 'no_of_rooms') => 'no_of_rooms',
    //         //Yii::t('app', 'special_offer') => 'special_offer',
    //         //Yii::t('app', 'address') => 'address',
    //         //Yii::t('app', 'city') =>'city' ,
    //         //Yii::t('app', 'country') => 'country',
    //         //Yii::t('app', 'home_description') => 'home_description',
    //         //Yii::t('app', 'description') => 'description',
    //         //Yii::t('app', 'term_condition') => 'term_condition',
    //         //Yii::t('app', 'short_description') => 'short_description',            
    //         //Yii::t('app', 'facilities') => 'facilities',
    //         //Yii::t('app', 'sports') => 'sports',
    //         // Yii::t('app', 'location') => 'location',
    //         // Yii::t('app', 'cover_photo') => 'cover_photo',
    //         Yii::t('app', 'status') => function(Hotel $model){
    //             return ($model->status == '0' ? 'Publish' : 'UnPulish');
    //         }
    //         //Yii::t('app', 'promotion') => 'promotion',
    //         // Yii::t('app', 'logo') => 'logo',
    //         // Yii::t('app', 'lat') => 'lat',
    //         // Yii::t('app', 'lng') => 'lng',
    //         // Yii::t('app', 'added_date') => 'added_date',
    //         // Yii::t('app', 'updated_date') => 'updated_date',
    //         // Yii::t('app', 'updated_by') => 'updated_by',
    //     ];
    // }
    //  public function extraFields() {
    //     return [
    //       'a' => function($model){
    //         return $model->cate->id;
    //       },
    //       'b'=>function($model){
    //          return $model->cate->name;
    //        }
    //     ];
    // }
    public function fields()
    {
        $items = parent::fields();
        unset($items['id']);
        return $items;
    }
    public function extraFields()
    {
        return [
            'custom_field' => 'customField'
        ];
    }

}
