<?php
session_start();
unset($_SESSION["loginMember"]);
unset($_SESSION["memberLevel"]);
header("Location:login.php");
