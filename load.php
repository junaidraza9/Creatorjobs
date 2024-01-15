
<?php


session_start();

$id=$_SESSION['current_user_id'];
$talent_id=$_SESSION['talent_id'];

$total=$id+$talent_id;

include_once("config.php");
   
$selectQuery = "SELECT * FROM `message` WHERE `user_id`='$id' AND `reciver_id`='$talent_id' OR `reciver_id`='$id'AND `user_id`='$talent_id' AND`total`='$total'";

$runQ = mysqli_query($conn,$selectQuery);


if ($runQ == true) {

while ($alldata = mysqli_fetch_array($runQ )) {

  $id= $alldata["id"];
  $sms= $alldata["sms"];
  $time= $alldata["time"];
  $user_id= $alldata["user_id"];
  $reciver_id= $alldata["reciver_id"];




?>
             
             
             
             
             
             <?php
if($reciver_id==$talent_id){
?>


             
             
             

                <div class="media media-chat">
                  
                  <div class="media-body">
          
                    <p><?php echo $sms;?></p>
                
                  </div>
                </div>

              <?php

            }else{


            

            ?>

                <div class="media media-chat media-chat-reverse">
                  <div class="media-body">
                  
                    <p><?php echo $sms;?></p>
               
                  </div>
                </div>

                <?php
            }
                ?>

        

            
            
        
            
            <?php
             }



            }
            
            
            
            
            ?> 