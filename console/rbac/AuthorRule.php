<?php

namespace console\rbac;
use yii\rbac\Rule;

/**
 * Checks if authorID matches user passed via params
 */
class AuthorRule extends Rule
{
    public $name = 'isAuthor';

    /**
     * @param string|integer $user the user ID.
     * @param Item $item the role or permission that this rule is associated with
     * @param array $params parameters passed to ManagerInterface::checkAccess().
     * @return boolean a value indicating whether the rule permits the role or permission it is associated with.
     */
    // public function execute($user, $item, $params)
    // {
    //     return isset($params['model']) ? $params['model']->createdBy == $user : false;
    // }
    public function execute($user, $item, $params){
        if(isset($params['model'])){ // Direcly specify model you plan to use via param
            $model=$params['model'];
        }else{ 
            // use controller to findModel to get the model -  this is what excutes via the beheivicur =/rules
            $id=\Yii::$app->request->get('id');
            // Note, this is an assumpoint on your url structure
            $model=\Yii::$app->controller->findUserModel($id);
            // Note, this only work if you change findModel to be public
        }
        return ($model->createdBy==$user)? true : false;
        //return $model->createdBy=$user;
    }
}