<?php

if(isset($_REQUEST["sub"])){

   $aboutthejob=htmlspecialchars($_REQUEST["aboutthejob"]);
   $worksample=htmlspecialchars($_REQUEST["worksample"]);

   $date=date("d M Y");
}



//jobs details 

if(isset($_REQUEST["id"])){
   $seejobids=$_REQUEST["id"];
   
}

include_once("config.php");
    
$selectjobs= "SELECT * FROM `jobs` WHERE `id`='$seejobids' ";

$runjobs = mysqli_query($conn,$selectjobs);


if ($runjobs == true) {

while ($alldata = mysqli_fetch_array($runjobs )) {

   $jobid= $alldata["id"];
   $user_id= $alldata["user_id"];
   $position= $alldata["position"];
   $start= $alldata["start"];
   $job_type= $alldata["job_type"];
   $platform= $alldata["platform"];
   $location= $alldata["location"];
   $about_job= $alldata["about_job"];
   $ideal_candidate= $alldata["ideal_candidate"];
   $job_requirements= $alldata["job_requirements"];
   $user_name= $alldata["user_name"];
   $user_email= $alldata["user_email"];
   $user_avatar= $alldata["user_avatar"];
   $post_date= $alldata["post_date"];
 $price= $alldata["price"];

}}

///users details

$cok=$_COOKIE["login"];  
$selectQuery = "SELECT * FROM `users` WHERE `cookie`='$cok'";

$runQ = mysqli_query($conn,$selectQuery);


if ($runQ == true) {

while ($alldata = mysqli_fetch_array($runQ )) {

   $id= $alldata["id"];
   $name= $alldata["name"];
  $email= $alldata["email"];
   $want= $alldata["want"];
   $experince= $alldata["experince"];
   $country= $alldata["country"];
   $cookie= $alldata["cookie"];
  
   $avatar= $alldata["avatar"];



  

}



}



if($user_id==$id){
  header("location:home?error");
   die; 
}




//checking the user he was alredy submitte application yes or not



$checkcandidate= "SELECT * FROM `candidate` WHERE `user_id`='$id' AND `job_id`='$seejobids'";

$runcheckcandidate = mysqli_query($conn,$checkcandidate);

$fet= mysqli_num_rows($runcheckcandidate);

if($fet>0){
   header("location:home?application_error");
   die;
}















//data insert in the database as a candidate





   $candidate="INSERT INTO `candidate`(`user_id`, `job_id`, `job_name`, `price`, `aboutthejob`, `worksample`, `date`,`experince`, `country`, `email` ,`name`,`platform` ,`avatar`) VALUES
    ('$id','$jobid','$position','$price','$aboutthejob','$worksample','$date','$experince','$country','$email','$name','$platform','$avatar')";


$runcandidate=mysqli_query($conn,$candidate);


    if($runcandidate){
      header("location:home?application-success");
    }





?>