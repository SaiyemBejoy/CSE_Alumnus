<?php
  session_start();

  if($_SESSION["username"]==true){
  }
  else
  {
   header('location:index.php');	
  }
?>

<?php
	include 'conn.php';

	if(isset($_POST['done'])){

		$s_id=$_GET['s_id'];
		$name=$_POST['name'];
    $id=$_POST['id'];
    $department=$_POST['department'];
    $email=$_POST['email'];
    $contact_no=$_POST['contact_no'];
    $batch_no=$_POST['batch_no'];

		$q = "UPDATE `students` SET s_id='$id', s_name='$name', s_department='$department', s_email='$email', s_contact_no='$contact_no', s_batch_no=$batch_no WHERE s_id='$s_id'";

		$query = mysqli_query($con,$q);

		echo "<script>location.href='admin-students.php'</script>";
	}


?>





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
      <a class="navbar-brand text-brand" href="admin-panel.php">Alumnus<?php echo " ";?><span class="color-b">(CSE-DIU)</span></a>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="admin-panel.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin-events.php">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin-notice-board.php">Notice Board</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="admin-students.php">Students</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin-alumnus.php">Alumnus</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin-contact.php">Contact</a>
          </li>
          <li>
            <form action="logout.php">
            	<button type="submit" class="btn btn-danger">Log out</button>
            </form>
          </li>
        </ul>
      </div>
        <?php echo "<b>User : <b>".$_SESSION["username"]; ?>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Update student Info</h1>
            <span class="color-text-a"><?php echo 'For id '.$_GET['s_id']; ?></span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Admin-panel</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Students/ Update
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->



<?php
    include 'conn.php';
      $s_id=$_GET['s_id'];
      $q = "select * from students WHERE s_id='$s_id'";

      $query = mysqli_query($con,$q);

      while($res = mysqli_fetch_array($query)){
          $id =$res['s_id'];
          $name =$res['s_name'];
          $department =$res['s_department'];
          $batch =$res['s_batch_no'];
          $email =$res['s_email'];
          $contact =$res['s_contact_no'];
        }
?>



  <!--/ Data table /-->
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <form method="POST">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Name</label>
                <input name="name" type="text" class="form-control" value="<?php echo $name; ?>" required>
              </div>
              <div class="form-group col-md-6">
                <label>ID</label>
                <input name="id" type="text" class="form-control" value="<?php echo $id; ?>" required>
              </div>
            </div>
            <div class="form-row">
              <label>Department</label>
              <input name="department" type="text" class="form-control" id="inputMobNo" value="<?php echo $department; ?>" required>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="inputEmail4">Email</label>
                <input name="email" type="email" class="form-control" id="inputEmail4" value="<?php echo $email; ?>" required>
              </div>
            </div>
            <div class="form-row">
              <label>Contact Number</label>
              <input name="contact_no" type="text" class="form-control" id="inputMobNo" value="<?php echo $contact; ?>" required>
            </div>
            <div class="form-group">
              <label for="inputAddress">Batch Number</label>
              <input name="batch_no" type="text" class="form-control" id="inputAddress" value="<?php echo $batch; ?>" required>
            </div>
            <div class="form-row">
              <button type="submit" class="btn btn-success" name="done">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  <!--/ Data table End /-->

  

  <!--/ footer Star /-->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
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
