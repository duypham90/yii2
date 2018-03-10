<?php

namespace backend\controllers;

use Yii;
use backend\models\Categories;
use backend\models\CategoriesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\helpers\Inflector;

use backend\models\Products;
use backend\models\ProductsSearch;
/**
 * CategoriesController implements the CRUD actions for Categories model.
 */
class CategoriesController extends Controller
{
   //public $enableCsrfValidation = false;
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }



    /**
     * Lists all Categories models.
     * @return mixed
     */
    public function beforeAction($action)
    {
        if (in_array($action->id, ['updatesort'])) {
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }
    public function actionIndex()
    {
        $sort=CategoriesSearch::dequymenu();
        $searchModel = new CategoriesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);      
        //$arrCategories=ArrayHelper::map(Categories::find()->asArray()->all(), 'id', 'name');
        $arrCategories=Categories::find()->select('id,parent_id,name')->asArray()->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'arrcate'=>$arrCategories,
            'sort'=>$sort,
        ]);
    }
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
    public function actionCreate()
    {
        $model = new Categories();

        if ($model->load(Yii::$app->request->post())) {
            $model->slug=Inflector::slugletterAndNumber($model->name,'-',true);
            if($_POST['Categories']['parent_id']==''){
                $model->parent_id=0;
            }       
            if($model->save()){
                if(isset($_POST['save'])){
                    return $this->redirect(['index']);
                }else{
                    return $this->redirect(['create']);
                }
               
            }         
        } else {
            $model->status=0;
            $model->type=0;
            $model->type_display=0;
            $model->position=0;
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Categories model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->slug=Inflector::slugletterAndNumber($model->name,'-',true);
            if($_POST['Categories']['parent_id']==''){
                $model->parent_id=0;
            }
            if($model->save()){
                 return $this->redirect(['index']);
            }        
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
    public function actionSort(){
        echo "string";die;
        $model=CategoriesSearch::dequymenu();
        return $this->render('sort', [
                'model' => $model,
        ]);
    }
    public function actionUpdatesort(){
        if (Yii::$app->request->isAjax) {
            $list=$_POST['arrList'];
            $array=json_decode($list,true);
            $ordering=0;
            $this->showcategories($array,0);
            echo json_encode(1);
        }
    }
    public function showcategories($categories, $parent_id = 0){
        $sort=0;
        foreach ($categories as $key => $item){
            $sort++;
            $model=Categories::findOne($item['id']);
            if($model!==null){
                $model->display_order=$sort;
                $model->save();
            }
            // echo "<pre>";
            // print_r($item['children']);die;
            if(array_key_exists('children',$item)){
                $children=$item['children'];
                unset($categories[$key]);
                if(is_array($children)){
                    $this->showCategories($children,$item['id']);
                }
            }
            
        }
    }
    public function actionNews(){
        $this->layout = false;
        $searchModel = new ProductsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $arrCategories=Categories::find()->asArray()->all();
        if (Yii::$app->request->isAjax) {
            return $this->renderAjax('main', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
                'arrCategories'=>$arrCategories,
            ]);
        } else {
            return $this->render('main', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
                'arrCategories'=>$arrCategories,
            ]);
        }
    }

    /**
     * Deletes an existing Categories model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        if(!Yii::$app->request->isAjax){
            return $this->redirect(['index']);
        }     
    }

    /**
     * Finds the Categories model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Categories the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Categories::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
