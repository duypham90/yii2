<?php
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Html;
use common\helps\Configs;
$arrMenu=array();
Configs::showMenuTree($arrcate,0,'', $arrMenu);
?>

<?php Pjax::begin(['id' => 'pjax-container', 'timeout' => false, 'enablePushState' => false, 'clientOptions' => ['method' => 'GET']]); ?>   
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout'=>"{pager}\n{summary}\n{items}\n{pager}",
        'tableOptions' => ['class' => 'table table-striped table-bordered table-hover','id'=>'table-basic'],
        'showOnEmpty'=>true,
        //'showHeader' => true,
        //'showFooter'=>true,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'contentOptions'=>['class'=>'w30 table-cell'], 
            ],
            [
                'label'=>'Tên danh mục',
                'attribute'=>'name',
                'headerOptions'=>['class'=>'text-center'],
                'format' => 'raw', 
                'contentOptions' => ['class'=>'table-cell'],

            ],
            [
                'label' => 'Danh mục menu',
                'attribute'=>'parent_id',
                'headerOptions'=>['class'=>'text-center col-md-3'],
                'format' => 'raw',
                'value' =>function($model){
                     return $model->parent['name'];
                },
                'filter' => Html::activeDropDownList($searchModel, 'parent_id',$arrMenu,['class'=>'form-control css-input css-select','prompt' => '---CHỌN DANH MỤC---']),
                'enableSorting' => true,
                'contentOptions' => ['class'=>'text-center table-cell'],
            ],

            [
                'attribute'=>'status',
                'headerOptions'=>['class'=>'text-center w110'],
                'format' => 'raw',
                'value' =>function($model){
                    return Configs::$status[$model->status];
                },
                'filter' => Html::activeDropDownList($searchModel, 'status',Configs::$status,['class'=>'form-control css-input css-select','prompt'=>'ALL']),
                'enableSorting' => true,
                'contentOptions' => ['class'=>'text-center table-cell'],

            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => '<a>Action</a>',
                'headerOptions'=>['class'=>'text-center w75'],
                'template' => '{update} {delete}',            
                'buttons' => [
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
                ],
                'contentOptions' =>function ($model, $key, $index, $column){
                       return ['class' => 'text-center table-cell'];
                },


            ],
        ],
        'pager' => [
            'class' => '\yii\widgets\LinkPager',
             'firstPageLabel' => 'First Page',
             'lastPageLabel' => 'Last Page',
        ],
    ]); ?>
<?php Pjax::end(); ?>