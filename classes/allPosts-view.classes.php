<?php

class AllPostInfoView extends PostsInfo
{

    public function fetchAllPostContent()
    {
        $allposts = $this->getAllPostsInfo();

        foreach ($allposts as $row) {

            print '<div class="col-md-6 col-xl-4"><div class="card my-3">';
            print '<div class="card-body text-center">';
            print $row['post_content'];
            print '<div class="text-secondary mt-2">By ';
            print $row['users_uid'];
            print ' on ';
            print $row['dtg'];
            print '<br></div>';
            print '<div id="post" class="col-md-auto"><form action="includes/comment.inc.php" method="post"><input type="hidden" value="';
            print $row['post_id'];
            print '" name="postID" /><textarea class="form-control" maxlength="280" name="comment" id="postArea" placeholder="Leave a comment on this post?"></textarea><br><input class="btn btn-outline-primary float-end" type="submit" name="submit" id="commentButton" value="Comment"><br></form></div>';
            print $this->getAllComments($row['post_id']);
            print '<br>';
            print '</div></div></div>';
        }
    }
}
