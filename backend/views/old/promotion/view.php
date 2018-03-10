<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Promotions */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Promotions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="promotions-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'hotel_id',
            'name',
            'slug',
            'from_date',
            'to_date',
            'roomtypes',
            'type',
            'cancel_1',
            'cancel_2',
            'cancel_3',
            'no_of_day',
            'discount',
            'code',
            'show_code',
            'added_date',
            'updated_date',
            'updated_by',
            'status',
            'min_stay',
            'sale_start',
            'sale_end',
            'display_on:ntext',
            'min_room',
            'apply_on:ntext',
            'every_night',
            'specific_night:ntext',
            'specific_day_of_week:ntext',
            'cancel_text_1',
            'cancel_text_2',
            'cancel_text_3',
            'description:ntext',
            'short_content',
            'max_stay',
            'increase',
        ],
    ]) ?>

</div>
