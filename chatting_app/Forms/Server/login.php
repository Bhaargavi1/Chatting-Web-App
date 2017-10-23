<?php
session_start();
$_SESSION["name"] = 'localhost';
$_SESSION["user"] = 'root';
$_SESSION["pas"]  = '@kittucse';
$_SESSION["db"]   = 'webchat_1';
// Establishing connection
$conn = new mysqli( $_SESSION["name"],$_SESSION["user"],$_SESSION["pas"],$_SESSION["db"] );
$pass = $_POST['pass12']; 
// Taking inputs from the user
$_SESSION['username'] = $_POST['loginid'];  
$username = $_SESSION['username'] ;
// taking the values from the database
$sql = "Select * From login where username = '$username'";
$res = $conn->query($sql);
$row = $res->fetch_assoc();
$num = $res->num_rows;
// if row not found       
if($num !=1){
    echo '<script language="javascript">
          alert(" user name not valid. Please enter again ");
          window.location.href = "../../register.html"
          </script>';
}
// If 1 row found but the password is not same
else
  if($num == 1 && $pass != $row['pass']){
      echo '<script language="javascript">
             alert("Password invalid. Try again");
             window.location.href = "../../register.html"
             </script>';
  }
// If there is 1 row and the password in that particular row matches 
else 
  if($num == 1 && $pass == $row['pass']){
    echo '<script language="javascript">
           window.location.href = "../../Chat_files/intro.php"
           </script>';
           $_SESSION["username"] = $username;
           $_SESSION['pswd'] = $pass; 
  }
// Closing the connection        
$res->close();
$conn->close();
?>         
