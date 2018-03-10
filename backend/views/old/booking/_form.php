<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Bookings */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bookings-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'short_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'request_date')->textInput() ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reason')->textarea(['rows' => 6,'class'=>'ckeditor']) ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passport')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'card_number')->textInput() ?>

    <?= $form->field($model, 'card_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'card_expired')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'card_cvv')->textInput() ?>

    <?= $form->field($model, 'change_currency_rate')->textInput() ?>

    <?= $form->field($model, 'currency')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_vnd')->textInput() ?>

    <?= $form->field($model, 'ip_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'book_from')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'card_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'srcFile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'view')->textInput() ?>

    <?= $form->field($model, 'tax')->textInput() ?>

    <?= $form->field($model, 'service_charge')->textInput() ?>

    <?= $form->field($model, 'roomtype_id')->textInput() ?>

    <?= $form->field($model, 'promotion_id')->textInput() ?>

    <?= $form->field($model, 'hotel_id')->textInput() ?>

    <?= $form->field($model, 'no_of_adults')->textInput() ?>

    <?= $form->field($model, 'no_of_child')->textInput() ?>

    <?= $form->field($model, 'no_of_extrabed')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'checkin')->textInput() ?>

    <?= $form->field($model, 'checkout')->textInput() ?>

    <?= $form->field($model, 'booked_nights')->textInput() ?>

    <?= $form->field($model, 'pickup_date')->textInput() ?>

    <?= $form->field($model, 'pickup_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pickup_flight')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pickup_price')->textInput() ?>

    <?= $form->field($model, 'dropoff_date')->textInput() ?>

    <?= $form->field($model, 'dropoff_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dropoff_flight')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dropoff_price')->textInput() ?>

    <?= $form->field($model, 'no_of_room')->textInput() ?>

    <?= $form->field($model, 'rate_vnd')->textInput() ?>

    <?= $form->field($model, 'rate')->textInput() ?>

    <?= $form->field($model, 'extrabed_price')->textInput() ?>

    <?= $form->field($model, 'token')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_no_tax')->textInput() ?>

    <?= $form->field($model, 'total_no_tax_vnd')->textInput() ?>

    <?= $form->field($model, 'total_no_tax_airport')->textInput() ?>

    <?= $form->field($model, 'total_no_tax_vnd_airport')->textInput() ?>

    <?= $form->field($model, 'version')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seats')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
