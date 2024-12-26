<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doctor's Page</title>
    <link rel="stylesheet" href="style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  
</head>

<body>

<!-- nav start -->
<?php  include 'head.php'; ?>
 <!-- nav end -->

<!-- modal start -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Name:DR Kaneez</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Degree:MBBS MD</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
 <!--  modal end -->


  <!-- Hero Section -->
  <section class="hero-section" id="hero">
    <div class="container">
      <h1>Welcome to Our DocSphere</h1>
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
          <img src="../images/3.jpg" class="card-img-top doctor-img" alt="Doctor 1">
          <div class="card-body">
            <h5 class="card-title">Dr. John Doe</h5>
            <p class="card-text">Specialization: General Medicine</p>
           <!-- modal button  -->
           <button type="button" class="btn btn-seconday" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">view profile</button>
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
            <!-- modal button  -->
           <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">view profile</button>
            <!-- modal button end -->
          </div>
        </div>
      </div>
      <!-- Doctor 3 -->
      <div class="col-md-4">
        <div class="card doctor-card">
          <img src="../images/3.jpg" class="card-img-top doctor-img" alt="Doctor 3">
          <div class="card-body">
            <h5 class="card-title">Dr. Alice Brown</h5>
            <p class="card-text">Specialization: Cardiology</p>
            <!-- modal button  -->
           <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">view profile</button>
            <!-- modal button end -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Information Section -->
  <!-- Contact Information Section with Table -->
<section id="contact-info" class="contact-info">
  <div class="container">
    <h2 class="text-center mb-4">Contact Information</h2>
    
    <!-- Table for Contact Information -->
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Name</th>
          <th>Address</th>
          <th>Phone </th>
          <th>Email</th>
          
        </tr>
      </thead>
      <tbody>
      <tr>
      
          <td>Dr Reyaz Ahmed</td>
          <td>123 Health St., City, Country</td>
          <td>1112346544</td>
          <td>12fa@feif</td>
        </tr>
        <tr>
        <td>Dr Reyaz Ahmed</td>
          <td>123 Health St., City, Country</td>
          <td>1112346544</td>
          <td>12fa@feif</td>
        
        </tr>
        <tr>
        <td>Dr Reyaz Ahmed</td>
          <td>123 Health St., City, Country</td>
          <td>1112346544</td>
          <td>12fa@feif</td>
         
        </tr>
        <tr>
        <td>Dr Reyaz Ahmed</td>
          <td>123 Health St., City, Country</td>
          <td>1112346544</td>
          <td>12fa@feif</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

  <!-- Booking Form Section -->
  <section id="booking-form" class="booking-form">
    <div class="container">
      <h2 class="text-center mb-4">Book an Appointment</h2>
      <form>
        <div class="row">
          <div class="col-md-6">
            <div class="mb-3">
              <label for="name" class="form-label"></label>
              <input type="text" class="form-control" id="name" placeholder="Full Name"required>
            </div>
            <div class="mb-3">
              <label for="name" class="form-label"> </label>
              <input type="text" class="form-control" id="name" placeholder="Your Address"required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label"></label>
              <input type="email" class="form-control" id="email"  placeholder="Email"required>
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label"></label>
              <input type="text" class="form-control" id="phone" placeholder="Phone Number"required>
            </div>
          </div>
          <div class=" mb-3">
            <label for="appointmentTime" class="col-sm-1 col-form-label"></label>
            <div class="col">
              <input type="time" class="form-control" id="appointmentTime"  placeholder="Time Slot"required>
            </div>
          </div>

          <div class="col-md-6">
            <div class="mb-3">
              <label for="doctor" class="form-label"></label>
              <select class="form-select" id="doctor" placeholder="Select doctor"required>
                <option value="">Select a Doctor</option>
                <option value="Dr. John Doe">Dr. John Doe</option>
                <option value="Dr. Jane Smith">Dr. Jane Smith</option>
                <option value="Dr. Alice Brown">Dr. Alice Brown</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="appointment-date" class="form-label"></label>
              <input type="date" class="form-control" id="appointment-date" placeholder="Appointment Date" required>
            </div>
            <button type="submit" class="btn btn-light">Book Appointment</button>
          </div>
        </div>
      </form>
    </div>
  </section>

  <!-- footer -->
<?php  include 'footer.php'; ?>

<!-- end footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
