<?php
 echo Html::a('<span class="glyphicon glyphicon-eye-open"></span>',URL::to(['view','id'=>$model->_id]),['id' => 'view_link']);
                        Pjax::widget(['id'=>'view_member', 'linkSelector' => '#view_link','options'=>['tag'=>'span']]);
                        echo '&nbsp';
                        echo Html::a('<span class="glyphicon glyphicon-pencil"></span>',URL::to(['update','id'=>$model->_id]),['id' => 'edit_link']);
                        Pjax::widget(['id'=>'view_member', 'linkSelector' => '#edit_link','options'=>['tag'=>'span']]);
                        echo '&nbsp';
                        echo Html::a('<span class="glyphicon glyphicon-trash"></span>',
                                   URL::to(['delete','id'=>$model->_id]),
                                   ['id' => 'delete_link']);
                        Pjax::widget(['id'=>'view_member', 'linkSelector' => '#delete_link',
                        'options'=>['tag'=>'span'],'clientOptions' => ['method' => 'POST']]);
                                        ]
            ],