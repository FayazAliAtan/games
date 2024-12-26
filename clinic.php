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
 
  <!-- Hero Section -->
  <section class="hero-section" id="hero">
    <div class="container">
      <h1>Welcome to DocSphere</h1>
      <p>Your health is our priority. Meet our team of expert doctors and book your appointment today.</p>
    </div>
  </section>

  <!-- Doctor List Section -->
  <section id="doctor-list" class="container my-5">
    <h2 class="text-center mb-4">Meet Our Doctors</h2>
    <div class="row">
      <!-- Doctor 1 -->
      <div class="col-md-4">
        <div class="card doctor-card">
          <img src="../images/2.jpg" class="card-img-top doctor-img" alt="Doctor 1">
          <div class="card-body">
            <h5 class="card-title">Dr. John Doe</h5>
            <p class="card-text">Specialization: General Medicine</p>
           <!-- modal button start -->
           <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            view profile
          </button>
             <!-- modal button end -->
          </div>
        </div>
      </div>
      <!-- Doctor 2 -->
      <div class="col-md-4">
        <div class="card doctor-card">
          <img src="../images/2.jpg" class="card-img-top doctor-img" alt="Doctor 2">
          <div class="card-body">
            <h5 class="card-title">Dr. Jane Smith</h5>
            <p class="card-text">Specialization: Pediatrics</p>
            <!-- modal button start -->
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      view profile
            </button>
             <!-- modal button end -->
          </div>
        </div>
      </div>
      <!-- Doctor 3 -->
      <div class="col-md-4">
        <div class="card doctor-card">
          <img src="../images/2.jpg" class="card-img-top doctor-img" alt="Doctor 3">
          <div class="card-body">
            <h5 class="card-title">Dr. Alice Brown</h5>
            <p class="card-text">Specialization: Cardiology</p>
            <!-- modal button start -->
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                         view profile
              </button>
             <!-- modal button end -->
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- modal start -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- modal end -->
  <!-- Contact Information Section with Table for Clinic -->
  <table class="table table-bordered table-striped">
  <h2 class="text-center mb-4">Contact Information</h2>
      <thead>
        <tr>
          <th>Name</th>
          <th>Address</th>
          <th>Phone </th>
          <th>Email</th>
          <th>Working Hours</th>
          <th>Open</th>
        </tr>
      </thead>
      <tbody>
      <tr>
      
          <td>Dr Reyaz Ahmed</td>
          <td>123 Health St., City, Country</td>
          <td>1112346544</td>
          <td>12fa@feif</td>
          <td>9:00 to 5:00 PM</td>
          <td>Close</td>
        </tr>
        <tr>
        <td>Dr Reyaz Ahmed</td>
          <td>123 Health St., City, Country</td>
          <td>1112346544</td>
          <td>12fa@feif</td>
          <td>9:00 to 5:00 PM</td>
          <td>Close</td>
        </tr>
        <tr>
        <td>Dr Reyaz Ahmed</td>
          <td>123 Health St., City, Country</td>
          <td>1112346544</td>
          <td>12fa@feif</td>
          <td>9:00 to 5:00 PM</td>
          <td>Open</td>
        </tr>
        <tr>
        <td>Dr Reyaz Ahmed</td>
          <td>123 Health St., City, Country</td>
          <td>1112346544</td>
          <td>12fa@feif</td>
          <td>9:00 to 5:00 PM</td>
          <td>Open</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

  <!-- footer -->
<?php  include 'footer.php'; ?>

<!-- end footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
