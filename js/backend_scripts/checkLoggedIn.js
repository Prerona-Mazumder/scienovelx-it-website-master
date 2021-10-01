// Checking if user is logged in or not
var userObj = "";

firebase.auth().onAuthStateChanged(function (user) {
  if (user) {
    // User is signed in.
    // console.log(user);
    userObj = user;
  } else {
    userObj = "";
    // No user is signed in.
    window.location.href = "./login.html";
  }
});
