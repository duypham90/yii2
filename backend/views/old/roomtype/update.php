<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Hotels */

$this->title = 'Update Roomtype: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Hotels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="roomtype-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
