<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\NearbyCategory */

$this->title = Yii::t('app', 'Create');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Nearby Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nearby-category-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
