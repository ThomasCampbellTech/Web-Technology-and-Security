<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usersId = ($_POST["usersId"]);


    include "../classes/dbh.classes.php";
    include "../classes/otherProfiles-view.classes.php";
    $profileInfo = new OtherProfileView();

    $profileInfo->otherProfileInfo($usersId);

    header("location: ../otherUsersProfile.php?error=none");
}
