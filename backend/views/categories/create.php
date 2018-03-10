<?php

use yii\helpers\Html;

$this->title = 'Thêm danh mục';
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>


