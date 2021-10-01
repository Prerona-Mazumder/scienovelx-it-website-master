// Signup function
function formSubmit(e) {
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
        .catch((e) => {
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
    .catch(function (error) {
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

firebase.auth().onAuthStateChanged(function (user) {
  if (user) {
    // User is signed in.
    window.location.href = "/";
  }
});
