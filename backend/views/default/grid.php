<?php
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Html;
use common\helps\Configs;
use yii\jui\DatePicker;
?>
<!--
 Pjax::begin(['id' => 'admin-crud-id', 'timeout' => false, 'enablePushState' => false, 'clientOptions' => ['method' => 'GET']]);
 enablePushState => true, khi search đẩy params lên url, false là không đẩy
-->

<?php Pjax::begin(['id' => 'admin-crud-id', 'timeout' => false, 'enablePushState' => false, 'clientOptions' => ['method' => 'GET']]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout'=>"{pager}\n{summary}\n{items}\n{pager}",
        'summary' => "<div class='summary'>Showing <b>{begin}</b> - <b>{end}</b> of <b>{totalCount}</b> items</div>",
        'showOnEmpty'=>true,
        'tableOptions' => ['class' => 'table table-striped table-bordered table-hover','id'=>'table-basic'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'order_no',
            'total',
            'request_date',
            'fullname',
            [
                'attribute'=>'request_date',
                'headerOptions'=>['class'=>'text-center'],
                'format' => 'raw',
                'value' =>function($model){
                    return date('d-m-Y',strtotime($model->request_date));
                },
                'filter' => false,
                'contentOptions' => ['style' => 'width:100px;','class'=>'text-center table-cell'],
            ],
            [
                'attribute'=>'status',
                'headerOptions'=>['class'=>'text-center'],
                'format' => 'raw',
                'value' =>function($model){
                    return Configs::$orderStatus[$model->status];
                },
               'contentOptions' => ['class'=>'text-center table-cell'],
               'filter' => Html::activeDropDownList($searchModel, 'status',Configs::$orderStatus,['class'=>'form-control css-input','prompt' => '---Trạng thái ĐH---']),
               'enableSorting' => true,
            ],
            // 'email:email',
            // 'request_date',
            // 'status',
            // 'reason:ntext',
            // 'total',
            // 'country',
            // 'passport',
            // 'country_code',
            // 'code',
            // 'phone',
            // 'card_number',
            // 'card_name',
            // 'card_expired',
            // 'card_cvv',
            // 'change_currency_rate',
            // 'currency',
            // 'total_vnd',
            // 'ip_address',
            // 'book_from',
            // 'notes',
            // 'card_type',
            // 'srcFile',
            // 'view',
            // 'tax',
            // 'service_charge',
            // 'roomtype_id',
            // 'promotion_id',
            // 'hotel_id',
            // 'no_of_adults',
            // 'no_of_child',
            // 'no_of_extrabed',
            // 'checkin',
            // 'checkout',
            // 'booked_nights',
            // 'pickup_date',
            // 'pickup_time',
            // 'pickup_flight',
            // 'pickup_price',
            // 'dropoff_date',
            // 'dropoff_time',
            // 'dropoff_flight',
            // 'dropoff_price',
            // 'no_of_room',
            // 'rate_vnd',
            // 'rate',
            // 'extrabed_price',
            // 'token',
            // 'total_no_tax',
            // 'total_no_tax_vnd',
            // 'total_no_tax_airport',
            // 'total_no_tax_vnd_airport',
            // 'version',
            // 'seats',
            [
            'class' => 'yii\grid\ActionColumn',
            'header' => '<a>Action</a>',
            'headerOptions'=>['class'=>'text-center w75'],
            'template' => '{view} {delete}',
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
    <?php Pjax::end(); ?>