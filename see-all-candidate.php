<?php include_once("header.php");?>




<div class="container mt-5">
    <h3>All candidate for the jobs</h3>
</div>










<div class="container mt-5">
    <div class="row">

<?php
if(isset($_REQUEST["id"])){
    $ids=$_REQUEST["id"];
}

include_once("config.php");
    
$selectjobs= "SELECT * FROM `candidate` WHERE `job_id`='$ids' ";

$runjobs = mysqli_query($conn,$selectjobs);


if ($runjobs == true) {

while ($alldata = mysqli_fetch_array($runjobs )) {

 
   $talent_id= $alldata["id"];
   $talentname= $alldata["name"];
   $talentavatar= $alldata["avatar"];
   $talentexperince= $alldata["experince"];

?>


        <div class="col-md-4 border p-3 mt-3">
            <div class="row ">
                
               <div class="col-3">
                    <img src="img/<?php echo $talentavatar;?>" class="rounded-circle" width="60px" height="60px">
                </div>

                <div class="col">
                
                <a href="view-candidate?id=<?php echo $talent_id;?>" class="text-decoration-none">  <p><b><?php echo $talentname;?></b> <img src="img/arrow.png" width="20px"></p></a>
                    <p><?php echo $talentexperince;?> <span class="badge bg-primary">verified</span> <span class="badge bg-danger">hire me</span></p>

                </div>

                
            </div>

        </div>





<?php



}}
?>


     
    </div>
</div>
























<?php include_once("footer.php");?>