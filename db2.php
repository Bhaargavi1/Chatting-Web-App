<!Doctype HTML>
<html lang="en-US">
<head>
<meta ch arset = "UTF-8">
<meta name="HandheldFriendly" content="true">
<meta name="viewport" content="width=device-width, user-scalable=yes" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Register</title>
<style>
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
</head>
<body>
<?php
session_start();
$conn = new mysqli( $_SESSION["name"],$_SESSION["user"],$_SESSION["pas"],$_SESSION["db"] );
$msg = $_POST['msg'];
$x = $_SESSION['username'];
if($msg != "")
{
$sql = "INSERT INTO  chat (username, msg) VALUES ('$x', '$msg')" ;
$res = $conn->query($sql);
}

$get = "Select username, msg, time from chat";
$res2 = $conn->query($get);
while($row = $res2->fetch_assoc())
   {
	echo "<div class='column'><span class ='color'>" . $row['username'] . "</span>--" .$row['msg']. 
	"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ."<span style='font-size:15px'>".$row['time']. "</span></div>" ;
   }	
$conn->close();   
?>
</body>
</html>