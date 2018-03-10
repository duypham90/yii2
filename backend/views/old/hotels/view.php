<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap\Tabs;
use backend\models\Langs;
use common\helps\Configs;

/* @var $this yii\web\View */
/* @var $model app\models\Hotels */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Hotels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$languages=Langs::getKeyValue('short_name','name');
?>

<div class="hotels-view">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <table id="w1" class="table table-striped table-bordered detail-view">
       <tbody>
          <tr>
             <th class="col-md-2"><?php echo $model->getAttributeLabel('status');?></th>
             <td class="col-md-10"><?=$model->status==0?'Publish':'Un Publish';?></td>
          </tr>
          <tr>
             <th class="col-md-2"><?php echo $model->getAttributeLabel('name');?></th>
             <td class="col-md-10"> <?php echo $model->name?></td>
          </tr>
          <tr>
             <th><?php echo $model->getAttributeLabel('short_name');?></th>
             <td><?= $model->short_name?></td>
          </tr>
          <tr>
             <th><?php echo $model->getAttributeLabel('slug');?></th>
             <td><?= $model->slug?></td>
          </tr>
          <tr>
             <th><?php echo $model->getAttributeLabel('display_order');?></th>
             <td><?=$model->display_order?></td>
          </tr>
          <tr>
             <th><?php echo $model->getAttributeLabel('graded_star');?></th>
             <td><?= $model->graded_star ?></td>
          </tr>
          <tr>
             <th><?php echo $model->getAttributeLabel('email_info');?></th>
             <td><a href="mailto:<?=$model->email_info?>"><?=$model->email_info?></a></td>
          </tr>
          <tr>
             <th><?php echo $model->getAttributeLabel('email_sales');?></th>
             <td><a href="mailto:<?=$model->email_sales?>"><?=$model->email_sales?></a></td>
          </tr>
          <tr>
             <th><?php echo $model->getAttributeLabel('hotline');?></th>
             <td><?=$model->hotline?></td>
          </tr>
          <tr>
             <th><?php echo $model->getAttributeLabel('tel');?></th>
             <td><?=$model->tel?></td>
          </tr>
          <tr>
             <th><?php echo $model->getAttributeLabel('fax');?></th>
             <td><?=$model->fax?></td>
          </tr>
          <tr>
             <th><?php echo $model->getAttributeLabel('no_of_rooms');?></th>
             <td><?=$model->no_of_rooms?></td>
          </tr>
           <tr>
             <th><?php echo $model->getAttributeLabel('logo');?></th>
             <td>                
                 <?php  echo  Html::img(Yii::getAlias('@rootUrl').'/uploads/'. $model['logo'],['width' => '70px']);?>
             </td>
          </tr>
          <tr>
             <th><?php echo $model->getAttributeLabel('cover_photo');?></th>
             <td></td>
          </tr>
          <tr>
             <th><?php echo $model->getAttributeLabel('lat');?></th>
             <td><?=$model->lat?></td>
          </tr>
          <tr>
             <th><?php echo $model->getAttributeLabel('lng');?></th>
             <td><?=$model->lng?></td>
          </tr>         
          <tr>
             <th><?php echo $model->getAttributeLabel('facilities');?></th>
             <td>
                <div class="smart-form">
                    <fieldset>
                      <section>
                          <div class="row">
                                <?php 
                                $facilities=Configs::facilities();
                                foreach ($facilities as $k => $v):
                                  $checked='';
                                  if (isset($model['facilities']) && is_array(explode(",",$model['facilities']))){
                                      if(in_array($k,explode(',',$model->facilities))){
                                        $checked='checked="checked"';
                                      }
                                  }
                                ?>
                                <div class="col col-4">
                                  <label class="checkbox state-disabled">
                                    <input type="checkbox" value="<?=$k?>" name="Hotels[facilities][<?=$k?>]" <?php echo $checked;?> disabled="disabled">
                                    <i></i><?php echo ucwords($v) ?>
                                </label>
                                </div>
                                 <?php endforeach; ?>
                          </div>
                      </section>
                    </fieldset>
                </div>
             </td>
          </tr>
          <tr>
             <th><?php echo $model->getAttributeLabel('sports');?></th>
             <td>
                <div class="smart-form">
                    <fieldset>
                      <section>
                          <div class="row">
                                <?php 
                                $sports=Configs::sports();
                                foreach ($sports as $k => $v):
                                  $checked='';
                                  if (isset($model['sports']) && is_array(explode(',',$model['sports']))){
                                      if(in_array($k,explode(',',$model->sports))){
                                        $checked='checked="checked"';
                                      }
                                  }
                                ?>
                                <div class="col col-4">
                                  <label class="checkbox state-disabled">
                                    <input type="checkbox" value="<?=$k?>" <?php echo $checked;?> disabled="disabled">
                                    <i></i><?php echo ucwords($v) ?>
                                </label>
                                </div>
                                 <?php endforeach; ?>
                          </div>
                      </section>
                    </fieldset>
                </div>
             </td>
          </tr>
          <tr>
            <td colspan="2" class='no-padding'>
                <section id="widget-grid" class=""> 
                    <!-- <div class="jarviswidget" id="wid-id-3" data-widget-collapsed="true"> -->
                    <div class="jarviswidget" data-widget-deletebutton="false" data-widget-editbutton="false" data-widget-custombutton="false">
                        <!-- widget options:
                        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
        
                        data-widget-colorbutton="false"
                        data-widget-editbutton="false"
                        data-widget-togglebutton="false"
                        data-widget-deletebutton="false"
                        data-widget-fullscreenbutton="false"
                        data-widget-custombutton="false"
                        data-widget-collapsed="true"
                        data-widget-sortable="false"   
                        -->
                        <header>
                            <span class="widget-icon"> <i class="fa fa-comments"></i> </span>
                            <h2>More infomation </h2>   
                        </header>   
                        <!-- widget div-->
                        <div>    
                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox">
                                <!-- This area used as dropdown edit box -->
                            </div>
                            <!-- end widget edit box -->  
                            <!-- widget content -->
                            <div class="widget-body">
                                <ul id="myTab1" class="nav nav-tabs bordered">
                                    <?php $langs=Langs::getKeyValue('short_name','name');?>
                                    <?php 
                                    $i=0;
                                    foreach ($langs as $key => $lang) {
                                        $active='';
                                        if($i==0){ $active='active'; }
                                    ?>
                                    <li class="<?=$active?>">
                                        <a href="#s<?=$i?>" data-toggle="tab"><?=$lang?></a>
                                    </li>
                                    <?php $i++; } ?>
                                    
                                    <li class="pull-right">
                                        <a href="javascript:void(0);">
                                        <div class="sparkline txt-color-pinkDark text-align-right" data-sparkline-height="18px" data-sparkline-width="90px" data-sparkline-barwidth="7">
                                            5,10,6,7,4,3
                                        </div> </a>
                                    </li>
                                </ul>
        
                                <div id="myTabContent1" class="tab-content padding-10">
                                <?php $i=0;
                                  foreach ($langs as $key => $lang) {
                                    $active='';
                                    if($i==0){ $active='active';}
                                  ?>
                                    <div class="tab-pane fade in <?=$active?>" id="s<?=$i?>">
                                        <table class='table table-striped table-bordered detail-view'>
                                            <tr>
                                                <th><?php echo $model->getAttributeLabel('address');?></th>
                                                <td>
                                                    <?php
                                                    if(isset(json_decode($model->address,true)[$key])){
                                                        echo json_decode($model->address,true)[$key];
                                                    }else{
                                                        echo "Not set";
                                                    }
                                                    ?> 
                                                 </td>
                                            </tr>
                                            <tr>
                                                <th><?php echo $model->getAttributeLabel('city');?></th>
                                                <td>
                                                    <?php
                                                    if(isset(json_decode($model->city,true)[$key])){
                                                        echo json_decode($model->city,true)[$key];
                                                    }else{
                                                        echo "Not set";
                                                    }
                                                    ?>                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><?php echo $model->getAttributeLabel('country');?></th>
                                                <td>
                                                    <?php
                                                    if(isset(json_decode($model->country,true)[$key])){
                                                        echo json_decode($model->country,true)[$key];
                                                    }else{
                                                        echo "Not set";
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><?php echo $model->getAttributeLabel('special_offer');?></th>
                                                <td>
                                                    <?php
                                                    if(isset(json_decode($model->special_offer,true)[$key])){
                                                        echo json_decode($model->special_offer,true)[$key];
                                                    }else{
                                                        echo "Not set";
                                                    }
                                                    ?>
                                                </td>
                                            </tr> 
                                            <tr>
                                                <th><?php echo $model->getAttributeLabel('promotion');?></th>
                                                <td>
                                                    <?php
                                                    if(isset(json_decode($model->promotion,true)[$key])){
                                                        echo json_decode($model->promotion,true)[$key];
                                                    }else{
                                                        echo "Not set";
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><?php echo $model->getAttributeLabel('home_description');?></th>
                                                <td>
                                                    <?php
                                                    if(isset(json_decode($model->home_description,true)[$key])){
                                                        echo json_decode($model->home_description,true)[$key];
                                                    }else{
                                                        echo "Not set";
                                                    }
                                                    ?>
                                                </td>
                                            </tr> 
                                            <tr>
                                                <th><?php echo $model->getAttributeLabel('short_description');?></th>
                                                <td>
                                                    <?php
                                                    if(isset(json_decode($model->short_description,true)[$key])){
                                                        echo json_decode($model->short_description,true)[$key];
                                                    }else{
                                                        echo "Not set";
                                                    }
                                                    ?>
                                                </td>
                                            </tr> 
                                            <tr>
                                                <th><?php echo $model->getAttributeLabel('description');?></th>
                                                <td>
                                                    <?php
                                                    if(isset(json_decode($model->description,true)[$key])){
                                                        echo json_decode($model->description,true)[$key];
                                                    }else{
                                                        echo "Not set";
                                                    }
                                                    ?>
                                                </td>
                                            </tr>                                        
                                        </table>
                                    </div>
                                    <?php $i++;} ?>
                                </div>   
                            </div>
                            <!-- end widget content -->    
                        </div>
                        <!-- end widget div -->  
                    </div>
                </section>
            </td>
          </tr>         
          <tr>
             <th><?php echo $model->getAttributeLabel('added_date');?></th>
             <td><?=date('d-m-Y H:i:s',strtotime($model->added_date));?></td>
          </tr>
          <tr>
             <th><?php echo $model->getAttributeLabel('updated_date');?></th>
             <td><?=date('d-m-Y H:i:s',strtotime($model->updated_date))?></td>
          </tr>
          <tr>
             <th><?php echo $model->getAttributeLabel('updated_by');?></th>
             <td><?=$model->updated_by?></td>
          </tr>
       
         
       </tbody>
    </table>



</div>
