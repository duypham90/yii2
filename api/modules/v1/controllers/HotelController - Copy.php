<?php

namespace api\modules\v1\controllers;
use api\modules\v1\models\Hotel;
use api\modules\v1\models\Cms;
use api\modules\v1\models\Products;
use yii\data\ActiveDataProvider;
use Yii;
use yii\rest\ActiveController;

use yii\db\Query;

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
    	//unset($actions['index'],$actions['create']);
    	return $actions;
    }
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];
    // public function actionIndex(){

    // 	$params=$_REQUEST;
    	

    // 	$activeData = new ActiveDataProvider([
    //         'query' => Cms::find(),
    //         'pagination' => [
    //             'defaultPageSize' => 2,
    //         ],
    //     ]);
    //     return $activeData;
    // }
    public function actionSearch(){
    	return 1;
    }
    public function actionListhotel(){
    	$params=$_REQUEST;
      	$filter=array();
      	$sort=""; 
      	$page=1;
      	$page=100;

    
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
			if(isset($params['order']))
			{  
			    if($params['order']=="false")
			     $sort.=" desc";
			    else
			     $sort.=" asc";
			 
			}
        }
        $offset=$limit*($page-1);

        $query=new Query;
       	$query->offset($offset)
        ->limit($limit)
        ->from('products')
        ->orderBy($sort)
        ->select("id,name,slug,price,cover_photo");
        $command = $query->createCommand();
		$models = $command->queryAll();
		$totalItems=count($models);
		//$totalItems=$query->count();
		$meta=array(
			'totalCount'=>$query->count(),
			'pageCount'=>1,
			'currentPage'=>1,
			'perPage'=>$page
		);
		if(count($models)>0){
			$this->setHeader(200);
			echo json_encode(
				array(
					'status'=>1,
					'data'=>$models,
					'_meta'=>$meta
				),JSON_PRETTY_PRINT);
		}else{
			$this->setHeader(200);
			echo json_encode(array('status'=>0,'data'=>$models,'totalItems'=>$totalItems),JSON_PRETTY_PRINT);
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


