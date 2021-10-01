// Setting database
var database = firebase.database();

// Update function
function update(e) {
  e.preventDefault();
  //   console.log("works");
  grecaptcha.ready(() => {
		grecaptcha.execute('6LdJecsZAAAAAG7Y8xN4y9O4XvVH_OiObxv2vyFI', { action: 'submit' }).then(function(token) {
      const name = document.getElementById("name").value;
      const gender = document.getElementById("gender").value;
      const job_type = document.getElementById("job_type").value;
      const email = document.getElementById("email").value;
      const phone = document.getElementById("phone").value;
      const country = document.getElementById("country").value;
      const city = document.getElementById("city").value;
      const years = document.getElementById("years").value;
      const months = document.getElementById("months").value;
      const skill = document.getElementById("skill").value;
      const job_category = document.getElementById("job_category").value;
    
      console.log(
        name,
        gender,
        job_type,
        email,
        phone,
        country,
        city,
        years,
        months,
        skill,
        job_category
      );
      // Writing to database
      firebase
        .database()
        .ref("/job/")
        .push()
        .set({
          name,
          gender,
          job_type,
          email,
          phone,
          country,
          city,
          experience: {
            years,
            months,
          },
          skill,
          job_category,
        })
        .then(() => {
          // Written to db successfully
          alert("Applied for job successfully");
          // Redirecting to home pahe
          window.location.href = "./";
        })
        .catch((err) => {
          // Error writing to db
          console.log(err);
          alert("Couldn't apply for job");
        });
    }).catch(err => {
      alert('Something went wrong.Could not submit form.');
    });
	});

  // Getting values from inputs
}
// Event listener
document.getElementById("jobSearchForm").addEventListener("submit", update);
