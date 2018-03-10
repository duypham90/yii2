<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\helps\ExtraHelper;
use common\helps\Configs;
use yii\helpers\Url;
use backend\models\Langs;
//use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\models\Hotels */
/* @var $form yii\widgets\ActiveForm */
?>


<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
<section id="widget-grid" class="">            
    <div class="row">
        <p><?php echo Yii::getAlias('@uploads');?></p>
        <p><?php echo Yii::getAlias('@rootUrl');?></p>
        <p><?php echo Yii::$app->request->BaseUrl;?></p>
        <p><?php echo Yii::$app->request->getHostInfo() ;?></p>
        <p><?php echo Yii::$app->request->getBaseUrl() ;?></p>
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
                            <section class="col col-4">
                               <label class="input">
                               <?= $form->field($model, 'short_name')->textInput(['maxlength' =>50,'class'=>'input-sm']) ?>
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
                                    <?= $form->field($model, 'graded_star')->textInput(['type'=>'number','min'=>1,'class'=>'input-sm']) ?>
                                    </label>
                                </section>
                                <section class="col col-2">
                                    <label class="input">
                                    <?= $form->field($model, 'no_of_rooms')->textInput(['type'=>'number','min'=>1,'class'=>'input-sm']) ?>
                                    </label>
                                </section>
                                <section class="col col-3">
                                   <label class="input">
                                   <?= $form->field($model, 'email_info')->textInput(['maxlength' => true,'class'=>'input-sm']) ?>
                                   </label>
                                </section>

                                <section class="col col-3">
                                   <label class="input">
                                   <?= $form->field($model, 'email_sales')->textInput(['maxlength' => true,'class'=>'input-sm']) ?>
                                   </label>
                                </section>
                            </div>
                          <div class="row">            
                              
                          </div>
                          <div class="row">
                              <section class="col col-4">
                                 <label class="input">
                                 <?= $form->field($model, 'tel')->textInput(['maxlength' => true,'class'=>'input-sm']) ?>
                                 </label>
                              </section>
                              <section class="col col-4">
                                 <label class="input">
                                 <?= $form->field($model, 'hotline')->textInput(['maxlength' => true,'class'=>'input-sm']) ?>
                                 </label>
                              </section>
                              <section class="col col-4">
                                 <label class="input">
                                 <?= $form->field($model, 'fax')->textInput(['maxlength' => true,'class'=>'input-sm']) ?>
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
                                                  // $chk='';
                                                  // echo $checked;
                                                  // if($checked=$value){
                                                  //   $chk='checked';
                                                  // }
                                                  // $return = '<label class="radio">';
                                                  // $return .= '<input type="radio" name="' . $name . '" value="' . $value . '" '.$chk.'  tabindex="3">';
                                                  // $return .= '<i></i>'.ucwords($label);
                                                  // $return .= '</label>';
                                                  // return $return;
                                                  return '<label class="radio">' . Html::radio($name, $checked, ['value'  => $value, 'autocomplete'=>'off']) .'<i></i>'. ucwords($label) . '</label>';
                                              }
                                          ]
                                      );
                                  ?>
                                </div>
                            </section>
                            <section class="col col-3">
                            	<?= $form->field($model, 'logo')->fileInput() ?>
                            <!--    <label class="label">Logo</label>
                               <div class="input input-file">
                                  <span class="button">
                                  <input type="file" id="file" name="file" onchange="this.parentNode.nextSibling.value = this.value">
                                   </span>
                                  <input type="text" placeholder="Include some files" readonly="">
                               </div> -->
                            </section>
                            <?php if($model->logo!==''){?>
                            <section class="col col-2">
                            	<img src="<?= Yii::getAlias('@frontend').'/uploads/logo/'.$model->logo ?>" width="150px">
                            </section>
                            <?php } ?>
                            
                          </div>
                        </fieldset>
                        <fieldset>
                          <section>
                              <?= $form->field($model, 'location')->textArea(['rows' => '4']) ?>
                          </section>
                          <div class="row">
                              <section class="col col-6">
                                <label class="input">
                                  <?= $form->field($model, 'lat')->textInput() ?>
                                </label>
                              </section>
                              <section class="col col-6">
                                <label class="input">
                                  <?= $form->field($model, 'lng')->textInput() ?>
                                </label>
                              </section>
                          </div>
                        </fieldset>
                        <fieldset>
                          <section>
                              <label class="label">Chose options</label>
                              <div class="row">
                                <?php 
                                $facilities=Configs::facilities();
                                foreach ($facilities as $k => $v):
                                  $checked='';
                                  if (isset($model['facilities']) && is_array($model['facilities'])){
                                      if(in_array($k,$model->facilities)){
                                        $checked='checked="checked"';
                                      }
                                  }
                                ?>
                                <div class="col col-4">
                                  <label class="checkbox">
                                    <input type="checkbox" value="<?=$k?>" name="Hotels[facilities][<?=$k?>]" <?php echo $checked;?>>
                                    <i></i><?php echo ucwords($v) ?>
                                </label>
                                </div>
                                 <?php endforeach; ?>
                              </div>
                          </section>
                        </fieldset>
                        <fieldset>
                          <section>
                              <label class="label">Chose options</label>
                              <div class="row">
                                <?php 
                                $sports=Configs::sports();
                                foreach ($sports as $k => $v):
                                  $checked='';
                                  if (isset($model['sports']) && is_array($model['sports'])){
                                      if(in_array($k,$model->sports)){
                                        $checked='checked="checked"';
                                      }
                                  }
                                ?>
                                <div class="col col-3">
                                  <label class="checkbox">
                                    <input type="checkbox" value="<?=$k?>" name="Hotels[sports][<?=$k?>]" <?php echo $checked;?>>
                                    <i></i><?php echo ucwords($v) ?>
                                </label>
                                </div>
                                 <?php endforeach; ?>
                              </div>
                          </section>
                        </fieldset>           
                        <section>
                            <?php $langs=Langs::getKeyValue('short_name','name');?>
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
                                <section>
                                    <label class="input">
                                      <?= $form->field($model, "address[$key]")->textInput() ?>
                                    </label>
                                </section>

                                <div class="row">
                                  <section class="col col-6">
                                    <label class="input">
                                      <?= $form->field($model, "city[$key]")->textInput() ?>
                                    </label>
                                  </section>
                                  <section class="col col-6">
                                    <label class="input">
                                      <?= $form->field($model, "country[$key]")->textInput() ?>
                                    </label>
                                  </section>
                                </div>                               
                                <section class="css-label">
                                  <?php echo $form->field($model, "special_offer[$key]")->textArea(['class'=>'ckeditors']);?> 
                                </section>
                                <section class="css-label">
                                    <?php echo $form->field($model, "promotion[$key]")->textArea(['class'=>'ckeditors'])?>
                                </section>
                                <section class="css-label">
                                  <?php echo $form->field($model, "home_description[$key]")->textArea(['class'=>'ckeditors'])?>
                                </section>
                                <section class="css-label">
                                    <?php echo $form->field($model, "short_description[$key]")->textArea(['class'=>'ckeditors'])?>
                                </section>
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
