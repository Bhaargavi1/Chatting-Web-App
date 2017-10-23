 <?php
session_start();
$_SESSION["name"] = 'localhost';
$_SESSION["user"] = 'root';
$_SESSION["pas"] = '@kittucse';
$_SESSION["db"] = 'webchat_1';
// Connecting again 
$conn = new mysqli( $_SESSION["name"],$_SESSION["user"],$_SESSION["pas"],$_SESSION["db"] );
// taking inputs
$mail = $_POST['email123'];
$x = $mail; 
$_SESSION['email_reset'] = $x;
$sql = "Select * From login where email = '$x' ";
$res = $conn->query($sql);
$row = $res->fetch_assoc();

if($res -> num_rows != 1){
    echo '<script language="javascript">
          alert("Email not valid");
          window.location.href = "../../register.html"
          </script>';
}

else{
    echo '<script language ="javascript">
           if (confirm("Press OK to change the old password and Cancel to retrieve old password") == true) {
             window.location.href = "../change.html";
           } 
           else 
           {
             alert("Your old username is ' . $row['username'] . ' and your old password is ' . $row['pass'] . '");
             window.location.href = "../../register.html";
           }
           </script>';
     }
// Closing the connection
$res->close();
$conn->close();
?>
