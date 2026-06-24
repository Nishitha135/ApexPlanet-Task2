<?php
include 'db.php';

$msg="";

if(isset($_POST['login']))
{
$username=$_POST['username'];
$password=$_POST['password'];

$result=mysqli_query($conn,
"SELECT * FROM users WHERE username='$username'");

$user=mysqli_fetch_assoc($result);

if($user && password_verify($password,$user['password']))
{
$_SESSION['user']=$username;

header("Location: dashboard.php");
}
else
{
$msg="Invalid Login";
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Login</h2>

<p><?php echo $msg; ?></p>

<form method="post">

<input type="text" name="username"
placeholder="Username" required>

<input type="password" name="password"
placeholder="Password" required>

<button name="login">Login</button>

</form>

<a href="register.php">Create Account</a>

</div>

</body>
</html>