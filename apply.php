
<?php 
if(!isset($_COOKIE["login"]))
{
    header("location:login?login-error");
    die;
}

include_once("header.php");

if($want==1)
{
    header("location:jobs?buyer-error"); 
}
?>





<div class="container mt-5">
    <b>Application Form</b>
</div>


<div class="container mt-5">
    <div class="row">

<div class="col-md-2">
   



 </div>






 <div class="col-md-8">
 <form action="apply-core?id=<?php if(isset($_REQUEST['id'])){echo $_REQUEST['id'];}?>" method="post">

 
 <div class="form-group">
    <label for="About the job" style="font-weight:bold">Briefly describe why you think you are a good fit for this position:</label>
    <textarea name="aboutthejob"  class="form-control mt-2" rows="8" required></textarea>
  
  </div>
<br>

  <div class="form-group">
    <label for="About the job" style="font-weight:bold">Link a video of your own work that best fits with this job:</label>
    <textarea name="worksample"  class="form-control mt-2" col="10" required></textarea>
  
  </div>

 


<br>


<button class="btn btn-danger float-end" name="sub">Apply</button>
</form>

 </div>




 <div class="col-md-2">
   



   </div>










    </div>
</div>



</div>













<?php include_once("footer.php");?>

