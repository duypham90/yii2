<?php

namespace backend\controllers;

use Yii;
use backend\models\Products;
use backend\models\ProductsSearch;
use yii\helpers\VarDumper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\Categories;

use yii\web\UploadedFile;
use yii\helpers\Inflector;// cắt dấu
use yii\base\Security;
use yii\helpers\StringHelper;

use backend\behaviors\SortableDateController;
/**
 * ProductsController implements the CRUD actions for Products model.
 */
class ProductsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            // 'access' => [
            //     'class' => AccessControl::className(),
            //     'rules' => [
            //         [
            //             'actions' => ['login', 'error'],
            //             'allow' => true,
            //         ],
            //         [
            //             'actions' => ['logout','index','view','create','update','delete'],
            //             'allow' => true,
            //             'roles' => ['@'],
            //         ],
            //     ],
            // ],
            [
                'class' => SortableDateController::className(),
                'model' => Products::className(),
            ],

            // [
            //     'class' => StatusController::className(),
            //     'model' => Products::className()
            // ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Products models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductsSearch();
        //print_r(Yii::$app->request->queryParams);
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        //$arrCategories=Categories::find()->select('id,parent_id,name')->asArray()->all();
        $arrCategories=Categories::find()->asArray()->all();
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'arrCategories'=>$arrCategories,
        ]);
    }

    /**
     * Displays a single Products model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Products model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Products();
        $upload= Yii::getAlias('@frontend') .'/web/uploads/';
        if ($model->load(Yii::$app->request->post())) {        
                   
            $model->price=preg_replace('/\D/', '', $model->price);
            $model->price_discount=preg_replace('/\D/', '', $model->price_discount);
            $imageFiles =UploadedFile::getInstances($model, 'cover_photo');
            $cover=array();
            if($imageFiles){
                foreach ($imageFiles as $file) {
                    $image= $file->basename.'-'.Yii::$app->security->generateRandomString(3);
                    $image= StringHelper::truncate($image,50,'');
                    $image= Inflector::slugletterAndNumber($image,'-',true).'-'.time().'.' . $file->extension;
                    array_push($cover, $image);
                    $file->saveAs($upload.'products/'.$image);
                }
            }
            $model->cover_photo=implode(',', $cover);
            $model->category_id = trim($_POST['Products']['category_id'],',');
            if($model->save()){           
                return $this->redirect(['index']);
            }
            else{
                $errors = $model->errors;
                print_r($errors);
            }
            
        } else {
            $model->status=0;
            $model->price=0;
            $model->price_discount=0;
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Products model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $oldImage=$model->cover_photo;
        $upload= Yii::getAlias('@frontend') .'/web/uploads/';
        if ($model->load(Yii::$app->request->post())) {
            $model->price=preg_replace('/\D/', '', $model->price);
            $model->price_discount=preg_replace('/\D/', '', $model->price_discount);
            $imageFiles =UploadedFile::getInstances($model, 'cover_photo');
            $cover=array();
            if($oldImage!=''){
                $cover=explode(',', $oldImage);
            }
            if(!empty($imageFiles)) {
                foreach ($imageFiles as $file) {
                    $image= $file->basename.'-'.Yii::$app->security->generateRandomString(3);
                    $image= StringHelper::truncate($image,50,'');
                    $image= Inflector::slugletterAndNumber($image,'-',true).'-'.time().'.' . $file->extension;
                    array_push($cover, $image);
                    $file->saveAs($upload.'products/'.$image);
                }
                $model->cover_photo=implode(',', $cover);
            }
            else{
                $model->cover_photo = $oldImage;
            }
            $model->time = time();
            if($model->save()){
                return $this->redirect(['index']);
            }
            else {
                $this->flash('error', Yii::t('easyii', 'Update error. {0}', $model->formatErrors()));
                return $this->refresh();
            }
            
        } else {
            $model->price=Yii::$app->formatter->asDecimal($model->price,0);
            $model->price_discount=Yii::$app->formatter->asDecimal($model->price_discount,0);
            //$model->cover_photo=explode(',', $model->cover_photo);
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Products model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    // public function actionDelete($id)
    // {
    //     $this->findModel($id)->delete();

    //     return $this->redirect(['index']);
    // }
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        
        if (!Yii::$app->request->isAjax) {
            return $this->redirect(['index']);
        }
    }
    public function actionUp($id)
    {
        return $this->move($id, 'up');
        // if (!Yii::$app->request->isAjax) {
        //     return $this->redirect(['index']);
        // }
    }

    public function actionDown($id)
    {
        return $this->move($id, 'down');
        if (!Yii::$app->request->isAjax) {
            return $this->redirect(['index']);
        }
    }

    public function actionOn($id)
    {
        return $this->changeStatus($id, Products::STATUS_ON);
    }

    public function actionOff($id)
    {
        return $this->changeStatus($id, Products::STATUS_OFF);
    }

    /**
     * Finds the Products model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Products the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Products::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
