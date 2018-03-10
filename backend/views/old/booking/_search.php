<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BookingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bookings-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'short_id') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'last_name') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'request_date') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'reason') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'passport') ?>

    <?php // echo $form->field($model, 'country_code') ?>

    <?php // echo $form->field($model, 'code') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'card_number') ?>

    <?php // echo $form->field($model, 'card_name') ?>

    <?php // echo $form->field($model, 'card_expired') ?>

    <?php // echo $form->field($model, 'card_cvv') ?>

    <?php // echo $form->field($model, 'change_currency_rate') ?>

    <?php // echo $form->field($model, 'currency') ?>

    <?php // echo $form->field($model, 'total_vnd') ?>

    <?php // echo $form->field($model, 'ip_address') ?>

    <?php // echo $form->field($model, 'book_from') ?>

    <?php // echo $form->field($model, 'notes') ?>

    <?php // echo $form->field($model, 'card_type') ?>

    <?php // echo $form->field($model, 'srcFile') ?>

    <?php // echo $form->field($model, 'view') ?>

    <?php // echo $form->field($model, 'tax') ?>

    <?php // echo $form->field($model, 'service_charge') ?>

    <?php // echo $form->field($model, 'roomtype_id') ?>

    <?php // echo $form->field($model, 'promotion_id') ?>

    <?php // echo $form->field($model, 'hotel_id') ?>

    <?php // echo $form->field($model, 'no_of_adults') ?>

    <?php // echo $form->field($model, 'no_of_child') ?>

    <?php // echo $form->field($model, 'no_of_extrabed') ?>

    <?php // echo $form->field($model, 'checkin') ?>

    <?php // echo $form->field($model, 'checkout') ?>

    <?php // echo $form->field($model, 'booked_nights') ?>

    <?php // echo $form->field($model, 'pickup_date') ?>

    <?php // echo $form->field($model, 'pickup_time') ?>

    <?php // echo $form->field($model, 'pickup_flight') ?>

    <?php // echo $form->field($model, 'pickup_price') ?>

    <?php // echo $form->field($model, 'dropoff_date') ?>

    <?php // echo $form->field($model, 'dropoff_time') ?>

    <?php // echo $form->field($model, 'dropoff_flight') ?>

    <?php // echo $form->field($model, 'dropoff_price') ?>

    <?php // echo $form->field($model, 'no_of_room') ?>

    <?php // echo $form->field($model, 'rate_vnd') ?>

    <?php // echo $form->field($model, 'rate') ?>

    <?php // echo $form->field($model, 'extrabed_price') ?>

    <?php // echo $form->field($model, 'token') ?>

    <?php // echo $form->field($model, 'total_no_tax') ?>

    <?php // echo $form->field($model, 'total_no_tax_vnd') ?>

    <?php // echo $form->field($model, 'total_no_tax_airport') ?>

    <?php // echo $form->field($model, 'total_no_tax_vnd_airport') ?>

    <?php // echo $form->field($model, 'version') ?>

    <?php // echo $form->field($model, 'seats') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
