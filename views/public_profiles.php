<?php
    include('controllers/display_tweets.php');
    include('controllers/display_search.php');
    include ('controllers/display_users.php');
    include ('controllers/display_tweetbox.php');
?>
<div class="container HomeContainer">
    <div class="row">
        <div class="col-md-8">
            <?php if ($_GET['userid']) { ?>
                <?php display_tweets($_GET['userid']); ?>
            <?php } else { ?>
                <h5>Active Users</h5>
                <?php display_users();?>
            <?php } ?>
        </div>
        <div class="col-md-4">
            <?php display_search(); ?>
            <hr>
            <?php display_tweet_box(); ?>
        </div>
    </div>
</div>
