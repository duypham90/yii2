<?php
$this->title = 'Sản phẩm';
$this->params['breadcrumbs'][] = ['label' => 'Sản phẩm', 'url' => ['index']];
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Html;
use common\helps\Configs;
use yii\helpers\Inflector;
use yii\helpers\StringHelper;
use yii\helpers\ArrayHelper;
$arrcate=ArrayHelper::map($arrCategories, 'id', 'name');
function showCategories($categories, $parent_id = 0, $char = '', &$array){
    foreach ($categories as $key => $item){
        if ($item['parent_id'] == $parent_id){
                $array[$item['id']] = $char. $item['name'];
            unset($categories[$key]);
            showCategories($categories, $item['id'], $char.'---', $array);
        }
    }
    return $array;
}

$arrMenu=array();
showCategories($arrCategories,0,'', $arrMenu);
?>
<div class="news-index">
    <section id="widget-grid" class="">
        <div class="row">
            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="jarviswidget jarviswidget-color-darken" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false">
                    <header>
                        <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                        <h2>aaa</h2>              
                    </header>
                    <div class="no-border">
                        <div class="jarviswidget-editbox"></div>
                        <div class="widget-body no-padding">
                        <?php Pjax::begin(['id' => 'pjax-container-products', 'timeout' => false, 'enablePushState' => false, 'clientOptions' => ['method' => 'GET']]); ?>   
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
                                          'label'=>'Tên sản phẩm',
                                          'attribute'=>'name',
                                          'headerOptions'=>['class'=>'text-center'],
                                          'format' => 'raw', 
                                          'contentOptions' => ['class'=>'table-cell'],

                                      ],
                                      [
                                          'label'=>'Danh mục sản phẩm',
                                          'attribute'=>'category_id',
                                          'headerOptions'=>['class'=>'text-center w200'],
                                          'format' => 'raw', 
                                          'contentOptions' => ['class'=>'table-cell'],
                                          'value' =>function($model) use($arrcate){
                                              $arr=explode(',', $model->category_id);
                                              $arrName='';
                                              if(is_array($arr)){
                                                  foreach ($arr as $key) {
                                                      if(array_key_exists($key,$arrcate)){
                                                          $arrName.=$arrcate[$key].', ';
                                                      }                          
                                                  }
                                              }
                                              $result= trim($arrName,', ');
                                              return StringHelper::ucfirst($result,true);
                                          },
                                           'filter' => Html::activeDropDownList($searchModel, 'category_id',$arrMenu,['class'=>'form-control css-input css-select select2','data-select-width'=>250,'prompt' => '--CHỌN DANH MỤC--']),  
                                      ],
                                      // [
                                      //     'label'=>'Mã code',
                                      //     'attribute'=>'product_code',
                                      //     'headerOptions'=>['class'=>'text-center'],
                                      //     'format' => 'raw', 
                                      //     'contentOptions' => ['class'=>'text-center table-cell col-md-1'],

                                      // ],           
                                      [
                                          'label'=>'Số lượng',
                                          'attribute'=>'quantity',
                                          'headerOptions'=>['class'=>'text-center w100'],
                                          'format' => 'raw',
                                          'value' =>function($model){
                                              if($model->quantity>0){
                                                  return '<b>'.$model->quantity.'</b> &nbsp<sup style="color:#333"><b>Còn hàng</b></sup>';
                                              }else{
                                                  return '<b style="color:red">Hết Hàng</b>';
                                              }
                                          },  
                                          'contentOptions' => ['class'=>'text-center table-cell css-price'],

                                      ],
                                      [
                                          'attribute' =>'price',
                                          'label'=>'Giá bán',
                                          'headerOptions'=>['class'=>'text-center w100'],
                                          'format'=>'raw',
                                          'value'=>function($model){
                                              if($model->price>0){
                                                  return Yii::$app->formatter->asDecimal($model->price,0).' <sup class="css-sup"><b>đ</b></sup>';
                                              }
                                                                  
                                          },
                                          'contentOptions' => ['class'=>'text-center table-cell css-price col-md-1'],
                                      ],
                                      [
                                          'attribute'=>'status',
                                          'label'=>'Trạng thái',
                                          'headerOptions'=>['class'=>'text-center w100'],
                                          'format' => 'raw',
                                          'value' =>function($model){
                                              return Configs::$status[$model->status];
                                          },
                                          'filter' => Html::activeDropDownList($searchModel, 'status',Configs::$status,['class'=>'form-control css-input css-select','prompt' => 'ALL']),
                                          'enableSorting' => true,
                                          'contentOptions' => ['class'=>'text-center table-cell w110'],

                                      ],
                                      [
                                          'class' => 'yii\grid\ActionColumn',
                                          'header' => '<a>Action</a>',
                                          'headerOptions'=>['class'=>'text-center w75'],
                                          'template' => '{view} {update} {delete}',            
                                          'buttons' => [
                                              'view' => function($url, $model){
                                                  return Html::a('<i class="glyphicon glyphicon-eye-open"></i>', $url, ['class' => '','data-pjax'=>'0']);
                                              },
                                              // cần phải thêm data-pjax=0 nếu không back url sẽ lỗi
                                              // 'delete' => function ($url, $model) {
                                              //     return Html::a('<i class="glyphicon glyphicon-trash"></i>', $url, [
                                              //                 'title' => Yii::t('yii', 'Delete'),                                  
                                              //                 'data' => [
                                              //                     'confirm' => 'Bạn có chắc chắn muốn xóa?',
                                              //                     'method' => 'post',
                                              //                 ],
                                              //                 'data-pjax'=>'0',
                                              //     ]);
                                              // },
                                               'delete' => function ($url) {
                                                  return Html::a('<i class="glyphicon glyphicon-trash"></i>', ' ', [
                                                      'title' => Yii::t('yii', 'Delete'),
                                                      'aria-label' => Yii::t('yii', 'Delete'),
                                                      'onclick' => "
                                                          if (confirm('Bạn có chắc chắn muốn xóa?')) {
                                                              $.ajax('$url', {
                                                                  type: 'POST'
                                                              }).done(function(data) {
                                                                  $.pjax.reload({container: '#pjax-container-products'});
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
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
</div>
