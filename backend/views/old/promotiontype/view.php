<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Nearby */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Nearbies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nearby-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'cate_nearby',
            'type',
            'time',
            'display_order',
            'short_description',
            'description:ntext',
            'cover_photo',
            'slug',
            'hotel_id',
            'status',
            'added_date',
            'updated_date',
            'updated_by',
        ],
    ]) ?>

</div>
