<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> WELCOME PAGE </title>
    </head>
<body>
 <?php
session_start();
$_SESSION["name"] = 'localhost';
$_SESSION["user"] = 'root';
$_SESSION["pas"] = '@kittucse';
$_SESSION["db"] = 'webchat_1';
$conn = new mysqli( $_SESSION["name"],$_SESSION["user"],$_SESSION["pas"],$_SESSION["db"] );
$pass = $_POST['pass12']; 
$_SESSION['username'] = $_POST['loginid'];  
$username = $_SESSION['username'] ;
      $sql = "Select * From login where username = '$username'";
      $res = $conn->query($sql);
      $row = $res->fetch_assoc();
      $num = $res->num_rows;
      if($num !=1)
        {echo '<script language="javascript">alert(" user name not valid. Please enter again ");window.location.href = "php.html"</script>';}
      else
        if($num == 1 && $pass != $row['pass'])
         {echo '<script language="javascript">alert("Password invalid. Try again");window.location.href = "php.html"</script>';}
         else 
        if($num == 1 && $pass == $row['pass'])
         {echo '<script language="javascript">alert("successful");window.location.href = "phpintro.html"</script>';
           $_SESSION["username"] = $username;
           $_SESSION['pswd'] = $pass; 
         }
        
        $res->close();
        $conn->close();
  ?>  
</body>
</html>         
