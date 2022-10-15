<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<title>HOTEL WEBSITE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" href="logo.jpg">

<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<style type="text/css">
body{
background: linear-gradient(rgba(0, 0, 50, 0.5),rgba(0, 0, 50, 0.5)),url(login.jpg
);
background-size: cover;
background-position: center;
color: white;
}

.home{
max-width:  700px;
float: none;
margin: 150px auto;

}

</style>

</head>

<body>

   
<div class="home">
<h1>Welcome <?php echo $_SESSION['username']; ?></h1>

<p><a href="index.php"><i class="w3-jumbo w3-spin fa fa-home"></i></a></p>

<h3><a href="logout.php">LOGOUT<a></h3>
</div>

</body>
</html>