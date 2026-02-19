<?php

class CommentContr extends Comments
{


    private $userId;


    public function __construct($userId)
    {

        $this->userId = $userId;
    }
    public function createComment($postID, $comment,)
    {
        if ($this->emptyInput($postID, $comment,) == false) {
            // echo "Empty input!";
            header("location: ../profile.php?error=emptyinput");
            exit();
        }



        $this->setComment($postID, $comment, $this->userId);
    }

    private function emptyInput($postID, $comment,)
    {

        if (empty($postID) || empty($comment)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
