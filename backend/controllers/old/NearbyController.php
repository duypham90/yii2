<?php

namespace backend\controllers;

use Yii;
use backend\models\Nearby;
use backend\models\NearbySearch;
use backend\models\Langs;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;


use common\helps\ExtraHelper;
/**
 * NearbyController implements the CRUD actions for Nearby model.
 */
class NearbyController extends Controller
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
     * Lists all Nearby models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NearbySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Nearby model.
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
     * Creates a new Nearby model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Nearby();
        $upload= Yii::getAlias('@frontend') .'/web/uploads/';

        if (Yii::$app->request->post()) {
            $model->load(Yii::$app->request->post());
            $photo=UploadedFile::getInstance($model, 'cover_photo');
            $path='';
            if($photo){
                $fileName=ExtraHelper::changeTitle($photo->baseName).'-'.time().'.'.$photo->extension;
                $path=$upload.'/cover/' .$fileName;
                $model->cover_photo=$fileName;
            }
            $languages=Langs::getKeyValue('short_name','name');
            $title = $description = array();
            foreach($languages as $key => $lang){
                if(!$_POST['Nearby']['title'][$key]){
                    $title[$key] = $_POST['Nearby']['title']['en'];
                }else{
                    $title[$key] = $_POST['Nearby']['title'][$key];
                }
                if(!$_POST['Nearby']['description'][$key]){
                    $description[$key]=$_POST['Nearby']['description']['en'];
                }else{
                    $description[$key]=$_POST['Nearby']['description'][$key];
                }            
            }
            if(is_array($title)){
                $model->title = json_encode($title);
            }          
            if(is_array($description)){
                $model->description = json_encode($description);
            } 
            if($model->save()){
                if($path!=''){
                     $photo->saveAs($path);               
                }
                return $this->redirect(['view', 'id' => $model->id]);
            }
            else{
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
     * Updates an existing Nearby model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $oldPhoto=$model->cover_photo;
        $upload= Yii::getAlias('@frontend') .'/web/uploads/';

        if (Yii::$app->request->post()) {
            $model->load(Yii::$app->request->post());
            $photo=UploadedFile::getInstance($model, 'cover_photo');
            $path='';
            if($photo){
                $fileName=ExtraHelper::changeTitle($photo->baseName).'-'.time().'.'.$photo->extension;
                $path=$upload.'/cover/' .$fileName;
                $model->cover_photo=$fileName;
            }else{
                $model->cover_photo=$oldPhoto;
            }
            $languages=Langs::getKeyValue('short_name','name');
            $title = $description = array();
            foreach($languages as $key => $lang){
                if(!$_POST['Nearby']['title'][$key]){
                    $title[$key] = $_POST['Nearby']['title']['en'];
                }else{
                    $title[$key] = $_POST['Nearby']['title'][$key];
                }
                if(!$_POST['Nearby']['description'][$key]){
                    $description[$key]=$_POST['Nearby']['description']['en'];
                }else{
                    $description[$key]=$_POST['Nearby']['description'][$key];
                }            
            }
            if(is_array($title)){
                $model->title = json_encode($title);
            }          
            if(is_array($description)){
                $model->description = json_encode($description);
            }           
            if ($model->save()) {
                if($path!=''){
                     $photo->saveAs($path);               
                }
                if($oldPhoto && file_exists($upload.'/cover/'.$oldPhoto)){
                    unlink($upload.'/cover/'.$oldPhoto);
                }
                return $this->redirect(['index']);
            }
        } else {
            $model->title=json_decode($model->title,true);
            $model->description=json_decode($model->description,true);
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Nearby model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $request = Yii::$app->request;
        if ($request->isAjax) {
            $this->findModel($id)->delete();
            return $this->redirect(['index']);
        }
        

        
    }

    /**
     * Finds the Nearby model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Nearby the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Nearby::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
