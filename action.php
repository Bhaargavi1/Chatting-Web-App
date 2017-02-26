<?php	
session_start();
$_SESSION["name"] = 'localhost';
$_SESSION["user"] = 'root';
$_SESSION["pas"] = '@kittucse';
$_SESSION["db"] = 'webchat_1';
$conn = new mysqli( $_SESSION["name"],$_SESSION["user"],$_SESSION["pas"],$_SESSION["db"] );
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 $fname = $_POST['fname'];  $lname = $_POST['lname'];
      $mail  = $_POST['email'];      $_SESSION['pswd']  = $_POST['psw'];
      $_SESSION['username']  = $_POST['username'];  
 $stmt = $conn->prepare("INSERT INTO login (firstname, lastname, email, username, pass ) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $firstname, $lastname, $email, $username, $pass);
	  $firstname = "$fname"; $lastname = "$lname" ; $email = "$mail" ;
	   $pass = $_SESSION['pswd'] ; 
	   $username = $_SESSION['username'] ;
      $stmt->execute();	 
       header("Location:phpintro.html");

	  $conn->close();
	 ?>
 