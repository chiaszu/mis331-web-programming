function show_email() {
    var passcode = prompt("Enter passcode to show email: ");
    if (passcode == "web") {
        var email_button = document.getElementById("email_button");
        email_button.style.display= "none";
        var email = document.getElementById("email");
        email.style.display = null;
    }else {
        alert("sorry, incorrect passcode.");
    }
}