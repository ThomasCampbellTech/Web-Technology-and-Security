<?php

class ProfileInfoContr extends ProfileInfo
{

    private $userId;
    private $userUid;

    public function __construct($userId, $userUid)
    {
        $this->userId = $userId;
        $this->userUid = $userUid;
    }

    public function defaultProfileInfo()
    {
        $profileBio = "Tell people about yourself! Your interests, hobbies, or favorite TV show!";
        $profileContactNum = "Input your contact number here.";
        $this->setProfileInfo($profileBio, $profileContactNum, $this->userId);
    }

    public function updateProfileInfo($bio, $contactNum)
    {
        // Error handlers
        if ($this->emptyInputCheck($bio, $contactNum) == true) {
            header("location: ../profilesettings.php?error=emptyinput");
            exit();
        }

        // Update profile info
        $this->setNewProfileInfo($bio, $contactNum, $this->userId);
    }

    private function emptyInputCheck($bio, $contactNum)
    {

        if (empty($bio) || empty($contactNum)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }
}
