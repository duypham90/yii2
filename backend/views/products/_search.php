<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProductsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'category_id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'product_code') ?>

    <?= $form->field($model, 'slug') ?>

    <?php // echo $form->field($model, 'quantity') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'price_discount') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'cover_photo') ?>

    <?php // echo $form->field($model, 'material') ?>

    <?php // echo $form->field($model, 'height') ?>

    <?php // echo $form->field($model, 'clothesline') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'added_date') ?>

    <?php // echo $form->field($model, 'updated_date') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'meta_keyword') ?>

    <?php // echo $form->field($model, 'meta_description') ?>

    <?php // echo $form->field($model, 'hot') ?>

    <?php // echo $form->field($model, 'online') ?>

    <?php // echo $form->field($model, 'selling') ?>

    <?php // echo $form->field($model, '2x') ?>

    <?php // echo $form->field($model, 'promotion_flag') ?>

    <?php // echo $form->field($model, 'promotion_text') ?>

    <?php // echo $form->field($model, 'unit') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'featured') ?>

    <?php // echo $form->field($model, 'combination') ?>

    <?php // echo $form->field($model, 'provider') ?>

    <?php // echo $form->field($model, 'barcode') ?>

    <?php // echo $form->field($model, 'multiversion') ?>

    <?php // echo $form->field($model, 'color') ?>

    <?php // echo $form->field($model, 'size') ?>

    <?php // echo $form->field($model, 'show_hidden') ?>

    <?php // echo $form->field($model, 'meta_title') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
