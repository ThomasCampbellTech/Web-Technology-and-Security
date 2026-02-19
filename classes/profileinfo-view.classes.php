<?php

class ProfileInfoView extends ProfileInfo
{

    public function fetchBio($userId)
    {
        $profileInfo = $this->getProfileInfo($userId);

        echo $profileInfo[0]["profiles_bio"];
    }

    public function fetchContactNum($userId)
    {
        $profileInfo = $this->getProfileInfo($userId);

        echo $profileInfo[0]["profiles_contactNum"];
    }
}
