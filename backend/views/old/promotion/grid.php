<?php
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use common\helps\ExtraHelper;
use backend\models\Langs;
use backend\models\RoomtypesSearch;
use yii\helpers\Inflector;
use yii\jui\DatePicker;

use backend\models\Roomtypes;
?>

<?php Pjax::begin(['id' => 'admin-promotion-id', 'timeout' => false, 'enablePushState' => false, 'clientOptions' => ['method' => 'GET']]); ?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'showOnEmpty'=>true,
    'layout'=>"{pager}\n{summary}\n{items}\n{pager}",
    'summary' => "<div class='summary'>Showing <b>{begin}</b> - <b>{end}</b> of <b>{totalCount}</b> items</div>",
    'showOnEmpty'=>true,
    //'showHeader' => true,
    //'showFooter'=>true,
    
    'tableOptions' => ['class' => 'table table-striped table-bordered table-hover','id'=>'table-basic'],
    'columns' => [
        [
            'class' => 'yii\grid\SerialColumn',
            'contentOptions'=>['class'=>'w30 table-cell'], 
        ],

        [
            'attribute'=>'name',
            'format' => 'raw',
            'contentOptions' => ['class'=>'table-cell'],
            'value' =>function($model){
                return Json::decode($model->name,true)['en'];
                //return Inflector::camel2words (Json::decode($model->name,true)['en'],true);
                //return Inflector::slugletterAndNumber(Json::decode($model->name,true)['en'],'-',true);
            },
        ],
        [
            'attribute'=>'roomtypes',
            'headerOptions'=>['class'=>'text-center'],
            'format' => 'raw',
            'value' =>function($model){
                $roomtypes = RoomtypesSearch::getRoomtypeByListID($model->roomtypes);
                $i=0;
                $rt_html = '';
                foreach ($roomtypes as $key => $value) {
                    $rt_html .= $value['name'];
                    if($i < count($roomtypes) - 1){
                        $rt_html .= ',';
                    }
                    $i++;
                }
                return Inflector::camel2words($rt_html,true);$rt_html;
            },
            'filter' => Html::activeDropDownList($searchModel, 'roomtypes', ArrayHelper::map(Roomtypes::find()->all(), 'id', 'name'),['class'=>'form-control css-input css-select','prompt' => '---Select Roomtype---']),
            'contentOptions' => ['class'=>'text-center table-cell'],
        ],
        [
            'attribute'=>'from_date',
            'label' => 'Check in',
            'headerOptions'=>['class'=>'text-center'],
            'format' => 'raw',
            'value' =>function($model){
                return date('d-m-Y',strtotime($model->from_date));
            },
            'filter' => DatePicker::widget([
                'model'=>$searchModel,
                'attribute'=>'from_date',
                'language' => 'ru',
                'clientOptions' =>[
                        //'dateFormat' => 'dd-MM-yyyy',
                        'dateFormat' => 'yy-mm-dd',
                        'language' => 'US',
                        'country' => 'IN',
                        'showAnim'=>'fold',
                        'yearRange' => 'c-25:c+0',
                        'changeMonth'=> true,
                        'changeYear'=> true,
                        'autoSize'=>true,
                        'autoclose'=> true,
                        'showOn'=> "button",
                        'htmlOptions'=>[
                        'style'=>'width:80px;',
                        'font-weight'=>'x-small',
                        ],
                ],
            ]),
            'format' => 'html',
            'contentOptions' => ['style' => 'width:100px;','class'=>'text-center table-cell'],
        ],
        [
            'attribute'=>'to_date',
            'label' => 'Check out',
            'headerOptions'=>['class'=>'text-center'],
            'format' => 'raw',
            'value' =>function($model){
                return date('d-m-Y',strtotime($model->to_date));
            },
            'filter' => DatePicker::widget([
                'model'=>$searchModel,
                'attribute'=>'to_date',
                'language' => 'ru',
                'dateFormat' => 'MM-dd-yyyy',
                'clientOptions' =>[
                        'language' => 'US',
                        //'dateFormat'=>'php:d/m/Y',
                        'dateFormat' => 'dd-mm-yy',
                        'country' => 'IN',
                        'showAnim'=>'fold',
                        'yearRange' => 'c-25:c+0',
                        'changeMonth'=> true,
                        'changeYear'=> true,
                        'autoSize'=>true,
                        'autoclose'=> true,
                        'showOn'=> "button",
                        'htmlOptions'=>[
                        'style'=>'width:80px;',
                        'font-weight'=>'x-small',
                        ],
                ],
            ]),
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
        // 'to_date',
            // 'roomtypes',
            // 'type',
            // 'cancel_1',
            // 'cancel_2',
            // 'cancel_3',
            // 'no_of_day',
            // 'discount',
            // 'code',
            // 'show_code',
            // 'added_date',
            // 'updated_date',
            // 'updated_by',
            // 'status',
            // 'min_stay',
            // 'sale_start',
            // 'sale_end',
            // 'display_on:ntext',
            // 'min_room',
            // 'apply_on:ntext',
            // 'every_night',
            // 'specific_night:ntext',
            // 'specific_day_of_week:ntext',
            // 'cancel_text_1',
            // 'cancel_text_2',
            // 'cancel_text_3',
            // 'description:ntext',
            // 'short_content',
            // 'max_stay',
            // 'increase',
        [
            'class' => 'yii\grid\ActionColumn',
            'header' => '<a>Action</a>',
            'headerOptions'=>['class'=>'text-center w75'],
            'template' => '{update} {delete}',
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
