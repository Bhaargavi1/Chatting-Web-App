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
<title>My Profile</title>
<link rel="stylesheet" href="../../assets/css/bootstrap.css">
<link rel="stylesheet" href="../../assets/css/w3css.css">
<link rel="stylesheet" href="../../assets/css/profile.css">
</head>
<body style = "background-image:url('../../assets/images/profile_bg.jpg')">
<div class ="head">
<div class = 'row'>
<div class = 'col-sm-6 col-md-6 col-lg-3'>
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Change Walpaper
  <span class="caret"></span></button>
  <ul class="dropdown-menu" style = 'color:midnightblue;margin-left:80px'>
    <li onclick = 'girl()'>Girly</li>
    <li onclick = 'cars()'>Cars</li>
    <li onclick = 'game()'>Gaming</li>
    <li onclick = 'music()'>Music</li>
    <li onclick = 'def()'>Default</li>
  </ul>
</div>    
</div>
<div class = 'col sm-10 col-md-10 col-lg-6' style = 'font-size:30px'>
<ins><?php echo 'Welcome to you profile ' . $_SESSION['username'] ;?></ins>
</div>
<div class = 'col-sm-6 col-md-6 col-lg-3'><ins><a href = '../intro.php'>Back to Home</a></ins></div>
</div>
</div>
<div class = 'row'>
<div class = 'col-xs-8 col-sm-8 col-md-8 col-lg-10 messages' id = 'msgs'></div>
</div>

<script type = "text/javascript" src = '../../assets/javascript/jquery.js'></script>
<script type = "text/javascript" src = '../../assets/javascript/bootstrap_min.js'></script>
<script type = "text/javascript" src = "ajax_profile.js" ></script>  
</body>
</html>