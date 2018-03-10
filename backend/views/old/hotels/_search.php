<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\HotelsSeach */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hotels-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'short_name') ?>

    <?= $form->field($model, 'slug') ?>

    <?= $form->field($model, 'display_order') ?>

    <?php // echo $form->field($model, 'graded_star') ?>

    <?php // echo $form->field($model, 'email_info') ?>

    <?php // echo $form->field($model, 'email_sales') ?>

    <?php // echo $form->field($model, 'hotline') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'no_of_rooms') ?>

    <?php // echo $form->field($model, 'special_offer') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'home_description') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'term_condition') ?>

    <?php // echo $form->field($model, 'short_description') ?>

    <?php // echo $form->field($model, 'added_date') ?>

    <?php // echo $form->field($model, 'updated_date') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'facilities') ?>

    <?php // echo $form->field($model, 'sports') ?>

    <?php // echo $form->field($model, 'location') ?>

    <?php // echo $form->field($model, 'cover_photo') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'promotion') ?>

    <?php // echo $form->field($model, 'logo1') ?>

    <?php // echo $form->field($model, 'logo2') ?>

    <?php // echo $form->field($model, 'lat') ?>

    <?php // echo $form->field($model, 'lng') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
