<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Grabbing the data
    $userId = $_SESSION["userid"];
    $uid = $_SESSION["useruid"];
    $post = htmlspecialchars($_POST["post"]);


    // Instantiate SignupContr class
    include "../classes/dbh.classes.php";
    include "../classes/post.classes.php";
    include "../classes/post-contr.classes.php";
    $setPost = new PostContr($userId, $userUid);

    // Running error handlers and user signup
    $setPost->createPost($post);

    // Going to back to front page
    header("location: ../profile.php?error=none");
}
