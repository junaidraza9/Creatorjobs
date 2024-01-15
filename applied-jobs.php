<?php include_once("header.php");?>











<div class="container mt-5">
    <div class="d-flex justify-content-between">
        <h4>Jobs Record </h4> 

    </div>
    <div class="row mt-2 g-1">


<?php



include_once("config.php");
    
$selectjobs= "SELECT * FROM `candidate` WHERE `user_id`='$id'";

$runjobs = mysqli_query($conn,$selectjobs);


if ($runjobs == true) {

while ($alldata = mysqli_fetch_array($runjobs )) {

   $jobid= $alldata["id"];
   $user_id= $alldata["user_id"];
   $job_name= $alldata["job_name"];
 
   $platform= $alldata["platform"];
   
   $price= $alldata["price"];


?>



        <div class="col-md-3">
            <div class="card p-2 shadow">
            
                <div class="text-center mt-2 p-3"> <img src="img/<?php echo $platform;?>.png"  /> <br><br>
                  
                    <div class="d-flex flex-row align-items-center justify-content-center">Platform : &nbsp;<small class="ml-1"> <?php echo$platform ;?></small> </div>
                    
                    <div class="d-flex flex-row align-items-center justify-content-center">Job Name : &nbsp;<small class="ml-1"> <?php echo $job_name ;?></small> </div>
              
                    <div class="d-flex lex-row align-items-center justify-content-center mt-3"> <span class="bg-dark text-light p-1">RS<?php echo $price; ?></span>
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

<?php

if(isset($_REQUEST["hired"])){

?>

<script>
  swal({
  title: "Success!",
  text: "You Hired A Freelancer",
  icon: "success", //note you can write here error or warning or info 
  button: "ok",
});
</script>


<?php     }  ?>


<?php

if(isset($_REQUEST["error"])){

?>

<script>
  swal({
  title: "Opps!",
  text: "You Alredy Hire This Person For this job",
  icon: "error", //note you can write here error or warning or info 
  button: "ok",
});
</script>


<?php     }  ?>
