<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use common\helps\ExtraHelper;
use common\helps\Configs;

use backend\models\Categories;
use backend\models\CategoriesSearch;

$arrcate=CategoriesSearch::dequymenu();
$arrMenu=array();
Configs::showMenuTree($arrcate,0,'', $arrMenu);
?>


<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
<section id="widget-grid" class="">            
    <div class="row">
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">                      
              <?= $form->errorSummary($model); ?>
        </article>
        <article class="col-sm-12 col-md-12 col-lg-12">
           <div class="jarviswidget" data-widget-deletebutton="false" data-widget-editbutton="false" data-widget-custombutton="false">
              <header>
                 <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                 <h2><?= Html::encode($this->title) ?></h2>
              </header>            
              <div style="padding:0">
                  <div class="jarviswidget-editbox">
                  </div>
                  <div class="widget-body">
                    <div class="smart-form">
                        <fieldset>
                          <div class="row">
                              <section class="col col-4">
                                  <label class="input">
                                  <?= $form->field($model, 'name')->textInput() ?>
                                  </label>
                              </section>
                              <section class="col col-3">
                                  <label class="input">
                                    <?= $form->field($model, 'parent_id')->dropdownList($arrMenu, ['class'=>'select2 css-select','data-select-width'=>250,'prompt' => 'CHỌN DANH MỤC']) ?>
                                  </label>
                              </section>
                          </div>                                     
                        </fieldset> 
                        <fieldset>
                          <div class="row">
                              <section class="col col-2">
                                <div class="inline-group">
                                    <?= 
                                    $form->field($model, 'status')->radioList(
                                            [0 => 'Hiện',1 => 'Ẩn'],
                                            [
                                                'item' => function($index, $label, $name, $checked, $value) {
                                                    return '<label class="radio">' . Html::radio($name, $checked, ['value'  => $value, 'autocomplete'=>'off']) .'<i></i>'. $label . '</label>';
                                                }
                                            ]
                                        );
                                    ?>
                                  </div>
                              </section>                           
                              <section class="col col-6">
                                <div class="inline-group">
                                    <?= 
                                    $form->field($model, 'position')->radioList(
                                            [0 => 'Top', 1 => 'Bottom', 2=>'Right',3=>'Left'],
                                            [
                                                'item' => function($index, $label, $name, $checked, $value) {
                                                    return '<label class="radio">' . Html::radio($name, $checked, ['value'  => $value, 'autocomplete'=>'off']) .'<i></i>'. $label . '</label>';
                                                }
                                            ]
                                        );
                                    ?>
                                  </div>
                              </section>                             
                            </div>
                        </fieldset>
                        <fieldset>
                              <section class="">
                                  <div class="inline-group">
                                    <?= 
                                    $form->field($model, 'type')->radioList(
                                            [0 => 'Sản phẩm', 1 => 'Tin tức', 2=>'Bài viết',3=>'Liên kết' ],
                                            [
                                                'item' => function($index, $label, $name, $checked, $value) {
                                                    return '<label class="radio">' . Html::radio($name, $checked, ['value'  => $value, 'autocomplete'=>'off']) .'<i></i>'. $label . '</label>';
                                                }
                                            ]
                                        );
                                    ?>
                                  </div>
                              </section>
                              <section id="show-type-display" style="<?=($model->type==0 || $model->type==1)?'display:none':'';?>">
                                  <div class="inline-group">
                                    <?= 
                                    $form->field($model, 'type_display')->radioList(
                                            [0 => 'Danh sách', 1 => 'Bài viết'],
                                            //['class'=>'type'],
                                            [
                                                'item' => function($index, $label, $name, $checked, $value) {
                                                    return '<label class="radio">' . Html::radio($name, $checked, ['value'  => $value, 'autocomplete'=>'off']) .'<i></i>'. $label . '</label>';
                                                }
                                            ]
                                        );
                                    ?>
                                  </div>
                              </section>
                              <section id='show-link' style="<?=($model->type==0 || $model->type==1)?'display:none':'';?>">
                                  <label class="input">
                                  <?= $form->field($model, 'link')->textInput() ?>
                                  </label>
                              </section>
                              <section id="show-news" class="col-md-4" style="<?=($model->type!=2)?'display:none':'';?>">
                                    <label class="input">
                                      <?= $form->field($model, 'new_id')->textInput(['class'=>'input-sm css-input-upload','id'=>'coverphoto','readonly'=>true]) ?>
                                      <button data-src="<?php echo Url::to(['categories/news']);?>" data-width="900" data-height="620" class="css-file-upload" type="button">Chọn bài viết</button>
                                    </label>
                              </section>
                        </fieldset>        
                        <fieldset>
                              <section>
                                  <label class="input">
                                  <?= $form->field($model, 'meta_title')->textInput() ?>
                                  </label>
                              </section>
                              <section>
                                  <label class="input">
                                  <?= $form->field($model, 'meta_keyword')->textInput() ?>
                                  </label>
                              </section>
                              <section>
                                  <label class="textarea">
                                   <?= $form->field($model, 'meta_description')->textArea(['rows' => '4']) ?>
                                  </label>
                              </section>                                    
                        </fieldset>
                        <div class="form-group fix-btn">
                          <?php 
                            if(Yii::$app->controller->action->id=='create'){
                                Configs::create_update_footer_fixed();
                            }else{
                                Configs::updateButton();
                            }
                          ?>
                        </div>
                    </div>                
                  </div>
              </div>
            </div>
        </article>
    </div>
</section>
<?php ActiveForm::end(); ?>
<div class="modal fade" id="myModal">
  <div class="modal-dialog" style='margin-top:0'>
    <iframe id="load-data" src='' class="embed-responsive-item" frameborder="0"></iframe>
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
  $(document).ready(function() {
    $('input[name="Categories[type]"]').change(function() {
        var id=$(this).val();
        if(id==2){
          $('#show-news').toggle('slow');
        }
        else{
          $('#show-news').hide('slow');
        }
        if(id==3){
          $('#show-link').toggle('slow');
        }else{
          $('#show-link').hide('slow');
        }
    });
  })
</script>
<script>
    $('.css-file-upload').on('click', function() {
      var src = $(this).attr('data-src');
      var width = $(this).attr('data-width') || 640; // larghezza dell'iframe se non impostato usa 640
      var height = $(this).attr('data-height') || 600; // altezza dell'iframe se non impostato usa 360
      //var allowfullscreen = $(this).attr('data-video-fullscreen');
      $('.modal-dialog').css('width',925); 
      $("#load-data").attr({
            'src': src,
            'height': '620',
            'width': width,
            'allowfullscreen':''
        });
      $('#myModal').modal({show:true})    
    });
</script>
