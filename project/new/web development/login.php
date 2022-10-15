<!DOCTYPE html>
<html>
<head>
<title>Math4you</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" href="images/logo.png">

<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


<style type="text/css">
body{
background: linear-gradient(rgba(0, 0, 50, 0.5),rgba(0, 0, 50, 0.5)),url(login.jpg);
background-size: cover;
background-position: center;
color: white;
}

.login-box{
max-width:  700px;
float: none;
margin: 150px auto;

}

</style>
</head>

<body>

<p><a href="index.php"><i class="w3-jumbo w3-spin fa fa-home"></i></a></p>

<div class="container">
<div class="login-box">
<div class="row">

<div class="col-md-6">
<h2>Login Here</h2>
<form action="validation.php" method="post">
 <div class="form-group">
  <label>Username</label>
  <input type="text" name="user" class="form-control" required>
 </div>
 <div class="form-group" >
 <label>Password</label>
 <input type="password" name="password" class="form-control" required>
 </div>
 <button type="submit" class="btn btn-primary"> Login </button>
  </form>
</div>


<div class="col-md-6">
<h2>Register Here</h2>
<form action="registration.php" method="post">
 <div class="form-group" >
  <label>Username</label>
  <input type="text" name="user" class="form-control" required>
 </div>
 <div class="form-group" >
 <label>Password</label>
 <input type="password" name="password" class="form-control" required>
 </div>
 <button type="submit" class="btn btn-primary"> Register </button>
  </form>
</div>


</div>
</div>
</div>
</body>
</html>