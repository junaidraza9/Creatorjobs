<?php




include_once("config.php");
if(isset($_COOKIE["login"])){
    $cookie = $_COOKIE["login"];
}else{
    header("location:login.php");
}






    $id=0;




$updatereferpoint = "UPDATE `users` SET `want`='$id' WHERE  `cookie`='$cookie'";
$runup = mysqli_query($conn,$updatereferpoint);
if($runup){
   header("location:home?seller-success");
}
 



































?>