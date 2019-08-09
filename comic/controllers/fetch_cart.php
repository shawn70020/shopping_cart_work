<?php

//fetch_cart.php

session_start();

$total_price = 0;
$total_item = 0;
$uid = $_SESSION["uid"];
$output = '
<div class="table-responsive" id="order_table">
	<table class="table table-bordered table-striped">
		<tr>
            <th width="20%">商品名</th>
            <th width="5%">數量</th>
            <th width="10%">價錢</th>
            <th width="10%">總額</th>
            <th width="5%">刪除</th>
        </tr>
';
if(!empty($_SESSION["shopping"."$uid"]))
{
	foreach($_SESSION["shopping"."$uid"] as $keys => $values)
	{
		$output .= '
		<tr>
			<td>'.$values["product_name"].'</td>
			<td>'.$values["product_quantity"].'</td>
			<td align="right"> '.$values["product_price"].'</td>
			<td align="right">NT$ '.$values["product_quantity"] * $values["product_price"].'</td>
			<td><button name="delete" class="btn btn-danger btn-xs delete" id="'. $values["product_id"].'">移除</button></td>
		</tr>
		';
		$total_price = $total_price + ($values["product_quantity"] * $values["product_price"]);
		$total_item = $total_item + 1;
	}
	$output .= '
	<tr>
        <td colspan="3" align="right"</td>
        <td align="right">NT$ '.$total_price.'</td>
        <td></td>
    </tr>
	';
}
else
{
	$output .= '
    <tr>
    	<td colspan="5" align="center">
    		購物車目前為空
    	</td>
    </tr>
    ';
}
$output .= '</table></div>';
$data = array(
	'cart_details'		=>	$output,
	'total_price'		=>	'$' . number_format($total_price, 2),
	'total_item'		=>	$total_item
);

echo json_encode($data);


?>