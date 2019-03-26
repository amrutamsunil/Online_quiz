<?php

include ('dbconfig.php');
session_start();
extract($_POST);
if(isset($ok)) {
    if(($uname=="admin")&&($pswd=="sunil")){
        header('location:scoreboard.php');
    }

    $query = "select id,logged_in,que_set from users where username='$uname' and password='$pswd' ";
    $temp = mysqli_query($conn, $query);
    $r = mysqli_num_rows($temp);
    $data=mysqli_fetch_array($temp);
    $_SESSION['user']=$data[0];
    $_SESSION['q_set']=$data[2];
    $check_=mysqli_query($conn,"select id from users where attempt=1 and id=".$_SESSION['user']." ");
    $chk_=mysqli_num_rows($check_);
    if($chk_ == true){
        echo "<script>alert('You have already submitted');</script> ";
        header('location:thankyou.php');
    }
    else if ($r == true) {
        $log_count = $data[1]+1;
        $query = "update users set logged_in=$log_count where id=".$_SESSION['user']." ";
        mysqli_query($conn,$query);
        header ('location:details.php');
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>login</title>
    <link rel="stylesheet" href="lib/login.css" type="text/css"/>
    <script src="lib/bootstrap/css/bootstrap.min.css"></script>
    <script src="lib/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div id="formFooter">
            <h3><b>LOGIN</b></h3>
        </div>
        <br/>
        <!-- Login Form -->
        <form method="post">
            <input type="text"  class="fadeIn second" name="uname" placeholder="Username">
            <input type="text"  class="fadeIn third" name="pswd" placeholder="Password">
            <input type="submit" name="ok" class="fadeIn fourth" value="Log In">
        </form>
        <div id="formFooter">
        </div>
    </div>
</div>
</body>
<script>
document.onfullscreenchange = function ( event ) {

    document.documentElement.requestFullscreen();
};
</script>
</html>
