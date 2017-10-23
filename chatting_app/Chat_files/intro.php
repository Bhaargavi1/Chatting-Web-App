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
<link rel="stylesheet" href="../assets/css/w3css.css">
<link rel="stylesheet" href="intro_chat.css">
</head>
<body>
   <header>
       <div class ="head">
          <?php echo "Hai, Good To See You, " . $_SESSION['username'];?>
       </div>
       <h3 class = "head2">An Online Chatting Website to chat in group or message someone personally</h3>
    </header>
    <div class = "row options">
        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-8 card">
            <div class="w3-card-4 " style="width:70%;margin-left:40px">
                <img src="../assets/images/groupchat.jpg" alt="Groupchat" style="width:100%">
                <section class = "row">
                    <a href = "Group_chat/groupchat.php"> Join Group Chat</a>
                </section>
            </div>  
        </div>        
        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-8 card">
              <div class="w3-card-4" style="width:70%;margin-left:40px">
                <img src="../assets/images/message.jpg" alt="Messaging" style="width:100%">
                <section class = "row">
                    <a href = "users_display.php"> Messaging</a>
                </section> 
            </div>
        </div>
        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-8 card">
              <div class="w3-card-4" style="width:70%;margin-left:40px">
                <img src="../assets/images/profile.jpg" alt="Profile" style="width:100%">
                <section class = "row">
                    <a href = "Profile/profile.php">View My Profile</a>
                </section>
            </div>
        </div>
    </div>
<script type = "text/javascript" src = '../assets/javascript/jquery.js'></script>
<script type = "text/javascript" src = '../assets/javascript/bootstrap_min.js'></script>
</body>
</html>