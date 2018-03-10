<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\helps\ExtraHelper;
use common\helps\Configs;
use yii\helpers\Url;
use backend\models\Langs;
$langs=Langs::getKeyValue('short_name','name');
$amenities_config=Configs::amenities();
$bed_config=Configs::beds();

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
                            <section class="col col-4">
                               <label class="input">
                               <?= $form->field($model, 'name')->textInput(['maxlength' => true,'class'=>'input-sm']);?>
                               </label>
                            </section>
                            <section class="col col-4">
                             <label class="input">
                             <?= $form->field($model, 'slug')->textInput(['maxlength' => true,'class'=>'input-sm']) ?>
                             </label>
                            </section>
                          </div>
                          <div class="row">
                              <section class="col col-2">
                                  <label class="input">
                                  <?= $form->field($model, 'display_order')->textInput(['type'=>'number','min'=>1,'class'=>'input-sm']) ?>
                                  </label>
                              </section>
                              <section class="col col-2">
                                  <label class="input">
                                  <?= $form->field($model, 'size_of_room')->textInput(['maxlength' => true,'class'=>'input-sm']);?>
                                  </label>
                              </section>
                              <section class="col col-2">
                                  <label class="input">
                                  <?= $form->field($model, 'no_of_rooms')->textInput(['type'=>'number','min'=>1,'class'=>'input-sm']) ?>
                                  </label>
                              </section>
                              <section class="col col-2">
                                  <label class="input">
                                  <?= $form->field($model, 'max_per_room')->textInput(['type'=>'number','min'=>1,'class'=>'input-sm']) ?>
                                  </label>
                              </section>
                          </div>
                          <div class="row">
                              <section class="col col-2">
                                  <label class="input">
                                  <?= $form->field($model, 'no_of_adult')->textInput(['type'=>'number','min'=>1,'class'=>'input-sm']) ?>
                                  </label>
                              </section>
                              <section class="col col-2">
                                  <label class="input">
                                  <?= $form->field($model, 'no_of_child')->textInput(['type'=>'number','min'=>1,'class'=>'input-sm']) ?>
                                  </label>
                              </section>
                              <section class="col col-2">
                                  <label class="input">
                                  <?= $form->field($model, 'no_of_extrabed')->textInput(['type'=>'number','min'=>1,'class'=>'input-sm']) ?>
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
                        <fieldset>
                          <section>
                              <label class="label">Room facilities</label>
                              <div class="row">
                                <?php 
                               
                                foreach ($amenities_config as $k => $v):
                                  $checked='';
                                  if (isset($model['amenities']) && is_array($model['amenities'])){
                                      if(in_array($k,$model->amenities)){
                                        $checked='checked="checked"';
                                      }
                                  }
                                ?>
                                <div class="col col-4">
                                  <label class="checkbox">
                                    <input type="checkbox" value="<?=$k?>" name="Roomtypes[amenities][<?=$k?>]" <?php echo $checked;?>>
                                    <i></i><?php echo ucwords($v) ?>
                                </label>
                                </div>
                                 <?php endforeach; ?>
                              </div>
                          </section>
                        </fieldset>
                        <fieldset>
                          <section>
                              <label class="label">Bed configuration</label>
                              <div class="row">
                                <?php 
                                foreach ($bed_config as $k => $v):
                                  $checked='';
                                  if (isset($model['bed']) && is_array($model['bed'])){
                                      if(in_array($k,$model->bed)){
                                        $checked='checked="checked"';
                                      }
                                  }
                                ?>
                                <div class="col col-3">
                                  <label class="checkbox">
                                    <input type="checkbox" value="<?=$k?>" name="Roomtypes[bed][<?=$k?>]" <?php echo $checked;?>>
                                    <i></i><?php echo ucwords($v) ?>
                                </label>
                                </div>
                                 <?php endforeach; ?>
                              </div>
                          </section>
                        </fieldset>           
                        <section>
                            <ul id="myTab1" class="nav nav-tabs bordered">
                            <?php $i=0;
                            foreach ($langs as $key => $lang) {
                              $active='';
                              if($i==0){ $active='active'; }
                            ?>
                              <li class="<?php echo $active ?>">
                                <a href="#s<?php echo $i;?>" data-toggle="tab"><?= $lang;?></a>
                              </li>
                            <?php $i++;} ?>
                            </ul>                
                            <div id="myTabContent1" class="tab-content padding-10">
                              <?php $i=0;
                              foreach ($langs as $key => $lang) {
                                $active='';
                                if($i==0){ $active='active';}
                              ?>
                              <div class="tab-pane fade in <?= $active;?>" id="s<?=$i;?>">
                                <section class="css-label">
                                  <?php echo $form->field($model, "description[$key]")->textArea(['class'=>'ckeditors'])?>
                                </section>                        
                              </div>
                              <?php $i++; } ?>
                            </div>
                        </section>
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
   //var editor=CKEDITOR.config.customConfig ='../../backend/web/ckeditor/config.js' ;
   //CKFinder.setupCKEditor( editor );


    //   config.removeButtons = 'Save,NewPage,Preview,Print,Cut,Copy,Paste,PasteText,PasteFromWord,Templates,Redo,Undo,Replace,Find,SelectAll,HiddenField,ImageButton,Button,Select,Textarea,TextField,Radio,Form,Checkbox,Subscript,Superscript,RemoveFormat,CreateDiv,Language,Anchor,Flash,Maximize,About';
    // };
    // CKEDITOR.replaceAll( function( textarea, config ) {
    //   CKFinder.setupCKEditor();
    // } );
    // var ck=CKEDITOR.replace('ckeditors', {
    //     filebrowserBrowseUrl:  'http://localhost/yii2/backend/web/ckfinder/ckfinder.html',
    //     filebrowserImageBrowseUrl: 'http://localhost/yii2/backend/web/ckfinder.html?Type=Images',
    //     filebrowserUploadUrl: 'http://localhost/yii2/backend/web/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    //     filebrowserImageUploadUrl: 'http://localhost/yii2/backend/web/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    //     filebrowserWindowWidth : '1000',
    //     filebrowserWindowHeight : '700'
    // });
   // CKFinder.setupCKEditor();
     
})
</script>
