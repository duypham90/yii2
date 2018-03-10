<?php
use yii\grid\GridView;
use yii\widgets\Pjax;
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
            'short_id',
            'first_name',
            'title',
            'last_name',
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
                'header'=>'Actions',
                'headerOptions'=>['class'=>'text-center'],
                'contentOptions' =>function ($model, $key, $index, $column){
                       return ['class' => 'text-center'];
                },
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>