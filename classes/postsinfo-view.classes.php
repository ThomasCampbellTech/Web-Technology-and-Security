<?php

class PostInfoView extends PostsInfo
{

    public function fetchPostContent($userId)
    {
        $posts = $this->getPostsInfo($userId);

        foreach ($posts as $row) {

            print '<div class="container border-0" ><div class="container-flex text-center"><div class="card my-3">';
            print '<div class="card-body text-center">';
            print $row['post_content'];
            print '<div class="text-secondary mt-2">By ';
            print $_SESSION["useruid"];
            print ' on ';
            print $row['dtg'];
            print '<br><form action="includes/delete.inc.php" name="';
            print $row['post_id'];
            print '" method="post">
            <input type="hidden" name="postId" value="';
            print $row['post_id'];
            print '"><input class="btn btn-danger float-end" type="submit" name="submit" value="Delete Post"><br></form></div>';
            print '<div id="post" class="col-md-auto"><form action="includes/comment.inc.php" method="post"><input type="hidden" value="';
            print $row['post_id'];
            print '" name="postID" /><textarea class="form-control" maxlength="280" name="comment" id="postArea" placeholder="Leave a comment on this post?"></textarea><br><input type="submit" class="btn btn-primary float-end" name="submit" id="commentButton" value="Comment"><br></form></div>';
            print $this->getAllComments($row['post_id']);
            print '<br>';
            print '</div></div></div></div>';
        }
    }
}
