<?php 
unset($_SESSION['current_user_id']);
unset($_SESSION['talent_id']);
include_once("function.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-4">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/favicon.png" type="image/png">
	<title>Creator Jobs</title> 
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300&display=swap');
</style>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="css/libs/animate.css">
  <link rel="stylesheet" href="css/site.css">
  <link rel="stylesheet" type="text/css" href="./slick/slick.css">
  <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">


  

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>

</head>
<body>
<div class="container-fluid shadow bg-light">
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a href="index" class="navbar-brand">
            <img src="img/logo.png" height="24" alt="CoolBrand">
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mt-2">

            <?php
if(!isset($_COOKIE["login"])){
    echo'<a href="register" class="nav-item nav-link active" style="color: #f54e50;">Join as Freelancer</a>';
    echo'<a href="#" class="nav-item nav-link active">|</a>'; 
}

?>
                
               
                <a href="home" class="nav-item nav-link" style="color: #f54e50;">Home</a>
                <a href="jobs" class="nav-item nav-link">Jobs</a>
                  <a href="talent" class="nav-item nav-link">Freelancer</a>

               
               <?php

               if(!isset($_COOKIE["login"]))
echo '<a href="login" class="nav-item nav-link">Post a job</a>';
               ?>
               
              
<?php

if(isset($_COOKIE["login"])){
    if($want==1){
        echo '<a href="postjobs" class="nav-item nav-link">Post a job</a>';
    }
}

?>

                
              
            </div>

            <div class="navbar-nav ms-auto">
            <?php
if(isset($_COOKIE["login"])){

    //for message

$message="SELECT * FROM `message` WHERE `user_id`='$id'";




$runmessage = mysqli_query($conn,$message);
$checkmessage=mysqli_num_rows($runmessage);

    echo  '<a href="wallet" class="nav-item nav-link h5 text-danger"><b>RS '.$blance.'</b></a>';

       echo  '<a href="profile" class="nav-item nav-link"><img src="img/'.$avatar.'" class="rounded-circle" width="30px" height="30px"></a>';
?>
        <a href="message" class="nav-item nav-link"><img src="img/message.png" ><sup class="text-danger"><b><?php
          if($checkmessage>0){
            echo "1";
          }
          ?></b></sup></a>
<?php }
?>



<?php
if(isset($_COOKIE["login"])){?>

<?php

//for notify
$notify="SELECT * FROM `notify` WHERE `candidate_id`='$id'";




$runQnotify = mysqli_query($conn,$notify);
$checknotify=mysqli_num_rows($runQnotify);


?>

    <div class="dropdown mt-2">
  <img class=" dropdown-toggle" src="img/bell.png" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false"><sup class="text-danger"><b><?php 
  if($checknotify>0){
    echo "1";
  }
  ?></b></sup>

  <div class="dropdown-menu p-2" aria-labelledby="dropdownMenuButton2" style="width:280px">



<?php
$notify="SELECT * FROM `notify` WHERE `candidate_id`='$id'";

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
?>

  <?php
  if($statusnt==1 || $statusnt==2){ ?> 
  <img src="img/<?php echo 'delivery';?>.png" alt="" width="40" height="40" class="rounded-circle">&nbsp;&nbsp;
    <a href="check_delivery?id=<?php echo$nid;?>" class="text-decoration-none text-dark"><span>You Got The Delivery <?php echo $nplatform;?> <?php echo $njob_name;?> jobs</span></a>
    <hr>
  
  <?php }else { ?>

    <img src="img/<?php echo $nplatform;?>.png" alt="" width="40" height="40" class="rounded-circle">&nbsp;&nbsp;
    <a href="work-submit?id=<?php echo$njob_id;?>&user_id=<?php echo $candidate_id;?> " class="text-decoration-none text-dark"><span>You are Selected In the <?php echo $nplatform;?> <?php echo $njob_name;?> jobs</span></a>
    <hr>

    <?php }}}else{
   
    }

   


?>
<br>
   <center> <button class="btn btn-danger">Read All</button></center>


</div>
</div>
<?php
}
?>





            <?php
if(!isset($_COOKIE["login"])){

    echo '<a href="login" class="nav-item nav-link">Login</a>';

}else{
    echo  '<a href="logout" class="nav-item nav-link"><img src="img/logout.png" ></a>';

}
?>


<?php

if(isset($_COOKIE["login"])){
    if($want==1){
        echo '<b><a href="seller" class="nav-item nav-link">Switch To Freelancer</a></b>';
    }else if($want==0){
        echo '<b><a href="buyer" class="nav-item nav-link">Switch To Creator</a></b>';
    }

    
}

?>   









            </div>
        </div>
    </div>
</nav>
</div>
</div>
