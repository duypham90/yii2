<?php
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Promotion';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="hotels-index">
    <section id="widget-grid" class="">
        <div class="row">
            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="jarviswidget jarviswidget-color-darken" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false">
                    <header>
                        <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                        <h2><?= Html::encode($this->title) ?></h2>
                        <div class='widget-toolbar'><?php  echo Html::a(Html::tag('span',Html::tag('i', '', ['class' => 'fa fa-plus']),['class'=>'btn-label']).'Add New', Url::to('create'),['class' => 'btn btn-labeled btn-success','id'=>'css-btn']);?></div>               
                    </header>
                    <div class="no-border">
                        <div class="jarviswidget-editbox"></div>
                        <div class="widget-body no-padding">
                        <?= $this->render('grid', ['dataProvider' => $dataProvider,'searchModel'=>$searchModel]) ?>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
</div>

