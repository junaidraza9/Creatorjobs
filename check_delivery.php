<?php 
include_once("config.php");

$id=htmlspecialchars($_REQUEST["id"]);

$notify="SELECT * FROM `notify` WHERE `id`='$id'";

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

   $proof=$alldata["proof"];






}}


?>

<?php  include_once("header.php");?>
<br><br>

<div class="container">
    <center>
        <div>
        <p>See Delivery:</p>
       <span><?php echo $proof;?></span>
        </div>
        <br><br>
        <p>if you accept the delivery then the Freelancer will be get paid !</p>
        <a class="btn btn-success" href="paid_freelancer?id=<?php echo $nid;?>">Accept The Delivery</a>
      
    </center>
</div>
<?php  include_once("footer.php");?>

<?php

if(isset($_REQUEST["paide_done"])){

?>

<script>
  swal({
  title: "Opps!",
  text: "You Already Accept The Delivery ",
  icon: "info", //note you can write here error or warning or info 
  button: "ok",
});
</script>


<?php     }  ?>