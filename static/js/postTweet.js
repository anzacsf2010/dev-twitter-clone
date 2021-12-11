'use strict'

$('#posttweetbutton').click( () => {
    $.ajax({
        type: "POST",
        url: "/controllers/post_tweet.php?action=postTweet",
        data: "tweetcontent=" + $("#tweetcontent").val(),
        success: (result) => {
            if (result == "1") {
                $("#tweetsuccess").show();
                $("#tweetfail").hide();
            } else if (result != "") {
                $("#tweetfail").html(result).show();
                $("#tweetsuccess").hide();
            }
        }
    });
});