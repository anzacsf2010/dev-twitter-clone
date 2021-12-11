<?php
    include('controllers/display_tweets.php');
    include('controllers/display_search.php');
    include ('controllers/display_tweetbox.php');
?>
<div class="container HomeContainer">
    <div class="row">
        <div class="col-md-8">
            <h5>Timeline</h5>
            <?php display_tweets('following'); ?>
        </div>
        <div class="col-md-4">
            <?php display_search(); ?>
            <hr>
            <?php display_tweet_box(); ?>
        </div>
    </div>
</div>
