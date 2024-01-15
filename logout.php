<?php



setcookie("login",$npass, time() - (86400 * 30), "/"); // 86400 = 1 day
header("location:login");






?>