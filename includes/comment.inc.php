<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Grabbing the data
    $userId = $_SESSION["userid"];
    $postID = htmlspecialchars($_POST["postID"]);
    $comment = htmlspecialchars($_POST["comment"]);


    // Instantiate SignupContr class
    include "../classes/dbh.classes.php";
    include "../classes/comment.classes.php";
    include "../classes/comment-contr.classes.php";
    $setComment = new CommentContr($userId);

    // Running error handlers and user signup
    $setComment->createComment($postID, $comment);

    // Going to back to front page
    header("location: ../profile.php?error=none");
}
