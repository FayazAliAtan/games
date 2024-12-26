<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doctor Registration</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  
</head>
<body>

 <!-- nav start -->
<?php  include 'head.php'; ?>
 <!-- nav end -->

  <!-- Doctor Registration Section -->
  <section class="registration-section" id="doctor-registration">
    <div class="container">
      <h2 class="text-center mb-4">Doctor Registration Form</h2>
      <form>
        <div class="row">
          <!-- Full Name -->
          <div class="col-md-6 mb-3">
            <label for="fullName" class="form-label"></label>
            <input type="text" class="form-control" id="fullName" placeholder="Enter full name" required>
          </div>

          <!-- Email -->
          <div class="col-md-6 mb-3">
            <label for="email" class="form-label"></label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" required>
          </div>
        </div>

        <div class="row">
          <!-- Phone Number -->
          <div class="col-md-6 mb-3">
            <label for="phone" class="form-label"></label>
            <input type="tel" class="form-control" id="phone" placeholder="Enter phone number" required>
          </div>

          <!-- Gender -->
          <div class="col-md-6 mb-3">
            <label for="gender" class="form-label"></label>
            <select class="form-select" id="gender" required>
              <option value="" selected>Select Gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
            </select>
          </div>
        </div>

        <div class="row">
          <!-- Specialization -->
          <div class="col-md-6 mb-3">
            <label for="specialization" class="form-label"></label>
            <input type="text" class="form-control" id="specialization" placeholder="Enter specialization" required>
          </div>

          <!-- Experience -->
          <div class="col-md-6 mb-3">
            <label for="experience" class="form-label"></label>
            <input type="number" class="form-control" id="experience" placeholder="Enter years of experience" required>
          </div>
        </div>

        <div class="row">
          <!-- Hospital -->
          <div class="col-md-6 mb-3">
            <label for="hospital" class="form-label"></label>
            <input type="text" class="form-control" id="hospital" placeholder="Enter hospital name" required>
          </div>

          <!-- Qualifications -->
          <div class="col-md-6 mb-3">
            <label for="qualifications" class="form-label"></label>
            <input type="text" class="form-control" id="qualifications" placeholder="Enter qualifications" required>
          </div>
        </div>

        <div class="row">
          <!-- Availability -->
          <div class="col-md-6 mb-3">
            <label for="availability" class="form-label"></label>
            <input type="text" class="form-control" id="availability" placeholder="Enter available days" required>
          </div>

          <!-- Submit Button -->
          <div class="col-md-12 mb-3 text-center">
            <button type="submit" class="btn btn-secondary">Register Doctor</button>
          </div>
        </div>
      </form>
    </div>
  </section>

 <!-- footer -->
 <?php  include 'footer.php'; ?>

<!-- end footer -->

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
