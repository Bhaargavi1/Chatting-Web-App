<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> WELCOME PAGE </title>
    </head>
<body>
 <?php
session_start();
$conn = new mysqli( $_SESSION["name"],$_SESSION["user"],$_SESSION["pas"],$_SESSION["db"] );
 $pass = $_POST["passw"]; $y =  $_SESSION['use']; 
$sql = "UPDATE login SET pass= '$pass' WHERE username=  '$y'";
if ($conn->query($sql) === TRUE) {
    header("Location:php.html");
} else {
    echo "Error updating record: " . $conn->error;
}
 $conn->close();
    ?>
 </body>
 </html>

