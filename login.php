<?php
if(isset($_COOKIE["login"])){
header("location:postjobs");
}

?>

<?php include_once("header.php"); ?>

    <br />

    <div class="container p-5" style="background-color:aliceblue;border-radius:35px">

<center> 
<h2 style="color:#741349">Login</h2>
 <hr class="mb-4 mt-0 d-inline-block mx-auto"style="width: 60px; background-color: #102693; height: 2px">
</center>

<div class="row">
    <div class="col-md-6">
        <form action="login-core.php" method="post">
        <div class="form-group">
         <label for="">Your Email *</label>
         <input type="email"class="form-control" name="email" id="email" aria-describedby="helpId" placeholder=""> 
        </div>
    </div>
  
    <div class="col-md-6">
    <div class="form-group">
  <label for="">Your Password *</label>
  <input type="text"class="form-control" name="pwd" id="pwd" aria-describedby="helpId" placeholder=""> 
 </div>
    </div>
</div>

<br><br>
<center>
      <input type="submit"class="form-control bg-danger" name="sub" id="sub" value="Login Now"  style="width:70%;color:white">
</center>
   </form>   
   <br>
   <p class="text-danger text-center"> You don't have an account?  <a href="register" class="text-dark"> Create Account</a></p>
</form>

    </div>

    <br>

    <?php
    include_once('footer.php');
    ?>

<?php

if(isset($_REQUEST["signup_success"])){

?>

<script>
  swal({
  title: "your account is created successfully!",
  text: "now login here!",
  icon: "success", //note you can write here error or warning or info 
  button: "ok",
});
</script>


<?php     }  ?>




<?php

if(isset($_REQUEST["pchange"])){

?>

<script>
  swal({
  title: "success!",
  text: "your password is changed successfully !",
  icon: "success", //note you can write here error or warning or info 
  button: "ok",
});
</script>


<?php     }  ?>



<?php

if(isset($_REQUEST["alert"])){

?>

<script>
  swal({
  title: "Opps!",
  text: "Please Login First After That you can Post Job !",
  icon: "warning", //note you can write here error or warning or info 
  button: "ok",
});
</script>


<?php     }  ?>







<?php

if(isset($_REQUEST["error"])){

?>

<script>
  swal({
  title: "opps!",
  text: "your email and password not match !",
  icon: "warning", //note you can write here error or warning or info 
  button: "ok",
});
</script>


<?php     }  ?>


<?php

if(isset($_REQUEST["login-error"])){

?>

<script>
  swal({
  title: "opps!",
  text: "Please login first After that you are able to job apply!",
  icon: "info", //note you can write here error or warning or info 
  button: "ok",
});
</script>


<?php     }  ?>

