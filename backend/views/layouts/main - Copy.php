<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use app\components\HeaderWidget;
use app\components\MenuWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo Html::csrfMetaTags() ?>
    <title><?php //echo Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="">
<?php $this->beginBody() ?>
<?php  echo HeaderWidget::widget();?>
<!-- END HEADER -->
<!-- Left panel : Navigation area -->
<!-- Note: This width of the aside area can be adjusted through LESS variables -->
<?php  echo MenuWidget::widget();?>
    
    <!-- END NAVIGATION -->
    <!-- MAIN PANEL -->
    
<div id="main" role="main">
   <!-- RIBBON -->
   <div id="ribbon">

      <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
      ]) ?>
   </div>
   <!-- END RIBBON -->
   <!-- MAIN CONTENT -->
   <div id="content">   
        <?= Alert::widget() ?>
        <?= $content ?>
   </div>
   <!-- END MAIN CONTENT -->
</div>

<?php $this->endBody() ?>
    <script type="text/javascript">
    // DO NOT REMOVE : GLOBAL FUNCTIONS!
    $(document).ready(function() {
      pageSetUp();
    })
    </script>
    <script type="text/javascript">
      function BrowseServer( startupPath, functionData ){
        var finder = new CKFinder();
        finder.basePath = '<?php echo Yii::getAlias('@web/')?>ckfinder/'; //Đường path nơi đặt ckfinder
        finder.startupPath = startupPath; //Đường path hiện sẵn cho user chọn file
        finder.selectActionFunction = SetFileField;//hàm được gọi khi chọn 1 file 
        finder.selectActionData = functionData; //id của textfield hiện địa chỉ hình
        chooseFiles: true,
      //finder.selectThumbnailActionFunction = ShowThumbnails;  
        finder.popup(); // Bật cửa sổ CKFinder
      } //BrowseServer
      function SetFileField( fileUrl, data ){
        var arr = fileUrl.split('/frontend/web/');
        document.getElementById( data["selectActionData"] ).value = arr[1];
        $('.replace-image').attr("src",fileUrl);
      }
      $('.fa-question-circle').tooltip();
    </script>
    <script>
      $(document).ready(function() {
        $('body').delegate('.datepk','focusin',function(){
            var date = new Date();
            var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
            var end = new Date(date.getFullYear(), date.getMonth(), date.getDate());
            $(this).datepicker({
                format : 'dd-mm-yyyy',
                todayHighlight: true,
                autoclose: true,
            });
        });

      });
      function hideDatePicker(val){
          if(val.length<=0){
            $('.datepk').datepicker('hide');
          }
        }  
    </script>



</body>
</html>
<?php $this->endPage() ?>
