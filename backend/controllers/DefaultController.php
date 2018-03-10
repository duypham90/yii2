<?php
namespace backend\controllers;
use Yii;
use yii\web\Controller;
use backend\models\OrdersSearch;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\AdminLoginForm;
use yii\bootstrap\ActiveForm;

/**
 * Site controller
 */
class DefaultController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login','index'],
                        'allow' => true,
                    ],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        // $searchModel = new OrdersSearch();
        // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        // return $this->render('index', [
        //     'searchModel' => $searchModel,
        //     'dataProvider' => $dataProvider,
        // ]);

        return $this->render('index');
        // 
    }
}
