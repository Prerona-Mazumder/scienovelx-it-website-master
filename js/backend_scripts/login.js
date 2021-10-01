// Login function
function login(e) {
  e.preventDefault();

  // Dom elements
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;

  // Signin functuon
  firebase
    .auth()
    .signInWithEmailAndPassword(email, password)
    .then(() => {
      // sessionStorage.setItem("email", email);

      var userId = firebase.auth().currentUser.uid;
      alertbox.classList.add("alert-success");
      alertbox.innerHTML = "Login successful..";
      alertbox.style.display = "block";
      var snap;

      // Checking if user has already updated profile. If no redirect to profile page
      firebase
        .database()
        .ref("/users/" + userId)
        .once("value")
        .then((snapshot) => {
          snap = snapshot.val();
          console.log(snap);
          setTimeout(() => {
            alertbox.classList.remove("alert-success");
            alertbox.innerHTML = "";
            alertbox.style.display = "none";
            console.log(snap);

            // Redirecting
            if (snap === undefined || snap === null) {
              window.location.href = "./profile.html";
            } else {
              window.location.href = "./";
            }
          }, 500);
        })
        .catch((err) => console.log(err));
    })
    .catch(function (error) {
      // Handle Errors here.
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
document.getElementById("loginform").addEventListener("submit", login);