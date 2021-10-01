function submitContactForm(e) {
	e.preventDefault();

	grecaptcha.ready(() => {
		grecaptcha.execute('6LdJecsZAAAAAG7Y8xN4y9O4XvVH_OiObxv2vyFI', { action: 'submit' }).then(function(token) {
			// Add your logic to submit to your backend server here.
			// console.log(token);
			const name = document.getElementById('name').value;
			const email = document.getElementById('email').value;
			const organisation = document.getElementById('organisation').value;
			const phone = document.getElementById('phone').value;
			const enquiryType = document.getElementById('enquiryType').value;
			const message = document.getElementById('message').value;
			// console.log(name, email, organisation, phone, enquiryType, message);

			firebase
				.database()
				.ref('/contact/')
				.push()
				.set({
					name,
					email,
					organisation,
					phone,
					enquiryType,
					message
				})
				.then(() => {
					alert('Message sent successfully');
				})
				.catch((err) => {
					alert("Couldn't send message");
				});
		}).catch(err => {
			alert('Something went wrong. Couldn nott submit form');
		});
	});
}

document.getElementById('contactform').addEventListener('submit', submitContactForm);
