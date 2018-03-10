<?php

namespace backend\controllers;

use Yii;
use backend\models\Roomtypes;
use backend\models\RoomtypesSearch;
use backend\models\Langs;
/* ----- */
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use common\helps\ExtraHelper;

/**
 * RoomtypeController implements the CRUD actions for Roomtypes model.
 */
class RoomtypeController extends Controller
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
     * Lists all Roomtypes models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RoomtypesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Roomtypes model.
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
     * Creates a new Roomtypes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Roomtypes();

        if (Yii::$app->request->post()) {
            $model->load(Yii::$app->request->post());
            $tmp_amenities = $temp_beds='';
            if(isset($_POST['Roomtypes']['amenities'])){
                $i=0;
                foreach($_POST['Roomtypes']['amenities'] as $amenities){
                    if($amenities){
                        $tmp_amenities .= $amenities;
                        if($i<(count($_POST['Roomtypes']['amenities'])-1)){
                            $tmp_amenities .=',';
                        }
                    }
                    $i++;
                }
            }
            if(isset($_POST['Roomtypes']['bed'])){
                $i=0;
                foreach($_POST['Roomtypes']['bed'] as $beds){
                    if($beds){
                        $temp_beds .= $beds;
                        if($i<(count($_POST['Roomtypes']['bed'])-1)){
                            $temp_beds .=',';
                        }
                    }
                    $i++;
                }
            }
            $model->amenities=$tmp_amenities;
            $model->bed=$temp_beds;

            $languages=Langs::getKeyValue('short_name','name');
            $description=array();
            foreach($languages as $key => $lang){
                if(!$_POST['Roomtypes']['description'][$key]){
                    $description[$key]=$_POST['Roomtypes']['description']['en'];
                }else{
                    $description[$key]=$_POST['Roomtypes']['description'][$key];
                }            
            }
            if(is_array($description)){
                $model->description = json_encode($description);
            }
            if ($model->save()) {
                 return $this->redirect(['view', 'id' => $model->id]);
            }
            else{
                $errors = $model->errors;
                print_r($errors);
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            $model->status=0;
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Roomtypes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if (Yii::$app->request->post()) {
            $model->load(Yii::$app->request->post());
            $tmp_amenities = $temp_beds='';
            if(isset($_POST['Roomtypes']['amenities'])){
                $i=0;
                foreach($_POST['Roomtypes']['amenities'] as $amenities){
                    if($amenities){
                        $tmp_amenities .= $amenities;
                        if($i<(count($_POST['Roomtypes']['amenities'])-1)){
                            $tmp_amenities .=',';
                        }
                    }
                    $i++;
                }
            }
            if(isset($_POST['Roomtypes']['bed'])){
                $i=0;
                foreach($_POST['Roomtypes']['bed'] as $beds){
                    if($beds){
                        $temp_beds .= $beds;
                        if($i<(count($_POST['Roomtypes']['bed'])-1)){
                            $temp_beds .=',';
                        }
                    }
                    $i++;
                }
            }
            $model->amenities=$tmp_amenities;
            $model->bed=$temp_beds;

            $languages=Langs::getKeyValue('short_name','name');
            $description=array();
             foreach($languages as $key => $lang){
                if(!$_POST['Roomtypes']['description'][$key]){
                    $description[$key]=$_POST['Roomtypes']['description']['en'];
                }else{
                    $description[$key]=$_POST['Roomtypes']['description'][$key];
                }            
            }
            if(is_array($description)){
                $model->description = json_encode($description);
            }
            if ($model->save()) {
                 return $this->redirect(['view', 'id' => $model->id]);
            }
            else{
                $errors = $model->errors;
                print_r($errors);
            }
        } else {
            $model->amenities = explode(',', $model->amenities);
            $model->bed = explode(',',$model->bed);
            $model->description = json_decode($model->description, true);
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Roomtypes model.
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
     * Finds the Roomtypes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Roomtypes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Roomtypes::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
