$('a.addToCart').click(function(e) {
	e.preventDefault();
	var name = $(this).data('name'), productID = $(this).data('id');
	var ref = domain + '/ajax/addcart';
	$.ajax({
		url: ref,
		type: 'POST',
		dataType: 'json',
		data: { id: productID },
	})
	.done(function(data) {
		console.log(data);
	})
	.fail(function(data) {
		console.log(data);
	})
});

$('.updateItemCart').change(function(e) {
	e.preventDefault();
	var productID = $(this).data('id'), quantity = $(this).val();
	var ref = domain + '/ajax/updateitemcart';
	$.ajax({
		url: ref,
		type: 'POST',
		dataType: 'json',
		data: { id: productID, qtt: quantity },
	})
	.done(function(data) {
		if(data.success === true && data.total!== null){
			$('#'+productID).find('td.total-item').html(data.total);
			$('.cart-total').html(data.sumtotal);
		}
	})
	.fail(function(data) {
		console.log(data);
	})
});

$('.removeItemCart').click(function(e) {
	e.preventDefault();
	var productID = $(this).data('id');
	var ref = domain + '/ajax/remove';
	$.ajax({
		url: ref,
		type: 'POST',
		dataType: 'json',
		data: { id: productID },
	})
	.done(function(data) {
		if(data.success === true && data.sumtotal!== null){
			$('#'+productID).remove();
			$('.cart-total').html(data.sumtotal);
		}else{
			var result = '<div class="cart-empty"><p>Hiện bạn chưa có sản phẩm nào trong giỏ hàng.</p><br>';
				result += '<p>Bấm vào <a href="'+ domain +'/">đây</a> để tiếp tục mua hàng.</p></div>';
			$('#tbl-cart').html(result);
		}
	})
	.fail(function(data) {
		console.log('errr');
	})
});