<?php


if(isset($_REQUEST["sub"])){


    $allcategoris =htmlspecialchars($_REQUEST["allcategoris"]);
    
    $jobsype =htmlspecialchars($_REQUEST["jobsype"]);
    
    $platforms =htmlspecialchars($_REQUEST["platforms"]);
    

}


?>




<?php include_once("header.php");?>




<div class="container mt-5">
    <h3>Filter Jobs</h3>
</div>

















<div class="container mt-5">

    <div class="row mt-2 g-1">


<?php



include_once("config.php");
    
$selectjobs= "SELECT * FROM `jobs` WHERE `position`='$allcategoris' AND `platform`='$platforms' AND `job_type`='$jobsype'";

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


?>



        <div class="col-md-3">
            <div class="card p-2 shadow">
                <div class="text-right"> <small><?php echo $job_type;?></small> </div>
                <div class="text-center mt-2 p-3"> <img src="img/<?php echo $platform;?>.png"  /> <span class="d-block font-weight-bold"><?php echo $position ;?></span>
                    <hr> <span>Start date : &nbsp;<?php echo $start ;?></span>
                    <div class="d-flex flex-row align-items-center justify-content-center">Location : &nbsp;<small class="ml-1"> <?php echo$location ;?></small> </div>
                   
                    <div class="d-flex flex-row align-items-center justify-content-center">Platform : &nbsp;<small class="ml-1"> <?php echo$platform ;?></small> </div>
                    <div class="d-flex justify-content-between mt-3"> <span>$<?php echo $price; ?></span>
                    <a href="seejobs?id=<?php echo $jobid;?>&user_id=<?php echo $user_id ;?>" ><button class="btn btn-sm btn-outline-dark">Apply Now</button> </a>
                    </div>
                </div>
            </div>
        </div>


<?php

}
}?>
    </div>
</div>








<?php include_once("footer.php");?>