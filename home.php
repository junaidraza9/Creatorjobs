<?php include_once("header.php");?>
<div style="text-align: center;
    margin: 0px 0px;
    background: red;
    padding: 5px;
    color: white;
    font-weight: bold;">
<?php

if(isset($_COOKIE["login"])){
    if($want==1){
        echo '<b  class="nav-item nav-link text-light">You Are A Creator</b>';
    }else if($want==0){
        echo '<b class="nav-item nav-link text-light">You Are A Freelancer</b>';
    }

    
}

?>  </div>

<div class="container">
	<div class="row">
		<div class="col-md-6 mt-5 p-2 section wow slideInLeft">
			<h1>Discover the best</h1>
			<h1><span style="background: #f54e50;color: white;">Creator</span> professionals</h1>
			<br>
			<p>Whether a talented YouTube professional or creator, here you
can find your dream job or next ideal teammate. Let's create</p>
<br>

<?php

if(isset($_COOKIE["login"])){
    if($want==1){
        echo '<b><a href="seller" class="btn-btn-danger" style="    text-align: center;
        text-decoration: none;
        background: red;
        padding: 6px;
        border-radius: 5px;
        color: white;">Switch To Freelancer</a></b>';
    }else if($want==0){
        echo '<b><a href="buyer" class="btn-btn-danger" style="    text-align: center;
        text-decoration: none;
        background: red;
        padding: 6px;
        border-radius: 5px;
        color: white;">Switch To Creator</a></b>';
    }

    
}

?>   
<!--<a href="register">
<button class="btn btn" style="background:#f54e50;color: white;">Join as Freelancer</button></a>

<a href="login">
<button class="btn btn-primary" style="color: white;">Post a job</button></a>--->
		</div>
		<div class="col-md-6 section wow slideInRight">
			<img src="img/img.png" class="img-fluid">
		</div>
	</div>
</div>

<br><br>

<div class="container" style="height:350px">
	<h2 class="text-center text-dark">Trusted by +100 YouTube Creators</h2>
    <div class="container" style="width:750px">

  <section class="regular slider">
    
    <div>
     <div class="card" style="width: 5rem;padding: 4px;">
    <img class="card-img-top rounded-circle" src="img/1.jpg" alt="Card image cap">
    <p class="text-center text-white bg-danger">27.1 M</p>

    </div>
    </div>

    <div>
     <div class="card" style="width: 5rem;padding: 4px;">
    <img class="card-img-top rounded-circle" src="img/2.jpg" alt="Card image cap">
    <p class="text-center text-white bg-danger">35.1 M</p>

    </div>
    </div>


        <div>
     <div class="card" style="width: 5rem;padding: 4px;">
    <img class="card-img-top rounded-circle" src="img/1.jpg" alt="Card image cap">
    <p class="text-center text-white bg-danger">27.1 M</p>

    </div>
    </div>


        <div>
     <div class="card" style="width: 5rem;padding: 4px;">
    <img class="card-img-top rounded-circle" src="img/2.jpg" alt="Card image cap">
    <p class="text-center text-white bg-danger">35.1 M</p>

    </div>
    </div>

    <div>
     <div class="card" style="width: 5rem;padding: 4px;">
    <img class="card-img-top rounded-circle" src="img/1.jpg" alt="Card image cap">
    <p class="text-center text-white bg-danger">27.1 M</p>

    </div>
    </div>


        <div>
     <div class="card" style="width: 5rem;padding: 4px;">
    <img class="card-img-top rounded-circle" src="img/2.jpg" alt="Card image cap">
    <p class="text-center text-white bg-danger">35.1 M</p>

    </div>
    </div>

    <div>
     <div class="card" style="width: 5rem;padding: 4px;">
    <img class="card-img-top rounded-circle" src="img/1.jpg" alt="Card image cap">
    <p class="text-center text-white bg-danger">27.1 M</p>

    </div>
    </div>


        <div>
     <div class="card" style="width: 5rem;padding: 4px;">
    <img class="card-img-top rounded-circle" src="img/2.jpg" alt="Card image cap">
    <p class="text-center text-white bg-danger">35.1 M</p>

    </div>
    </div>

    <div>
     <div class="card" style="width: 5rem;padding: 4px;">
    <img class="card-img-top rounded-circle" src="img/1.jpg" alt="Card image cap">
    <p class="text-center text-white bg-danger">27.1 M</p>

    </div>
    </div>

        <div>
     <div class="card" style="width: 5rem;padding: 4px;">
    <img class="card-img-top rounded-circle" src="img/2.jpg" alt="Card image cap">
    <p class="text-center text-white bg-danger">35.1 M</p>

    </div>
    </div>


    <div>
     <div class="card" style="width: 5rem;padding: 4px;">
    <img class="card-img-top rounded-circle" src="img/1.jpg" alt="Card image cap">
    <p class="text-center text-white bg-danger">27.1 M</p>

    </div>
    </div>

    <div>
     <div class="card" style="width: 5rem;padding: 4px;">
    <img class="card-img-top rounded-circle" src="img/1.jpg" alt="Card image cap">
    <p class="text-center text-white bg-danger">27.1 M</p>

    </div>
    </div>



        <div>
     <div class="card" style="width: 5rem;padding: 4px;">
    <img class="card-img-top rounded-circle" src="img/2.jpg" alt="Card image cap">
    <p class="text-center text-white bg-danger">35.1 M</p>

    </div>
    </div>

    <div>
     <div class="card" style="width: 5rem;padding: 4px;">
    <img class="card-img-top rounded-circle" src="img/1.jpg" alt="Card image cap">
    <p class="text-center text-white bg-danger">27.1 M</p>

    </div>
    </div>




        <div>
     <div class="card" style="width: 5rem;padding: 4px;">
    <img class="card-img-top rounded-circle" src="img/2.jpg" alt="Card image cap">
    <p class="text-center text-white bg-danger">35.1 M</p>

    </div>
    </div>

    <div>
     <div class="card" style="width: 5rem;padding: 4px;">
    <img class="card-img-top rounded-circle" src="img/1.jpg" alt="Card image cap">
    <p class="text-center text-white bg-danger">27.1 M</p>

    </div>
    </div>

    <div>
     <div class="card" style="width: 5rem;padding: 4px;">
    <img class="card-img-top rounded-circle" src="img/1.jpg" alt="Card image cap">
    <p class="text-center text-white bg-danger">27.1 M</p>

    </div>
    </div>
  </section>



</div>
</div>
















<div class="container mt-5">
    <div class="d-flex justify-content-between">
        <h4>Recommended Jobs</h4> 
        <a href="jobs"><button class="btn btn-primary btn-sm ">View all</button></a>
    </div>
    <div class="row mt-2 g-1">


<?php



include_once("config.php");
    
$selectjobs= "SELECT * FROM `jobs` ORDER BY `id` DESC  LIMIT 12";

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



        <div class="col-md-3 mt-3">
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

















<!------------jobs end---------------------->

<div class="container mt-5">
    <h3>Top Talent</h3>
</div>


<div class="container mt-5">
    <div class="row">

<?php



    
$selectjobs= "SELECT * FROM `users` WHERE `want`='0' ORDER BY `id`  DESC LIMIT 9";

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
                <a href="talent-see?id=<?php echo $talent_id;?>" class="text-decoration-none">  <p><b><?php echo $talentname;?></b> <img src="img/arrow.png" width="20px"></p></a>
                    <p><?php echo $talentexperince;?> <span class="badge bg-primary">verified</span> <span class="badge bg-danger">hire me</span></p>

                </div>

                
            </div>


        </div>





<?php



}}
?>


     
    </div>
</div>








<?php include_once("footer.php"); ?>


<?php

if(isset($_REQUEST["application-success"])){

?>

<script>
  swal({
  title: "Success",
  text: "Your Application Has Been Submitted",
  icon: "success", //note you can write here error or warning or info 
  button: "ok",
});
</script>


<?php     }  ?>


<?php

if(isset($_REQUEST["buyer-success"])){

?>

<script>
  swal({
  title: "Success",
  text: "Your Are Now A Creator ",
  icon: "success", //note you can write here error or warning or info 
  button: "ok",
});
</script>


<?php     }  ?>





<?php

if(isset($_REQUEST["seller-success"])){

?>

<script>
  swal({
  title: "Success!",
  text: "Your Are Now A Freelancer ",
  icon: "success", //note you can write here error or warning or info 
  button: "ok",
});
</script>


<?php     }  ?>



<?php

if(isset($_REQUEST["application_error"])){

?>

<script>
  swal({
  title: "Opps!",
  text: "Your Alredy Sumbitted the Application !",
  icon: "warning", //note you can write here error or warning or info 
  button: "ok",
});
</script>


<?php     }  ?>



<?php

if(isset($_REQUEST["mode-error"])){

?>

<script>
  swal({
  title: "Opps!",
  text: "Your are now seller mode you can't post a job !",
  icon: "info", //note you can write here error or warning or info 
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
  text: "Your Can Not Apply For This job !",
  icon: "info", //note you can write here error or warning or info 
  button: "ok",
});
</script>


<?php     }  ?>


<?php

if(isset($_REQUEST["paid"])){

?>

<script>
  swal({
  title: "Great!",
  text: "You Accepted The Delivery",
  icon: "success", //note you can write here error or warning or info 
  button: "ok",
});
</script>


<?php     }  ?>

<?php

if(isset($_REQUEST["work-submitted"])){

?>

<script>
  swal({
  title: "Success!",
  text: "Your Work is Submitted ",
  icon: "success", //note you can write here error or warning or info 
  button: "ok",
});
</script>


<?php     }  ?>