<?php 
    
  
  $ammmmm= $_REQUEST["amount"];
   
  include_once("function.php");
 
  $bal=$blance+$ammmmm;
  
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
                 
                 
          
                 
  $update="UPDATE `users` SET `blance`='$bal'  WHERE `id`='$id'";
                 
          $runu = mysqli_query($conn,$update);      
          
          if($runu){
              
          
          
             header("location:account?success");
                    
                  
          
              
            }
              
              
              ?>