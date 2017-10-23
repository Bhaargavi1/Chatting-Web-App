<?php 
session_start();
$conn = new mysqli( $_SESSION["name"],$_SESSION["user"],$_SESSION["pas"],$_SESSION["db"] );
$msg_send = isset($_POST['msg_send'])? $_POST['msg_send'] : '';
$user_from = $_SESSION['username'];
$user_to = $_SESSION['user_sendto'];
date_default_timezone_set("Asia/Kolkata");
$time = date('Y-m-d H:i:sa');
// Putting the message in the table
    if($msg_send != ""){
        $sql = "INSERT INTO " . $_SESSION['username'] . "_send (sending_to, msg_sent, time_sent) VALUES ('$user_to', '$msg_send','$time')" ;
        $sql2 = "INSERT INTO " . $_SESSION['user_sendto'] . "_rec (received_from, msg_received, time_received) VALUES ('$user_from', '$msg_send','$time')";
        $res = $conn->query($sql);
        $res2 = $conn->query($sql2);
    }

   $get = "Select * from " . $_SESSION['username'] . "_send where sending_to = '" . $_SESSION['user_sendto'] . "' order by id Asc " ;
    $result_msg = $conn->query($get);
   while($row = $result_msg->fetch_assoc()){
      echo "<div class = 'msg_paper'>
            <ins><b><span style = 'margin-left:20px'> To " . $_SESSION['user_sendto'] . "</span></b></ins>
            <div class = 'msg_sent'>" . $row['msg_sent'] . "</div><br>
            <div style = 'margin-left:135px'> From " . $_SESSION['username']. "</div>
            <div style = 'margin-left:90px'>" . $row['time_sent'] . "</div>
          </div>";  
   }
$conn->close();   
?>