<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign-Up and Sign-In</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="form-container">
    <!-- Sign-Up Form -->
    <div id="signup-form">
      <h2>Sign Up</h2>
      <form id="signUpForm" action="signup.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="name">Applicant’s Name with Initial</label>
          <input type="text" id="name" name="name" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
          <label for="cert-name">How should your name appear on the certificate?</label>
          <input type="text" id="cert-name" name="cert-name" placeholder="Enter name for certificate" required>
        </div>
        <div class="form-group">
          <label for="address">Permanent Address</label>
          <textarea id="address" name="address" rows="3" placeholder="Enter your permanent address" required></textarea>
        </div>
        <div class="form-group">
          <label for="dob">Date of Birth</label>
          <input type="date" id="dob" name="dob" required>
        </div>
        <div class="form-group">
          <label for="gender">Gender</label>
          <select id="gender" name="gender" required>
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
          </select>
        </div>
        <div class="form-group">
          <label for="nationality">Nationality</label>
          <input type="text" id="nationality" name="nationality" placeholder="Enter your nationality" required>
        </div>
        <div class="form-group">
          <label for="religion">Religion</label>
          <input type="text" id="religion" name="religion" placeholder="Enter your religion" required>
        </div>
        <div class="form-group">
          <label for="id">NIC/Driving License Number</label>
          <input type="text" id="id" name="id" placeholder="Enter your ID number" required>
        </div>
        <div class="form-group">
          <label for="contact">Contact Number (WhatsApp Number)</label>
          <input type="tel" id="contact" name="contact" placeholder="Enter your WhatsApp number" required>
        </div>
        <div class="form-group">
          <label for="home-contact">Home or Parent's Contact Number</label>
          <input type="tel" id="home-contact" name="home-contact" placeholder="Enter home or parent's contact number" required>
        </div>
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
          <label for="occupation">Occupation</label>
          <input type="text" id="occupation" name="occupation" placeholder="Enter your occupation" required>
        </div>
        <div class="form-group">
          <label for="status">Status</label>
          <input type="text" id="status" name="status" placeholder="Enter your status" required>
        </div>
        <div class="form-group">
          <label for="how-found">How did you find out about MARS TECH?</label>
          <select id="how-found" name="how-found" required>
            <option value="">Select an option</option>
            <option value="Social Media">Social Media</option>
            <option value="Friends">Friends</option>
            <option value="Family">Family</option>
          </select>
        </div>
        <div class="form-group">
          <label for="id-copy">NIC/Driving License Copy (Both Sides)</label>
          <input type="file" id="id-copy" name="id-copy" accept=".jpg,.jpeg,.png,.pdf" required>
        </div>
        <div class="form-group">
          <label for="photo">Passport Size Photo</label>
          <input type="file" id="photo" name="photo" accept=".jpg,.jpeg,.png" required>
        </div>
        <div class="form-group">
          <label for="signature">Signature (Declaration)</label>
          <input type="file" id="signature" name="signature" accept=".jpg,.jpeg,.png,.pdf" required>
        </div>
        <button type="submit">Sign Up</button>
      </form>
      <button onclick="toggleForms()">Already have an account? Sign In</button>
    </div>

    <!-- Sign-In Form -->
    <div id="signin-form" class="hidden">
      <h2>Sign In</h2>
      <form id="signInForm" action="signin.php" method="POST">
        <div class="form-group">
          <label for="email-login">Email Address</label>
          <input type="email" id="email-login" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
          <label for="password-login">Password</label>
          <input type="password" id="password-login" name="password" placeholder="Enter your password" required>
        </div>
        <button type="submit">Sign In</button>
      </form>
      <button onclick="toggleForms()">Don't have an account? Sign Up</button>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>
