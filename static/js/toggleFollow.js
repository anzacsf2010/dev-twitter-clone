'use strict'

$('.ToggleFollow').click( () => {
    var id = $(this).data('id');
    $.ajax({
        type: "POST",
        url: "/controllers/toggle_follow.php?action=toggleFollow",
        data: "id=" + id,
        success: (result) => {
            if (result === "FOLLOW") {
                $("a[data-id='" + id + "']").html('Follow');
                console.log(result);
            } else if (result === "UNFOLLOW") {
                $("a[data-id='" + id + "']").html('Unfollow');
                console.log(result);
            }
        }
    });
});