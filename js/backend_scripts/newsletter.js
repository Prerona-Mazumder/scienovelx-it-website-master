function newsLetterFormSubmit(e) {
  e.preventDefault();
  //   console.log("works");
  const email = document.getElementById("newsletterEmail").value;

  firebase
    .database()
    .ref("/newsletter/")
    .push({ email })
    .then((res) => {
      alert("Subscribed successfully");
    })
    .catch((err) => {
      console.log(err);
    });
}

document
  .getElementById("newsLetterForm")
  .addEventListener("submit", newsLetterFormSubmit);
