<?php
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Html;
use common\helps\Configs;
use yii\jui\DatePicker;
use yii\i18n\Formatter;
?>
<!--
 Pjax::begin(['id' => 'admin-crud-id', 'timeout' => false, 'enablePushState' => false, 'clientOptions' => ['method' => 'GET']]);
 enablePushState => true, khi search đẩy params lên url, false là không đẩy
-->
<?php Pjax::begin(['id' => 'pjax-container', 'timeout' => false, 'enablePushState' => false, 'clientOptions' => ['method' => 'GET']]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout'=>"{pager}\n{summary}\n{items}\n{pager}",
        //'summary' => "<div class='summary'>Showing <b>{begin}</b> - <b>{end}</b> of <b>{totalCount}</b> items</div>",
        'showOnEmpty'=>true,
        'showFooter'=>true,
        'tableOptions' => ['class' => 'table table-striped table-bordered table-hover','id'=>'table-basic'],
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'contentOptions'=>['class'=>'w30 table-cell'], 
            ],
            [
                'label'=>'Mã đơn hàng',
                'attribute'=>'order_no',
                'format'=>'url',
                'headerOptions'=>['class'=>'text-center w100'],
                'contentOptions' => ['class'=>'text-center table-cell'],

            ],  
            [
                'label'=>'Tên khách hàng',
                'attribute'=>'fullname',
                'headerOptions'=>['class'=>'text-center'],
                'format' => 'raw', 
                'contentOptions' => ['class'=>'table-cell'],

            ],
            [
                'label'=>'Điện thoại',
                'attribute'=>'phone',
                'format'=>'raw',
                'headerOptions'=>['class'=>'text-center w150'],
                'contentOptions' => ['class'=>'text-center table-cell'],
                'value'=>function($model){
                    return Configs::formatPhoneNumber($model->phone);
                }

            ],         
            [
                'attribute'=>'request_date',
                'headerOptions'=>['class'=>'text-center w150'],
                'format' => ['date', 'php:d-m-Y'],
                'filterInputOptions' => [
                    'class' => 'form-control text-center datepk', 
                    'id' => null,
                    'onkeyup'=>"hideDatePicker(this.value)"
                ],       
                'contentOptions' => ['class'=>'text-center table-cell'],
            ],          
            [
                'attribute' =>'total',
                'headerOptions'=>['class'=>'text-center w110'],
                //'format'=>['decimal',0],
                'format'=>'raw',
                'value'=>function($model){
                    if($model->total>0){
                        return Yii::$app->formatter->asDecimal($model->total,0).' <sup class="css-sup"><b>đ</b></sup>';
                    }
                                        
                },
                'footer'=>'<b>Tổng tiền: ',//
                'contentOptions' => ['class'=>'text-center table-cell css-price'],
            ],
            [
                'attribute'=>'status',
                'headerOptions'=>['class'=>'text-center'],
                'format' => 'raw',
                'value' =>function($model){
                    return '<span class="'.Configs::$orderStatusCss[$model->status].'">'.Configs::$orderStatus[$model->status].'</span>';
                },
               'contentOptions' => ['class'=>'text-center table-cell'],
               'filter' => Html::activeDropDownList($searchModel, 'status',Configs::$orderStatus,['class'=>'form-control css-input css-select','prompt' => '---Trạng thái ĐH---']),
               'enableSorting' => true,
               'footer'=>'300000',
            ],
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
                        return Html::a('<i class="glyphicon glyphicon-eye-open"></i>', $url, ['class' => '','data-pjax'=>'0',]);
                    },
                    'delete' => function ($url) {
                        return Html::a('<i class="glyphicon glyphicon-trash"></i>', ' ', [
                            'title' => Yii::t('yii', 'Delete'),
                            'aria-label' => Yii::t('yii', 'Delete'),
                            'onclick' => "
                                if (confirm('Bạn có chắc chắn muốn xóa?')) {
                                    $.ajax('$url', {
                                        type: 'POST'
                                    }).done(function(data) {
                                        $.pjax.reload({container: '#pjax-container'});
                                    });
                                }
                                return false;
                            ",
                        ]);
                    },
                ]
            ],
        ],
        'pager' => [
            'class' => '\yii\widgets\LinkPager',
             'firstPageLabel' => 'First Page',
             'lastPageLabel' => 'Last Page',
        ],
    ]); ?>
<?php Pjax::end(); ?>
