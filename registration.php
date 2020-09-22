<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js" ></script>
<?php

session_start();
$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'online_quiz');

$name=$_POST['user'];
$pass=$_POST['password'];

$q="SELECT * FROM signin WHERE name='$name'&&password='$pass' ";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

if($num==1){
    echo "<script type='text/javascript'>
    alert('User already registered');
    window.location='login.php';
    </script>";
}
else{
    header("location:login.php");
    $qy="INSERT INTO signin(name,password) VALUES('$name','$pass')";
    mysqli_query($con,$qy);
}

?>