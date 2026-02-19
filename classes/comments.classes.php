<?php

class Comments extends Dbh
{

    public function getCommentsStmt()
    {
        $sql = "SELECT * FROM comments";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $comments = $stmt->fetchAll();

        foreach ($comments as $comment) {

            echo $comment['comment'];
        }
    }
}
