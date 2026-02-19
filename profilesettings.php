<?php
include_once "header.php";

require_once 'includes/authorise.inc.php';
include "classes/dbh.classes.php";
include "classes/profileinfo.classes.php";
include "classes/profileinfo-view.classes.php";
$profileInfo = new ProfileInfoView();
?>







<section class="container mt-5 pt-5">
    <div class="card border-0" style="background-color: #D7DEDC;">
        <div class="card-body">
            <div class="">
                <h3>PROFILE SETTINGS</h3>
                <p>Change your bio here!</p>
                <form action="includes/profileinfo.inc.php" method="post">
                    <textarea class="form-control" name="bio" rows="10" cols="30" placeholder="Profile bio section..." value=""><?php $profileInfo->fetchBio($_SESSION["userid"]); ?></textarea>
                    <br><br>
                    <p>Change your profile page intro here!</p>
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <input class="form-control" type="text" name="contactNum" placeholder="Profile title..." value="<?php $profileInfo->fetchContactNum($_SESSION["userid"]); ?>">
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-primary col-sm-6" type="submit" name="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

</body>

</html>