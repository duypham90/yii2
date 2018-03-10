<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use common\helps\ExtraHelper;

use common\helps\Configs;
use yii\helpers\Url;
use backend\models\Langs;
use backend\models\PromotionType;
use backend\models\Roomtypes;
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
                                    <?= $form->field($model, 'from_date')->textInput(['class'=>'input-sm date']) ?>
                                    </label>
                                </section>
                                <section class="col col-2">
                                    <label class="input">
                                    <?= $form->field($model, 'to_date')->textInput(['class'=>'input-sm date']) ?>
                                    </label>
                                </section>
                                <section class="col col-3">
                                    <label class="input">
                                    <?= $form->field($model, 'discount')->textInput(['class'=>'input-sm','placeholder'=>'Discount %']) ?>
                                    </label>
                                </section>
                          </div>                                     
                        </fieldset>
                        <fieldset>
                          <div class="row">
                              <section class="col col-3">
                                    <label class="input">
                                      <?= $form->field($model, 'type')->dropdownList(ArrayHelper::map(PromotionType::find()->all(),'id','name'), ['prompt' => '---Select promotion type---']) ?>
                                    </label>
                              </section>
                              <section class="col col-2">
                                    <label class="input">
                                    <?= $form->field($model, 'min_stay')->textInput(['type'=>'number','min'=>1,'class'=>'input-sm']) ?>
                                    </label>
                                </section>
                                <section class="col col-2">
                                    <label class="input">
                                    <?= $form->field($model, 'no_of_day')->textInput(['type'=>'number','min'=>1,'class'=>'input-sm']) ?>
                                    </label>
                                </section>                          
                          </div>
                        </fieldset>
                        <fieldset>
                            <section>
                                <label class="label">Room types</label>
                                <div class="row">
                                  <?php 
                                  $roomtypes=Roomtypes::find()->asArray()->all();
                                  foreach ($roomtypes as $k):
                                    $checked='';
                                    if (isset($model['roomtypes']) && is_array($model['roomtypes'])){
                                        if(in_array($k['id'],$model->roomtypes)){
                                          $checked='checked="checked"';
                                        }
                                    }
                                  ?>
                                  <div class="col col-3">
                                    <label class="checkbox">
                                      <input type="checkbox" value="<?=$k['id']?>" name="Promotions[roomtypes][<?=$k['id']?>]" <?php echo $checked;?>>
                                      <i></i><?php echo ucwords($k['name']) ?>
                                  </label>
                                  </div>
                                   <?php endforeach; ?>
                                </div>
                            </section>
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
                                      <?= $form->field($model, "name[$key]")->textInput() ?>
                                    </label>
                                </section>
                                <section class="css-label">
                                  <?php echo $form->field($model, "short_content[$key]")->textArea(['class'=>'ckeditors'])?>
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
  var date = new Date();
  var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
  var end = new Date(date.getFullYear(), date.getMonth(), date.getDate());
  $('.date').datepicker({
      format : 'dd-mm-yyyy',
      todayHighlight: true,
      autoclose: true,
    });
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
