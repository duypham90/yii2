<?php

namespace backend\controllers;

use Yii;
use backend\models\Experience;
use backend\models\ExperienceSearch;
use backend\models\Langs;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ExperienceController implements the CRUD actions for Experience model.
 */
class ExperienceController extends Controller
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
     * Lists all Experience models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ExperienceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Experience model.
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
     * Creates a new Experience model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Experience();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Experience model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if (Yii::$app->request->post()){
            $model->load(Yii::$app->request->post());
            $languages=Langs::getKeyValue('short_name','name');
            $title = $description = array();
            foreach($languages as $key => $lang){
                if(!$_POST['Experience']['title'][$key]){
                    $title[$key] = $_POST['Experience']['title']['en'];
                }else{
                    $title[$key] = $_POST['Experience']['title'][$key];
                }
                if(!$_POST['Experience']['description'][$key]){
                    $description[$key]=$_POST['Experience']['description']['en'];
                }else{
                    $description[$key]=$_POST['Experience']['description'][$key];
                }            
            }
            if(is_array($title)){
                $model->title = json_encode($title);
            }          
            if(is_array($description)){
                $model->description = json_encode($description);
            }  
            if ($model->save()) {
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
     * Deletes an existing Experience model.
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
     * Finds the Experience model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Experience the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Experience::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
