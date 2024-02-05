// script.js

function validateSignupForm() {
  var username = document.getElementById("signupusername").value;
  var password = document.getElementById("signuppass").value;
  var confirmPassword = document.getElementById("confirmpass").value;
  var city = document.getElementById("signupcity").value;
  var phone = document.getElementById("signupphone").value;
  var age = document.getElementById("signupage").value;
  var errorElement = document.getElementById("signupissue");

  // Reset error message
  errorElement.textContent = "";

  // Check if username is empty
  if (username.trim() === "") {
      errorElement.textContent = "Username cannot be empty";
      return false;
  }

  // Check if password is at least 8 characters and includes letters and numbers
  if (password.length < 8 || !(/[a-zA-Z]/.test(password)) || !(/\d/.test(password))) {
      errorElement.textContent = "Password must be at least 8 characters and include letters and numbers";
      return false;
  }

  // Check if confirm password matches
  if (password !== confirmPassword) {
      errorElement.textContent = "Passwords do not match";
      return false;
  }

  // Check if city is empty
  if (city.trim() === "") {
      errorElement.textContent = "City cannot be empty";
      return false;
  }

  // Check if phone number is valid
  var phonePattern = /^[0-9]{10}$/;
  if (!phonePattern.test(phone)) {
      errorElement.textContent = "Invalid phone number";
      return false;
  }

  // Check if age is at least 18
  if (parseInt(age) < 18) {
      errorElement.textContent = "Age must be at least 18";
      return false;
  }

  // Validation passed
  return true;
}
