<?php
namespace api\modules\v1\controllers;
use Yii;
use yii\rest\Controller;
use yii\data\ActiveDataProvider;
use api\modules\v1\models\Hotel;
use api\modules\v1\models\Cms;

class AbcController extends Controller
{
    public function actions(){
        $actions = parent::actions();
        unset($actions['index']);
        return $actions;
    }
    public function actionIndex(){
        $activeData = new ActiveDataProvider([
            'query' => Cms::find(),
            'pagination' => [
                'defaultPageSize' => 2,
            ],
        ]);
        return $activeData;
    }
    public function actionGetHotel($id){
        $query=Hotel::findOne(10);
        return $query;
    }
}


