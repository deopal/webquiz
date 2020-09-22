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
    <title>home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js" ></script>
</head>
<body>
  <div class="container">

  <h2 class="text-center text-primary">WEB DEVELOPMENT QUIZ</h2>
  <br><div class="card">
  <h3 class="text-center card-header">
    You have to choose only one out of 4. Best of Luck :)
  </h3>
  </div><br>
  <div class="col-lg-8 col-md-8 col-sm-8 m-auto d-block">
  <div class="card">
<form action="check.php" method="post">
  <?php
for($i=1;$i<6;$i++){
  $q="SELECT * FROM questions WHERE q_id=$i";
  $query=mysqli_query($con,$q);

  while($rows=mysqli_fetch_array($query)){
?>
<div class="card">
  <h4 class="card-header"><?php echo $rows['question'] ?></h4>
  </div>

<?php

  $q="SELECT * FROM answers WHERE ans_id=$i";
  $query=mysqli_query($con,$q);

  while($rows=mysqli_fetch_array($query)){
?>

<div class="card-body">
<input type="radio" name="quizcheck[<?php echo $rows['ans_id'];?>]" value="<?php echo $rows['a_id'];?>">
<?php echo $rows['answer']?>

</div>

<?php
  }
}
  }
  ?>
 </div><br>
  <input type="submit" name="submit" value="submit" class="btn btn-success m-auto d-block">
  </form>
 
  </div>
  <a href="logout.php" class="btn btn-primary">Logout</a>
  </div>

  <div>
    <h5 class="text-center">©2020 RKDEO</h5>
  </div>
<script type="text/javascript">
$ (document).ready(function() {   
      if ($ .cookie("popup_1_2") == null) {
        swal.fire({
            'title':'Welcome to this Quiz portal <?php echo $_SESSION['username']?>',
            'text':'All the best',
            'type':'success',
     
        })
      $ .cookie("popup_1_2", "2");
   }
 });

    </script>
</body>
</html>