<?php
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use common\helps\ExtraHelper;
use backend\models\Langs;
use backend\models\NearbyCategory;

?>
<!--
 Pjax::begin(['id' => 'admin-crud-id', 'timeout' => false, 'enablePushState' => false, 'clientOptions' => ['method' => 'GET']]);
 enablePushState => true, khi search đẩy params lên url, false là không đẩy
-->
<?php $arrNearByCate=ArrayHelper::map(NearbyCategory::find()->asArray()->all(), 'id', 'name');?>
<?php Pjax::begin(['id' => 'admin-nearby-id', 'timeout' => false, 'enablePushState' => false, 'clientOptions' => ['method' => 'GET']]); ?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'showOnEmpty'=>true,
    'summary' => "<div class='summary'>Showing <b>{begin}</b> - <b>{end}</b> of <b>{totalCount}</b> items</div>",
    'showOnEmpty'=>true,
    'tableOptions' => ['class' => 'table table-striped table-bordered table-hover','id'=>'table-basic'],
    'columns' => [
        [
            'class' => 'yii\grid\SerialColumn',
            'contentOptions'=>[ 'style'=>'width: 30px'], 
        ],
        [
            'attribute'=>'name',
            'format' => 'raw',
            'value' =>'name',
        ],
        [
            'attribute'=>'size_of_room',
            'headerOptions'=>['class'=>'text-center w100'],
            'format' => 'raw',
            'value' =>'size_of_room',
            'filter'=>false,
            'contentOptions' =>function ($model, $key, $index, $column){
                   return ['class' => 'text-center'];
            },
        ],
        [
            'attribute'=>'max_per_room',
            'headerOptions'=>['class'=>'text-center w105'],
            'format' => 'raw',
            'value' =>'max_per_room',
            'filter'=>false,
            'contentOptions' =>function ($model, $key, $index, $column){
                   return ['class' => 'text-center'];
            },
        ],
        [
            'attribute'=>'no_of_adult',
            'headerOptions'=>['class'=>'text-center w100'],
            'format' => 'raw',
            'value' =>'no_of_adult',
            'filter'=>false,
            'contentOptions' =>function ($model, $key, $index, $column){
                   return ['class' => 'text-center'];
            },
        ],
         [
            'attribute'=>'no_of_rooms',
            'headerOptions'=>['class'=>'text-center w100'],
            'format' => 'raw',
            'value' =>'no_of_rooms',
            'filter'=>false,
            'contentOptions' =>function ($model, $key, $index, $column){
                   return ['class' => 'text-center'];
            },
        ],
        [
            'attribute'=>'status',
            'headerOptions'=>['class'=>'text-center'],
            'format' => 'raw',
            'value' =>function($model){
                return ExtraHelper::$status[$model->status];
            },
           'contentOptions' => ['style' => 'width:100px;','class'=>'text-center'],
           'filter' => Html::activeDropDownList($searchModel, 'status',ExtraHelper::$status,['class'=>'form-control css-input']),
           'enableSorting' => true,
        ],

        [
            'class' => 'yii\grid\ActionColumn',
            'header' => 'Action',
            'headerOptions'=>['class'=>'text-center w75'],
            'template' => '{view} {update} {delete}',
            'contentOptions' =>function ($model, $key, $index, $column){
                   return ['class' => 'text-center'];
            },
            'buttons' => [
                'view' => function($url, $model){
                    return Html::a('<i class="glyphicon glyphicon-eye-open"></i>', $url, ['class' => '']);
                },
                'delete' => function ($url, $model) {
                    return Html::a('<i class="glyphicon glyphicon-trash"></i>', $url, [
                                'title' => Yii::t('yii', 'Delete'),
                                'data-pjax'=>'0',
                                'data' => [
                                    'confirm' => 'Bạn có chắc chắn muốn xóa?',
                                    'method' => 'post',
                                ]
                    ]);
                }
            ]
        ],
    ],
]); ?>
<?php  Pjax::end(); ?>
<script>
// jQuery(document).ready(function($) {
//     $('#admin-nearby-id').yiiGridView('applyFilter');
// });
</script>
