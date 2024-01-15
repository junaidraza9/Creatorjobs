<?php
include_once("config.php");
if(isset($_COOKIE["login"])){
    $cookie = $_COOKIE["login"];
}else{
    header("location:login.php");
}


$imgname  =$_FILES["upload"]["name"];

if(strlen($imgname) >= 1){
  


$imgtempname  =$_FILES["upload"]["tmp_name"];

$imgupload = 'img/'.uniqid().'.jpg' ;
 $newa=substr($imgupload, 4); 

move_uploaded_file($imgtempname,$imgupload);



$updatereferpoint = "UPDATE `users` SET `avatar`='$newa' WHERE `cookie`='$cookie' ";
$runup = mysqli_query($conn,$updatereferpoint);
if($runup){
   header("location:profile?success");
}

}else{
    header("location:setting");
}


?>