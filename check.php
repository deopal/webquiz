<?php

session_start();

if(!isset($_SESSION['username'])){
    header("location:login.php");
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'online_quiz');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container text-center">
    <br><br>
    <h1 class="text-center text-success text-uppercase">WEB DEVELOPMENT QUIZ</h1>
    <br><br><br><br>
    <table class="table text-center table-bordered table-hover">
    <tr>
    <th colspan="2" class="bg-dark">
    <h1 class="text-white">Results</h1>
    </th>
    </tr>
    <tr>
    <td>
    Questions Attempted
    </td>
    <?php
    if(isset($_POST['submit'])){
        if(!empty($_POST['quizcheck'])){
            $count=count($_POST['quizcheck']);

            ?>
            <td>
            
            <?php
            echo "Out of 5, you have attempted ".$count." questions.";
            ?>
            </td>
           <?php
            $result=0;
            $i=1;
            $selected=$_POST['quizcheck'];
            $q="SELECT * FROM questions";
            $query=mysqli_query($con,$q);
    
            while($rows=mysqli_fetch_array($query)){
    
                $checked=$rows['ans_id']==$selected[$i];
                if($checked){
                    $result++;
                }
                $i++;
            }?>
            <tr>
            <td>Your total score
            </td>
            <td colspan="2">
            <?php echo "your total score is ".$result."."; }
            else{
                echo "<b>Please select Atleast one option.</b>";
            }}
            ?>
            </td>
            </tr>
            <?php
            $name=$_SESSION['username'];
$finalresult="INSERT INTO user(username,totalques,correct) VALUES('$name','5','$result')";
$queryresult=mysqli_query($con,$finalresult);
?>
    </table>
    <a href="logout.php" class="btn btn-success">Logout</a>
    </div>
</body>
</html>


