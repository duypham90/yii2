<?php

namespace api\modules\v1\controllers;

use yii\rest\ActiveController;

/**
 * Country Controller API
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class UserController extends ActiveController
{
    public $modelClass = 'api\modules\v1\models\User';
    public function actions(){
    	$actions = parent::actions();
    	unset($actions['delete'],$actions['create']);
    	return $actions;
    }
}// class



