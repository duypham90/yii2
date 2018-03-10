<?php

namespace backend\controllers;

use Yii;
use backend\models\Promotions;
use backend\models\PromotionsSearch;
use backend\models\Langs;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PromotionsController implements the CRUD actions for Promotions model.
 */
class PromotionController extends Controller
{
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
     * Lists all Promotions models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PromotionsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Promotions model.
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
     * Creates a new Promotions model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Promotions();

        if ($model->load(Yii::$app->request->post())) {
            $roomtypes = '';
            if(isset($_POST['Promotions']['roomtypes'])){
                $i=0;
                foreach($_POST['Promotions']['roomtypes'] as $key => $value){
                    $roomtypes .= $key;
                    if($i < count($_POST['Promotions']['roomtypes'])-1){
                        $roomtypes .=',';
                    }
                    $i++;
                }
            }
            $model->roomtypes=$roomtypes;
            $model->from_date=date('Y-m-d',strtotime($model->from_date));
            $model->to_date=date('Y-m-d',strtotime($model->to_date));
            $languages=Langs::getKeyValue('short_name','name');
            $title = $short = $description = array();
            foreach($languages as $key => $lang){
                if(!$_POST['Promotions']['name'][$key]){
                    $title[$key] = $_POST['Promotions']['name']['en'];
                }else{
                    $title[$key] = $_POST['Promotions']['name'][$key];
                }
                if(!$_POST['Promotions']['short_content'][$key]){
                    $short[$key]=$_POST['Promotions']['short_content']['en'];
                }else{
                    $short[$key]=$_POST['Promotions']['short_content'][$key];
                }  
                if(!$_POST['Promotions']['description'][$key]){
                    $description[$key]=$_POST['Promotions']['description']['en'];
                }else{
                    $description[$key]=$_POST['Promotions']['description'][$key];
                }            
            }
            if(is_array($title)){
                $model->name = json_encode($title);
            }
            if(is_array($short)){
                $model->short_content = json_encode($short);
            }          
            if(is_array($description)){
                $model->description = json_encode($description);
            } 
            if($model->save()){
                return $this->redirect(['index']);
            }else{
                $errors = $model->errors;
                print_r($errors);
            }
        } else {
            $model->status=0;
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Promotions model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $roomtypes = '';
            if(isset($_POST['Promotions']['roomtypes'])){
                $i=0;
                foreach($_POST['Promotions']['roomtypes'] as $key => $value){
                    $roomtypes .= $key;
                    if($i < count($_POST['Promotions']['roomtypes'])-1){
                        $roomtypes .=',';
                    }
                    $i++;
                }
            }
            $model->roomtypes=$roomtypes;
            $model->from_date=date('Y-m-d',strtotime($model->from_date));
            $model->to_date=date('Y-m-d',strtotime($model->to_date));
            $languages=Langs::getKeyValue('short_name','name');
            $title = $short = $description = array();
            foreach($languages as $key => $lang){
                if(!$_POST['Promotions']['name'][$key]){
                    $title[$key] = $_POST['Promotions']['name']['en'];
                }else{
                    $title[$key] = $_POST['Promotions']['name'][$key];
                }
                if(!$_POST['Promotions']['short_content'][$key]){
                    $short[$key]=$_POST['Promotions']['short_content']['en'];
                }else{
                    $short[$key]=$_POST['Promotions']['short_content'][$key];
                }  
                if(!$_POST['Promotions']['description'][$key]){
                    $description[$key]=$_POST['Promotions']['description']['en'];
                }else{
                    $description[$key]=$_POST['Promotions']['description'][$key];
                }            
            }
            if(is_array($title)){
                $model->name = json_encode($title);
            }
            if(is_array($short)){
                $model->short_content = json_encode($short);
            }          
            if(is_array($description)){
                $model->description = json_encode($description);
            }
            if($model->save()){
                 return $this->redirect(['index']);
            }       
        } else {
            $model->name=json_decode($model->name,true);
            $model->short_content=json_decode($model->short_content,true);
            $model->description=json_decode($model->description,true);
            $model->roomtypes = explode(',', $model->roomtypes);
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Promotions model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Promotions model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Promotions the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Promotions::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
