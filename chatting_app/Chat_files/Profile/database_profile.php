<?php 
session_start();
?>
<html>
<body>
<?php
$conn = new mysqli( $_SESSION["name"],$_SESSION["user"],$_SESSION["pas"],$_SESSION["db"] );
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Getting back the username and message from the chat table
$get = "Select * from ". $_SESSION['username'] .  "_rec order by id Asc";
$result = $conn->query($get);
?>
<div class = "row">
<?php  
     while($row = $result->fetch_assoc()){
            if($row['id'] % 2 == 0){ 
            echo "<div class = 'msg_receive col-lg-4 col-md-3 col-sm-8 col-xs-8'>
            <div class = 'msg_sent'>" . $row['msg_received'] . "</div><br>
            <div style = 'margin-left:160px'> From " . $row['received_from']. "</div>
            <div style = 'margin-left:110px'>" . $row['time_received'] . "</div>
          </div>";  
          }
          else 
              if($row['id'] % 3 == 0){ 
            echo "<div class = 'msg_receive col-lg-4 col-md-3 col-sm-8 col-xs-8'>
            <div class = 'msg_sent'>" . $row['msg_received'] . "</div><br>
            <div style = 'margin-left:160px'> From " . $row['received_from']. "</div>
            <div style = 'margin-left:110px'>" . $row['time_received'] . "</div>
          </div><br>";  
          }
          else{
              echo "<div class = 'msg_receive col-lg-4 col-md-3 col-sm-8 col-xs-8'>
            <div class = 'msg_sent'>" . $row['msg_received'] . "</div><br>
            <div style = 'margin-left:160px'> From " . $row['received_from']. "</div>
            <div style = 'margin-left:110px'>" . $row['time_received'] . "</div>
          </div>";
          }  
      }
    ?>
</div>
<?php 
$conn->close();   
?>
</body>
</html>