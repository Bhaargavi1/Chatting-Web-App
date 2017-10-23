<?php
session_start()
?>
<!Doctype HTML>
<html lang="en-US">
<head>
<meta charset = "UTF-8">
<meta name="HandheldFriendly" content="true">
<meta name="viewport" content="width=device-width, user-scalable=yes" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Chat</title>
<link rel="stylesheet" href="../assets/css/bootstrap.css">
<link rel= "stylesheet" href="intro_chat.css">
<link rel="stylesheet" href="../assets/css/w3css.css">
</head>
<body>
    <div class ="head">
      <?php 
       echo "Hai, Good To See You, " . $_SESSION['username'];
       ?>
        <h3 class = "head2">Choose from the following to message them personally</h3>
    </div>
    <div class = "row">
    <?php
       $conn = new mysqli($_SESSION['name'], $_SESSION['user'], $_SESSION['pas'], $_SESSION['db']);
      $get = "Select person_id, username from login order by person_id";
      $result = $conn->query($get);
      while($row = $result->fetch_assoc()){
          if($row['username'] != $_SESSION['username']){
            if($row['person_id'] % 2 == 0){ 
            echo "<div class = 'col-lg-6 col-md-10 col-sm-10'>
            <div class='w3-card-4 w3-lime' style = 'width:50%; margin-left:120px;margin-top:40px;'>
                <div class='w3-container w3-center'>
                    <h3><ins>". $row['username'] . "</ins></h3>
                    <img src='../assets/images/user_profile.png' style='width:30%'>
                    <div class='w3-section'>
                      <form action = 'Message/message.php' method = 'post'>
                      <button class='w3-button w3-red' name = 'message_sent' value = '" . $row['username'] . "'>Message</button>
                      </form>    
                    </div>
                </div>
            </div>
        </div>";  
          }
          else{
              echo "<div class = 'col-lg-6 col-md-10 col-sm-10'>
            <div class='w3-card-4 w3-khaki' style = 'width:50%; margin-left:120px;margin-top:40px;'>
                <div class='w3-container w3-center'>
                    <h3><ins>" . $row['username'] . "</ins></h3>
                    <img src='../assets/images/user_profile2.png' style='width:30%'>
                    <div class='w3-section'>
                       <form action = 'Message/message.php' method = 'post'>
                       <button class='w3-button w3-red' name = 'message_sent' value = '" . $row['username'] ."'>Message</button>
                       </form>
                    </div>
                </div>
            </div>   
        </div>";
          }  
      }
    }
    ?>
    </div>
    <script type = "text/javascript" src = '../assets/javascript/jquery.js'></script>
    <script type = "text/javascript" src = '../assets/javascript/bootstrap_min.js'></script>
    </body>
</html>