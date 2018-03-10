<?php 
use yii\helpers\Url;
use yii\helpers\Html;
?>
<header id="header">
   <div id="logo-group">
      <!-- PLACE YOUR LOGO HERE -->
      <span id="logo">Admin</span>
      <!-- END LOGO PLACEHOLDER -->
      <!-- Note: The activity badge color changes when clicked and resets the number to 0
         Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
      <span id="activity" class="activity-dropdown"> <i class="fa fa-user"></i> <b class="badge"> 21 </b> </span>
      <!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->
      <div class="ajax-dropdown">
         <!-- the ID links are fetched via AJAX to the ajax container "ajax-notifications" -->
         <div class="btn-group btn-group-justified" data-toggle="buttons">
            <label class="btn btn-default">
            <input type="radio" name="activity" id="ajax/notify/mail.html">
            Msgs (14)
            </label>
            <label class="btn btn-default">
            <input type="radio" name="activity" id="ajax/notify/notifications.html">
            notify (3)
            </label>
            <label class="btn btn-default">
            <input type="radio" name="activity" id="ajax/notify/tasks.html">
            Tasks (4)
            </label>
         </div>
         <!-- notification content -->
         <div class="ajax-notifications custom-scroll">
            <div class="alert alert-transparent">
               <h4>Click a button to show messages here</h4>
               This blank page message helps protect your privacy, or you can show the first message here automatically.
            </div>
            <i class="fa fa-lock fa-4x fa-border"></i>
         </div>
         <!-- end notification content -->
         <!-- footer: refresh area -->
         <span>
         Last updated on: 12/12/2013 9:43AM
         <button type="button" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Loading..." class="btn btn-xs btn-default pull-right">
         <i class="fa fa-refresh"></i>
         </button>
         </span>
         <!-- end footer -->
      </div>
      <!-- END AJAX-DROPDOWN -->
   </div>
   <!-- projects dropdown -->
   <div class="project-context hidden-xs list-hotel">
      <span class="project-selector dropdown-toggle" data-toggle="dropdown"><i class="fa fa-angle-down"></i></span>
      <!-- Suggestion: populate this list with fetch and push technique -->
      <!-- end dropdown-menu-->
   </div>
   <!-- end projects dropdown -->
   <!-- pulled right: nav area -->

   <div class="pull-right">
      <div id="logout" class="btn-header transparent pull-right">
         <span> 
        <!--  <a href="<?= Url::to(['site/logout','data-method'=>'post'])?>" data-method="post" title="Sign Out" data-action="userLogout" data-logout-msg="Bạn có chắc chắn muốn thoát"><i class="fa fa-sign-out"></i></a>  -->
         <?php echo Html::a('Thoat',['/site/logout'],['data-method'=>'post'])?>

         </span>
      </div>
       <ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
          <li class="">
              <a href="<?= Url::to(['site/logout'])?>" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown">
                  <img src="<?= Yii::getAlias('@rootUrl').'/uploads/avatar/avatar.jpg'?>" alt="John Doe" class="online" />
              </a>
              <ul class="dropdown-menu pull-right">
                  <li>
                      <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> Setting</a>
                  </li>
                  <li class="divider"></li>
                  <li>
                      <a href="profile.html" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>rofile</a>
                  </li>
                  <li class="divider"></li>
                  <li>
                      <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="toggleShortcut"><i class="fa fa-arrow-down"></i> <u>S</u>hortcut</a>
                  </li>
                  <li class="divider"></li>
                  <li>
                      <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> Full <u>S</u>creen</a>
                  </li>
                  <li class="divider"></li>
                  <li>
                      <a href="<?= Url::to(['site/logout','data-method'=>'post'])?>" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"><i class="fa fa-sign-out fa-lg"></i> <strong><u>L</u>ogout</strong></a>
                  </li>
              </ul>
          </li>
      </ul>
     
      <div id="hide-menu" class="btn-header pull-right">
         <span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
      </div>
   </div>
   <!-- end pulled right: nav area -->
</header>