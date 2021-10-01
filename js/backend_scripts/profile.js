// Setting database
var database = firebase.database();
// Setting storage
var storage = firebase.storage();
var profilePicFile = "";

// Update function
function update(e) {
  e.preventDefault();

  // Getting values from inputs
  const name = document.getElementById("name").value;
  const gender = document.getElementById("gender").value;
  const phone = document.getElementById("phone").value;
  const country = document.getElementById("country").value;
  const dob = document.getElementById("dob").value;
  const city = document.getElementById("city").value;

  // console.log(
  //   name,
  //   phone,
  //   dob,
  //   country,
  //   city,
  //   gender,
  //   firebase.auth().currentUser.email
  // );

  // Getting current user
  var user = firebase.auth().currentUser;

  // console.log(user.email);

  // Writing to database
  firebase
    .database()
    .ref("/users/" + user.uid)
    .set({
      email: user.email,
      name,
      phone,
      dob,
      country,
      city,
      gender,
      profilePic: profilePicFile,
    })
    .then(() => {
      // Written to db successfully
      alert("Profile updated successfully");
      // Redirecting to home pahe
      window.location.href = "./";
    })
    .catch((err) => {
      // Error writing to db
      console.log(err);
      alert("Couldn't update profile");
    });
}

function uploadPic(e) {
  e.preventDefault();
  var file = e.target.files[0];
  var storageRef = firebase
    .storage()
    .ref(`profilepic/${userObj.email}-${Date.now()}-${file.name}`);

  storageRef
    .put(file)
    .then((res) => {
      if (res.state === "success") {
        profilePicFile = res.metadata.name;
        // console.log(profilePicFile);
        alert("Profile pic updated successfully");
      }
    })
    .catch((err) => {
      alert("Couldn't update Profile pic");
    });
}

// Event listener
document.getElementById("updateform").addEventListener("submit", update);
document
  .getElementById("inputGroupFile01")
  .addEventListener("change", uploadPic);
