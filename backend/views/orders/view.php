<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Orders;
use backend\models\OrdersSearch;


$this->title = 'Đơn hàng';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Nearbies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-view">

    <h1>Thông tin người mua</h1>
    <?php 
    echo 
        DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute'  => 'order_no',
                'format'=>'html',
                //'labelColOptions'=>['class'=>'text-center w110'],
                'captionOptions' => ['class'=>'w150','tooltip' => 'Tooltip'],
                'contentOptions' => ['class'=>'table-cell'],
                
            ],
            'fullname',
            'phone',
            'email',
            'request_date:date',
            [
                'label'  => 'Địa chỉ',
                'format'=>'html',
                'contentOptions' => ['class'=>'table-cell'],
                'value'=> $model->address,
                //'value'=> $model->address.', '.$model->district->name.', '.$model->province->name
            ],
            'notes:ntext',
        ],
    ]) 
    ?>
    <h1>Chi tiết đơn hàng</h1>
    <?php  
    $amount = 0;
    if (!empty($orderDetail->getModels())) {
        foreach ($orderDetail->getModels() as $key => $val) {
            $amount += $val->quantity * $val->price;
        }
    }
    $totalAmount=0;
    ?>
    <?php Pjax::begin(['id' => 'pjax-container', 'timeout' => false, 'enablePushState' => false, 'clientOptions' => ['method' => 'POST']]); ?>
        <?= GridView::widget([
            'dataProvider' => $orderDetail,
            'tableOptions' => ['class' => 'table table-striped table-bordered table-hover','id'=>'table-basic'],
            'layout'=>"{pager}\n{summary}\n{items}\n{pager}",
            'summary' => "",
            'showOnEmpty'=>true,
            'showHeader'=>true,// show column name
            'showFooter'=>true,// show footer 
            
            'columns' => [
                [
                    'class' => 'yii\grid\SerialColumn',
                    'contentOptions'=>['class'=>'w30 table-cell'], 
                ],
                'product_id:url',
                [
                    'attribute' =>'quantity',
                    'headerOptions'=>['class'=>'text-center col-md-1'],
                    'contentOptions'=>['class'=>'text-center table-cell'],
                ],    
                [
                    'attribute' =>'price',
                    'headerOptions'=>['class'=>'text-center col-md-1'],
                    'format'=>'raw',
                    'value'=>function($model){
                        if($model->price>0){
                            return Yii::$app->formatter->asDecimal($model->price,0).' <sup>đ</sup>';
                        }
                                            
                    },
                ],
                [
                    'label' => 'Thành tiền',
                    'attribute' => 'price',
                    'format' => 'raw',
                    
                    'headerOptions'=>['class'=>'text-center col-md-2'],
                    'contentOptions'=>['class'=>'text-center table-cell'],
                    'value' => function ($model, $key, $index, $widget) use ($totalAmount) {
                            $total=$model->quantity * $model->price;
                            //$totalAmount+=$total;
                            return Yii::$app->formatter->asDecimal($total,0).' <sup>đ</sup>';
                    },
                    // 'footer' => function () use ($totalAmount){
                    //     return $totalAmount;// why have error here
                    // },
                    'footer'=>'<b>Tổng tiền: '.Yii::$app->formatter->asDecimal($amount,0).' <sup>đ</sup></b>',// alway value = 0
                ],

            ],
            // 'rowOptions'=>function ($model, $key, $index, $grid){
            //     $class=$index%2?'odd':'even';
            //     return array('key'=>$key,'index'=>$index,'class'=>$class); đổi class giống hover
            // },

        ]); ?>
    <?php Pjax::end(); ?>

    
</div>
