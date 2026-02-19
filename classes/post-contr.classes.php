<?php

class PostContr extends Post
{

    private $userUid;
    private $userId;


    public function __construct($userId, $userUid)
    {
        $this->userUid = $userUid;
        $this->userId = $userId;
    }
    public function createPost($post)
    {
        if ($this->emptyInput($post) == false) {
            // echo "Empty input!";
            header("location: ../profile.php?error=emptyinput");
            exit();
        }


        $this->setPost($this->userId, $post);
    }

    private function emptyInput($post)
    {

        if (empty($post)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    public function deletePost($postId)
    {

        $this->deleteThisPost($postId);
    }
}
