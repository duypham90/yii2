<aside id="left-panel">
   <!-- User info -->
   <div class="login-info">
      <span>
         <!-- User image size is adjusted inside CSS, it should stay as it -->
         <a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
          <img src="" alt="me" class="online" />
         <span>
         Hong Duy
         </span>
         <i class="fa fa-angle-down"></i>
         </a>
      </span>
   </div>
   <!-- end user info -->
   <!-- NAVIGATION : This navigation is also responsive-->
   <nav>
      <!--
         NOTE: Notice the gaps after each icon usage <i></i>..
         Please note that these links work a bit different than
         traditional href="" links. See documentation for details.
         -->
      <ul>
         <li>
            <a href="<?= Yii::$app->request->baseUrl; ?>"><i class="fa fa-lg fa-fw fa-home"></i>Dashboard</a>
         </li>
         <li class="active">
            <a href="<?=Yii::$app->request->baseUrl; ?>/orders/index"><i class="fa fa-tag fa-fw fa-lg"></i>Đơn hàng</a>
         </li>
         <li>
            <a href="<?=Yii::$app->request->baseUrl; ?>/categories/index">
            <i class="fa fa-tag fa-fw fa-lg"></i>Danh mục sản phẩm</a>
         </li>
         <li>
            <a href="<?=Yii::$app->request->baseUrl; ?>/products/index">
            <i class="fa fa-tag fa-fw fa-lg"></i>Sản phẩm</a>
         </li>
         <li>
            <a href="#"><i class="fa fa-money fa-fw fa-lg"></i><span class="menu-item-parent">Room Setting</span></a>
            <ul>
               <li>
                   <a href="<?=Yii::$app->request->baseUrl; ?>/roomtype/index">
                     <span class="menu-item-parent">Roomtype</span>
                   </a>
               </li>
               <li>
                   <a href="<?=Yii::$app->request->baseUrl; ?>/room/index">
                     <span class="menu-item-parent">Room Control</span>
                   </a>
               </li>
               <li>
                   <a href="<?=Yii::$app->request->baseUrl; ?>/rate/index">
                     <span class="menu-item-parent">Rate Control</span>
                   </a>
               </li>
               <li>
                   <a href="<?=Yii::$app->request->baseUrl; ?>/promotion/index">
                     <span class="menu-item-parent">Promotion Control</span>
                   </a>
               </li>
           </ul>
         </li>
         <li>
            <a href="#"><i class="fa fa-tag fa-fw fa-lg"></i><span class="menu-item-parent">Content Control</span></a>
            <ul>
               <li>
                   <a href="<?=Yii::$app->request->baseUrl; ?>/specialoffer/index">
                     <span class="menu-item-parent">Special Offers</span>
                   </a>
               </li>
               <li>
                   <a href="<?=Yii::$app->request->baseUrl; ?>/nearby/index">
                     <span class="menu-item-parent">What's Nearby?</span>
                   </a>
               </li>
               <li>
                   <a href="<?=Yii::$app->request->baseUrl; ?>/explorehotel/index">
                     <span class="menu-item-parent">Explore Hotel</span>
                   </a>
               </li>
               <li>
                   <a href="<?=Yii::$app->request->baseUrl; ?>/tour/index">
                     <span class="menu-item-parent">Tours Control</span>
                   </a>
               </li>
           </ul>
         </li>
         <li>
            <a href="<?=Yii::$app->request->baseUrl; ?>/hotels/index"><i class="fa fa-tag fa-fw fa-lg"></i>Hotel Control</a>
         </li>
         <li>
            <a href="<?= Yii::$app->request->baseUrl; ?>/experience/index">
            <i class="fa fa-external-link fa-fw fa-lg"></i>Experience Hotel</a>
         </li>
         <li>
            <a href="<?= Yii::$app->request->baseUrl; ?>/nearby/index">
            <i class="fa fa-external-link fa-fw fa-lg"></i>Destination</a>
         </li>
         <li>
            <a href="<?= Yii::$app->request->baseUrl; ?>/seo/index">
            <i class="fa fa-cog fa-lg fa-fw"></i>SEO Control</a>
         </li>
         <li>
            <a href="<?= Yii::$app->request->baseUrl; ?>/setting/index">
            <i class="fa fa-cog fa-lg fa-fw"></i>Settings</a>
         </li>
      </ul>
   </nav>
   <span class="minifyme" data-action="minifyMenu">
      <i class="fa fa-arrow-circle-left hit"></i>
   </span>
</aside>