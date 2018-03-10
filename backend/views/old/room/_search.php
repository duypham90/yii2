<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RoomSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rooms-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'roomtype_id') ?>

    <?= $form->field($model, 'hotel_id') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'day') ?>

    <?php // echo $form->field($model, 'close') ?>

    <?php // echo $form->field($model, 'used_total_allotments') ?>

    <?php // echo $form->field($model, 'available') ?>

    <?php // echo $form->field($model, 'auto_fill') ?>

    <?php // echo $form->field($model, 'added_date') ?>

    <?php // echo $form->field($model, 'updated_date') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
