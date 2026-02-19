<?php
include_once "header.php";
require_once 'includes/authorise.inc.php';
include "classes/dbh.classes.php";
include "classes/posts.classes.php";
include "classes/allPosts-view.classes.php";
$allpostInfo = new AllPostInfoView();
?>
<main>

    <div class="container mt-5 pt-5">
        <div class="container d-flex flex-column align-items-center">
            <h3>All users posts can be viewed here!</h3>
        </div>
        <div class="container d-flex flex-column align-items-center">

            <div class="container-fluid text-center">
                <div class="row align-items-center">
                    <?php $allpostInfo->fetchAllPostContent(); ?>
                </div>
            </div>
        </div>
    </div>
</main>