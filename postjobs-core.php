<?php

if(!isset($_COOKIE["login"])){
    setcookie("login",$npass, time() - (86400 * 30), "/"); // 86400 = 1 day
    header("location:login?alert");
}



if(isset($_REQUEST["sub"])){


$position =htmlspecialchars($_REQUEST["position"]);

$startdate =htmlspecialchars($_REQUEST["startdate"]);

$jobtype =htmlspecialchars($_REQUEST["jobtype"]);

$platform =htmlspecialchars($_REQUEST["platforms"]);

$location =htmlspecialchars($_REQUEST["locations"]);

$price =htmlspecialchars($_REQUEST["price"]);

$aboutthejob =htmlspecialchars($_REQUEST["aboutthejob"]);

$idealcandidate =htmlspecialchars($_REQUEST["idealcandidate"]);

$jobrequirements =htmlspecialchars($_REQUEST["jobrequirements"]);

$date=date("d M Y");

//getuser data 

include_once("function.php");


//getuser data collection end 

if($blance<$price){
    header("location:wallet?deposite");
    die();
}



//insert data 

$post="INSERT INTO `jobs`(`user_id`, `position`, `start`, `job_type`, `platform`, `location`, `about_job`, `ideal_candidate`, `job_requirements`, `user_name`, `user_email`, `user_avatar`, `post_date`, `price`) VALUES('$id','$position','$startdate','$jobtype','$platform','$location','$aboutthejob','$idealcandidate','$jobrequirements','$name','$email','$avatar','$date','$price')";

$postrun=mysqli_query($conn,$post);

if($postrun){
  //  header("location:postjobs?success");
$bal=$blance-$price;
  $update="UPDATE `users` SET `blance`='$bal'  WHERE `id`='$id'";
                 
  $runu = mysqli_query($conn,$update);  

if($runu){
    header("location:postjobs?success");
}

}




}



?>