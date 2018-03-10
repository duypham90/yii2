<?php
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use common\helps\ExtraHelper;
use backend\models\Langs;
?>


<?php Pjax::begin(['id' => 'admin-experience-id', 'timeout' => false, 'enablePushState' => false, 'clientOptions' => ['method' => 'GET']]); ?>

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
            'attribute'=>'icon',
            'headerOptions'=>['class'=>'text-center'],
            'format' => 'raw',
            'value' =>'icon',
            'filter' =>false,
            'contentOptions' => ['style' => 'width:100px;','class'=>'text-center table-cell'],
        ],
        [
            'attribute'=>'title',
            'format' => 'raw',
            'contentOptions' => ['class'=>'table-cell'],
            'value' =>function($model){
                return Json::decode($model->title,true)['en'];
            },
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
    ],
]); ?>
<?php  Pjax::end(); ?>
