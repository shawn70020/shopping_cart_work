<?php
require_once("../models/member_class.php");
header('Content-Type: application/json; charset=UTF-8'); //設定資料類型為 json，編碼 utf-8
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $realname = $_POST["realname"];
    $email = $_POST["email"];
    $data = array("username" => $username, "password" => $password, "cpassword" => $cpassword, "realname" => $realname, "email" => $email);
    $array = array("username" => "", "password" => "", "cpassword" => "", "realname" => "", "email" => "", "used" => "", "join" => "");
    if ($username === "") {
        $array["username"] = "帳號不得為空白！";
    } elseif (strlen($username) < 5 or strlen($username) > 12) {
        $array["username"] = "帳號限制為五至十二個字！";
    }
    if ($password  === "") {
        $array["password"] = "密碼不得為空白！";
    } elseif (strlen($password) < 5 or strlen($password) > 10) {
        $array["password"] = "密碼限制為五至十個字！";
    }
    if ($cpassword === "") {
        $array["cpassword"] = "請再次確認密碼！";
    } elseif ($password !== $cpassword) {
        $array["cpassword"] = "兩者密碼不同！";
    }
    if ($realname === "") {
        $array["realname"] = "姓名不得為空白！";
    }
    if ($email  === "") {
        $array["email"] = "信箱不得為空白！";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $array["email"] = "信箱格式錯誤！";
    }
    if ($array["username"] === "" && $array["password"] === "" && $array["cpassword"] === "" && $array["realname"] === ""  && $array["email"] === "") {
        $mem_join = new member();
        $result = $mem_join->mem_check($data);
        if ($result === false) {
            $array["used"] = "此帳號已有人使用！";
        } else {
            $result1 = $mem_join->mem_join($data);
            if ($result1 === true) {
                $array["join"] = "註冊成功！請重新登入";
            } else {
                $array["join"] = "註冊失敗！";
            }
        }
    }
    echo json_encode($array);
    exit;
}
