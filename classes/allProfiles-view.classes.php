<?php

class AllProfilesView extends ProfileInfo
{

    public function fetchAllProfilesInfo()
    {
        $allProfiles = $this->getAllProfilesInfo();

        foreach ($allProfiles as $row) {

            print '<div class="col-md-6 col-xl-4"><div class="card my-3">';
            print '<div class="card-body text-center"><h3>';
            print $row['users_uid'];
            print '<h3/><div class="text-secondary mt-2"> ';
            print $row['profiles_bio'];
            print '<form action="includes\otherusersProfile.inc.php" method="post">
            <input type="hidden" name="usersId" value="';
            print $row['users_id'];
            print '"><input class="btn btn-outline-info" type="submit" value="See this profile page">
        </form></div></div></div></div>';
        }
    }
}
