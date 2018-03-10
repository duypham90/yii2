<?php 
$this->title = "Cart";

?>
<style>
#tbl-cart td{
	vertical-align: middle;
}
.cart-empty{
	text-align: center;
}
.cart-empty a{
	color: #e60f1e;
	font-weight: bold;
}
</style>
<div class="container">
	<div class="table-responsive" id="tbl-cart">
	<?php  
	if ($cartstore ): $n = 1;?>
		<table class="table table-hover">
			<thead>
				<tr>
					<th style="width:5%">STT</th>
					<th style="width:40%">Name</th>
					<th style="width:10%">Quantity</th>
					<th style="width:10%">Price</th>
					<th style="width:10%">Total</th>
					<th style="width:5%">Action</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($cartstore as $item): ?>
				<tr id="<?=$item->id;?>">
					<td><?php echo $n;?></td>
					<td><?php echo $item->name;?></td>
					<td><input type="number" id="qtt" min="1" max="10" class="input text-center updateItemCart" data-id="<?=$item->id?>" value="<?php echo $item->qtt;?>"></td>
					<td><?php echo number_format($item->price,0, ' ', ',');?></td>
					<td class="total-item"><?php echo number_format($item->price * $item->qtt,0,' ', ',');?></td>
					<td><a href="javascript:void(0)" class="removeItemCart" data-id="<?=$item->id?>">X</a></td>
				</tr>
			<?php $n++; endforeach;?>
			<tr>
				<td colspan="4" class="text-right">Tổng tiền:</td>
				<td colspan="2" class="cart-total"><?php echo number_format($cost,0,' ', ',')?>VNĐ</td>
			</tr>
			</tbody>
			<tfoot>
				<tr>
					<th rowspan="1" colspan="5"></th>
					<th rowspan="1" colspan="1">
						<a href="checkout" class="btn btn-success">Đặt hàng</a>
					</th>
				</tr>
			</tfoot>
		</table>
	<?php endif;?>
	</div>
</div>