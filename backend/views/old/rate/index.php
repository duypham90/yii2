<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\RatesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rates';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rates-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Rates', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'roomtype_id',
            'hotel_id',
            'date',
            'day',
            // 'single',
            // 'double',
            // 'tripple',
            // 'single_sell',
            // 'double_sell',
            // 'tripple_sell',
            // 'breakfast',
            // 'added_date',
            // 'updated_date',
            // 'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
