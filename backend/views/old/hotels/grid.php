<?php
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use common\helps\ExtraHelper;
use backend\models\Langs;
use yii\helpers\Inflector;
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
    'pager' => [
        'class' => '\yii\widgets\LinkPager',
        'options' => [
            'class' => 'pagination css-pagination',
        ],
    ],
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        //'id',
        [
            'attribute'=>'name',
            'format' => 'raw',
            'contentOptions' => ['class'=>'table-cell'],
            'value' =>function($model){
                return Inflector::slugletterAndNumber($model->name,'-',true);
                //return Inflector::slugletterAndNumber(Json::decode($model->name,true)['en'],'-',true);
            },
        ],
        'name',
        'short_name',
        //'slug',
        'email_info:email',
        //'email_sales:email',
        //'display_order',
        [
            //'label' => Yii::t('no_of_rooms', 'no_of_rooms'),           
            //'label'=>'no_of_rooms',
            'attribute'=>'no_of_rooms',
            'format' => 'raw',
            'value' => 'no_of_rooms',
            'contentOptions' => ['style' => 'width:100px;','class'=>'text-center'],
            // 'contentOptions' =>function ($model, $key, $index, $column){
            //        return ['class' => 'text-center'];
            // },
        ],
        [
            'attribute'=>'status',
            'headerOptions'=>['class'=>'text-center'],
            'format' => 'raw',
            'value' =>function($model){
                return ExtraHelper::$status[$model->status];
                //return $model->status;
            },
           'contentOptions' => ['style' => 'width:100px;','class'=>'text-center'],
           //'filter' => Html::activeDropDownList($searchModel, 'status', ArrayHelper::map(Langs::find()->asArray()->all(), 'id', 'name'),['class'=>'form-control','prompt' => 'Select Category']),
           'filter' => Html::activeDropDownList($searchModel, 'status',ExtraHelper::$status,['class'=>'form-control css-input']),
           //'filterMode'=>[],
           'enableSorting' => true,
            // 'contentOptions' =>function ($model, $key, $index, $column){
            //        return ['class' => 'text-center'];
            // },
        ],
        // [
        //     //'class' => DataColumn::className(), // this line is optional
        //     'attribute' => 'status',
        //     'format' => 'text',
        //     'label' => 'Status',
        //     'value' => function ($model) {                      
        //             return '<div>'.$model->id.' and other html-code</div>';
        //     },
        //     // 'content'=>function ($model) {                      
        //     //         return '<div>'.$model->id.' and other html-code</div>';
        //     // },
        // ],
        //'status',
        'createdBy',
        [
            'class' => 'yii\grid\ActionColumn',
            'header'=>'Actions',
            'headerOptions'=>['class'=>'text-center'],
            'contentOptions' =>function ($model, $key, $index, $column){
                   return ['class' => 'text-center'];
            },
        ],
        // [
        //     'class' => 'yii\grid\ActionColumn',
        //     'header' => 'Action',
        //     'headerOptions'=>['class'=>'text-center'],
        //     'template' => '{update} {delete}',
        //     'contentOptions' =>function ($model, $key, $index, $column){
        //            return ['class' => 'text-center'];
        //     },
        //     'buttons' => [
        //         'update' => function($url, $model){
        //             return Html::a('<i class="fa fa-pencil"></i>', $url, ['class' => 'btn btn-primary btn-xs']);
        //         },
        //         'delete' => function($url, $model){
        //             return Html::a('<i class="fa fa-times"></i>', $url, ['class' => 'btn btn-danger btn-xs']);
        //         }
        //     ]
        // ],
    ],
]); ?>
<?php Pjax::end(); ?>
