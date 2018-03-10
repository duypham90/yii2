<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Nearby */

$this->title = Yii::t('app', 'Create');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Nearbies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nearby-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
