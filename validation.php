<?php

session_start();

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'online_quiz');

$name=$_POST['user'];
$pass=$_POST['password'];

$q="SELECT * FROM signin WHERE name='$name' && password='$pass' ";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

if($num==1){
$_SESSION['username']=$name;
header("location:home.php");
}
else{
    header("loaction:login.php");
}

?>