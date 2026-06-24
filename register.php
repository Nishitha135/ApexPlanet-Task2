<?php
include 'db.php';

if(isset($_POST['register']))
{
    $username=$_POST['username'];

    $password=password_hash($_POST['password'],PASSWORD_DEFAULT);

    $sql="INSERT INTO users(username,password)
    VALUES('$username','$password')";

    mysqli_query($conn,$sql);

    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Create Account</h2>

<form method="post">

<input type="text" name="username"
placeholder="Username" required>

<input type="password" name="password"
placeholder="Password" required>

<button name="register">Register</button>

</form>

<a href="login.php">Already have account?</a>

</div>

</body>
</html>
