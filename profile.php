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
                      <p class="badge bg-danger"><?php echo $experince;?></p>
                      <p class="text-muted "><?php echo $about;?></p>
                 
                      <p class="text-muted font-size-sm"><?php echo $date;?></p>
                      <?php if($want==1){?>
                        
                     
                      <button class="btn btn-danger" onclick="location.href='user-all-jobs'">See Your Jobs</button>
                      <button class="btn btn-primary" onclick="location.href='wallet'">My Wallet</button>

                      <?php }else{?>

                        <button class="btn btn-danger" onclick="location.href='applied-jobs'">Jobs Record</button>
                      <button class="btn btn-primary" onclick="location.href='wallet'">My Wallet</button>


                        <?php } ?>

                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $name;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $email;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $phone;?>
                    </div>
                  </div>
                  <hr>
<?php 

if($want==0){

?>


                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Experince</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $experince;?>
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
                    <?php echo $country;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $address;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-danger "href="setting">Edit</a>
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