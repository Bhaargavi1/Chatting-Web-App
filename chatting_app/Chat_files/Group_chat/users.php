<?php 
session_start()
?>

 <?php 
$conn = new mysqli($_SESSION['name'], $_SESSION['user'], $_SESSION['pas'], $_SESSION['db']);
$get = "Select username from login";
$result = $conn->query($get);
while($row = $result->fetch_assoc()){
    if($_SESSION['username'] == $row['username']){
       echo "<div class = 'current_user'>
             <img src = '../../assets/images/user2.png' class = 'col-lg-3 col-md-4 col-sm-2  col-xs-1'>
             <span style = 'margin-left:10px' class = 'col-lg-6 col-md-7 col-sm-9 col-xs-6'>". $row['username'] .
           "</span>
            </div><br>";
    }
    else
    echo "<img src = '../../assets/images/user2.png' class = 'col-lg-3 col-md-4 col-sm-2 col-xs-1'>
          <span style = 'margin-left:10px' class = 'col-lg-6 col-md-7 col-sm-9 col-xs-6'>". $row['username'] .
        "</span>
        <br><br>";    
}
?>   
