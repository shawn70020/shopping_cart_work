$(document).ready(function(){

	load_cart_data();

	function load_cart_data()
	{
		$.ajax({
			url:"../controllers/fetch_cart.php",
			method:"POST",
			dataType:"json",
			success:function(data)
			{
				$('#cart_details').html(data.cart_details);
				$('.badge').text(data.total_item);
			}
		});
	}

	$('#cart-popover').popover({
		html : true,
        container: 'body',
        content:function(){
        	return $('#popover_content_wrapper').html();
        }
	});

	$(document).on('click', '.add_cart', function(){
		var product_id = $(this).attr("id");
		var product_name = $('#name').val();
		var product_price = $('#price').val();
		var product_quantity = $('#quantity').val();
		var action = "add";
		if(product_quantity > 0)
		{
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{product_id:product_id, product_name:product_name, product_price:product_price, product_quantity:product_quantity, action:action},
				success:function(data)
				{
					load_cart_data();
					alert("商品已加入購物車");
				}
			});
		}
		else
		{
			alert("請輸入有效數字");
		}
	});
   /**
    刪除單一購物車商品
    */
	$(document).on('click', '.delete', function(){
		var product_id = $(this).attr("id");
		var action = 'remove';
		if(confirm("您確定刪除此項商品嗎"))
		{
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{product_id:product_id, action:action},
				success:function()
				{
					load_cart_data();
					$('#cart-popover').popover('hide');
					alert("商品已被移出購物車！");
				}
			})
		}
		else
		{
			return false;
		}
	});
   /**
    刪除全部購物車商品 
    */
	$(document).on('click', '#clear_cart', function(){
		var action = 'empty';
		$.ajax({
			url:"action.php",
			method:"POST",
			data:{action:action},
			success:function()
			{
				load_cart_data();
				$('#cart-popover').popover('hide');
				alert("購物車已被清空");
			}
		});
	});
});