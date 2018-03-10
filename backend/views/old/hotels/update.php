<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Hotels */

$this->title = 'Update: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Hotels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hotels-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
