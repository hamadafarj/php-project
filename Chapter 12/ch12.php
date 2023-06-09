<?php
$servername="localhost";
$username="root";
$password="";
$dbname="web2_alaqsa";
$conn=mysqli_connect($servername, $username,$password, $dbname);
if(isset($_POST['submit']))
    $user_name = $_POST['uname'];
$pswrd = $_POST['psw'];
$sql = "select * from users where username=? and password=?";
$sql=mysqli_prepare($conn,$sql);
mysqli_stmt_bind_param($sql,'ss',$user_name,$pswrd);
mysqli_stmt_execute($sql);
$res=mysqli_stmt_get_result($sql);
if($res->num_rows>0){
    header("location:secret.php");
} else echo "faild";
