<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $id = $_SESSION["userid"];
    $uid = $_SESSION["useruid"];
    $postId = ($_POST["postId"]);


    include "../classes/dbh.classes.php";
    include "../classes/post.classes.php";
    include "../classes/post-contr.classes.php";
    $deletePost = new PostContr($id, $uid);

    $deletePost->deletePost($postId);

    // Going to back to front page
    header("location: ../profile.php?error=none");
}
