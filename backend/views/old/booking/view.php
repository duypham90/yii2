<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Bookings */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Bookings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bookings-view">

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
            'short_id',
            'first_name',
            'title',
            'last_name',
            'email:email',
            'request_date',
            'status',
            'reason:ntext',
            'total',
            'country',
            'passport',
            'country_code',
            'code',
            'phone',
            'card_number',
            'card_name',
            'card_expired',
            'card_cvv',
            'change_currency_rate',
            'currency',
            'total_vnd',
            'ip_address',
            'book_from',
            'notes',
            'card_type',
            'srcFile',
            'view',
            'tax',
            'service_charge',
            'roomtype_id',
            'promotion_id',
            'hotel_id',
            'no_of_adults',
            'no_of_child',
            'no_of_extrabed',
            'checkin',
            'checkout',
            'booked_nights',
            'pickup_date',
            'pickup_time',
            'pickup_flight',
            'pickup_price',
            'dropoff_date',
            'dropoff_time',
            'dropoff_flight',
            'dropoff_price',
            'no_of_room',
            'rate_vnd',
            'rate',
            'extrabed_price',
            'token',
            'total_no_tax',
            'total_no_tax_vnd',
            'total_no_tax_airport',
            'total_no_tax_vnd_airport',
            'version',
            'seats',
        ],
    ]) ?>

</div>
