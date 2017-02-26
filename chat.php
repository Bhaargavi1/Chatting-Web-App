<!Doctype HTML>
<html lang="en-US">
<head>
<meta ch arset = "UTF-8">
<meta name="HandheldFriendly" content="true">
<meta name="viewport" content="width=device-width, user-scalable=yes" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Register</title>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
</script>
<style>
    body{background-image:url("bg3.jpg");}
    header
    { 
    	background-image: url("head.jpg");
    	margin-left: 200px;
    	margin-top:6px;
    	width:900px;
    	font-size: 50px;
    	color:red;
    	height:200px;
    	border:4px solid black;
    	outline: 2px solid red;
        font-weight: bolder;
    }
    .flex-container
    {
    	margin-left:10px;
    	margin-top:30px
    	width:1320px;
    	height:720px;
        display: flex;
    }
    .others
    {
     margin-left: 20px;
     margin-top:30px;
     width: 800px;
     height:600px;
     overflow:scroll;
     border:4px solid red;
     outline:2px solid black;
    }
    .admin
    {    
     margin-left:50px;
     margin-top:30px;
     width: 450px;
     height:600px;
     border:4px solid red;
     outline:2px solid black;
    }
    .submit
    {
     margin-left:100px;
     margin-top:0px;
     width: 1100px;
     height:240px;
     border:4px solid blue;
     outline:2px solid black;
     margin-bottom:50px;
    }
    #content
    {
    	margin-left:30px;
    	margin-top:10px;
    	width:1050px;
    	height:110px;
    	text-align:left;
    }
    #post
    {
    	margin-top: 15px;
    	margin-left:420px;
    	width:220px;
    	font-size:30px;
    	height:50px;
    }
    .color
{
font-size:20px;
color:red;
margin-left:3px;
}
.column
{
margin-left:4px;
margin-top:2px;
width:760px;
min-height:60px;
font-size:25px;
overflow:scroll;
border:2px solid green;
background-color: khaki;
}
</style>
<script>
 function chat_ajax()
{ 
    var req = new XMLHttpRequest(); 
	req.onreadystatechange = function() 
	{ 
		if(req.readyState == 4 && req.status == 200)
		{ 
			document.getElementById('show').innerHTML = req.responseText; 
		}
	} 
	req.open('POST', "http://localhost/dir/db2.php", true);
	 req.send(); 
} setInterval(function(){chat_ajax()}, 1000) 
</script>
 <script>
$(document).ready(function(){
        $("#post").click(function(){
           var message = $("#content").val();
          if(message.length>0)
        {
        	$.ajax({
              type: "POST",
              url: "http://localhost/dir/db2.php",
              data: {msg: message} ,            
              cache:false,
              success: function(data)
              {
                $('#content').val('');;
              },
               error: function(jqXHR, textStatus, err) {
                //show error message
                alert('text status '+textStatus+', err '+err)
            }
        	});
        }return false;
});});
</script>
 </head>
 <body>
 <header>
 <div style="margin-left:150px">
<?php 
session_start();
echo  "<i>HAI <span style='color:blue'>". $_SESSION['username']."</span></i>" ;?>
</div>
</header>
<div class = "flex-container">
<div class = "others" id="show"></div>
<div class = "admin"><span style="font-size: 25px;margin-left:130px"><i><ins><b>Admin Writes &rarr;</b></ins> </i></span></div> 
</div>
<div class = "submit">
<span style="margin-left:470px;margin-top:5px;font-size:30px;">Write Here </span>
<form method="post" name="form" action="">
<input type='text' name="content" id="content"/>
<input type="submit" value="Submit Chat" onclick="postItem()" id="post" class="post"/>
</form>
</div>
 </body>
 </html>