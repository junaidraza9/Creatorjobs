<?php include_once("header.php");

if($want==0){
    header("location:home?mode-error");
}

?>



<div class="container mt-5">
    <b>Fill Up All Details For Post a Job</b>
</div>


<div class="container mt-5">
    <div class="row">

<div class="col-md-5">
    <form action="postjobs-core.php" method="post">
<label for="" style="font-weight:bold">What position are you hiring for?</label>

        <select name="position" id="" class="form-control">
            <option value="Video Editor">Video Editor</option>
            <option value="Creative Director">Creative Director</option>
            <option value="Thumbnail Designer">Thumbnail Designer</option>
            <option value="Channel Manager">Channel Manager</option>
            <option value="YouTube Strategist">YouTube Strategist</option>
            <option value="Scriptwriter">Scriptwriter</option>
            <option value="YouTube Producer">YouTube Producer</option>

        </select>



        <label for="" style="font-weight:bold">Start date</label>
        <select name="startdate" id="" class="form-control">
            <option value="ASAP">ASAP</option>
            <option value="Within a month">Within a month</option>
            <option value="Within three months">Within three months</option>
       


        </select>



        <label for="" style="font-weight:bold">Job type</label>

<select name="jobtype" id="" class="form-control">
    <option value="Full-time">Full-time</option>
    <option value="Part-time">Part-time</option>
    <option value="Per-project">Per-project</option>
   


</select>


<label for="" style="font-weight:bold">Platform</label>
        <select name="platforms" id="" class="form-control">
            <option value="youtube">Youtube</option>
            <option value="facebook">Facebook</option>
            <option value="instagram">Instagram</option>
            <option value="tiktok">Tiktok</option>
            <option value="snapchat">Snapchat</option>
       


        </select>







<label for="" style="font-weight:bold">Location</label>
        <select name="locations" id="" class="form-control">
            <option value="Remote">Remote</option>
            <option value="Hybrid">Hybrid</option>
            <option value="Within three months">Within three months</option>
       


        </select>


 </div>






 <div class="col-md-7">

 <div class="form-group">
    <label for="About the job" style="font-weight:bold">Price</label>
   <input type="number" name="price" class="form-control">
  
  </div>
 
 <div class="form-group">
    <label for="About the job" style="font-weight:bold">About the job (optional)</label>
    <textarea name="aboutthejob"  class="form-control" col="10"></textarea>
  
  </div>


  <div class="form-group">
    <label for="About the job" style="font-weight:bold">Ideal candidate (optional)</label>
    <textarea name="idealcandidate"  class="form-control" col="10"></textarea>
  
  </div>

 

  <div class="form-group">
    <label for=" Job requirements" style="font-weight:bold"> Job requirements (optional)</label>
    <textarea name="jobrequirements"  class="form-control" col="10"></textarea>
  
  </div>

<br>


<button class="btn btn-danger float-end" name="sub">Post</button>
</form>

 </div>















    </div>
</div>



</div>








<?php include_once("footer.php");?>



<?php

if(isset($_REQUEST["success"])){

?>

<script>
  swal({
  title: "Congratulation !",
  text: "Your Job Post Is Done!",
  icon: "success", //note you can write here error or warning or info 
  button: "ok",
});
</script>


<?php     }  ?>


<?php

if(isset($_REQUEST["deposite"])){

?>

<script>
  swal({
  title: "Error !",
  text: "you have not enough balance !",
  icon: "error", //note you can write here error or warning or info 
  button: "ok",
});
</script>


<?php     }  ?>