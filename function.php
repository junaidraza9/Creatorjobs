<?php


if(isset($_COOKIE["login"])){

    $cok=$_COOKIE["login"];

    include_once("config.php");
    
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
   $date= $alldata["date"];
   $avatar= $alldata["avatar"];
   $phone= $alldata["phone"];
   $address= $alldata["address"];
   $password= $alldata["password"];
   $about= $alldata["about"];
   $blance= $alldata["blance"];


}



}



}




?>






