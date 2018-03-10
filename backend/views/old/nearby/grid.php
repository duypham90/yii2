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
    'layout'=>"{pager}\n{summary}\n{items}\n{pager}",
    'summary' => "<div class='summary'>Showing <b>{begin}</b> - <b>{end}</b> of <b>{totalCount}</b> items</div>",
    'showOnEmpty'=>true,
    'tableOptions' => ['class' => 'table table-striped table-bordered table-hover','id'=>'table-basic'],
    'columns' => [
        [
            'class' => 'yii\grid\SerialColumn',
            'contentOptions'=>['class'=>'w30 table-cell'], 
        ],
        [
            'attribute'=>'cover_photo',
            'format' => 'raw',
            'headerOptions'=>['class'=>'text-center'],
            'contentOptions' => ['style' => 'width:100px;','class'=>'table-cell'],
            'value' =>function($model){
                return '<img width="100" src="'.Yii::getAlias('@rootUrl').'/uploads/cover/'.$model->cover_photo.'">';
            },
        ],
        [
            'attribute'=>'title',
            'format' => 'raw',
            'contentOptions' => ['class'=>'table-cell'],
            'value' =>function($model){
                return Json::decode($model->title,true)['en'];
            },
        ],
        // [
        //     'attribute'=>'cate_nearby',
        //     'headerOptions'=>['class'=>'text-center w100'],
        //     'format' => 'raw',
        //     'value' =>function($model) use ($arrNearByCate){
        //         return $arrNearByCate[$model->cate_nearby];
        //     },
        //     'contentOptions' => ['class'=>'text-center'],
        //     'filter' => Html::activeDropDownList($searchModel, 'cate_nearby', $arrNearByCate,['class'=>'form-control','prompt' => 'All']),
        // ],
        [
            'attribute'=>'time',
            'headerOptions'=>['class'=>'text-center'],
            'format' => 'raw',
            'value' =>'time',
            'contentOptions' => ['style' => 'width:100px;','class'=>'text-center table-cell'],
        ],
        [
            'attribute'=>'status',
            'headerOptions'=>['class'=>'text-center'],
            'format' => 'raw',
            'value' =>function($model){
                return ExtraHelper::$status[$model->status];
            },
           'contentOptions' => ['style' => 'width:100px;','class'=>'text-center table-cell'],
           'filter' => Html::activeDropDownList($searchModel, 'status',ExtraHelper::$status,['class'=>'form-control css-input']),
           'enableSorting' => true,
        ],
        [
            'class' => 'yii\grid\ActionColumn',
            'header' => '<a>Action</a>',
            'headerOptions'=>['class'=>'text-center w75'],
            'template' => '{view} {update} {delete}',
            'contentOptions' =>function ($model, $key, $index, $column){
                   return ['class' => 'text-center table-cell'];
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
        [
            'class' => 'yii\grid\CheckboxColumn',
            'contentOptions'=>['class'=>'w30 table-cell'],
            'cssClass' => ['abc'],
        ],
        // [
        //     'class' => 'yii\grid\CheckboxColumn',
        //     'header' => Html::checkBox('selection_all', false, [
        //         'class' => 'select-on-check-all',
        //         'label' => 'Check All',
        //     ]),
        // ],
    ],
]); ?>
<?php  Pjax::end(); ?>
<script>
// jQuery(document).ready(function($) {
//     $('#admin-nearby-id').yiiGridView('applyFilter');
// });
</script>
