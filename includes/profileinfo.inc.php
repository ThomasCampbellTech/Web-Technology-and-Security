<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_SESSION["userid"];
    $uid = $_SESSION["useruid"];
    $bio = htmlspecialchars($_POST["bio"], ENT_QUOTES, "UTF-8");
    $contactNum = htmlspecialchars($_POST["contactNum"], ENT_QUOTES, "UTF-8");


    include "../classes/dbh.classes.php";
    include "../classes/profileinfo.classes.php";
    include "../classes/profileinfo-contr.classes.php";
    $profileInfo = new ProfileInfoContr($id, $uid);

    $profileInfo->updateProfileInfo($bio, $contactNum);

    header("location: ../profile.php?error=none");
}
