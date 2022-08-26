var login_input = document.getElementsByClassName('email_container');



function email_input(x) {
    if (x.matches) { // If media query matches
        login_input[0].value = "email or phone";
        login_input[1].value = "password";
    } else {
        login_input[0].value = "";
        login_input[1].value = "";
    }
}

var x = window.matchMedia("(max-width: 726px)")
email_input(x) // Call listener function at run time
x.addListener(email_input) // Attach listener function on state changes