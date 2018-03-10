<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Roomtypes */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Roomtypes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="roomtypes-view">

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
            'hotel_id',
            'photo1',
            'name',
            'slug',
            'display_order',
            'description:ntext',
            'amenities',
            'no_of_rooms',
            'max_per_room',
            'size_of_room',
            'view',
            'bed',
            'status',
            'added_date',
            'updated_date',
            'updated_by',
            'photo2',
            'photo3',
            'photo4',
            'photo5',
            'no_of_adult',
            'no_of_child',
            'no_of_extrabed',
            'cover_photo:ntext',
        ],
    ]) ?>

</div>
