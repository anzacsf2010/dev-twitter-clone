'use strict'

$('#ToggleLogin').click( () => {
    if ($('#LoginSignupToggle').val() == "1") {
        $('#LoginSignupToggle').val('0');
        $('#LoginButton').html('Sign Up');
        $('#LoginTitle').html('Sign Up');
        $('#ToggleLogin').html('Login');
    } else {
        $('#LoginSignupToggle').val('1');
        $('#LoginButton').html('Login');
        $('#LoginTitle').html('Login');
        $('#ToggleLogin').html('Sign Up');
    }
});