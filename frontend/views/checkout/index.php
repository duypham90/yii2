<?php 

$this->title = 'Thông tin đặt hàng';
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$model->amount = $cost;
?>

<div class="container">
<?php if($cartstore){?>
	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-6">
		<?php $form = ActiveForm::begin(['id' => 'checkout']); ?>
			<legend>THÔNG TIN GIAO HÀNG</legend>
			<?= $form->field($model, 'fullname')->textInput(['autofocus' => true,'class'=>'new-input','placeholder'=>'Tên khách hàng']) ?>
			<?= $form->field($model, 'phone')->textInput(['class' => 'new-input','placeholder'=>'Số điện thoại']) ?>		
			<?= $form->field($model, 'email')->textInput(['class' => 'new-input','placeholder'=>'Email liên hệ'])?>
			<?= $form->field($model, 'address')->textInput(['class' => 'new-input','placeholder'=>'Địa chỉ giao hàng'])?>
			<?= $form->field($model, 'notes')->textarea(['rows' => 6,'placeholder'=>'Ghi chú']) ?>
			<?= $form->field($model, 'amount') ?>
			<button type="submit" class="btn btn-primary">Submit</button>
		<?php ActiveForm::end(); ?>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-6">
		<div class="table-responsive">
		<?php if ($cartstore ): $n = 1;?>
			<legend>THÔNG TIN ĐƠN HÀNG</legend>
			<table class="table table-hover">
				<thead>
					<tr>
						<th style="width:5%">STT</th>
						<th style="width:40%">Name</th>
						<th style="width:10%">Quantity</th>
						<th style="width:10%">Price</th>
						<th style="width:10%">Total</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($cartstore as $item): ?>
					<tr>
						<td><?php echo $n;?></td>
						<td><?php echo $item->name;?></td>
						<td><input type="number" id="qtt" class="input text-center" value="<?php echo $item->qtt;?>"></td>
						<td><?php echo number_format($item->price,0, ' ', ',');?></td>
						<td><?php echo number_format($item->price * $item->qtt,0,' ', ',');?></td>
					</tr>
				<?php $n++; endforeach;?>
				<tr>
					<td colspan="4" class="text-right">Tổng tiền:</td>
					<td><?php echo number_format($cost,0,' ', ',')?>VNĐ</td>
				</tr>
				</tbody>
			</table>
		<?php endif;?>
		</div>
	</div>
	
<?php } ?>
</div>