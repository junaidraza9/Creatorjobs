<?php include_once("header.php");?>



<?php

if(isset($_REQUEST["id"])){
   $seejobids=$_REQUEST["id"];
}

include_once("config.php");
    
$selectjobs= "SELECT * FROM `users` WHERE `id`='$seejobids' AND `want`='0'  ";

$runjobs = mysqli_query($conn,$selectjobs);


if ($runjobs == true) {

while ($alldata = mysqli_fetch_array($runjobs )) {
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

}}
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-9">
          <div><img src="img/<?php echo $avatar ;?>" class="rounded-circle" alt="" width="100" height="100"> &nbsp; <b style="font-size:1.6rem;"><?php echo $name ;?></b></div>
         
          <div class="mt-4">
            &nbsp; 
           
            <div class="d-inline"><img src="img/location.png" alt="">&nbsp; <?php echo $country;?></div>&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="d-inline"><img src="img/calendar.png" alt="">&nbsp; <?php echo $experince;?></div>&nbsp;&nbsp;
          </div>



        </div>


        <div class="col-md-3">
            

        <a href="chat?id=<?php echo $id; ?>"> <button class="btn btn-danger mt-5">Hire Me</button></a>
   
        </div>
      


    </div>
</div>



<div class="container">
    <hr>
</div>


<div class="container" style="overflow-wrap: break-word;">
 

<div>
    <h3>About </h3>
    <p><?php echo $about;?></p>
</div>





<br>

<div>
    <h5>Registration Date: <?php echo $date;?></h5>
    
</div>


</div>




<?php include_once("footer.php");?>