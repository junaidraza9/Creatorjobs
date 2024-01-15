<script>
   // alert("After completing your payment, kindly remain on the payment page to receive your payment confirmation. Please don't close or navigate away from the next page until the payment is confirmed.");
</script>



<?php

  $iddd=$_COOKIE["u_id"];
$ammmmm= $_REQUEST["amount"];
 







include_once("function.php");
$bal=$balance+$ammmmm;

?>


   
  





<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body style="background:#222737">



<form>
    <script src="https://korablobstorage.blob.core.windows.net/modal-bucket/korapay-collections.min.js"></script>

</form>

<script>
        let params = new URLSearchParams(location.search);
const amo = params.get('amount');

const mm=parseInt(amo);

//console.log(mm);




   //var key ="pk_live_P5TWGnveL8rAmnHVg7WQ9kFDruBNndBVXJMn9MPR";
    
    var key ="pk_test_hg8hwaobRiRCh4xDdpqj3PTuCsjeF1LzgWvW4nFG";
    var money=Math.floor((Math.random() * 10098765) );
    var ref=Math.floor((Math.random() * 10098765) );
    var xx=ref+"creatorjobs";
    //console.log(xx);
    var name="<?php echo $name;?>";
    var email="<?php echo $email;?>";

        window.Korapay.initialize({
            key: key,
            reference:xx,
            amount: mm, 
            currency: "NGN",
            customer: {
              name: name,
              email: email
            },
            onClose: function () {
              // Handle when modal is closed
                //alert("closed");
                
         
                
                location.href="account?close";

            },
            onSuccess: function (data) {
              // Handle when payment is successful
               // alert("success");
               
               
                              
              
          
          
          location.href="korapay-core?amount=<?php echo $ammmmm;?>";
          
 
               
               
               
               
               
               
               
               
               

            },
            onFailed: function (data) {
              // Handle when payment fails
                // alert("fails");
         
                 location.href="account?faield";
            }
            //notification_url: "https://example.com/webhook"
        });
    
</script>





</body>
</html>



