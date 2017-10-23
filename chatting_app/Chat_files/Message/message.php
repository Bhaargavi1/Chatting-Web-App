<?php 
session_start();
?>
<!Doctype HTML>
<html lang="en-US">
<head>
<meta charset = "UTF-8">
<meta name="HandheldFriendly" content="true">
<meta name="viewport" content="width=device-width, user-scalable=yes" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Messaging</title>
<link rel="stylesheet" href="../../assets/css/w3css.css">
<link rel="stylesheet" href="../../assets/css/bootstrap.css">
<link rel="stylesheet" href="../../assets/css/message.css">
</head>
<body onload="messages()">
<?php
$_SESSION['user_sendto'] = isset($_POST['message_sent'])?$_POST['message_sent']:'';
?>
<div class ="head">
  <?php echo "Hai " . $_SESSION['username'] . " Enjoy Messaging";?>
</div>
<div class = "row">
    <div class = "col-lg-6 col-sm-9 col-md-6">
        <div class = "w3-card-4 card">
        <div class = "w3-container w3-indigo">
           <h2 class = "text-center">Messaging</h2>
        </div>
        <form action = "">
            <div class="row">
                <div class = 'col-lg-3 col-md-4 col-sm-3 labels'>Sent By:</div>
                <div class = 'col-lg-8 col-md-7 col-sm-8'>
                  <input class = 'ip' type='text' style="width:90%;margin-top:10px"  value = ' <?php echo  $_SESSION['username'];?> ' readonly>
                </div>
            </div>
            <div class="row">
                <div class = 'col-lg-3 col-md-4 col-sm-3 labels'>Sent To:</div>
                <div class = 'col-lg-8 col-md-7 col-sm-8'>
                  <input class = 'ip' type='text' style="width:90%;margin-top:10px"  value = ' <?php echo  $_SESSION['user_sendto'];?> ' readonly>
                </div>
            </div>
            <div class="row">
                <div class = 'col-lg-3 col-md-4 col-sm-3  labels'>Message:</div>
                <div class = 'col-lg-8 col-md-7 col-sm-8'>
                  <textarea class = 'ip' type='text' style="width:90%;margin-top:10px" name = "message" rows = "10" cols = "30" id = "msg_text"></textarea>                 
                 </div>
            </div>
            <div class = 'row'>
                <button class="w3-indigo w3-ripple submit_message col-lg-10 col-md-9 col-sm-8 col-xs-8">Send Message</button>
            </div>
        </form>
        </div>
     </div>
     <div class = "col-lg-6 col-md-6 col-sm-9">
         <div class = "heading text-center w3-indigo">Older Messages</div>
         <div class = "message_area" id = "message_area" >    
             <div id = "messages"></div>
         </div>
     </div>
</div>
<script type = "text/javascript" src = '../../assets/javascript/jquery.js'></script>
<script type = "text/javascript" src = '../../assets/javascript/bootstrap_min.js'></script>
<script type = "text/javascript" src = "ajax_message.js" ></script>  
</body>
</html>