<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
      <title>Happy English School (No. II)</title>
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta content="" name="keywords">
      <meta content="" name="description">
  
      <!-- Favicon -->
      <link href="image/happy-english-school-no-ii-east-delhi-logo.png" rel="icon">
  
      <!-- Google Web Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
      
      <!-- Icon Font Stylesheet -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  
      <!-- Libraries Stylesheet -->
      <link href="lib/animate/animate.min.css" rel="stylesheet">
      <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  
      <!-- Customized Bootstrap Stylesheet -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
  
      <!-- Template Stylesheet -->
      <link href="css/style.css" rel="stylesheet">
  </head>
  
  <body>
      <div class="container-xxl bg-white p-0">
          <!-- Spinner Start -->
          <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
              <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                  <span class="sr-only">Loading...</span>
              </div>
          </div>
          <!-- Spinner End -->
  
  
          <!-- Navbar Start -->
          <style>
            .small-text {
                font-size: 60%; /* Adjust the percentage to make it smaller or larger */
            }
        </style>

        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="index.php" class="navbar-brand">
                <h1 class="m-0 text-primary">
                    <a href="index.php">
                        <img src="image/happy-english-school-no-ii-east-delhi-logo.png" alt="#" />
                    </a>
                    Happy English School <span class="small-text">(No. &#8545;)</span>
                </h1>
            </a>
              <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                  <div class="navbar-nav mx-auto">
                      <a href="index.php" class="nav-item nav-link active">Home</a>
                      <a href="about.php" class="nav-item nav-link">About Us</a>
                      <a href="classes.php" class="nav-item nav-link">Classes</a>
                      <div class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                          <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="introduction.php" class="dropdown-item">School Introduction</a>
                            <a href="facility.php" class="dropdown-item">School Facilities</a>
                            <a href="prospectus.php" class="dropdown-item">School Prospectus</a>
                            <a href="registration_&_admission.php" class="dropdown-item">Registration & Admission</a>
                            <a href="gallery.php" class="dropdown-item">School Gallery</a>
                            <a href="upload_&_download.php" class="dropdown-item">Download</a>
                            <a href="leave_application.php" class="dropdown-item">Leave Application</a>
                            <a href="faqs.php" class="dropdown-item">FAQ's </a>
                          </div>
                      </div>
                      <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                  </div>
                  
              </div>
          </nav>
          <!-- Navbar End -->


        <!-- Page Header End -->
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">Result</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Result</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Career Start -->
        <h1>Uploaded Results</h1>

    <?php
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch results from the database
    $sql = "SELECT * FROM results";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<p><a href='uploads/" . $row["filename"] . "' target='_blank'>" . $row["filename"] . "</a></p>";
        }
    } else {
        echo "No results uploaded yet.";
    }

    $conn->close();
    ?>

        
            
        <!-- Career End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Get In Touch With School</h3>
                        <p class="mb-2"><a class="btn btn-link text-white-50" href="contact.php"><i class="fa fa-map-marker-alt me-3"></i>Happy English School <small>(No. II) </small>11 Block, Geeta Colony, Delhi - 110031</a></p>

                        <a  href="contact.php"><p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 011-22411111</p></a>
                        <a  href="contact.php"><p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 011-35595662</p></a>
                        <a  href="contact.php"><p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 9899103191</p></a>
                        <a  href="contact.php"><p class="mb-2"><i class="fa fa-envelope me-3"></i>hesgc1954@gmail.com</p></a>
                        <div class="d-flex pt-2">
                        
                            <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/hesgeetacolony?mibextid=LQQJ4d"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://instagram.com/hesgeetacolony?igshid=MzRlODBiNWFlZA=="><i class="fab fa-instagram"></i></a>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Quick Links</h3>
                        <a class="btn btn-link text-white-50" href="about.php">About Us</a>
                        <a class="btn btn-link text-white-50" href="contact.php">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="prospectus.php">Prospectus</a>
                        <a class="btn btn-link text-white-50" href="gallery.php">Gallery</a>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Service Reviews</h3>
                        <a class="btn btn-link text-white-50" href="https://forms.gle/aTVgj8boqV8RQHvV7">Feedback</a>
                        <a class="btn btn-link text-white-50" href="career.php">Drop Resume</a>
                        <a class="btn btn-link text-white-50" href="facility.php">Facility</a>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Photo Gallery</h3>
                        <div class="row g-2 pt-2">
                            <div class="col-4">
                                <a  href="gallery.php"><img class="img-fluid rounded bg-light p-1" src="img/classes-1.jpg" alt=""></a>
                            </div>
                            <div class="col-4">
                                <a  href="gallery.php"><img class="img-fluid rounded bg-light p-1" src="img/classes-2.jpg" alt=""></a>
                            </div>
                            <div class="col-4">
                                <a  href="gallery.php"><img class="img-fluid rounded bg-light p-1" src="img/classes-3.jpg" alt=""></a>
                            </div>
                            <div class="col-4">
                                <a  href="gallery.php"><img class="img-fluid rounded bg-light p-1" src="img/classes-4.jpg" alt=""></a>
                            </div>
                            <div class="col-4">
                                <a  href="gallery.php"><img class="img-fluid rounded bg-light p-1" src="img/classes-5.jpg" alt=""></a>
                            </div>
                            <div class="col-4">
                                <a  href="gallery.php"><img class="img-fluid rounded bg-light p-1" src="img/classes-6.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="index.php">Happy English School <small>(No. II)</small></a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="index.php">Home</a>
                                <a href="faqs.php">FAQ's</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>