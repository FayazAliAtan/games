<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       <link rel="stylesheet" href="style.css">
    <title>DocSphere</title>
  </head>
  <body>
  
   
<!-- navbar start -->
<?php  include 'head.php'; ?>
     <!-- end of navbar -->

 <!-- carousel -->
 <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <!-- First Slide -->
      <div class="carousel-item active">
        <img src="../images/5.jpg" class="d-block w-100" alt="...">
        <div class="container">
          <div class="carousel-caption ">
            <h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <!-- Second Slide -->
      <div class="carousel-item">
        <img src="../images/4.jpg" class="d-block w-100" alt="...">
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <!-- Third Slide -->
      <div class="carousel-item">
        <img src="../images/6.jpg" class="d-block w-100" alt="...">
        <div class="container">
          <div class="carousel-caption ">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <hr class="featurette-divider">
 <!-- carousell end -->

<!-- doctors -->
<div class="container marketing">

<!-- Three columns of text below the carousel -->
<div class="row">
  <div class="col-lg-4">
    <img src="../images/1.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em"></text>

    <h2>Heading</h2>
    <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
    <!-- modal -->
    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
           About Doctor       
     </button>
<!-- modal end -->
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <img src="../images/2.jpg"  class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em"></text>

    <h2>Heading</h2>
    <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
     <!-- modal -->
     <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
     About Doctor 
</button>
<!-- modal end -->
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <img src="../images/1.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em"></text>

    <h2>Heading</h2>
    <p>And lastly this, the third column of representative placeholder content.</p>
     <!-- modal -->
     <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
     About Doctor 
</button>
<!-- modal end -->
  </div><!-- /.col-lg-4 -->
</div><!-- /.row -->


<!-- START THE FEATURETTES -->

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
    <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
  </div>
  <div class="col-md-5">
    <img src="../images/2.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em"></text>

  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
    <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
  </div>
  <div class="col-md-5 order-md-1">
    <img src="../images/6.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em"></text>

  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
    <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
  </div>
  <div class="col-md-5">
    <img src="../images/5.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em"></text>

  </div>
</div>

<hr class="featurette-divider">



</div>
 <!-- doctors end -->



<
 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus, assumenda?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-secondary">Save changes</button>
      </div>
    </div>
  </div>
</div>

 
  </div>
<!-- Appointment form -->

<div class="container-fluid">
    <div class="row image-side">
      <!-- Image Side -->
       
      <div class="col-md-6 image-side d-none d-md-block">
        <!-- Image is set as background in CSS -->
      </div>

      <!-- Form Side -->
      <div class="col-md-6 form-side">
        <h2 class="text-center mb-4 ">Appointment Form</h2>
        <form>
          <div class="row mb-3">
            <label for="fullName" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="fullName" placeholder="Enter your full name" required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="fullName" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="fullName" placeholder="Enter your Address" required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
            </div>
          </div>
         

          <div class="row mb-3">
            <label for="appointmentDate" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="appointmentDate" required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="appointmentTime" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <input type="time" class="form-control" id="appointmentTime" required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="doctorSelect" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <select class="form-select" id="doctorSelect" required>
                <option selected disabled>Select a doctor</option>
                <option value="1">Dr. John Doe</option>
                <option value="2">Dr. Jane Smith</option>
                <option value="3">Dr. Alice Brown</option>
              </select>
            </div>
          </div>

          <div class="row mb-3">
            <label for="message" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <textarea class="form-control" id="message" rows="3" placeholder="Additional message or concerns" required></textarea>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
              <button type="submit" class="btn btn-secondary">Book Appointment</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
 <!-- end of appointment -->


</main>

<!-- footer -->
<?php  include 'footer.php'; ?>

 <!-- end footer -->

    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      
  <script>
    const myModal = new bootstrap.Modal('#exampleModal', {
  keyboard: false
})
    </script>


           <!-- end  -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>