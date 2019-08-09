<?php
require_once("member_class.php");
require_once("message_class.php");
require 'libs/Smarty.class.php';
$smarty = new Smarty;

session_start();
//檢查是否經過登入
if (!isset($_SESSION["loginMember"]) || ($_SESSION["loginMember"] == "")) {
	header("Location: index.php");
}
//檢查權限是否足夠
if ($_SESSION["memberLevel"] == "member") {
	header("Location: member_center.php");
}
//執行登出動作
if (isset($_GET["logout"]) && ($_GET["logout"] == "true")) {
	unset($_SESSION["loginMember"]);
	unset($_SESSION["memberLevel"]);
	header("Location: index.php");
}
//刪除會員

if (isset($_GET["action"]) && ($_GET["action"] == "delete")) {
	$id = $_GET["id"];
	$mem_del = new member();
	$result1 = $mem_del->m_delete($id);

	//重新導向回到主畫面
	header("Location: member_admin.php");
}

//選取管理員資料
$m_admin = new member();
$condition = "username = '{$_SESSION["loginMember"]}'";
$result2 = $m_admin->m_select($condition);

//預設每頁筆數
$page_start = 5;
//預設頁數
$num_pages = 1;
//若已經有翻頁，將頁數更新
if (isset($_GET['page'])) {
	$num_pages = $_GET['page'];
	if (preg_match("^[A-Za-z]+$^", $num_pages)) {
		header("Location: member_admin.php");
	};
	if ($num_pages < 1) {
		header("Location: member_admin.php");
	}
}

$start_record = ($num_pages - 1) * $page_start;
$limit = "$start_record,$page_start";
$member_show = new member();
$aa = $member_show->mem_show($limit);
$member_page = new member();
$bb = $member_page->mem_page($page_start);

$totals  = $bb[0];
$total_pages  = $bb[1];


switch ($num_pages) {
	case 1: {
			$pageup = "首頁";
			$pagedown = "<a href=member_admin.php?page=" . ($num_pages + 1) . ">下一頁</a>";
			break;
		}
	default: {
			$pageup = "<a href=member_admin.php?page=" . ($num_pages - 1) . ">上一頁</a>";
			$pagedown = "<a href=member_admin.php?page=" . ($num_pages + 1) . ">下一頁</a>";
			break;
		}
	case $total_pages: {
			$pageup = "<a href=member_admin.php?page=" . ($num_pages - 1) . ">上一頁</a>";
			$pagedown = "最後一頁";
			break;
		}
}


$smarty->assign("pageup", $pageup);
$smarty->assign("pagedown", $pagedown);
$smarty->assign("arr", $aa);
$smarty->assign("brr", $result2);
$smarty->assign("num_pages", $num_pages);
$smarty->assign("total_pages", $total_pages);
$smarty->assign("totals", $totals);
$smarty->display("member_admin.html"); ?>
