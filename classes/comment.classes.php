<?php

class Comments extends Dbh
{

    protected function setComment($postID, $comment, $usersId)
    {
        $stmt = $this->connect()->prepare('INSERT INTO comments (post_id, comment_content, users_id) VALUES (?, ?, ?);');


        if (!$stmt->execute(array($postID, $comment, $usersId))) {
            $stmt = null;
            header("location: ..profile.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }
}
