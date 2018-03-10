<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use common\helps\ExtraHelper;
use common\helps\Configs;

use backend\models\Categories;
use backend\models\CategoriesSearch;
$menuTree=CategoriesSearch::dequymenu();
function has_children($rows,$id) {
  foreach ($rows as $row) {
    if ($row['parent_id'] == $id)
      return true;
  }
  return false;
}
function createTreeView($array, $IdParent = 0) {
    if(isset($array[$IdParent])){
        echo '<ol class="dd-list">';
        foreach ($array as $categoryId => $category) {
            if ($category['parent_id'] == $IdParent) {        
               echo '<li class="dd-item">';
                    echo '<div class="item">';
                        echo '<div class="dd-handle">';
                           echo '<label class="control control--checkbox">';
                                echo $category->name;
                                    echo '<input type="checkbox" value="'.$category->id.'"/>';
                                    echo '<span class="control__indicator"></span>';
                            echo '</label>';
                        echo '</div>';                  
                    echo '</div>';
                        unset($array[$categoryId]);
                        if(has_children($array,$category->id))
                        createTreeView($array, $category->id);
                 echo '</li>';             
            }
        }
        echo '</ol>'; 
    }
}
?>

<link href="<?php echo Yii::getAlias('@web/')?>themes/treemenu/css/style.css" rel="stylesheet" />
<link href="<?php echo Yii::getAlias('@web/')?>themes/treemenu/css/checkbox.css" rel="stylesheet" />


<?php 
  // $form =  \yii\widgets\ActiveForm::begin([
  //     'id' => 'form-id',
  //     'options' => ['class' => 'form-horizontal'],
  //     'enableClientValidation'=> true,
  //     'enableAjaxValidation'=> false,
  //     'validateOnSubmit' => true,
  //     'validateOnChange' => true,
  //     'validateOnType' => true,
  //     'action' => 'youractionurl',
  //     'validationUrl' => 'yourvalidationurl'
  //   ]);


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
                              <div class="col col-8">
                                  <section class="col-8">
                                      <label class="input">
                                          <?= $form->field($model, 'name')->textInput(['placeholder'=>'Tên của sản phẩm']) ?>
                                      </label>
                                  </section>
                                  <div class="row">
                                    <section class="col col-4">
                                        <label class="input">
                                            <?= $form->field($model, 'quantity')->textInput(['type'=>'number','min'=>1,'placeholder'=>'Số lượng ( ít nhất là 1 )']) ?>
                                        </label>
                                    </section>
                                    <section class="col col-4">
                                        <label class="input">
                                            <?= $form->field($model, 'price')->textInput(['min'=>1,'placeholder'=>'Giá bán của sản phẩm','onkeyup'=>'this.value=addCommas(this.value);']) ?>
                                        </label>
                                    </section>
                                    <section class="col col-4">
                                        <label class="input">
                                            <?= $form->field($model, 'price_discount')->textInput(['min'=>0,'placeholder'=>'Giảm giá nếu có','onkeyup'=>'this.value=addCommas(this.value);']) ?>
                                        </label>
                                    </section>
                                  </div>
                                  <div class="row">
                                      <section class="col col-12">
                                        <div class="inline-group">
                                            <?= 
                                            $form->field($model, 'status')->radioList(
                                                    [1 => 'Ẩn', 0 => 'Hiện'],
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
                                  <div class="row">
                                      <section class="col col-12">
                                         <?php 
                                          if($model->cover_photo!=''){ ?>
                                          
                                          <div class="inline-group" id="show-images">
                                              <?= $form->field($model, 'cover_photo[]')->fileInput(['class'=>'input-file','id'=>'files-upload','multiple' => true, 'accept' => 'image/*']) ?>
                                          </div>
                                          <?php 
                                           foreach (explode(',', $model->cover_photo) as $key) {
                                          ?>
                                          <span class="pip">
                                              <img class="imageThumb" src="<?=Yii::getAlias('@rootUrl/').'uploads/products/'.$key?>"><br><span class="remove">Xóa ảnh</span>
                                          </span>
                                            <?php }
                                            } else{?>
                                            <div class="inline-group" id="show-images">
                                                <?= $form->field($model, 'cover_photo[]')->fileInput(['class'=>'input-file','id'=>'files-upload','multiple' => true, 'accept' => 'image/*']) ?>
                                            </div
                                            <?php } ?>
                                      </section>                           
                                  </div>
                              </div>
                              <div class="col col-4">
                                <?php //echo $form->field($model, 'category_id')->hiddenInput(['class'=>'category']);?>
                                <?php 
                                    echo $form->field($model, 'category_id')->begin();
                                    echo Html::activeLabel($model,'category_id',['class'=>'control-label']); //label
                                    echo Html::activeHiddenInput($model, 'category_id',['class'=>'category']); //Field  
                                ?>
                                  <div class="render-tv cf nestable-lists pd10">
                                      <div class="dd" id="nestable">
                                          <?php 
                                          createTreeView($menuTree,0);
                                          ?>
                                      
                                      </div>
                                  </div>
                                  <?php 
                                    echo Html::error($model,'category_id', ['class' => 'help-block']); //error
                                    echo $form->field($model, 'category_id')->end();?>                  
                                  <?php //echo $form->field($model, 'category_id')->hiddenInput(['class'=>'category'])->label(false);?>
                              </div>                              
                          </div>                                     
                        </fieldset>
                                
                        <section class="css-label">
                          <?php echo $form->field($model, "promotion_text")->textArea(['class'=>'ckeditors','data-config-ck'=>'short-desc'])?>
                        </section>
                        <section class="css-label">
                              <?php echo $form->field($model, "short_description")->textArea(['class'=>'ckeditors','data-config-ck'=>'short-desc'])?>
                        </section>                     
                        <section class="css-label">
                             <?php echo $form->field($model, "description")->textArea(['class'=>'ckeditors','data-config-ck'=>'desc'])?>
                        </section>                                   
                        
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
                                  <?php //echo$form->field($model, 'meta_description')->textInput() ?>
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
       var js=$(this).attr('data-config-ck');
        CKEDITOR.replace( $(this).attr('id'), {
            customConfig: 'js-tool/'+js+'.js',
        });
    });
  });
     
})
</script>

