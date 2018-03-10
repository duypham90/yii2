<?php

namespace api\modules\v1\controllers;
use api\modules\v1\models\Hotela;
use api\modules\v1\models\Cms;
use api\modules\v1\models\Products;
use yii\data\ActiveDataProvider;
use Yii;
use yii\rest\ActiveController;

use yii\db\Query;
use yii\data\Pagination;

/**
 * Country Controller API
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class HotelController extends ActiveController
{
    public $modelClass = 'api\modules\v1\models\Products';
    public function actions(){
    	$actions = parent::actions();
    	unset($actions['index'],$actions['create']);
    	return $actions;
    }
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];
    public function actionIndex(){
      $Query=Products::find()->select(['id','name','slug','cover_photo']);
    	$activeData = new ActiveDataProvider([
            'query' => $Query,
            'pagination' => [
                'defaultPageSize' => 2,
            ],
        ]);
        return $activeData;
    }
    public function actionSearch(){
        $limit=10;
    	  $query = Products::find()->where(['status' => 0]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count()]);
        $pages->setPageSize($limit);// limit
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)->select("id,name,slug,price,cover_photo,description")
            ->asArray()->all();
        $meta=array(
          'limit'=>$pages->getLimit(),
          'pageSize'=>$pages->getPageSize(),
          'totalCount'=>$pages->totalCount,
          "pageCount" => $pages->getPageCount(),
          "currentPage" => $pages->getPage()+1,
        );
        $this->setHeader(200);
        echo json_encode(array('status'=>1,'items'=>$models,'_meta'=>$meta),JSON_PRETTY_PRINT);

    }
    public function actionListhotel(){
      $params=$_REQUEST;
    	$filter=array();
    	$sort="id DESC"; 
    	$page=1;
    	$limit=10;
  
    	if(isset($params['page'])){
      	$page=$params['page'];
    	}

      if(isset($params['limit']) && $params['limit']!='' && $params['limit']>0 && $params['limit'] <= $limit){
      	$limit=$params['limit'];
      }

      if(isset($params['filter']))
      {
       	$filter=(array)json_decode($params['filter']);
      }
      if(isset($params['sort'])){
          $sort=$params['sort'];      
    			if(isset($params['order'])){  
    			    if($params['order']=="false")
    			     $sort.=" desc";
    			    else
    			     $sort.=" asc";
    			 
    			}
        }
      $offset=$limit*($page-1);


      $query=new Query;
     	$query->from('products')
      ->offset($offset)
      ->limit($limit)     
      ->orderBy($sort)
      //->select("id as key', name,slug,price,cover_photo,promotion_text");
      ->select(['id', 'name', 'price', 'cover_photo' ,'description', 'FROM_UNIXTIME(updated_at, "%d-%m-%Y") as created']);
      $command = $query->createCommand();
  		$models = $command->queryAll();
      //echo json_encode($models);
      $totalItems=count($models);
      $meta=array(
        'totalCount'=>$query->count(),
        'pageCount'=>1,
        'currentPage'=>$page,
        'perPage'=>$limit
      );
  		if(count($models)>0){
        $this->setHeader(200);
        echo json_encode(array('status'=>1,'items'=>$models,'_meta'=>$meta),JSON_PRETTY_PRINT);
      }else{
        $this->setHeader(200);
        echo json_encode(array('status'=>0,'items'=>$models,'_meta'=>$meta),JSON_PRETTY_PRINT);
      }
         
          

    	// $activeData = new ActiveDataProvider([
     //        'query' => $query,
     //        'pagination' =>[
     //        	'pageSize' => 10,
     //        ],

     //    ]);
     //    return $activeData;
    }
    public function actionCreate(){
    	$model= new Hotel();
    	$model->load(Yii::$app->request->post(),'');
    	$model->name='aaa';
    	$model->status=10;
    	$model->save();
    	return $model;
    }
    private function setHeader($status)
  	{
  	 
  	      $status_header = 'HTTP/1.1 ' . $status . ' ' . $this->_getStatusCodeMessage($status);
  	      $content_type="application/json; charset=utf-8"; 	 
  	      header($status_header);
  	      header('Content-type: ' . $content_type);
  	      header('X-Powered-By: ' . "hongduyphp@gmail.com");
  	}
  	private function _getStatusCodeMessage($status)
  	{
  	      $codes = Array(
  	      200 => 'OK',
  	      400 => 'Bad Request',
  	      401 => 'Unauthorized',
  	      402 => 'Payment Required',
  	      403 => 'Forbidden',
  	      404 => 'Not Found',
  	      500 => 'Internal Server Error',
  	      501 => 'Not Implemented',
  	      );
  	      return (isset($codes[$status])) ? $codes[$status] : '';
  	}

}


