<?php

use yii\helpers\Html;
use yii\helpers\Json;

/* @var $this yii\web\View */
/* @var $model backend\models\Nearby */

$this->title = 'Update: ' . $model->name['en'];
$this->params['breadcrumbs'][] = ['label' => 'Hotels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name['en'], 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nearby-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>

