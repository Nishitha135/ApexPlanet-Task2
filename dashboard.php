<?php
include 'db.php';

if(!isset($_SESSION['user']))
{
header("Location: login.php");
}

$result=mysqli_query($conn,
"SELECT * FROM posts ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="main">

<h1>Blog Dashboard</h1>

<a class="add" href="add_post.php">
Add New Post
</a>

<a class="logout" href="logout.php">
Logout
</a>

<?php while($row=mysqli_fetch_assoc($result)) { ?>

<div class="card">

<h2><?php echo $row['title']; ?></h2>

<p><?php echo $row['content']; ?></p>

<small><?php echo $row['created_at']; ?></small>

<br><br>

<a class="edit"
href="edit_post.php?id=<?php echo $row['id']; ?>">
Edit
</a>

<a class="delete"
href="delete_post.php?id=<?php echo $row['id']; ?>">
Delete
</a>

</div>

<?php } ?>

</div>

</body>
</html>