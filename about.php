<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DocSphere</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  
</head>
<body>

 <!-- nav start -->
<?php  include 'head.php'; ?>
 <!-- nav end -->
  <!-- About Us Section -->
  <section class="about-section" id="about-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2>About DocSphere</h2>
          <p>At Dr. Smith's Health Clinic, we are committed to providing high-quality medical care in a compassionate and friendly environment. Our team of experienced doctors, nurses, and staff work together to ensure that each patient receives personalized attention and the best possible care. Whether you're coming in for a routine check-up or need specialized treatment, we are here to help you maintain your health and well-being.</p>
          <p>Our clinic has been serving the community for over 10 years, and we pride ourselves on being a trusted healthcare provider. We offer a wide range of medical services, including general medicine, pediatrics, cardiology, and more. Our state-of-the-art facilities are equipped with the latest technology to ensure that our patients receive the most effective and up-to-date treatments available.</p>
        </div>
        <div class="col-lg-6">
          <img src="../images/3.jpg" class="img-fluid rounded" alt="Clinic Image">
        </div>
      </div>
    </div>
  </section>

  <!-- Our Team Section -->
  <section class="team-section" id="team">
    <div class="container">
      <h2 class="text-center mb-5">Meet Our Team</h2>
      <div class="row">
        <!-- Team Member 1 -->
        <div class="col-md-4">
          <div class="card">
            <img src="../images/3.jpg" class="card-img-top" alt="Doctor 1">
            <div class="card-body">
              <h5 class="card-title">Dr. John Doe</h5>
              <p class="card-text">General Medicine Specialist</p>
            </div>
          </div>
        </div>
        <!-- Team Member 2 -->
        <div class="col-md-4">
          <div class="card">
            <img src="../images/3.jpg" class="card-img-top" alt="Doctor 2">
            <div class="card-body">
              <h5 class="card-title">Dr. Jane Smith</h5>
              <p class="card-text">Pediatrician</p>
            </div>
          </div>
        </div>
        <!-- Team Member 3 -->
        <div class="col-md-4">
          <div class="card">
            <img src="../images/3.jpg" class="card-img-top" alt="Doctor 3">
            <div class="card-body">
              <h5 class="card-title">Dr. Alice Brown</h5>
              <p class="card-text">Cardiologist</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

   <!-- footer -->
   <?php  include 'footer.php'; ?>

<!-- end footer -->

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
