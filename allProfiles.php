<?php
include_once "header.php";
require_once 'includes/authorise.inc.php';
include "classes/dbh.classes.php";
include "classes/profileinfo.classes.php";
include "classes/allProfiles-view.classes.php";
$allpostInfo = new AllProfilesView();
?>
<main>

    <div class="container mt-5 pt-5">
        <div class="container d-flex flex-column align-items-center">
            <div class="container-fluid text-center">
                <div class="row align-items-center">
                    <?php $allpostInfo->fetchAllProfilesInfo(); ?>
                </div>
            </div>
        </div>
    </div>
</main>