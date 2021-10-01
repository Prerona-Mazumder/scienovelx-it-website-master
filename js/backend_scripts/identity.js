// Checking if user is logged in or not
var userObj = "";
var database = firebase.database();
var storage = firebase.storage();
var storageRef = storage.ref();

const nameElement = document.getElementById("name");
const phoneElement = document.getElementById("phone");
const emailElement = document.getElementById("email");
const countryElement = document.getElementById("country");
const cityElement = document.getElementById("city");
const dobElement = document.getElementById("dob");
const genderElement = document.getElementById("gender");
const profilePicElement = document.getElementById("profilePic");
const fetchLoader = document.getElementById("fetch-loader");
const profileView = document.getElementById("profile-view");
profileView.style.display = "none";
firebase.auth().onAuthStateChanged(function (user) {
  if (user) {
    // User is signed in.
    // console.log(user);
    firebase
      .database()
      .ref("/users/" + user.uid)
      .once("value")
      .then((snapshot) => {
        snap = snapshot.val();
        // console.log(snap);
        const {
          name,
          phone,
          email,
          country,
          city,
          dob,
          gender,
          profilePic,
        } = snap;
        nameElement.innerText = name;
        phoneElement.innerText = phone;
        emailElement.innerText = email;
        countryElement.innerText = country;
        cityElement.innerText = city;
        dobElement.innerText = dob;
        genderElement.innerText = gender;
        // console.log(gender);

        storageRef
          .child(`profilepic/${profilePic}`)
          .getDownloadURL()
          .then(function (url) {
            profilePicElement.src = url;
            fetchLoader.style.display = "none";
            profileView.style.display = "block";
          })
          .catch(function (error) {
            // Handle any errors
          });
      })
      .catch((err) => console.log(err));
  } else {
    userObj = "";
    // No user is signed in.
    window.location.href = "./login.html";
  }
});
