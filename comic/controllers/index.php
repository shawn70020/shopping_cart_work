<?php
require_once("../models/message_class.php");
require_once("header.php");
require '../libs/Smarty.class.php';
$smarty = new Smarty;

session_start();

// if(!isset($_SESSION["loginMember"])){
//     $_SESSION['redirectUrl'] = $_SERVER['PHP_SELF'];
//     echo $_SERVER['HTTP_REFERER'] ;
// }

$page_start = 6;
$num_page = 1;
if(isset($_GET['page'])){
    $num_page = $_GET['page'];
}
$start_record = ($num_page - 1) * $page_start;
$msg_show = new message();
$condition = 1;
$limit = "$start_record,$page_start";
$result = $msg_show->msg_show($condition, $limit);
$msg_page = new message();
$result1 = $msg_page->msg_page($page_start, $condition);

$totals  = $result1[0];
$total_pages  = $result1[1];
switch ($num_page) {
    case 1: {
            $pageup = "首頁";
            $pagedown = "<a href=index.php?page=" . ($num_page + 1) . ">下一頁</a>";
            break;
        }
    default: {
            $pageup = "<a href=index.php?page=" . ($num_page - 1) . ">上一頁</a>";
            $pagedown = "<a href=index.php?page=" . ($num_page + 1) . ">下一頁</a>";
            break;
        }
    case $total_pages: {
            $pageup = "<a href=index.php?page=" . ($num_page - 1) . ">上一頁</a>";
            $pagedown = "最後一頁";
            break;
        }
}


$smarty->assign("pageup", $pageup);
$smarty->assign("pagedown", $pagedown);
$smarty->assign("arr", $result);
$smarty->assign("num_page", $num_page);
$smarty->assign("total_pages", $total_pages);
$smarty->assign("totals", $totals);
$smarty->display("../index.html");