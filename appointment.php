<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book an Appointment</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  
</head>
<body>
<!-- nav start -->
<?php  include 'head.php'; ?>
 <!-- nav end -->
  <!-- Appointment Section -->
  <section class="appointment-section" id="appointment">
    <div class="container">
      <h2 class="text-center mb-4">Book an Appointment</h2>
      
      <!-- Appointment Form -->
      <form>
        <div class="row">
          <!-- Name -->
          <div class="col-md-6 mb-3">
            <label for="fullName" class="form-label"></label>
            <input type="text" class="form-control" id="fullName" placeholder="Enter your full name" required>
          </div>
          <!-- address -->
          <div class="col-md-6 mb-3">
            <label for="fullName" class="form-label"></label>
            <input type="text" class="form-control" id="fullName" placeholder="Enter your Address" required>
          </div>
          <!-- Email -->
          <div class="col-md-6 mb-3">
            <label for="email" class="form-label"></label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
          </div>
        </div>

        <div class="row">
          <!-- Phone Number -->
          <div class="col-md-6 mb-3">
            <label for="phone" class="form-label"></label>
            <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required>
          </div>

          <!-- Appointment Date -->
          <div class="col-md-6 mb-3">
            <label for="appointmentDate" class="form-label"></label>
            <input type="date" class="form-control" id="appointmentDate" required>
          </div>
        </div>

        <div class="row">
          <!-- Appointment Time -->
          <div class="col-md-6 mb-3">
            <label for="appointmentTime" class="form-label"></label>
            <input type="time" class="form-control" id="appointmentTime" required>
          </div>

          <!-- Select Doctor -->
          <div class="col-md-6 mb-3">
            <label for="doctor" class="form-label"></label>
            <select class="form-select" id="doctor" required>
              <option selected>Select Doctor</option>
              <option value="1">Dr. John Doe - General Medicine</option>
              <option value="2">Dr. Jane Smith - Pediatrics</option>
              <option value="3">Dr. Alice Brown - Cardiology</option>
            </select>
          </div>
        </div>

        <!-- Message -->
        <div class="mb-3">
          <label for="message" class="form-label">Additional Message (Optional)</label>
          <textarea class="form-control" id="message" rows="3" placeholder="Enter any additional details or requests"></textarea>
        </div>

        <!-- Submit Button -->
        <div class="d-grid gap-2 col-6 mx-auto">
          <button type="submit" class="btn btn-secondary">Book Appointment</button>
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
