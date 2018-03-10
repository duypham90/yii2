<?php
namespace backend\behaviors;

use Yii;

class SortableDateController extends \yii\base\Behavior
{
    public $model;

    public function move($id, $direction, $condition = []){
        $modelClass = $this->model;
        $success = '';
        if(($model = $modelClass::findOne($id))){

            if($direction === 'up'){
                $eq = '>';
                $orderDir = 'ASC';
            } else {
                $eq = '<';
                $orderDir = 'DESC';
            }

            $query = $modelClass::find()->orderBy('time '.$orderDir)->limit(1);

            $where = [$eq, 'time', $model->time];

            if(count($condition)){
                $where = ['and', $where];
                foreach($condition as $key => $value){
                    $where[] = [$key => $value];
                }
            }

            $modelSwap = $query->where($where)->one();
            if(!empty($modelSwap))
            {
                $newOrderNum = $modelSwap->time;

                $modelSwap->time = $model->time;
                $modelSwap->update();

                $model->time = $newOrderNum;
                $model->update();
                $success = ['swap_id' => $modelSwap->primaryKey];
            }
        }
        else{
            $this->owner->error = Yii::t('easyii', 'Not found');
        }

        //return $this->formatResponse($success);
    }
    public function formatResponse($success = '', $back = true){

        if(Yii::$app->request->isAjax){
  
            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

            if($this->error){
                return "string";die;
                return ['result' => 'error', 'error' => $this->error];
            } else {
                return "string";die;
                $response = ['result' => 'success'];
                if($success) {
                    if(is_array($success)){
                        $response = array_merge(['result' => 'success'], $success);
                    } else {
                        $response = array_merge(['result' => 'success'], ['message' => $success]);
                    }
                }
                return $response;
            }
        }
        else{
                    echo "strâing";die;
            if($this->error){
                $this->flash('error', $this->error);
            } else {
                if(is_array($success) && isset($success['message'])){
                    $this->flash('success', $success['message']);
                }
                elseif(is_string($success)){
                    $this->flash('success', $success);
                }
            }
            return $back ? $this->back() : $this->refresh();
        }
    }
    public function flash($type, $message)
    {
        Yii::$app->getSession()->setFlash($type=='error'?'danger':$type, $message);
    }
     public function back()
    {
        return $this->redirect(Yii::$app->request->referrer);
    }
}