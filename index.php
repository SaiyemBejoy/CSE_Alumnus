<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Alumnus of CSE(DIU-PC)</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link rel="icon" type="image/jpg" href="img/diucon.png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/index.css" rel="stylesheet">

</head>

<body>

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.php">Alumnus<?php echo " ";?><span class="color-b">(CSE-DIU)</span></a>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="events.php">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="notice-board.php">Notice Board</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="students.php">Students</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="alumnus.php">Alumnus</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
        <a type="button" href="#logreg" class="btn btn-success">
               Login/Register
        </a>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Carousel Star /-->
  <div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slider-1.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">
                      <br>Ashulia, Savar, Dhaka</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Daffodil </span> International
                      <br> University</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Permanent Campus</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slider-1.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">
                      <br>Ashulia, Savar, Dhaka</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Daffodil </span> International
                      <br> University</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Permanent Campus</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slider-1.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">
                      <br>Ashulia, Savar, Dhaka</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Daffodil </span> International
                      <br> University</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Permanent Campus</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Carousel end /-->

  <!--/ Form start /-->
  <section class="section-services section-t8"  id="logreg">
    <div class="container-fluid">
      <div class="row jumbotron">
        
        <!--start of alumni part-->
        <div class="col-md-3">
          <p><b>Log in only for Alumnus</b></p>
        </div>
        <div class="col-md-3">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal4">
            Log In
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Alumni log in form</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="alumni-login.php" method="POST">
                    <div class="form-group">
                        <label>ID</label>
                        <input name="alm_id" type="text" class="form-control" placeholder="Enter your ID" required>
                      </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input name="alm_password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password" required>
                    </div>
                    <div class="form-row">
                      <button type="submit" class="btn-success btn" name="alm_btn">Log in</button>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <p><b>Registration only for Alumnus</p>
        </div>
        <div class="col-md-3">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModa5">
            Registration
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModa5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe2" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabe2">Alumni registration form</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  
                  <form action="insert-alumni.php" method="POST">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>Name</label>
                        <input name="name" type="text" class="form-control" placeholder="Enter your name" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label>ID</label>
                        <input name="id" type="text" class="form-control" placeholder="Enter your ID" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <label>Department</label>
                      <input name="department" type="text" class="form-control" id="inputMobNo" placeholder="Enter your Department" required>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Enter DIU email" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input name="password" type="password" class="form-control" id="inputPassword4" placeholder="Enter a password" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <label>Contact Number</label>
                      <input name="contact_no" type="text" class="form-control" id="inputMobNo" placeholder="Enter your contact number" required>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Batch Number</label>
                      <input name="batch_no" type="text" class="form-control" id="inputAddress" placeholder="Enter your CSE batch number" required>
                    </div>
                    <div class="form-row">
                      <button type="submit" class="btn btn-success" name="done2">Submit</button>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>

    <!---admin-->
    <div class="container-fluid">
      <div class="row jumbotron">
        <div class="col-md-7">
          <h4 class="text-center"><b>Want to do some upgrade to the website?</b></h4>
        </div>
        <div class="col-md-3">
          <h3 class="text-center"><b>Log in as admin-></b></h3>
        </div>
        <div class="col-md-2">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal3">
            Admin Log In
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe3" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabe3">Admin Log in form</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="admin-login.php" method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input name="username" type="text" class="form-control" placeholder="Enter your username" required>
                      </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password" required>
                    </div>
                    <div class="form-row">
                      <button type="submit" class="btn-success btn">Log in</button>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Form ends /-->

  <!--/ footer Star /-->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="index.php">Home</a>
              </li>
              <li class="list-inline-item">
                <a href="events.php">Events</a>
              </li>
              <li class="list-inline-item">
                <a href="notice-board.php">Notice Board</a>
              </li>
              <li class="list-inline-item">
                <a href="students.php">Students</a>
              </li>
              <li class="list-inline-item">
                <a href="alumnus.php">Alumnus</a>
              </li>
              <li class="list-inline-item">
                <a href="contact.php">Contact</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-dribbble" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">Department of CSE (DIU-PC)</span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
            -->
            Designed by <a href="innovative.php">Innovatie</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/scrollreveal/scrollreveal.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
