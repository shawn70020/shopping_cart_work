<?php
require_once("../models/member_class.php");
require '../libs/Smarty.class.php';
$smarty = new Smarty;

session_start();
//檢查是否經過登入，若有登入則重新導向
if (isset($_SESSION["loginMember"]) && ($_SESSION["loginMember"] != "")) {
	//若帳號等級為 member 則導向會員中心
	if ($_SESSION["memberLevel"] == "1") {
		header("Location: index.php");
		//否則則導向管理中心
	} else {
		header("Location: member_admin.php");
	}
}
//執行會員登入
$flag = "";
if (isset($_POST["username"]) && isset($_POST["passwd"])) {
		$member = new member();
		$fields = "id,username, passwd, level";
		$id = $_POST["username"];
		$result = $member->select($fields, $id);
		$uid = $result['id'];
		$passwd = $result['passwd'];
		$username = $result['username'];
		$level = $result['level'];

		if (password_verify($_POST["passwd"], $result['passwd'])) {

			$fields = "loginnum=loginnum+1, logintime=NOW()";
			$bind = "$username";
			$member->loginupdate($fields, $bind);
			//計算登入次數及更新登入時間

			//設定登入者的名稱及等級
			$_SESSION["uid"] = $uid;
			$_SESSION["loginMember"] = $username;
			$_SESSION["memberLevel"] = $level;
			//使用Cookie記錄登入資料
			//若帳號等級為 member 則導向會員中心
			if ($_SESSION["memberLevel"] == "1") {
				header('location'.$_SERVER['HTTP_REFERER']);
				//否則則導向管理中心
			} else {
				header("Location: member_admin.php");
			}
		} else {
			$flag = "帳號密碼錯誤";
		}
	}
$smarty->assign("flag", $flag);
$smarty->display("../views/login.html");
