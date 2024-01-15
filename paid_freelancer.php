<?php 
include_once("config.php");

$id=htmlspecialchars($_REQUEST["id"]);

$notify="SELECT * FROM `notify` WHERE `id`='$id'";

$runQnotify = mysqli_query($conn,$notify);


if ($runQnotify) {

while ($alldata = mysqli_fetch_array($runQnotify )) {

   $nid= $alldata["id"];
   $njob_id= $alldata["job_id"];
   $nuser_id= $alldata["user_id"];
   $candidate_id= $alldata["candidate_id"];
   $njob_name= $alldata["job_name"];
   $nplatform= $alldata["platform"];
   $statusnt= $alldata["status"];
   $proof=$alldata["proof"];
   $price= $alldata["price"];





}}
//check
if($statusnt==2){
    header("location:check_delivery?id=$id&paide_done");
}else{
//update blance

    
$selectQuery = "SELECT * FROM `users` WHERE `id`='$nuser_id'";

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
   $date= $alldata["date"];
   $avatar= $alldata["avatar"];
   $phone= $alldata["phone"];
   $address= $alldata["address"];
   $password= $alldata["password"];
   $about= $alldata["about"];
   $blance= $alldata["blance"];


}

$newblance=$blance+$price;

$update="UPDATE `users` SET `blance` = '$newblance' WHERE `users`.`id` ='$nuser_id' ";
$runupdate=mysqli_query($conn,$update);


//update
    $updatenotification="UPDATE `notify` SET `status` = '2' WHERE `notify`.`id` ='$nid'";

    $runnotification= mysqli_query($conn,$updatenotification);

    if($runnotification){
        header("location:home?paid");
    }
   // 


}

}


?>