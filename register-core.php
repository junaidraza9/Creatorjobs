<?php
if(isset($_REQUEST["sub"])){
   include_once("config.php");
 $name=htmlspecialchars($_REQUEST["name"]);

   $email=htmlspecialchars($_REQUEST["email"]);

 //  $phone=htmlspecialchars($_REQUEST["phone"]);

   $lookingfor=htmlspecialchars($_REQUEST["Lookingfor"]);

  $specialize=htmlspecialchars($_REQUEST["specialize"]);

  //$country=htmlspecialchars($_REQUEST["country"]);

   $pwd=htmlspecialchars($_REQUEST["pwd"]);

   $cpwd=htmlspecialchars($_REQUEST["cpwd"]);

  // $address=htmlspecialchars($_REQUEST["address"]);

    $cookie=md5(sha1($email.$pwd));

   $date=date("d M Y");


$avatar="avatar.jpg";



   $selectQ = "SELECT * FROM `users` WHERE `email`= '$email' ";
   $runQ = mysqli_query($conn,$selectQ);
   
   if ($runQ == true) {
   
   while ($alldata = mysqli_fetch_array($runQ )) {
     $data_email = $alldata["email"];
   }

   if($data_email==$email){
      header("location:register?email_error");
      die;
   }










   if($pwd!=$cpwd){
    header("Location:register?password-error");
    die;
   }else{



$insert="INSERT INTO `users`(`name`, `email`, `want`, `experince`, `password`, `cookie`, `date`,`avatar`) VALUES ('$name','$email','$lookingfor','$specialize','$cpwd','$cookie','$date','$avatar')";


$runinsert=mysqli_query($conn,$insert);

if($runinsert){
   header("location:login?signup_success");
}






   }

}




}



?>