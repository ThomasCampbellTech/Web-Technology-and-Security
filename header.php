<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!--<link rel="stylesheet" href="style.css">-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="app.css">

</head>

<body>


    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container-fluid">
            <div class="navbar-brand">
                <h3>FriendZone</h3>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#expandme">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ml-auto" id="expandme">
                <div class="navbar-nav btn-group">
                    <?php
                    if (isset($_SESSION["userid"])) {

                    ?>
                        <a class="nav-item nav-link" href="allProfiles.php">See all profiles</a>
                        <a class="nav-item nav-link" href="allPosts.php">See all posts</a>
                        <a class="nav-item nav-link" href="profile.php"><?php echo $_SESSION["useruid"]; ?></a>
                        <a class="nav-item nav-link" href="includes/logout.inc.php" class="header-login-a">LOGOUT</a>
                    <?php
                    } else {
                    ?>
                        <a class="nav-item nav-link" href="#">SIGN UP</a>
                        <a class="nav-item nav-link" href="login.php" class="">LOGIN</a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </nav>