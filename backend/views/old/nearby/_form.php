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
                                <section class="col col-4">                          
                                    <label class="input">
                                    <?= $form->field($model, 'display_order')->textInput(['type'=>'number','min'=>1,'class'=>'input-sm']) ?>
                                    </label> 
                                </section>
                                <section class="col col-4">
                                    <label class="input">
                                    <?= $form->field($model, 'time')->textInput(['class'=>'input-sm']) ?>
                                    </label>
                                </section>
                                <section class="col col-4">
                                    <label class="input">
                                    <?= $form->field($model, 'cate_nearby')->textInput(['class'=>'input-sm']) ?>
                                    </label>
                                </section>
                          </div>
                        </fieldset>
                        <fieldset>
                          <div class="row">
                              <section class="col col-4">
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
                              <section class="col col-md-4">
                                    <label class="input">
                                      <?= $form->field($model, 'cover_photo')->textInput(['class'=>'input-sm css-input-upload','id'=>'coverphoto','readonly'=>true]) ?>
                                      <button onclick="BrowseServer('Images:/', 'coverphoto')" class="css-file-upload" type="button">Chọn hình</button>
                                    </label>
                                </section>
                               <?php if($model->cover_photo!=''){?>
                                <section class="col col-4">
                                  <img src="<?= Yii::getAlias('@rootUrl').'/uploads/cover/'.$model->cover_photo ?>" width="150px" class="replace-image">
                                </section>
                                <?php } else{?>
                                <section class="col col-md-4">
                                  <img alt="No Image" data-src="holder.js/No image" class="img-rounded replace-image" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzE0MHgxNDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNThhYmJkYmYyYiB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1OGFiYmRiZjJiIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ1LjUiIHk9Ijc0LjUiPjE0MHgxNDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true" style="width: 100px; height: 100px;">
                                </section>
                                <?php } ?>
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
