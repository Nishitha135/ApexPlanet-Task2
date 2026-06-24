<?php
session_start();
include 'db.php';

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}

$message = "";

if(isset($_POST['add_post'])){

    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "INSERT INTO posts(title, content)
            VALUES('$title', '$content')";

    if($conn->query($sql)){
        $message = "Post Added Successfully!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>Create New Post</h2>

    <?php
    if($message != ""){
        echo "<p class='success'>$message</p>";
    }
    ?>

    <form method="POST">

        <input type="text"
               name="title"
               placeholder="Enter Post Title"
               required>

        <br><br>

        <textarea name="content"
                  placeholder="Enter Post Content"
                  rows="5"
                  style="width:100%;padding:10px;border-radius:8px;"
                  required></textarea>

        <br><br>

        <button type="submit" name="add_post">
            Add Post
        </button>

    </form>

    <br>

    <a href="dashboard.php">Back to Dashboard</a>

</div>

</body>
</html>