<?php include_once("header.php");?>



<?php

if(isset($_REQUEST["id"])){
   $seejobids=$_REQUEST["id"];
    $seejobid=$_REQUEST["user_id"];
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
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-9">
          <div><img src="img/<?php echo $platform ;?>.png" alt=""> &nbsp; <b style="font-size:1.6rem;"><?php echo $position ;?></b></div>
         
          <div class="mt-4">
            &nbsp; 
            <div class="d-inline"><img src="img/dollar.png" alt="">&nbsp; RS <?php echo $price;?></div>&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="d-inline"><img src="img/clock.png" alt="">&nbsp; <?php echo $job_type;?></div>&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="d-inline"><img src="img/location.png" alt="">&nbsp; <?php echo $location;?></div>&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="d-inline"><img src="img/calendar.png" alt="">&nbsp; <?php echo $start;?></div>&nbsp;&nbsp;
          </div>

          <div class="mt-4">
          <a href="apply?id=<?php echo $jobid; ?>">  <button class="btn btn-danger">Easy Apply</button></a>
          </div>


        </div>


        <div class="col-md-3">
            

        <a href="user-jobs?id=<?php echo $user_id;?>"  class="text-decoration-none text-dark"> 
           <div>
                <div class="row border rounded p-2">
                 <div class="col-4"><img src="img/<?php echo $user_avatar ;?>" class="rounded-circle" width="80px" height="80px"></div>
                    <div class="col mt-2">
                        <p>Posted By</p>
                       <p><?php echo $user_name;?></p>
                    </div>
                </div>
         
           </div>
        </div>
        </a>


    </div>
</div>



<div class="container">
    <hr>
</div>


<div class="container" style="overflow-wrap: break-word;">
 

<div>
    <h3>About the job</h3>
    <p><?php echo $about_job;?></p>
</div>




<div>
    <h3>Ideal candidate</h3>
    <p><?php echo $ideal_candidate ;?></p>
</div>



<div>
    <h3>Job requirements</h3>
    <p><?php echo $job_requirements ;?></p>
</div>


<br>

<div>
    <h5>Posted on: <?php echo $post_date;?></h5>
    
</div>


</div>




<?php include_once("footer.php");?>