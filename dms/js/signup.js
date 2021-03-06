// Your web app's Firebase configuration
var firebaseConfig = {
    apiKey: "AIzaSyCw--Xar9_tNGTFzUA2LM-ehom5H2gj4lE",
    authDomain: "Scienovelx-73f29.firebaseapp.com",
    databaseURL: "https://Scienovelx-73f29.firebaseio.com",
    projectId: "Scienovelx-73f29",
    storageBucket: "Scienovelx-73f29.appspot.com",
    messagingSenderId: "741074660527",
    appId: "1:741074660527:web:3a349b2dff1c90e035785a",
    measurementId: "G-L3CBQLMMBB"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
firebase.analytics();

// Signup function
function formSubmit(e) {
    // console.log("test");
    e.preventDefault();

    // Getting values from inputs
    const email = document.getElementById("email").value;
    const password1 = document.getElementById("password1").value;
    const password2 = document.getElementById("password2").value;
    const alertbox = document.getElementById("alertbox");

    // Checking if both passwords are same or not
    if (password1 !== password2) {
        alertbox.classList.add("alert-warning");
        alertbox.innerHTML = "Both passwords don't match";
        alertbox.style.display = "block";
        setTimeout(() => {
            alertbox.classList.remove("alert-warning");
            alertbox.innerHTML = "";
            alertbox.style.display = "none";
        }, 3000);
        return;
    }

    // Creating user account
    firebase
        .auth()
        .createUserWithEmailAndPassword(email, password1)
        .then(() => {
            // Sending email verification to user
            firebase
                .auth()
                .currentUser.sendEmailVerification()
                .then(() => {
                    // Email verification sent
                })
                .catch(e => {
                    // Email verification not sent
                });
            alertbox.classList.add("alert-success");
            alertbox.innerHTML =
                "Successfully registered... Check email for verification link";
            alertbox.style.display = "block";
            setTimeout(() => {
                alertbox.classList.remove("alert-success");
                alertbox.innerHTML = "";
                alertbox.style.display = "none";
                // window.location.href = "/login.html";
            }, 3000);
        })
        .catch(function(error) {
            // Error creating account
            // var errorCode = error.code;
            var errorMessage = error.message;
            alertbox.classList.add("alert-danger");
            alertbox.innerHTML = errorMessage;
            alertbox.style.display = "block";
            setTimeout(() => {
                alertbox.classList.remove("alert-danger");
                alertbox.innerHTML = "";
                alertbox.style.display = "none";
            }, 5000);
        });
}

// Event listener
document.getElementById("signupform").addEventListener("submit", formSubmit);
