<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RoomtypesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="roomtypes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'hotel_id') ?>

    <?= $form->field($model, 'photo1') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'slug') ?>

    <?php // echo $form->field($model, 'display_order') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'amenities') ?>

    <?php // echo $form->field($model, 'no_of_rooms') ?>

    <?php // echo $form->field($model, 'max_per_room') ?>

    <?php // echo $form->field($model, 'size_of_room') ?>

    <?php // echo $form->field($model, 'view') ?>

    <?php // echo $form->field($model, 'bed') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'added_date') ?>

    <?php // echo $form->field($model, 'updated_date') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'photo2') ?>

    <?php // echo $form->field($model, 'photo3') ?>

    <?php // echo $form->field($model, 'photo4') ?>

    <?php // echo $form->field($model, 'photo5') ?>

    <?php // echo $form->field($model, 'no_of_adult') ?>

    <?php // echo $form->field($model, 'no_of_child') ?>

    <?php // echo $form->field($model, 'no_of_extrabed') ?>

    <?php // echo $form->field($model, 'cover_photo') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
