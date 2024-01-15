<?php

$sms=$_REQUEST["sms"];

//time function
date_default_timezone_set("Asia/Dhaka");
$time=date("h:ia");


$id=$_REQUEST["id"];
$tid=$_REQUEST["tid"];

$total=$id+$tid;

$cok=$_COOKIE["login"];

include_once("config.php");

$selectQuerys = "SELECT * FROM `users` WHERE `cookie`='$cok'";

$runQs = mysqli_query($conn,$selectQuerys);


if ($runQs == true) {

while ($alldata = mysqli_fetch_array($runQs )) {

    $id= $alldata["id"];
 $uname= $alldata["name"];
$uavatar= $alldata["avatar"];




}



}








   
$selectjobs= "SELECT * FROM `users` WHERE `id`='$tid' ";

$runjobs = mysqli_query($conn,$selectjobs);


if ($runjobs == true) {

while ($alldata = mysqli_fetch_array($runjobs )) {
    
    $tname= $alldata["name"];
   
    $tavatar= $alldata["avatar"];
 

}}



$date=date("j F Y");
//insert data in php

$inset="INSERT INTO `message`(`user_id`, `reciver_id`, `sms`, `time`, `user_name`, `user_avatar`, `reciver_name`, `reciver_avatar`, `date`,`total`) VALUES ('$id','$tid','$sms','$time','$uname','$uavatar','$tname','$tavatar','$date','$total')";


$runQi = mysqli_query($conn,$inset);








?>