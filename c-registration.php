<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clinic Registration</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    
  </style>
</head>
<body>

  
  <!-- nav start -->
<?php  include 'head.php'; ?>
 <!-- nav end -->

  <!-- Clinic Registration Section -->
  <section class="registration-section" id="clinic-registration">
    <div class="container">
      <h2 class="text-center mb-4">Clinic Registration Form</h2>
      <form>
        <div class="row">
          <!-- Clinic Name -->
          <div class="col-md-6 mb-3">
            <label for="clinicName" class="form-label"></label>
            <input type="text" class="form-control" id="clinicName" placeholder="Enter clinic name" required>
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

          <!-- Address -->
          <div class="col-md-6 mb-3">
            <label for="address" class="form-label"></label>
            <input type="text" class="form-control" id="address" placeholder="Enter clinic address" required>
          </div>
        </div>

        <div class="row">
          <!-- Specialization -->
          <div class="col-md-6 mb-3">
            <label for="specialization" class="form-label"></label>
            <input type="text" class="form-control" id="specialization" placeholder="Enter specialization" required>
          </div>

          <!-- Services -->
          <div class="col-md-6 mb-3">
            <label for="services" class="form-label"></label>
            <input type="text" class="form-control" id="services" placeholder="Enter services offered" required>
          </div>
        </div>

        <div class="row">
          <!-- Website -->
          <div class="col-md-6 mb-3">
            <label for="website" class="form-label"></label>
            <input type="url" class="form-control" id="website" placeholder="Enter website URL">
          </div>

          <!-- Operating Hours -->
          <div class="col-md-6 mb-3">
            <label for="operatingHours" class="form-label"></label>
            <input type="text" class="form-control" id="operatingHours" placeholder="Enter operating hours" required>
          </div>
        </div>

        <div class="row">
          <!-- Registration Number -->
          <div class="col-md-6 mb-3">
            <label for="registrationNumber" class="form-label"></label>
            <input type="text" class="form-control" id="registrationNumber" placeholder="Enter registration number" required>
          </div>

          <!-- Submit Button -->
          <div class="col-md-12 mb-3 text-center">
            <button type="submit" class="btn btn-secondary">Register Clinic</button>
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
