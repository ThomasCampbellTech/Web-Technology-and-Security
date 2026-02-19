<?php

class Post extends Dbh
{

    protected function setPost($userId, $post)
    {
        $stmt = $this->connect()->prepare('INSERT INTO posts (users_id, post_content) VALUES (?, ?);');


        if (!$stmt->execute(array($userId, $post))) {
            $stmt = null;
            header("location: ..profile.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }


    public function deleteThisPost($post_id)
    {
        $sql = "DELETE FROM `posts` WHERE post_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$post_id]);
    }
}
