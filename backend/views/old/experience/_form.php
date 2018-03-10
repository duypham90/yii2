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
                                  <?= $form->field($model, 'display_order')->textInput(['type'=>'number','min'=>1,'class'=>'input-sm']) ?>
                                  </label>
                              </section>
                              <section class="col col-4">
                                  <label class="input">
                                  <?= $form->field($model, 'icon')->textInput(['class'=>'input-sm']) ?>
                                  </label>
                              </section>
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
                                      <?= $form->field($model, "title[$key]")->textInput() ?>
                                    </label>
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
              ['Source','-','Save','-','Preview','-','Templates'],
              ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
             // ['Cut','Copy','Paste','PasteText','PasteFromWord','-'],            
              ['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
              ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote','CreateDiv'],
              ['Link','Unlink'],
              ['TextColor','BGColor'],
              ['Maximize', 'ShowBlocks','-'],           
              ['Styles','Format','Font','FontSize'],
              ['Image','Table','HorizontalRule','-','-','PageBreak'],
              
            ],

        });
    });
  });
     
})
</script>
