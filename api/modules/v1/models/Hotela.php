<?php
namespace api\modules\v1\models;
use \yii\db\ActiveRecord;
use Yii;
/**
 * Country Model
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class Hotela extends ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'hotels';
	}

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
