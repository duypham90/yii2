<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\BookingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bookings';
$this->params['breadcrumbs'][] = ['label' => 'Bookings', 'url' => ['index']];
?>
<div class="bookings-index">
    <section id="widget-grid" class="">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <article class="row">
                <div class="jarviswidget jarviswidget-color-darken" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false">
                    <header>
                        <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                        <h2><?= Html::encode($this->title) ?></h2>               
                    </header>
                    <div>
                        <div class="jarviswidget-editbox"></div>
                        <div class="widget-body no-padding">
                        <div class="alert alert-info no-margin fade in" style="text-align:right">
                            <a href="javascript:void(0);" class="btn btn-labeled btn-success"> <span class="btn-label"><i class="fa fa-plus"></i></span>Add </a>
                        </div>
                        <?= $this->render('grid', ['dataProvider' => $dataProvider,'searchModel'=>$searchModel]) ?>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
</div>
<style>
    .widget-body.no-padding .alert{
        padding: 5px 14px;
    }
    .summary{
        position: absolute;
        top: 12px;
        left: 30px;
    }
    .pagination{
        float: right;
        margin: 14px 25px;
    }
</style>