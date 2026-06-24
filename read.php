<?php
include 'db.php';

$result = mysqli_query($conn,"SELECT * FROM posts ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Blog Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="main">

    <h1>Blog Dashboard</h1>


<p style="text-align:center;color:white;margin-bottom:20px;">
    Welcome, <?php echo $_SESSION['user']; ?> 👋
</p>
    <div class="top-buttons">
    <a href="add_post.php" class="add">+ Add Post</a>
    <a href="logout.php" class="logout">Logout</a>
</div>

    <?php while($row=mysqli_fetch_assoc($result)) { ?>

    <div class="card">

        <h2><?php echo $row['title']; ?></h2>

        <p><?php echo $row['content']; ?></p>

        <small><?php echo $row['created_at']; ?></small>

        <br><br>

       <a href="edit.php?id=<?php echo $row['id']; ?>" class="edit">
    Edit
</a>

        <a href="delete_post.php?id=<?php echo $row['id']; ?>"
class="delete"
onclick="return confirm('Are you sure you want to delete this post?')">
Delete
</a>

    </div>

    <?php } ?>

</div>

</body>
</html>