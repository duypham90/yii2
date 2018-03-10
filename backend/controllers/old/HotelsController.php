<?php

namespace backend\controllers;
use Yii;
use backend\models\Hotels;
use backend\models\HotelsSeach;
use backend\models\Langs;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Url;
use yii\web\UploadedFile;

use common\helps\ExtraHelper;

use yii\filters\AccessControl;
use yii\web\ForbiddenHttpException; // show error page
/**
 * HotelsController implements the CRUD actions for Hotels model.
 */
class HotelsController extends Controller
{
    /**
     * @inheritdoc
     */
    // public function behaviors()
    // {
    //     return [
    //         'verbs' => [
    //             'class' => VerbFilter::className(),
    //             'actions' => [
    //                 'delete' => ['POST'],
    //             ],
    //         ],
    //     ];
    // }
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        //'actions' => ['index'],// action đặc biệt chỉ cho truy cập vào ngày 25-11
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            //return date('d-m') === '26-11';
                            $control =  Yii::$app->controller->id;
                            $action =  Yii::$app->controller->action->id;
                            $role= $action.'-'.$control;// index-hotels
                            if(Yii::$app->user->can($role)){
                                return true;
                            }
                            // if(Yii::$app->user->can('admin')){
                            //     return true;
                            // }
                        }
                    ],
                ],
                //'ruleConfig' => ['class' => '\console\rbac\AuthorRule'],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
    /**
     * Lists all Hotels models.
     * @return mixed
     */
    public function actionIndex()
    {
       // echo Yii::$app->controller->action->id;die;
        $searchModel = new HotelsSeach();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        //print_r(Yii::$app->request->queryParams);
        //$dataProvider = $searchModel->search(Yii::$app->request->post());

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

    }

    /**
     * Displays a single Hotels model.
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
     * Creates a new Hotels model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Hotels();

        if (Yii::$app->request->post()) {
            $model->load(Yii::$app->request->post());
            $tmp_facilities = $temp_sport='';
            if(isset($_POST['Hotels']['facilities'])){
                $i=0;
                foreach($_POST['Hotels']['facilities'] as $facilities){
                    if($facilities){
                        $tmp_facilities .= $facilities;
                        if($i<(count($_POST['Hotels']['facilities'])-1)){
                            $tmp_facilities .=',';
                        }
                    }
                    $i++;
                }
            }
            if(isset($_POST['Hotels']['sports'])){
                $i=0;
                foreach($_POST['Hotels']['sports'] as $sports){
                    if($sports){
                        $temp_sport .= $sports;
                        if($i<(count($_POST['Hotels']['sports'])-1)){
                            $temp_sport .=',';
                        }
                    }
                    $i++;
                }
            }
            $model->facilities=$tmp_facilities;
            
            $languages=Langs::getKeyValue('short_name','name');
            $address = $city = $country = $special= $home_description = $short_description = $description  = $promotion = array();
            foreach($languages as $key => $lang){
                if(!$_POST['Hotels']['address'][$key]){
                    $address[$key] = $_POST['Hotels']['address']['en'];
                }else{
                    $address[$key] = $_POST['Hotels']['address'][$key];
                }

                if(!$_POST['Hotels']['city'][$key]){
                    $city[$key]=$_POST['Hotels']['city']['en'];
                }else{
                    $city[$key]=$_POST['Hotels']['city'][$key];
                }

                if(!$_POST['Hotels']['country'][$key]){
                    $country[$key]=$_POST['Hotels']['country']['en'];
                }else{
                    $country[$key]=$_POST['Hotels']['country'][$key];
                }
                if(!$_POST['Hotels']['special_offer'][$key]){
                    $special[$key]=$_POST['Hotels']['special_offer']['en'];
                }else{
                    $special[$key]=$_POST['Hotels']['special_offer'][$key];
                }

                if(!$_POST['Hotels']['promotion'][$key]){
                    $promotion[$key]=$_POST['Hotels']['promotion']['en'];
                }else{
                    $promotion[$key]=$_POST['Hotels']['promotion'][$key];
                }
                if(!$_POST['Hotels']['home_description'][$key]){
                    $home_description[$key]=$_POST['Hotels']['home_description']['en'];
                }else{
                    $home_description[$key]=$_POST['Hotels']['home_description'][$key];
                }
                if(!$_POST['Hotels']['short_description'][$key]){
                    $short_description[$key]=$_POST['Hotels']['short_description']['en'];
                }else{
                    $short_description[$key]=$_POST['Hotels']['short_description'][$key];
                }
                if(!$_POST['Hotels']['description'][$key]){
                    $description[$key]=$_POST['Hotels']['description']['en'];
                }else{
                    $description[$key]=$_POST['Hotels']['description'][$key];
                }            
            }
            if(is_array($address)){
                $model->address = json_encode($address);
            }          
            if(is_array($city)){
                $model->city = json_encode($city);
            }
            if(is_array($country)){
                $model->country = json_encode($country);
            }
            if(is_array($promotion)){
                $model->promotion = json_encode($promotion);
            }
            if(is_array($promotion)){
                $model->special_offer = json_encode($special);
            }
            if(is_array($home_description)){
                $model->home_description = json_encode($home_description);
            }
            if(is_array($short_description)){
                $model->short_description = json_encode($short_description);
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
            $model->status=0;
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Hotels model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
         if (Yii::$app->user->can('updateOwnHotels')) {
            $oldLogo=$model->logo;
            $upload= Yii::getAlias('@uploads');
            if (Yii::$app->request->post()) {
                $model->load(Yii::$app->request->post());
                $tmp_facilities = $temp_sport='';
                if(isset($_POST['Hotels']['facilities'])){
                    $i=0;
                    foreach($_POST['Hotels']['facilities'] as $facilities){
                        if($facilities){
                            $tmp_facilities .= $facilities;
                            if($i<(count($_POST['Hotels']['facilities'])-1)){
                                $tmp_facilities .=',';
                            }
                        }
                        $i++;
                    }
                }
                if(isset($_POST['Hotels']['sports'])){
                    $i=0;
                    foreach($_POST['Hotels']['sports'] as $sports){
                        if($sports){
                            $temp_sport .= $sports;
                            if($i<(count($_POST['Hotels']['sports'])-1)){
                                $temp_sport .=',';
                            }
                        }
                        $i++;
                    }
                }
                $model->facilities=$tmp_facilities;
                $model->sports=$temp_sport;
                $logo=UploadedFile::getInstance($model, 'logo');
                $path='';
                if($logo){
                    $fileName=ExtraHelper::changeTitle($logo->baseName).'-'.time().'.'.$logo->extension;
                    $path=$upload.'/logo/' .$fileName;
                    $model->logo=$fileName;
                }else{
                    $model->logo=$oldLogo;
                }
                $languages=Langs::getKeyValue('short_name','name');
                $address = $city = $country = $special= $home_description = $short_description = $description  = $promotion = array();
                foreach($languages as $key => $lang){
                    if(!$_POST['Hotels']['address'][$key]){
                        $address[$key] = $_POST['Hotels']['address']['en'];
                    }else{
                        $address[$key] = $_POST['Hotels']['address'][$key];
                    }
                    if(!$_POST['Hotels']['city'][$key]){
                        $city[$key]=$_POST['Hotels']['city']['en'];
                    }else{
                        $city[$key]=$_POST['Hotels']['city'][$key];
                    }
                    if(!$_POST['Hotels']['country'][$key]){
                        $country[$key]=$_POST['Hotels']['country']['en'];
                    }else{
                        $country[$key]=$_POST['Hotels']['country'][$key];
                    }
                    if(!$_POST['Hotels']['special_offer'][$key]){
                        $special[$key]=$_POST['Hotels']['special_offer']['en'];
                    }else{
                        $special[$key]=$_POST['Hotels']['special_offer'][$key];
                    }
                    if(!$_POST['Hotels']['promotion'][$key]){
                        $promotion[$key]=$_POST['Hotels']['promotion']['en'];
                    }else{
                        $promotion[$key]=$_POST['Hotels']['promotion'][$key];
                    }
                    if(!$_POST['Hotels']['home_description'][$key]){
                        $home_description[$key]=$_POST['Hotels']['home_description']['en'];
                    }else{
                        $home_description[$key]=$_POST['Hotels']['home_description'][$key];
                    }
                    if(!$_POST['Hotels']['short_description'][$key]){
                        $short_description[$key]=$_POST['Hotels']['short_description']['en'];
                    }else{
                        $short_description[$key]=$_POST['Hotels']['short_description'][$key];
                    }
                    if(!$_POST['Hotels']['description'][$key]){
                        $description[$key]=$_POST['Hotels']['description']['en'];
                    }else{
                        $description[$key]=$_POST['Hotels']['description'][$key];
                    }            
                }
                if(is_array($address)){
                    $model->address = json_encode($address);
                }          
                if(is_array($city)){
                    $model->city = json_encode($city);
                }
                if(is_array($country)){
                    $model->country = json_encode($country);
                }
                if(is_array($promotion)){
                    $model->promotion = json_encode($promotion);
                }
                if(is_array($promotion)){
                    $model->special_offer = json_encode($special);
                }
                if(is_array($home_description)){
                    $model->home_description = json_encode($home_description);
                }
                if(is_array($short_description)){
                    $model->short_description = json_encode($short_description);
                }
                if(is_array($description)){
                    $model->description = json_encode($description);
                }           
                if ($model->save()) {
                    if($path!=''){
                         $logo->saveAs($path);               
                    }
                    if($oldLogo && file_exists($upload.'/logo/'.$oldLogo)){
                        unlink($upload.'/logo/'.$oldLogo);
                    }
                    return $this->redirect(['view', 'id' => $model->id]);
                }
                else{
                    $errors = $model->errors;
                    print_r($errors);
                }
            }
            else{
                $model->address = json_decode($model->address, true);
                $model->city=json_decode($model->city,true);
                $model->country=json_decode($model->country,true);
                $model->home_description=json_decode($model->home_description,true);
                $model->special_offer=json_decode($model->special_offer,true);
                $model->promotion=json_decode($model->promotion,true);
                $model->short_description=json_decode($model->short_description,true);
                $model->description=json_decode($model->description,true);

                $model->facilities = explode(',', $model->facilities);
                $model->sports = explode(',', $model->sports);
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        }else{
            throw  new ForbiddenHttpException ( 'Access denied or limit, You are not allowed to perform this action.' ); 
        }


    }

    /**
     * Deletes an existing Hotels model.
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
     * Finds the Hotels model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Hotels the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Hotels::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function findUserModel($id)
    {
        if (($model = Hotels::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function isUserAuthor()
    {   
        return $this->findModel(Yii::$app->request->get('id'))->author->id == Yii::$app->user->id;
    }
}
