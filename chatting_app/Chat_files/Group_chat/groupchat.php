<?php session_start()
?>
<!Doctype HTML>
<html lang="en-US">
<head>
<meta charset = "UTF-8">
<meta name="HandheldFriendly" content="true">
<meta name="viewport" content="width=device-width, user-scalable=yes" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Chat</title>
<link rel="stylesheet" href="../../assets/css/bootstrap.css">
<link rel="stylesheet" href="../../assets/css/chat.css">
<link rel="stylesheet" href="../../assets/css/w3css.css">
</head>
<body>
<div class = "row" style="margin-left:120px">
    <div class = "col-lg-12 col-md-12 col-sm-10 col-xs-10 chat_section" >
        <div class = "row">
            <div class = "col-lg-3 col-md-3 col-sm-4 col-xs-12 users">
                <div class = "head_users">
                    <?php echo "Hello " . $_SESSION['username']; ?>
                    <span><a class = "button" href = "../intro.php">Home</a></span>
                 </div>
                    <img src = "../../assets/images/user.png" class ="image">
                    <span class = "friends">Friends For You</span>
                <hr style="border:solid 1px black;">
                <div id = "users"></div><!-- Displaying all users-->
            </div>
            <div class = "col-lg-9 col-md-9 col-sm-8 col-xs-12 chats">
            <div class = "chat_area" id = "chat_area" >    
                <div id = "chats" ></div>
            </div>
            <section class = "submit">
                 <form action="">
                    <div class = 'row'>
                        <input type='text' name="content" id="content" placeholder = "Write your chat here and click on send " class = 'col-lg-9 col-md-9 col-sm-8 col-xs-8'/>
                        <span><button value="Send" id="post" class="post label label-primary col-lg-2 col-md-2 col-sm-3 col-xs-3">Send</button></span> 
                     </div>
                </form>
            </section>
            </div>
        </div>
    </div>
</div> 
<script type = "text/javascript" src = '../../assets/javascript/jquery.js'></script>
<script type = "text/javascript" src = '../../assets/javascript/bootstrap_min.js'></script>
<script type = "text/javascript" src = "ajax.js" ></script>  
</body>
</html>