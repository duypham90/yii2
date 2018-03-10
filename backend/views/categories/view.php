<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Products */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-view">

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
            'category_id',
            'name',
            'product_code',
            'slug',
            'quantity',
            'price',
            'price_discount',
            'type',
            'cover_photo',
            'material:ntext',
            'height',
            'clothesline:ntext',
            'description:ntext',
            'added_date',
            'updated_date',
            'updated_by',
            'status',
            'meta_keyword',
            'meta_description',
            'hot',
            'online',
            'selling',
            '2x',
            'promotion_flag',
            'promotion_text',
            'unit',
            'weight',
            'featured',
            'combination',
            'provider',
            'barcode',
            'multiversion',
            'color',
            'size',
            'show_hidden',
            'meta_title',
        ],
    ]) ?>

</div>
