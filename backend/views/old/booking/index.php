<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\BookingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bookings';
$this->params['breadcrumbs'][] = ['label' => 'Bookings', 'url' => ['index']];
?>
<div class="booking-index">
    <section id="widget-grid" class="">
        <div class="row">
            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="jarviswidget jarviswidget-color-darken" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false">
                    <header>
                        <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                        <h2><?= Html::encode($this->title) ?></h2>               
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