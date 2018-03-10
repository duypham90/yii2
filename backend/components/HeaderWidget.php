<?php
namespace app\components;
 
 
use Yii;
use yii\base\Widget;
use yii\base\InvalidConfigException;
use backend\models\Hotels;
 
class HeaderWidget extends Widget
{  
    public function init(){
        parent::init();
    }
    public function run(){
        return $this->render('header');
    }
}
