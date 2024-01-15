<?php include_once("header.php");?>




<div class="container mt-5">
    <h3>Talent</h3>
</div>


<div class="container">
    <div class="row">
<div class="col">
    <form action="filter-talent">
        <select name="allcategoris" id="" class="form-control">
            <option value="Video Editor">Video Editor</option>
            <option value="Creative Director">Creative Director</option>
            <option value="Thumbnail Designer">Thumbnail Designer</option>
            <option value="Channel Manager">Channel Manager</option>
            <option value="YouTube Strategist">YouTube Strategist</option>
            <option value="Scriptwriter">Scriptwriter</option>
            <option value="YouTube Producer">YouTube Producer</option>

        </select>
 </div>



 <div class="col">
<button class="btn btn-danger" name="sub">Search</button>
</form>
 </div>



 <div class="col">

 </div>


    </div>
</div>









<div class="container mt-5">
    <h3>Top Talent</h3>
</div>


<div class="container mt-5">
    <div class="row">

<?php


include_once("config.php");
    
$selectjobs= "SELECT * FROM `users` WHERE `want`='0' ";

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
























<?php include_once("footer.php");?>