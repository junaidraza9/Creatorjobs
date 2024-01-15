<?php include_once("header.php"); ?>
<div class="container mt-5">
    <div class="main-body">

          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="img/<?php echo $avatar ;?>" alt="Admin" class="rounded-circle" width="150" height="150">
                    <div class="mt-3">
                      <h4><?php echo $name;?></h4>
                      <center>
                      <form
                        action="avatar"
                        method="post"
                        enctype="multipart/form-data"
                      >
                <input type="file" name="upload" class="form-control">
                <br>
                <button class="btn btn-danger">Upload</button>
              </form>
                 
              

                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                <form
                        action="setting-core"
                        method="post"
                   
                      >
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text" name="name" class="form-control"value="<?php echo $name;?>">
                    </div>
                  </div>

                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                  
                    <input type="text" name="phone" class="form-control"value="<?php echo $phone;?>">
                    </div>
                  </div>
                  <hr>
<?php 

if($want==0){

?>




<div class="row">
  <div class="col-sm-3">
    <h6 class="mb-0">Speciality</h6>
  </div>
  <div class="col-sm-9 text-secondary">
  <select name="specialize" id="" class="form-control">
  <option value="<?php echo $experince;?>"><?php echo $experince;?></option>

<option value="Video Editor">Video Editor</option>
<option value="Thumbnail Designer">Thumbnail Designer</option>
<option value="Creative Director">Creative Director</option>
<option value="Channel Manager">Channel Manager</option>
<option value="YouTube Strategist">YouTube Strategist</option>
<option value="Scriptwriter">Scriptwriter</option>
<option value="YouTube Producer">YouTube Producer</option>

</select>
  </div>
</div>

<hr>

<?php
}
?>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Country</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text" name="country" class="form-control"value="<?php echo $country;?>">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                   
                    <input type="text" name="address" class="form-control"value="<?php echo $address;?>">
                    </div>
                  </div>

                <hr>

                <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">About</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                   
                 <textarea name="about" id="" class="form-control" rows="3"><?php echo $about;?></textarea>
                    </div>
                  </div>

                <hr>







                  
                  <div class="row">
                    <div class="col-sm-12">
                      <button class="btn btn-danger" >Save</button>
</form>
                    </div>
                  </div>
                </div>
              </div>

              
                
                </div>
              </div>



            </div>
          </div>

        </div>
    </div>

<?php include_once("footer.php");?>