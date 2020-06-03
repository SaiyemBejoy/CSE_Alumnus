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
  <link href="css/style.css" rel="stylesheet">

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
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="events.php">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="notice-board.php">Notice Board</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="students.php">Students</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="alumnus.php">Alumnus</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Students</h1>
            <span class="color-text-a">Here you can find batch wise student information.</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Students
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Data table /-->
    <div class="container">
      <div class="row">
        <div class="col-lg-2">
          <button class="btn btn-success"><a href="students.php?batch=<?php echo 42; ?>" class="text-white">42nd Batch</a></button><br><hr>
          <button class="btn btn-success"><a href="students.php?batch=<?php echo 43; ?>" class="text-white">43rd Batch</a></button><br><hr>
          <button class="btn btn-success"><a href="students.php?batch=<?php echo 44; ?>" class="text-white">44th Batch</a></button><br><hr>
          <button class="btn btn-success"><a href="students.php?batch=<?php echo 45; ?>" class="text-white">45th Batch</a></button><br><hr>
          <button class="btn btn-success"><a href="students.php?batch=<?php echo 46; ?>" class="text-white">46th Batch</a></button><br><hr>
          <button class="btn btn-success"><a href="students.php?batch=<?php echo 47; ?>" class="text-white">47th Batch</a></button><br><hr>
          <button class="btn btn-success"><a href="students.php?batch=<?php echo 48; ?>" class="text-white">48th Batch</a></button><br><hr>
          <button class="btn btn-success"><a href="students.php?batch=<?php echo 49; ?>" class="text-white">49th Batch</a></button><br><hr>
          <button class="btn btn-success"><a href="students.php?batch=<?php echo 50; ?>" class="text-white">50th Batch</a></button><br><hr>
          <button class="btn btn-success"><a href="students.php?batch=<?php echo 51; ?>" class="text-white">51st Batch</a></button><br><hr>
          <button class="btn btn-success"><a href="students.php?batch=<?php echo 52; ?>" class="text-white">52nd Batch</a></button><br><hr>
          <button class="btn btn-success"><a href="students.php?batch=<?php echo 53; ?>" class="text-white">53rd Batch</a></button><br><hr>
        </div>
        <div class="col-lg-10">
          <table class="table table-striped table-responsive text-center">
            <thead>
              <tr class="bg-primary">
                <th colspan="9"><h2 class="text-white">
                Student Information Table

                <?php
                  if (isset($_GET['batch'])) {
                    $batch=$_GET['batch'];
                    echo " of batch ".$batch;
                  }
                ?>

                </h2></th>
              </tr>
              <tr class="bg-info">
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Department</th>
                <th scope="col">Batch no</th>
                <th scope="col">Email</th>
                <th scope="col">Contact no</th>
              </tr>
            </thead>

        <?php
          include 'conn.php';
            if (isset($_GET['batch'])) {
              $batch=$_GET['batch'];
              $q = "select * from students WHERE s_batch_no='$batch'";
            }else{
             $q = "select * from students";
            }
            $query = mysqli_query($con,$q);

            while($res = mysqli_fetch_array($query)){


        ?>

              <tbody>
                <tr>
                  <td><?php echo $res['s_id']; ?></td>
                  <td><?php echo $res['s_name']; ?></td>
                  <td><?php echo $res['s_department']; ?></td>
                  <td><?php echo $res['s_batch_no']; ?></td>
                  <td><?php echo $res['s_email']; ?></td>
                  <td><?php echo $res['s_contact_no']; ?></td>
                </tr>
              </tbody>
              <?php
                }
              ?>
            </table>
        </div>
      </div>
    </div>
  <!--/ Data table End /-->



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
