// Password recover function
function recover(e) {
    e.preventDefault();
    console.log("Works");

    var auth = firebase.auth();

    // Dom elements
    var emailAddress = document.getElementById("email").value;
    const alertbox = document.getElementById("alertbox");

    // console.log(emailAddress);

    // Sending reset password link to email
    auth.sendPasswordResetEmail(emailAddress)
        .then(function() {
            // Email sent success
            alertbox.classList.add("alert-success");
            alertbox.innerHTML = "Check email for password reset link...";
            alertbox.style.display = "block";
            // setTimeout(() => {
            //     alertbox.classList.remove("alert-success");
            //     alertbox.innerHTML = "";
            //     alertbox.style.display = "none";
            //     window.location.href = "/login.html";
            // }, 3000);
        })
        .catch(function(error) {
            // error happened on sending reset email
            alertbox.classList.add("alert-danger");
            alertbox.innerHTML =
                "Couldn't send password reset link. " + error.message;
            alertbox.style.display = "block";
            setTimeout(() => {
                alertbox.classList.remove("alert-danger");
                alertbox.innerHTML = "";
                alertbox.style.display = "none";
            }, 6000);
        });
}

// Event listener
document.getElementById("recoverform").addEventListener("submit", recover);
