<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Rates */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rates-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'roomtype_id')->textInput() ?>

    <?= $form->field($model, 'hotel_id')->textInput() ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'day')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'single')->textInput() ?>

    <?= $form->field($model, 'double')->textInput() ?>

    <?= $form->field($model, 'tripple')->textInput() ?>

    <?= $form->field($model, 'single_sell')->textInput() ?>

    <?= $form->field($model, 'double_sell')->textInput() ?>

    <?= $form->field($model, 'tripple_sell')->textInput() ?>

    <?= $form->field($model, 'breakfast')->textInput() ?>

    <?= $form->field($model, 'added_date')->textInput() ?>

    <?= $form->field($model, 'updated_date')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
