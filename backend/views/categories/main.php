<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use app\components\HeaderWidget;
use app\components\MenuWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo Html::csrfMetaTags() ?>
    <title>Administrator<?php //echo Html::encode($this->title) ?></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <?php $this->head() ?>
</head>
<body class="">
<?php $this->beginBody() ?>
<div id="main" role="main">
   <div id="content">
        <?= Alert::widget() ?>
        <?php
          $this->title = 'Sản phẩm';
          $this->params['breadcrumbs'][] = ['label' => 'Sản phẩm', 'url' => ['index']];
          use yii\grid\GridView;
          use yii\widgets\Pjax;
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
                                                  'template' => '{add}',            
                                                  'buttons' => [
                                                      'add' => function ($url,$model) {
                                                          return Html::a('<i class="glyphicon glyphicon-plus-sign"></i>', ' ', [
                                                              'title' => Yii::t('yii', 'Chọn'),
                                                              'aria-label' => Yii::t('yii', 'Chọn'),
                                                              'onclick' => "
                                                                setID($model->id);
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
   </div>
</div>

<?php $this->endBody() ?>
    <script type="text/javascript">
    $(document).ready(function() {
      pageSetUp();
      
    }); 
    function setID(id){
        $('#coverphoto', window.parent.document).val(id);
        parent.$('#myModal').modal('hide');
    }    
    </script>
</body>
</html>
<?php $this->endPage() ?>
