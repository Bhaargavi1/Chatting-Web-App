<?php	
session_start();
$_SESSION["name"] = 'localhost';
$_SESSION["user"] = 'root';
$_SESSION["pas"] = '@kittucse';
$_SESSION["db"] = 'webchat_1';
// Establishing connection
$conn = new mysqli( $_SESSION["name"],$_SESSION["user"],$_SESSION["pas"],$_SESSION["db"] );
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// Taking input 
 $fname = $_POST['fname'];  
 $lname = $_POST['lname']; 
 $mail = $_POST['email'];  
 $_SESSION['pswd']  = $_POST['psw'];
 $_SESSION['username']  = $_POST['username'];  
$get = "SELECT username from login";
 echo $get;
 $result = $conn->query($get);
 while($row = $result->fetch_assoc()){
 	if($_SESSION['username'] == $row['username']){
 		echo "<script type = 'text/javascript'>
 		       alert('Username exists please select another username');
                window.location.href = '../../register.html';
 		</script>";
 	}
 }
 // Inserting the values in the database
 $stmt = $conn->prepare("INSERT INTO login (firstname, lastname, email, username, pass ) VALUES (?, ?, ?, ?, ?)");
 $stmt->bind_param("sssss", $firstname, $lastname, $email, $username, $pass);
 // Binding parameters 
 $firstname = "$fname"; 
 $lastname = "$lname"; 
 $email = "$mail" ;
 $pass = $_SESSION['pswd'] ; 
 $username = $_SESSION['username'] ;
 // Executing the query      
 $stmt->execute();	 
 $create = "Create Table ". $username .  "_rec (
id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
received_from VARCHAR(30) NOT NULL,
msg_received VARCHAR(100000) Not Null,
time_received TIMESTAMP
)";
$result = $conn->query($create);
 $create_sec = "Create Table ". $username .  "_send (
id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
sending_to VARCHAR(30) NOT NULL,
msg_sent VARCHAR(100000) Not Null, 
time_sent TIMESTAMP
)";
$res = $conn->query($create_sec); 
  echo "<script type = 'text/javascript'>
               window.location.href = '../../Chat_files/intro.php';
 	</script>";
 // Redirecting 
 //header("Location:../../Chat_files/intro.php");
// Connection close
 $conn->close();
?>
 
 