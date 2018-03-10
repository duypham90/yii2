<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PromotionsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="promotions-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'hotel_id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'slug') ?>

    <?= $form->field($model, 'from_date') ?>

    <?php // echo $form->field($model, 'to_date') ?>

    <?php // echo $form->field($model, 'roomtypes') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'cancel_1') ?>

    <?php // echo $form->field($model, 'cancel_2') ?>

    <?php // echo $form->field($model, 'cancel_3') ?>

    <?php // echo $form->field($model, 'no_of_day') ?>

    <?php // echo $form->field($model, 'discount') ?>

    <?php // echo $form->field($model, 'code') ?>

    <?php // echo $form->field($model, 'show_code') ?>

    <?php // echo $form->field($model, 'added_date') ?>

    <?php // echo $form->field($model, 'updated_date') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'min_stay') ?>

    <?php // echo $form->field($model, 'sale_start') ?>

    <?php // echo $form->field($model, 'sale_end') ?>

    <?php // echo $form->field($model, 'display_on') ?>

    <?php // echo $form->field($model, 'min_room') ?>

    <?php // echo $form->field($model, 'apply_on') ?>

    <?php // echo $form->field($model, 'every_night') ?>

    <?php // echo $form->field($model, 'specific_night') ?>

    <?php // echo $form->field($model, 'specific_day_of_week') ?>

    <?php // echo $form->field($model, 'cancel_text_1') ?>

    <?php // echo $form->field($model, 'cancel_text_2') ?>

    <?php // echo $form->field($model, 'cancel_text_3') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'short_content') ?>

    <?php // echo $form->field($model, 'max_stay') ?>

    <?php // echo $form->field($model, 'increase') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
