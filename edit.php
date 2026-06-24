<?php
include 'db.php';

$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM posts WHERE id='$id'");

$row = mysqli_fetch_assoc($result);

if(!$row){
    die("Post not found");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>Edit Post</h2>

    <form method="post">

        <input type="text"
        name="title"
        value="<?php echo $row['title']; ?>"
        required>

        <textarea
        name="content"
        rows="5"
        required><?php echo $row['content']; ?></textarea>

        <button type="submit" name="update">
            Update Post
        </button>

    </form>

</div>

</body>
</html>