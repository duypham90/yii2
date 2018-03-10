<?php
namespace app\components;
 
 
use Yii;
use yii\base\Widget;
use yii\base\InvalidConfigException;
 
class MenuWidget extends Widget
{  
    public function init(){
        parent::init();
    }
    public function run(){
        return $this->render('menu');
    }
}
