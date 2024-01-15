<?php




include_once("config.php");
if(isset($_COOKIE["login"])){
    $cookie = $_COOKIE["login"];
}else{
    header("location:login.php");
}






    $name=htmlspecialchars($_REQUEST["name"]);
 
    $phone=htmlspecialchars($_REQUEST["phone"]);
 
 
   $specialize=htmlspecialchars($_REQUEST["specialize"]);
 
   $country=htmlspecialchars($_REQUEST["country"]);
 
 
    $address=htmlspecialchars($_REQUEST["address"]);

   $details=htmlspecialchars($_REQUEST["about"]);



$updatereferpoint = "UPDATE `users` SET `name`='$name',`phone`='$phone',`experince`='$specialize',`country`='$country',`address`='$address',`about`='$details' WHERE `cookie`='$cookie' ";
$runup = mysqli_query($conn,$updatereferpoint);
if($runup){
   header("location:profile?success");
}
 



































?>