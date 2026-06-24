<?php
include 'db.php';

if(isset($_POST['submit']))
{
    $title=$_POST['title'];
    $content=$_POST['content'];

    mysqli_query($conn,
    "INSERT INTO posts(title,content)
    VALUES('$title','$content')");

    header("Location: read.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Post</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>Add New Post</h2>

    <form method="post">

        <input type="text" name="title" placeholder="Title" required>

        <textarea name="content" rows="5"
        placeholder="Write your post here..." required></textarea>

        <button type="submit" name="submit">
            Add Post
        </button>

    </form>

</div>

</body>
</html>