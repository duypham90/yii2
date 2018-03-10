<?php
use yii\widgets\ListView;
$this->title = 'List products';

?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
            <div class="row">
            <?php 
             if($productList){
                foreach ($productList as $item) {
                    echo $this->render('_list_item',array('model' => $item));
                }      
            }
            ?>  
            </div>
           
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                    <div class="box-new">
                        <div class="panel panel-info">
                              <div class="panel-heading">
                                    <h3 class="panel-title">Tin tức</h3>
                              </div>
                              <div class="panel-body">
                                   <ul>
                                        <li>
                                            <a href="#">
                                                <div class="box-new-img">
                                                    <img src="img/room/room-1.jpg" alt="" class="img-responsive">
                                                </div>
                                                <div class="box-new-info">
                                                    Luxury Room Luxury Room Luxury Room Luxury Room Luxury Room Luxury Room 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="box-new-img">
                                                    <img src="img/room/room-1.jpg" alt="" class="img-responsive">
                                                </div>
                                                <div class="box-new-info">
                                                    Luxury Room Luxury Room Luxury Room Luxury Room Luxury Room Luxury Room 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="box-new-img">
                                                    <img src="img/room/room-1.jpg" alt="" class="img-responsive">
                                                </div>
                                                <div class="box-new-info">
                                                    Luxury Room Luxury Room Luxury Room Luxury Room Luxury Room Luxury Room 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="box-new-img">
                                                    <img src="img/room/room-1.jpg" alt="" class="img-responsive">
                                                </div>
                                                <div class="box-new-info">
                                                    Luxury Room Luxury Room Luxury Room Luxury Room Luxury Room Luxury Room 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="box-new-img">
                                                    <img src="img/room/room-1.jpg" alt="" class="img-responsive">
                                                </div>
                                                <div class="box-new-info">
                                                    Luxury Room Luxury Room Luxury Room Luxury Room Luxury Room Luxury Room 
                                                </div>
                                            </a>
                                        </li>
                                   </ul>
                              </div>
                        </div>                                   
                        <!-- <img src="img/room/room-1.jpg" alt="" class="img-responsive">  -->
                    </div>   
                </div>
                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                    <div class="box-new">
                        <div class="panel panel-info">
                              <div class="panel-heading">
                                    <h3 class="panel-title">Tin tức</h3>
                              </div>
                              <div class="panel-body">
                                   <ul>
                                        <li>
                                            <a href="#">
                                                <div class="box-new-img">
                                                    <img src="img/room/room-1.jpg" alt="" class="img-responsive">
                                                </div>
                                                <div class="box-new-info">
                                                    Luxury Room Luxury Room Luxury Room Luxury Room Luxury Room Luxury Room 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="box-new-img">
                                                    <img src="img/room/room-1.jpg" alt="" class="img-responsive">
                                                </div>
                                                <div class="box-new-info">
                                                    Luxury Room Luxury Room Luxury Room Luxury Room Luxury Room Luxury Room 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="box-new-img">
                                                    <img src="img/room/room-1.jpg" alt="" class="img-responsive">
                                                </div>
                                                <div class="box-new-info">
                                                    Luxury Room Luxury Room Luxury Room Luxury Room Luxury Room Luxury Room 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="box-new-img">
                                                    <img src="img/room/room-1.jpg" alt="" class="img-responsive">
                                                </div>
                                                <div class="box-new-info">
                                                    Luxury Room Luxury Room Luxury Room Luxury Room Luxury Room Luxury Room 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="box-new-img">
                                                    <img src="img/room/room-1.jpg" alt="" class="img-responsive">
                                                </div>
                                                <div class="box-new-info">
                                                    Luxury Room Luxury Room Luxury Room Luxury Room Luxury Room Luxury Room 
                                                </div>
                                            </a>
                                        </li>
                                   </ul>
                              </div>
                        </div>                                   
                        <!-- <img src="img/room/room-1.jpg" alt="" class="img-responsive">  -->
                    </div>   
                </div>

            </div>
        </div>
    </div>             
</div>
