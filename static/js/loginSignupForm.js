'use strict'

$('#LoginButton').click( () => {
   $.ajax({
      type: "POST",
      url: "/controllers/login_signup.php?action=toggleLogin",
      data: "email=" + $('#email').val() + "&password=" + $('#password').val() + "&LoginSignupToggle=" + $('#LoginSignupToggle').val(),
      success: (result) => {
         if (result == 1) {
            window.location.assign('/');
         } else {
            $("#LoginAlert").html(result).show();
         }
      }
   });
});