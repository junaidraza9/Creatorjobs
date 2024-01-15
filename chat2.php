<?php 
session_start();

include_once("function.php");
 $talent_id=$_REQUEST["id"]; 

$_SESSION['talent_id']=$talent_id;
$_SESSION['current_user_id']=$id;




    
$selectjobs= "SELECT * FROM `users` WHERE `id`='$talent_id' AND `want`='0'  ";

$runjobs = mysqli_query($conn,$selectjobs);


if ($runjobs == true) {

while ($alldata = mysqli_fetch_array($runjobs )) {
    
    $tname= $alldata["name"];
    $email= $alldata["email"];
    $want= $alldata["want"];
    $experince= $alldata["experince"];
    $country= $alldata["country"];
    $cookie= $alldata["cookie"];
    $date= $alldata["date"];
    $tavatar= $alldata["avatar"];
    $phone= $alldata["phone"];
    $address= $alldata["address"];
    $password= $alldata["password"];
    $about= $alldata["about"];

}}






?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
        <link rel="icon" href="img/favicon.png" type="image/png">
    <link rel="stylesheet" href="css/maxcdn.bootstrapcdn.com_bootstrap_4.0.0_css_bootstrap.min.css">  
    <link rel="stylesheet" href="css/use.fontawesome.com_releases_v5.7.2_css_all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
    <script src="js/stackpath.bootstrapcdn.com_bootstrap_4.0.0_js_bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    
    <style>
        .card-bordered {
    border: 1px solid #ebebeb;
}

.card {
    border: 0;
    border-radius: 0px;
    margin-bottom: 30px;
    -webkit-box-shadow: 0 2px 3px rgba(0,0,0,0.03);
    box-shadow: 0 2px 3px rgba(0,0,0,0.03);
    -webkit-transition: .5s;
    transition: .5s;
}

.padding {
    padding: 3rem !important
}

body {
    background-color: #f9f9fa
}

.card-header:first-child {
    border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
}


.card-header {
    display: -webkit-box;
    display: flex;
    -webkit-box-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    align-items: center;
    padding: 15px 20px;
    background-color: transparent;
    border-bottom: 1px solid rgba(77,82,89,0.07);
}

.card-header .card-title {
    padding: 0;
    border: none;
}

h4.card-title {
    font-size: 17px;
}

.card-header>*:last-child {
    margin-right: 0;
}

.card-header>* {
    margin-left: 8px;
    margin-right: 8px;
}

.btn-secondary {
    color: #4d5259 !important;
    background-color: #e4e7ea;
    border-color: #e4e7ea;
    color: #fff;
}

.btn-xs {
    font-size: 11px;
    padding: 2px 8px;
    line-height: 18px;
}
.btn-xs:hover{
    color:#fff !important;
}




.card-title {
    font-family: Roboto,sans-serif;
    font-weight: 300;
    line-height: 1.5;
    margin-bottom: 0;
    padding: 15px 20px;
    border-bottom: 1px solid rgba(77,82,89,0.07);
}


.ps-container {
    position: relative;
}

.ps-container {
    -ms-touch-action: auto;
    touch-action: auto;
    overflow: hidden!important;
    -ms-overflow-style: none;
}

.media-chat {
    padding-right: 64px;
    margin-bottom: 0;
}

.media {
    padding: 16px 12px;
    -webkit-transition: background-color .2s linear;
    transition: background-color .2s linear;
}

.media .avatar {
    flex-shrink: 0;
}

.avatar {
    position: relative;
    display: inline-block;
    width: 36px;
    height: 36px;
    line-height: 36px;
    text-align: center;
    border-radius: 100%;
    background-color: #f5f6f7;
    color: #8b95a5;
    text-transform: uppercase;
}

.media-chat .media-body {
    -webkit-box-flex: initial;
    flex: initial;
    display: table;
}

.media-body {
    min-width: 0;
}

.media-chat .media-body p {
    position: relative;
    padding: 6px 8px;
    margin: 4px 0;
    background-color: #f5f6f7;
    border-radius: 3px;
    font-weight: 100;
    color:#9b9b9b;
}

.media>* {
    margin: 0 8px;
}

.media-chat .media-body p.meta {
    background-color: transparent !important;
    padding: 0;
    opacity: .8;
}

.media-meta-day {
    -webkit-box-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    align-items: center;
    margin-bottom: 0;
    color: #8b95a5;
    opacity: .8;
    font-weight: 400;
}

.media {
    padding: 16px 12px;
    -webkit-transition: background-color .2s linear;
    transition: background-color .2s linear;
}

.media-meta-day::before {
    margin-right: 16px;
}

.media-meta-day::before, .media-meta-day::after {
    content: '';
    -webkit-box-flex: 1;
    flex: 1 1;
    border-top: 1px solid #ebebeb;
}

.media-meta-day::after {
    content: '';
    -webkit-box-flex: 1;
    flex: 1 1;
    border-top: 1px solid #ebebeb;
}

.media-meta-day::after {
    margin-left: 16px;
}

.media-chat.media-chat-reverse {
    padding-right: 12px;
    padding-left: 64px;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: reverse;
    flex-direction: row-reverse;
}

.media-chat {
    padding-right: 64px;
    margin-bottom: 0;
}

.media {
    padding: 16px 12px;
    -webkit-transition: background-color .2s linear;
    transition: background-color .2s linear;
}

.media-chat.media-chat-reverse .media-body p {
    float: right;
    clear: right;
    background-color: #48b0f7;
    color: #fff;
}

.media-chat .media-body p {
    position: relative;
    padding: 6px 8px;
    margin: 4px 0;
    background-color: #f5f6f7;
    border-radius: 3px;
}


.border-light {
    border-color: #f1f2f3 !important;
}

.bt-1 {
    border-top: 1px solid #ebebeb !important;
}

.publisher {
    position: relative;
    display: -webkit-box;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    padding: 12px 20px;
    background-color: #f9fafb;
}

.publisher>*:first-child {
    margin-left: 0;
}

.publisher>* {
    margin: 0 8px;
}

.publisher-input {
    -webkit-box-flex: 1;
    flex-grow: 1;
    border: none;
    outline: none !important;
    background-color: transparent;
}

button, input, optgroup, select, textarea {
    font-family: Roboto,sans-serif;
    font-weight: 300;
}

.publisher-btn {
    background-color: transparent;
    border: none;
    color: #8b95a5;
    font-size: 16px;
    cursor: pointer;
    overflow: -moz-hidden-unscrollable;
    -webkit-transition: .2s linear;
    transition: .2s linear;
}

.file-group {
    position: relative;
    overflow: hidden;
} 

.publisher-btn {
    background-color: transparent;
    border: none;
    color: #cac7c7;
    font-size: 16px;
    cursor: pointer;
    overflow: -moz-hidden-unscrollable;
    -webkit-transition: .2s linear;
    transition: .2s linear;
} 

.file-group input[type="file"] {
    position: absolute;
    opacity: 0;
    z-index: -1; 
    width: 20px;
}

.text-info {
    color: #48b0f7 !important;
}
    </style>
    
</head>
<body>
<div class="page-content page-container container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
<div class="col-md-6">
            <div class="card card-bordered">
              <div class="card-header">
                <h4 class="card-title"><strong> <img class="avatar" src="<?php echo "img/".$tavatar;?>" alt="..."> <?php echo $tname;?></strong></h4>
                
            
            
 <!-- drop down dataE-->
<div class="btn-group">
  <button type="button" class="btn btn-xs btn-secondary" onclick="history.back();">
  &#8592
  </button>

</div>    
            
                
              </div> 


              <div class="ps-container ps-theme-default ps-active-y" id="chat-content" style="overflow-y: scroll !important; height:400px !important;">

  

              <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 0px; right: 2px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 2px;"></div></div></div>

              <div class="publisher bt-1 border-light">
                
                <input class="publisher-input" type="text" id="sms" placeholder="Write something">
            
                
            
                <i class="fa fa-paper-plane btn btn " id="sent"></i>
              </div>

             </div>
          </div>
          </div>
          </div>
          </div>

         
          
<script type="text/javascript">
$(document).ready(function(){


//load

$("#chat-content").load("load.php");

setInterval(ajaxCall, 1000); //300000 MS == 5 minutes

function ajaxCall() {
    $("#chat-content").load("load.php");
}



//click event
 $("#sent").click(function(){
     //get the inpute value
    var x= $("#sms").val();
    //alert(x);

    //reset the input value 
    $("#sms").val("");


    //pass input value using ajax

    $.ajax({
	url: "insert-message.php", // the url we want to send and get data from
    type: "GET", // type of the data we send (POST/GET)
    data: {sms: x,tid:<?php echo $id;?>,id:<?php echo $talent_id;?>}, // the data we want to send
    success: function(data){ // when successfully sent data and returned
    	// do something with the returned data
   		//console.log(data);

        //load


    }
})
     
}); 
}); 
</script>    
</body>
</html>