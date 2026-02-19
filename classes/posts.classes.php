<?php

class PostsInfo extends Dbh
{

    public function getPostsInfo($userId)
    {
        $sql = "SELECT * FROM posts WHERE users_id = ? ORDER BY post_id desc";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$userId]);
        $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $posts;
    }


    public function getAllPostsInfo()
    {
        $sql = "SELECT posts.post_content, posts.users_id, posts.dtg, posts.post_id, users.users_uid FROM posts LEFT JOIN users ON posts.users_id=users.users_id ORDER BY posts.post_id desc";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([]);
        $allposts = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $allposts;
    }

    public function getAllComments($postId)
    {
        $sql = "SELECT comments.comment_content, comments.dtg, users.users_uid 
        FROM comments INNER JOIN users ON comments.users_id=users.users_id WHERE post_id = ? ORDER BY post_id desc";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$postId]);
        $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($comments as $comment) {
            echo $comment['comment_content'] . ' by ' . $comment['users_uid'] . '<br>' . $comment['dtg'] . '<br><br>';
        }
    }
}
