<aside id="left-panel">
        <!-- User info -->
        <div class="login-info">
            <span>
                <!-- User image size is adjusted inside CSS, it should stay as it -->
                <a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
                    
                    <span>
                        Hồng Duy
                    </span>
                    <i class="fa fa-angle-down"></i>
                </a>
            </span>
        </div>
        <!-- end user info -->
        <!-- NAVIGATION : This navigation is also responsive-->
        <?php 
            function isItemActive($currentC,$action)
            {
                if($action !=''){
                    if(Yii::$app->controller->id==$currentC && Yii::$app->controller->action->id==$action){
                        return 'class="active"';
                    }
                }
                else{
                    if(Yii::$app->controller->id==$currentC){
                        return 'class="active"';
                    }
                }
            }
        ?>
        
        <nav>
            <ul>
                <li <?=isItemActive('default','index')?>>
                    <a href="<?= Yii::$app->request->baseUrl; ?>"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Home</span></a>
                </li>
                <li <?=isItemActive('orders','index')?>>
                    <a href="<?=Yii::$app->request->baseUrl; ?>/orders/index"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item-parent">Đơn hàng</span></a>
                </li>
                <li <?=isItemActive('categories','index')?>>
                    <a href="<?=Yii::$app->request->baseUrl; ?>/categories/index"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item-parent">Danh mục sản phẩm</span></a>
                </li>
                <li <?=isItemActive('products','index')?>>
                    <a href="<?=Yii::$app->request->baseUrl; ?>/products/index"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item-parent">Sản phẩm</span></a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-lg fa-fw fa-puzzle-piece"></i> <span class="menu-item-parent">App Views</span></a>
                    <ul>
                        <li>
                            <a href="projects.html"><i class="fa fa-file-text-o"></i> Projects</a>
                        </li>
                        <li>
                            <a href="blog.html"><i class="fa fa-paragraph"></i> Blog</a>
                        </li>
                        <li>
                            <a href="gallery.html"><i class="fa fa-picture-o"></i> Gallery</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-comments"></i> Forum Layout</a>
                            <ul>
                                <li><a href="forum.html">General View</a></li>
                                <li><a href="forum-topic.html">Topic View</a></li>
                                <li><a href="forum-post.html">Post View</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="profile.html"><i class="fa fa-group"></i> Profile</a>
                        </li>
                        <li>
                            <a href="timeline.html"><i class="fa fa-clock-o"></i> Timeline</a>
                        </li>
                        <li>
                            <a href="search.html"><i class="fa fa-search"></i>  Search Page</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>


        <span class="minifyme" data-action="minifyMenu">
            <i class="fa fa-arrow-circle-left hit"></i>
        </span>

    </aside>