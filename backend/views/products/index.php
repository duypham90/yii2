<?php
$this->title = 'Sản phẩm';
$this->params['breadcrumbs'][] = ['label' => 'Sản phẩm', 'url' => ['index']];
?>
<div class="booking-index">
    <section id="widget-grid" class="">
        <div class="row">
            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="jarviswidget jarviswidget-color-darken" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false">
                    <header>
                        <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                        <h2><?=$this->title; ?></h2> 
                        <div class='widget-toolbar'>
                            <a id="css-btn" class="btn btn-labeled btn-success" href="create"><span class="btn-label"><i class="fa fa-plus"></i></span>Thêm mới</a>
                        </div>              
                    </header>
                    <div class="no-border">
                        <div class="jarviswidget-editbox"></div>
                        <div class="widget-body no-padding">
                        <?= $this->render('grid', ['dataProvider' => $dataProvider,'searchModel'=>$searchModel,'arrCategories'=>$arrCategories]) ?>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
</div>
