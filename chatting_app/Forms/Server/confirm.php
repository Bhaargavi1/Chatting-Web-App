<?php
session_start();
// Making the connection
$conn = new mysqli( $_SESSION["name"],$_SESSION["user"],$_SESSION["pas"],$_SESSION["db"] );
// Setting the mail id and password retrieved 
$pass =  $_POST['passw'];
$mailin = $_SESSION['email_reset'];
// Updating the value in the database
$sql = "UPDATE login SET pass= '$pass' WHERE email=  '$mailin'";
// Redirecting after updating the password
if ($conn->query($sql) === TRUE) {
    header("Location: ../../register.html");
} else {
    echo "Error updating record: " . $conn->error;
}
 $conn->close();
?>

