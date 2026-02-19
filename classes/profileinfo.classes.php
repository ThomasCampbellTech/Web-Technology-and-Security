<?php

class ProfileInfo extends Dbh
{

    protected function getProfileInfo($userId)
    {
        $stmt = $this->connect()->prepare('SELECT * FROM profiles WHERE users_id = ?;');

        if (!$stmt->execute(array($userId))) {
            $stmt = null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: profile.php?error=profilenotfound");
            exit();
        }

        $profileData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $profileData;
    }

    protected function getAllProfilesInfo()
    {
        $stmt = $this->connect()->prepare('SELECT * FROM profiles LEFT JOIN users ON profiles.users_id=users.users_id ORDER BY RAND();');

        if (!$stmt->execute(array())) {
            $stmt = null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: profile.php?error=profilenotfound");
            exit();
        }

        $allProfilesData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $allProfilesData;
    }

    protected function fetchOtherProfileInfo($userId)
    {
        $stmt = $this->connect()->prepare('SELECT * FROM profiles WHERE users_id = ?;');

        if (!$stmt->execute(array($userId))) {
            $stmt = null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: profile.php?error=profilenotfound");
            exit();
        }
    }

    protected function setNewProfileInfo($bio, $contactNum, $userId)
    {
        $stmt = $this->connect()->prepare('UPDATE profiles SET profiles_bio = ?, profiles_contactNum = ? WHERE users_id = ?;');

        if (!$stmt->execute(array($bio, $contactNum, $userId))) {
            $stmt = null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected function setProfileInfo($bio, $contactNum, $userId)
    {
        $stmt = $this->connect()->prepare('INSERT INTO profiles (profiles_bio, profiles_contactNum, users_id) VALUES (?, ?, ?);');

        if (!$stmt->execute(array($bio, $contactNum, $userId))) {
            $stmt = null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }
}
