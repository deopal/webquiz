<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loginpage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<link href="online_quiz\home.php">
<body>

<div class="container">
  <br><h1 class="text-center text-success">Welcome to Quiz world</h1><br>
<div class="row">
<div class="col-lg-6">
  <div class="card">
<h2 class="text-center card-header">Login form</h2>
<form action="validation.php" method="post">
<div class="form-group">
<label>username</label>
<input type="text" name="user" class="form-control">
</div>

<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control">
</div>

<button type="submit" class="btn btn-primary">Login</button>
</form>
</div>
</div>
<div class="col-lg-6">
  <div class="card">
<h2 class="text-center card-header">Signin form</h2>
<form action="registration.php" method="post">
<div class="form-group">
<label>Username</label>
<input type="text" name="user" class="form-control">
</div>
<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control">
</div>
<button type="submit" class="btn btn-primary">Sign Up</button>
</form>
</div>
</div>
</div>
 </div>   
</body>
</html>