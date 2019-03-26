
<?php
session_start();
include ('dbconfig.php');
extract($_POST);
if(isset($_POST['sub'])){
    if($_SESSION['user']!="") {
        $a=mysqli_query($conn,"select team_name,college_name from users where id=".$_SESSION['user']." ");
        $details=mysqli_fetch_array($a);
        $clg_name=mysqli_real_escape_string($conn,$_POST['college_name']);
        $team_name=mysqli_real_escape_string($conn,$_POST['team_name']);
        if(($details[0]=="") || ($details[1]=="")){
            $query = "update users set team_name='$team_name',college_name='$clg_name' where id=".$_SESSION['user']." ";
            mysqli_query($conn,$query);
            if($_SESSION['q_set']==1){
                echo "<script>alert('Your Time Is started !! ');</script>";
                include ('quiz_set1.php');}
            elseif($_SESSION['q_set']==2){
                echo "<script>alert('Your Time Is started !! ');</script>";
                include ('quiz_set2.php');
            }
            elseif($_SESSION['q_set']==3){
                echo "<script>alert('Your Time Is started !! ');</script>";
                include ('quiz_set3.php');
            }
        }
    }

}
else {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Register</title>
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
                <h3><b>REGISTER</b></h3>
            </div>
            <br/>
            <!-- Login Form -->
            <form method="post">
                <input type="text" class="fadeIn second" name="team_name" placeholder="TEAM NAME">
                <input type="text" class="fadeIn third" name="college_name" placeholder="COLLEGE NAME">
                <input type="submit" id="s_" name="sub" class="fadeIn fourth" value="START QUIZ">
            </form>
            <div id="formFooter">
            </div>
        </div>
    </div>
    </body>
    <script>
        function disableF5(e) { if ((e.which || e.keyCode) == 116) {e.preventDefault()};
            if ((e.which || e.keyCode) == 122) {e.preventDefault();}
            if((e.which||e.keyCode)==27) {e.preventDefault()};
        };
        $(document).on("keydown", disableF5);
    </script>

    </html>
    <?php
}
?>