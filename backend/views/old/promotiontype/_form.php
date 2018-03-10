<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\helps\ExtraHelper;
use common\helps\Configs;
use yii\helpers\Url;
use backend\models\Langs;
?>


<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
<section id="widget-grid" class="">            
    <div class="row">
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
                                <section class="col col-2">
                                    <label class="input">
                                    <?= $form->field($model, 'name')->textInput(['class'=>'input-sm']) ?>
                                    </label>
                                </section>
                          </div>                                     
                        </fieldset>
                        <fieldset>
                          <div class="row">
                          <section class="col col-3">
                              <div class="inline-group">
                                  <?= 
                                  $form->field($model, 'status')->radioList(
                                          [0 => 'Show', 1 => 'Hide'],
                                          [
                                              'item' => function($index, $label, $name, $checked, $value) {
                                                  return '<label class="radio">' . Html::radio($name, $checked, ['value'  => $value, 'autocomplete'=>'off']) .'<i></i>'. ucwords($label) . '</label>';
                                              }
                                          ]
                                      );
                                  ?>
                                </div>
                            </section>                           
                          </div>
                        </fieldset>          
                        <div class="form-group fix-btn">
                            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-labeled btn-success css-btn' : 'btn btn-labeled btn-success css-btn']) ?>
                        </div>
                    </div>                
                  </div>
              </div>
            </div>
        </article>
    </div>
</section>
<?php ActiveForm::end(); ?>
<script>
 $(document).ready(function() {
  $(function() {
    $('.ckeditors').each(function(){
        CKEDITOR.replace( $(this).attr('id'), {
            uiColor : '##FFFF99',
            filebrowserBrowseUrl: '../ckeditor/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl:'../ckfinder/ckfinder.html?type=Images',
            filebrowserImageUploadUrl:'../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserUploadUrl:'../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

            toolbar:[
              ['Source','-','Save','NewPage','Preview','-','Templates'],
              ['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print'],
              ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],             
              ['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
              ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote','CreateDiv'],
              ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
              ['Link','Unlink','Anchor'],
              ['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],
              ['Styles','Format','Font','FontSize'],
              ['TextColor','BGColor'],
              ['Maximize', 'ShowBlocks','-','About']
            ],

        });
    });
  });
     
})
</script>
