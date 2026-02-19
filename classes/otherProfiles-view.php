<?php

class OtherProfileView extends ProfileInfo
{

    public function otherProfileInfo($userId)
    {

        $otherProfile = $this->fetchOtherProfileInfo($userId);

        return $otherProfile;
    }
}
