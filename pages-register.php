<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Student Sign-up</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="landingpage.php" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <!-- <span class="d-none d-lg-block">NiceAdmin</span> -->
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form class="row g-3 needs-validation" method="POST" action="save-reg.php" novalidate>
                    <div class="col-12">
                      <label for="yourName" class="form-label">First Name</label>
                      <input type="text" name="fname" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your first name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourName" class="form-label">Middle Name</label>
                      <input type="text" name="mname" class="form-control" id="yourName">
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourName" class="form-label">Last Name</label>
                      <input type="text" name="lname" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your last name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourBirthdate" class="form-label">Birthdate</label>
                      <input type="date" name="bd" class="form-control" id="yourBirthdate" required>
                      <div class="invalid-feedback">Please, enter a valid birthdate (you must be at least 12 years old).</div>
                    </div>
                    
                    <script>
                      // Get a reference to the birthdate input element
                      const birthdateInput = document.getElementById('yourBirthdate');
                    
                      // Add an event listener to the birthdate input for validation
                      birthdateInput.addEventListener('input', validateBirthdate);
                    
                      function validateBirthdate() {
                        const birthdate = new Date(birthdateInput.value);
                        const today = new Date();
                        const feedback = document.querySelector('#yourBirthdate + .invalid-feedback');
                    
                        // Calculate the age by subtracting the birthdate year from the current year
                        const age = today.getFullYear() - birthdate.getFullYear();
                    
                        // Check if the calculated age is less than 12
                        if (age < 12) {
                          // Birthdate corresponds to an age less than 12 years, show an error message
                          feedback.textContent = "You must be at least 12 years old.";
                          birthdateInput.setCustomValidity('You must be at least 12 years old');
                        } else if (birthdate > today) {
                          // Birthdate is in the future, show an error message
                          feedback.textContent = "Birthdate cannot be in the future.";
                          birthdateInput.setCustomValidity('Birthdate cannot be in the future');
                        } else {
                          // Valid birthdate, remove the invalid feedback
                          feedback.textContent = '';
                          birthdateInput.setCustomValidity('');
                        }
                      }
                    </script>



                    <div class="col-12">
                      <label for="yourName" class="form-label">Gender</label>
                      <select name="gender" class="form-control" id="yourName" required>
                        <option value="">Please Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                      <div class="invalid-feedback">Please, enter your gender!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>
                    
                    <script>
                        function validatePhilippineNumber() {
                            const phoneNumberInput = document.getElementById('yourNumber');
                            const feedbackDiv = document.querySelector('#yourNumber + .invalid-feedback');
                            const phoneNumber = phoneNumberInput.value.trim();
                    
                            // Check if the number matches the Philippine mobile number format
                            if (/^(09|\+639)\d{9}$/.test(phoneNumber)) {
                                feedbackDiv.textContent = ''; // Clear the invalid feedback
                                return true; // Valid Philippine mobile number
                            } else {
                                feedbackDiv.textContent = "Please enter a valid Philippine mobile number starting with '09' or '+639'.";
                                return false; // Invalid Philippine mobile number
                            }
                        }
                    </script>
                    
                    <div class="col-12">
                        <label for="yourContact" class="form-label">Contact Number</label>
                        <input type="tel" name="contact" class="form-control" id="yourContact" required>
                        <div class="invalid-feedback">Please enter a valid Philippine mobile number!</div>
                    </div>
                    
                    <div class="col-12">
                      <label for="yourAddress" class="form-label">Address</label>
                      <input type="text" name="address" class="form-control" id="yourAddress" required>
                      <div class="invalid-feedback">Please enter your address!</div>
                    </div>

                    <!-- <div class="col-12">
                      <label for="attachment" class="form-label">Attachment</label>
                      <input type="file" name="attachment" class="form-control" id="attachment">
                      <div class="form-text">Upload your attachment (Required).</div>
                    </div> 

                    <div class="form-text">Attach proof of enrollment.</div> -->


                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please choose a username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter a valid password (at least 8 characters with 1 capital letter).</div>
                    </div>

                    



                    
                    <div class="col-12">
                      <label for="reenterPassword" class="form-label">Re-enter Password</label>
                      <input type="password" name="reenterPassword" class="form-control" id="reenterPassword" required>
                      <div class="invalid-feedback">Please re-enter your password.</div>
                    </div>
                    
                    <script>
    const passwordInput = document.getElementById('yourPassword');
    const reenterPasswordInput = document.getElementById('reenterPassword');
    const passwordFeedback = document.querySelector('#yourPassword + .invalid-feedback');
    const reenterPasswordFeedback = document.querySelector('#reenterPassword + .invalid-feedback');

    passwordInput.addEventListener('input', validatePassword);
    reenterPasswordInput.addEventListener('input', validateReenterPassword);

    function validatePassword() {
        const password = passwordInput.value;

        // Check if the password meets the criteria
        const hasMinimumLength = password.length >= 8;
        const hasCapitalLetter = /[A-Z]/.test(password);

        if (hasMinimumLength && hasCapitalLetter) {
            // Password meets the criteria, remove the invalid feedback
            passwordFeedback.textContent = '';
            passwordInput.setCustomValidity('');
        } else {
            // Password does not meet the criteria, show an error message
            passwordFeedback.textContent = "Password must be at least 8 characters with 1 capital letter.";
            passwordInput.setCustomValidity('Password requirements not met');
        }

        validateReenterPassword(); // Check the re-entered password as well
    }

    function validateReenterPassword() {
        const password = passwordInput.value;
        const reenterPassword = reenterPasswordInput.value;

        if (password === reenterPassword) {
            // Passwords match, remove the invalid feedback
            reenterPasswordFeedback.textContent = '';
            reenterPasswordInput.setCustomValidity('');
        } else {
            // Passwords don't match, show an error message
            reenterPasswordFeedback.textContent = "Passwords do not match!";
            reenterPasswordInput.setCustomValidity('Passwords do not match');
        }
    }
</script>




                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and
                            conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="pages-login.php">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>