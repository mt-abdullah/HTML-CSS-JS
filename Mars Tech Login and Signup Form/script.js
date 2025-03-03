// Toggle between Sign-Up and Sign-In forms
function toggleForms() {
    const signupForm = document.getElementById('signup-form');
    const signinForm = document.getElementById('signin-form');
  
    // Toggle visibility
    signupForm.classList.toggle('hidden');
    signinForm.classList.toggle('hidden');
  }
  
  // Handle form submissions
  document.getElementById('signUpForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    // Collect form data
    const formData = new FormData(this);
  
    // Send data to the server via AJAX
    fetch('signup.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.text())
    .then(data => {
      document.getElementById('signup-message').textContent = data;
    })
    .catch(error => {
      document.getElementById('signup-message').textContent = "An error occurred. Please try again.";
      console.error('Error:', error);
    });
  });
  
  document.getElementById('signInForm').addEventListener('submit', function(event) {
    event.preventDefault();
  
    // Collect form data
    const formData = new FormData(this);
  
    // Send data to the server via AJAX
    fetch('signin.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.text())
    .then(data => {
      document.getElementById('signin-message').textContent = data;
    })
    .catch(error => {
      document.getElementById('signin-message').textContent = "An error occurred. Please try again.";
      console.error('Error:', error);
    });
  });
  