<?php

include_once("config.php");



$user_id=htmlspecialchars($_REQUEST["id"]);

$job_id=htmlspecialchars($_REQUEST["job_id"]);

$candidate=htmlspecialchars($_REQUEST["candidate"]);


$job_name=htmlspecialchars($_REQUEST["job_name"]);

$price=htmlspecialchars($_REQUEST["price"]);

$platform=htmlspecialchars($_REQUEST["platform"]);

$stuts=0;



//checking candidate


$notify="SELECT * FROM `notify` WHERE `candidate_id`='$candidate' AND `job_id`='$job_id'";

$runQnotify = mysqli_query($conn,$notify);


$fet= mysqli_num_rows($runQnotify);

if($fet>0){
   header("location:user-all-jobs?error");
   die;
}












$insert="INSERT INTO `notify`(`job_id`, `candidate_id`, `user_id`, `job_name`, `price`, `status`,`platform`) VALUES
 ('$job_id','$candidate','$user_id','$job_name','$price','$stuts','$platform')";

 $run=mysqli_query($conn,$insert);

 if($run){

  header("location:user-all-jobs?hired");
 }







?>