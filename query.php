<?php 
$productList = Products::find()
                ->select(['id', 'name', 'slug', 'quantity', 'price'])
                ->where(['status' => 0])
                ->limit(10)
                ->orderBy(['id' => SORT_DESC])->asArray()
                ->all();

    $productList = new ArrayDataProvider([
        'allModels' => Products::find()
        ->select(['id', 'name', 'slug', 'quantity', 'price'])
        ->where(['status' => 0])
        ->limit(15)
        ->orderBy(['id' => SORT_DESC])
        ->all(),
    ]); 

 echo ListView::widget([
                'dataProvider' => $productList,
                'options' => [
                    'tag' => 'div',
                    'class' => 'row',
                    'id' => 'list-wrapper',
                ],
                'itemOptions' => [
                    'tag' => 'div',
                    'class' => 'col-lg-4 col-md-4 col-sm-6 col-xs-12',
                ],
                'layout' => "{items}",
                'itemView' => '_list_item',
            ]);
?>