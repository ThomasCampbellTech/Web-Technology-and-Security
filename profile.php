<?php
include_once "header.php";
require_once 'includes/authorise.inc.php';
include "classes/dbh.classes.php";
include "classes/profileinfo.classes.php";
include "classes/profileinfo-view.classes.php";
include "classes/posts.classes.php";
include "classes/postsinfo-view.classes.php";
$profileInfo = new ProfileInfoView();
$postInfo = new PostInfoView();
?>


<!-- Profile area-->
<section class="container my-5 py-4 " style="border-radius: 10px; background-color: #5c6784; color:#aaa;">
    <div class="container-fluid text-center">
        <br>
        <h3 style="color: #aaa;">Welcome to your page <?php echo $_SESSION["useruid"]; ?></h3><br>
        <p><?php
            $profileInfo->fetchBio($_SESSION["userid"]);
            ?>
        </p>
        <p><?php echo $_SESSION["useruid"]; ?>s contact details <?php $profileInfo->fetchContactNum($_SESSION["userid"]);; ?></p>
        <a class="btn btn-outline-info" href="profilesettings.php" class="">PROFILE SETTINGS</a>
    </div>
</section>
<!-- post area -->
<main>
    <div class="container card border-0" style="background-color: aliceblue;">
        <div class="container-fluid text-center card-body">
            <form action="includes/post.inc.php" method="post">
                <input type="hidden" name="id" id="id" value="<?php echo $_SESSION["userid"]; ?>" />
                <textarea style="height: 100px" class="form-control border-0" " maxlength=" 280" name="post" id="postArea" placeholder="Whats on your mind?"></textarea>
                <input class="btn btn-primary float-end" type="submit" name="submit" id="postButton" value="Post">
                <br>
            </form>
        </div>
    </div>
    <div>
        <?php $postInfo->fetchPostContent($_SESSION["userid"]); ?>
    </div>
</main>
<footer class="text-center mt-5">
    Copyright &copy; 2023
</footer>


</body>

</html>