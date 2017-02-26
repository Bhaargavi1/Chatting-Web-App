 <?php
session_start();
$_SESSION["name"] = 'localhost';
$_SESSION["user"] = 'root';
$_SESSION["pas"] = '@kittucse';
$_SESSION["db"] = 'webchat_1';
$conn = new mysqli( $_SESSION["name"],$_SESSION["user"],$_SESSION["pas"],$_SESSION["db"] );
$mail = $_POST['email123'];$_SESSION['use'] = $_POST['login']; 
$x = $_POST['login']; 
$sql = "Select * From login where username = '$x' ";
      $res = $conn->query($sql);
      $row = $res->fetch_assoc();
      $num = $res->num_rows;
      if($num != 1)
{echo '<script language="javascript">alert(" user name not valid. Enter again ");window.location.href = " php.html"</script>';}
     else
     	if ($num == 1 && $mail != $row['email'])
 {echo '<script language="javascript">alert("Email not valid. Enter again ");window.location.href = " php.html"</script>';}
else
	if($num == 1 && $mail == $row['email'])
	{header("Location:change.html");
     }
     $res->close();
$conn->close();
?>