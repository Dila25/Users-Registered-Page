// Function to validate the form
function validateForm(event) {
    event.preventDefault(); // Prevent form submission by default
  
    // Get form inputs
    var name = document.getElementById('name').value;
    var age = document.getElementById('age').value;
    var birthday = document.getElementById('birthday').value;
    var address = document.getElementById('address').value;
    var email = document.getElementById('email').value;
    var mobile = document.getElementById('mobile').value;
    var bloodType = document.getElementById('bloodType').value;
    var guardianName = document.getElementsByName('fullname')[0].value;
    var guardianNIC = document.getElementsByName('nic')[0].value;
    var guardianAddress = document.getElementsByName('address')[1].value;
    var guardianEmail = document.getElementsByName('email')[1].value;
    var guardianMobile = document.getElementsByName('phone').value;
  
    // Check if any field is empty
    if (
      name === '' ||
      age === '' ||
      birthday === '' ||
      address === '' ||
      email === '' ||
      mobile === '' ||
      bloodType === '' ||
      guardianName === '' ||
      guardianNIC === '' ||
      guardianAddress === '' ||
      guardianEmail === '' ||
      guardianMobile === ''
    ) {
      alert('Please fill in all fields.');
      return false;
    }
  
    // Validate mobile number (10 digits)
    var mobilePattern = /^\d{10}$/;
    if (!mobilePattern.test(mobile) || !mobilePattern.test(guardianMobile)) {
      alert('Please enter a valid 10-digit mobile number.');
      return false;
    }

    if (!mobilePattern.test(phone) || !mobilePattern.test(Mobile)) {
      alert('Please enter a valid 10-digit mobile number.');
      return false;
    }
  
    // Validate email address
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email) || !emailPattern.test(guardianEmail)) {
      alert('Please enter a valid email address [Check @ or "gmail.com"]');
      return false;
    }
  
    // Validation passed
    document.querySelector('form').submit(); // Submit the form
  }
  
  // Add event listener to the submit button
  document.getElementById('submit-btn').addEventListener('click', function(event) {
    validateForm(event);
  });
  