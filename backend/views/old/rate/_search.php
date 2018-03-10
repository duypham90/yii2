<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RatesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rates-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'roomtype_id') ?>

    <?= $form->field($model, 'hotel_id') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'day') ?>

    <?php // echo $form->field($model, 'single') ?>

    <?php // echo $form->field($model, 'double') ?>

    <?php // echo $form->field($model, 'tripple') ?>

    <?php // echo $form->field($model, 'single_sell') ?>

    <?php // echo $form->field($model, 'double_sell') ?>

    <?php // echo $form->field($model, 'tripple_sell') ?>

    <?php // echo $form->field($model, 'breakfast') ?>

    <?php // echo $form->field($model, 'added_date') ?>

    <?php // echo $form->field($model, 'updated_date') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
