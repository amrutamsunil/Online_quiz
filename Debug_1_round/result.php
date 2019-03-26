<?php
include ('dbconfig.php');
?>
<?php
session_start();
if(isset($_SESSION['q_set'])){
$q_set=$_SESSION['q_set'];}
extract($_POST);
print_r($_POST);
$answer_set1=array(4,3,3,1,2,3,3,2,2,3,1,2,3,4,3);
$answer_set2=array(2,3,3,1,2,3,2,4,2,3,4,4,1,4,1);
$answer_set3=array(3,3,2,1,3,1,3,1,4,1,1,2,1,1,3);


$score=0;



for($i=0;$i<23;++$i){
    if(!(isset($_POST[$i]))){$_POST[$i]=0;}
    if($q_set==1){
    if($_POST[$i]==$answer_set1[$i]){++$score;}}
    elseif ($q_set==2){
        if($_POST[$i]==$answer_set2[$i]){++$score;}
    }
    elseif ($q_set==3){
        if($_POST[$i]==$answer_set3[$i]){++$score;}
    }
}
$a=mysqli_query($conn,"select attempt from users where id=".$_SESSION['user']." ");
$atmpt=mysqli_fetch_array($a);
if(!($atmpt[0])){
    $query="update users set score=$score where id=".$_SESSION['user']." ";
    $sub=mysqli_query($conn,$query);
    if($sub){
        $query_="update users set attempt=1 where id=".$_SESSION['user']." ";
        mysqli_query($conn,$query_);
    }
    header('location:thankyou.php');

}
else{
    echo "<script>alert('Already Submitted!!');</script>";
    header('location:thankyou.php');
}



?>