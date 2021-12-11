<?php
    include ('../models/server.php');

    function display_tweet_box() {
        if ($_SESSION['id'] > 0) {
            echo '<div id="tweetsuccess" class="alert alert-success">Your tweet was posted successfully.
                     </div>
                    <div id="tweetfail" class="alert alert-danger"></div>
                    <div class="form">
                        <div class="form-group">
                            <textarea class="form-control" id="tweetcontent" name="tweetcontent" style="margin-bottom: 10px" placeholder="New Tweet..."></textarea>
                        </div>
                        <button type="submit" id="posttweetbutton" name="posttweetbutton" class="btn btn-primary">Post</button>
                    </div>';
        }
    }
