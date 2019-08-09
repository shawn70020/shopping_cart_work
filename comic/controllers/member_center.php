<?php
require_once("../models/member_class.php");
require '../libs/Smarty.class.php';
$smarty = new Smarty;

session_start();
//檢查是否經過登入
if (!isset($_SESSION["loginMember"]) || ($_SESSION["loginMember"] == "")) {
	header("Location: indexlogin.php");
}
//執行登出動作
if (isset($_GET["logout"]) && ($_GET["logout"] == "true")) {
	unset($_SESSION["loginMember"]);
	unset($_SESSION["memberLevel"]);
	header("Location: indexlogin.php");
}
//繫結登入會員資料
$membercenter = new member();
$condition = "username = '{$_SESSION["loginMember"]}'";
$result = $membercenter->m_select($condition);

$smarty->assign("arr", $result);
$smarty->display("../views/member_center.html");
