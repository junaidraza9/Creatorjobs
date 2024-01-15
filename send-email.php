<?php

$job_id=htmlspecialchars($_REQUEST["job_id"]);

$name=htmlspecialchars($_REQUEST["name"]);

$email=htmlspecialchars($_REQUEST["email"]);

$platfrom=htmlspecialchars($_REQUEST["platfrom"]);





//get file url

include_once("config.php");

$selectQuery = "SELECT * FROM `upload` WHERE `job_id`='$job_id'";

$runQ = mysqli_query($conn,$selectQuery);


if ($runQ == true) {

while ($alldata = mysqli_fetch_array($runQ )) {

   $id= $alldata["id"];
   $delivery= $alldata["delivery"];
}}


 $message= $_SERVER['SERVER_NAME']."/creatorjobs/".$delivery;









use PHPMailer\PHPMailer\PHPMailer;





       require_once "PHPMailer/PHPMailer.php";
       require_once "PHPMailer/SMTP.php";
       require_once "PHPMailer/Exception.php";


       $ss=$email;

$subject="File Download Link";
$body = "hello,$name<br><p>Your File download link : $message </p>";


       $mail = new PHPMailer();

       //SMTP Settings
       $mail->isSMTP();
       $mail->Host = "smtp.gmail.com";
       $mail->SMTPAuth = true;
       $mail->Username = "creatorjobsnetwork@gmail.com";
       $mail->Password = 'praaaupwzxelvbpz';
       $mail->Port = 587; //587
       $mail->SMTPSecure = "tls"; //tls

       //Email Settings
       $mail->isHTML(true);
       $mail->setFrom("creatorjobsnetwork@gmail.com","Creator Jobs");
       $mail->addAddress($email);
       $mail->Subject = $subject;
       $mail->Body = $body;

       if ($mail->send()) {
           $status = "success";
           $response = "Email is sent!";

           header("location:home.php?file-sent");
       } else {
           $status = "failed";
           $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
           header("location:home.php?error");
       }










?>