<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use common\widgets\Alert;
use yii\bootstrap\ActiveForm;

//AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="<?php echo Yii::$app->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="<?php echo Yii::$app->request->baseUrl?>/css/font-awesome.min.css" rel="stylesheet">
	<!-- Perfect -->
	<link href="<?php echo Yii::$app->request->baseUrl?>/themes/css/app.min.css" rel="stylesheet">
	<script src="<?php echo Yii::$app->request->baseUrl?>/js/jquery-2.0.0.min.js"></script>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="login-wrapper">
		<div class="text-center">
			<h2 class="" style="font-weight:bold">
				<span class="text-success">Quản lý</span> <span style="color:#ccc; text-shadow:0 1px #fff">Shop</span>
			</h2>
		</div>
		<div class="login-widget">	
			<div class="panel panel-default">
				<div class="panel-heading clearfix">
					<div class="pull-left">
						<i class="fa fa-lock fa-lg"></i> Login
					</div>
				</div>
				<div class="panel-body">
					<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
	                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
	                <?= $form->field($model, 'password')->passwordInput() ?>
	                <?= $form->field($model, 'rememberMe')->checkbox() ?>
	                <div class="form-group">
	                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
	                </div>
	                <?php ActiveForm::end(); ?>
				</div>
			</div><!-- /panel -->
		</div><!-- /login-widget -->
	</div><!-- /login-wrapper -->
<?php $this->endBody() ?>
	
    <!-- Bootstrap -->
    <script src="<?php echo Yii::$app->request->baseUrl?>/js/bootstrap/bootstrap.min.js"></script>
 
</body>
</html>
<?php $this->endPage() ?>
