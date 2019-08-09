<?php
require_once("../models/message_class.php");
require '../libs/Smarty.class.php';
$smarty = new Smarty;




$id = $_GET["id"];
$p_select = new message();
$result = $p_select->p_select($id);
$id1 = $result['id'];
$name = $result['name'];
$content = $result['content'];
$price = $result['price'];
$num = $result['num'];
$jointime = $result['jointime'];

$smarty->assign("id", $id1);
$smarty->assign("name", $name);
$smarty->assign("content", $content);
$smarty->assign("price", $price);
$smarty->assign("num", $num);
$smarty->assign("jointime", $jointime);
$smarty->display("../views/product.html");
