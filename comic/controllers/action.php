<?php

session_start();

$uid = $_SESSION["uid"];
if(isset($_POST["action"]))
{
	if($_POST["action"] == "add")
	{
		if(isset($_SESSION["shopping"."$uid"]))
		{
			$is_available = 0;
			foreach($_SESSION["shopping"."$uid"] as $keys => $values)
			{
				if($_SESSION["shopping"."$uid"][$keys]['product_id'] == $_POST["product_id"])
				{
					$is_available++;
					$_SESSION["shopping"."$uid"][$keys]['product_quantity'] = $_SESSION["shopping"."$uid"][$keys]['product_quantity'] + $_POST["product_quantity"];
				}
			}
			if($is_available == 0)
			{
				$item_array = array(
					'product_id'               =>     $_POST["product_id"],
					'product_name'             =>     $_POST["product_name"],
					'product_price'            =>     $_POST["product_price"],
					'product_quantity'         =>     $_POST["product_quantity"]
				);
				$_SESSION["shopping"."$uid"][] = $item_array;
			}
		}
		else
		{
			$item_array = array(
				'product_id'               =>     $_POST["product_id"],
				'product_name'             =>     $_POST["product_name"],
				'product_price'            =>     $_POST["product_price"],
				'product_quantity'         =>     $_POST["product_quantity"]
			);
			$_SESSION["shopping"."$uid"][] = $item_array;
		}
	}

	if($_POST["action"] == 'remove')
	{
		foreach($_SESSION["shopping"."$uid"] as $keys => $values)
		{
			if($values["product_id"] == $_POST["product_id"])
			{
				unset($_SESSION["shopping"."$uid"][$keys]);
			}
		}
	}
	if($_POST["action"] == 'empty')
	{
		unset($_SESSION["shopping"."$uid"]);
	}
}

