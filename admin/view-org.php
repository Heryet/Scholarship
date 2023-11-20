<?php

session_start();

require '../conn.php';

if(isset($_SESSION['userID'])){

}else{
    header('location: pages-login.php');
    
}

$uid = $_SESSION['userID'];

$getdata = "SELECT * FROM `tbl_userinformation` INNER JOIN tbl_users ON tbl_userinformation.userinfoID = tbl_users.userinfoID WHERE tbl_users.userID = '$uid' ";
$getdataq = mysqli_query($conn, $getdata);
$rowdata = mysqli_fetch_array($getdataq);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="../assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">DS Scholarship</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">
<!-- End Messages Icon -->

      <!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo ucfirst($rowdata['fname']) ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo ucfirst($rowdata['fname']) ?></h6>
              <span>Admin</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>
          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
    
  <?php 

    if($_SESSION['userlvlID'] == "3"){
        include('../include/sidebar.php');
    }else if($_SESSION['userlvlID'] == "1"){
        include('../include/sidebar-admin.php');
    }
  
  ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Certified Organization</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Organization</a></li>
          <li class="breadcrumb-item active">Organization List</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    
    <!-- Move the filter dropdown outside the loop -->
    <div class="card">
    <div class="card-body">
        <h5 class="card-title">Organization Details</h5>
            
            <?php
            require '../conn.php';
            
            $userid = $_GET['userid'];
            $sid = $_GET['scholarshipID'];
            
            $query = "SELECT *, tbl_users.userid as 'uid' 
                      FROM `tbl_users` 
                      INNER JOIN tbl_organization ON tbl_organization.userID = tbl_users.userID 
                      INNER JOIN tbl_proofs ON tbl_proofs.proofsID = tbl_organization.proofsID 
                      INNER JOIN tbl_userinformation ON tbl_userinformation.userinfoID = tbl_users.userinfoID 
                      WHERE tbl_users.userid = $userid";
                      
            $queryscholarship = "SELECT *, 
                               tbl_users.userid AS 'uid' 
                                FROM `tbl_users` 
                                LEFT JOIN tbl_scholarship ON tbl_scholarship.orgID = tbl_users.userID 
                                LEFT JOIN tbl_organization ON tbl_organization.orgID = tbl_scholarship.orgID 
                                WHERE tbl_users.userid = $userid";

            $scholarshipq = mysqli_query($conn, $queryscholarship);
            $result = mysqli_query($conn, $query);
            
            if ($result) {
                $roworg = mysqli_fetch_assoc($result);
                $qscholarship = mysqli_fetch_assoc($scholarshipq);
            } else {
                echo "Error fetching organization details: " . mysqli_error($conn);
            }
            ?>
            <div class="details-table">
            <div class="details-row">
                <div class="details-label">ID:</div>
                <div class="details-value"><?php echo $roworg['uid']; ?></div>
            </div>
            <div class="details-row">
                <div class="details-label">Organization Name:</div>
                <div class="details-value"><?php echo ucfirst($roworg['name']); ?></div>
            </div>
            <div class="details-row">
                <div class="details-label">Company Name:</div>
                <div class="details-value"><?php echo ucfirst($roworg['company']); ?></div>
            </div>
            <div class="details-row">
                <div class="details-label">Scholarship:</div>
                <div class="details-value"><?php echo ucfirst($qscholarship['scholarshipname']); ?></div>
            </div>
            <div class="details-row">
                <div class="details-label">Email:</div>
                <div class="details-value"><?php echo $roworg['email']; ?></div>
            </div>
            <div class="details-row">
                <div class="details-label">Handler's Name:</div>
                <div class="details-value"><?php echo ucfirst($roworg['lname']) . ', ' . ucfirst($roworg['fname']); ?></div>
            </div>
            <div class="details-row">
                <div class="details-label">Gender:</div>
                <div class="details-value"><?php echo $roworg['gender']; ?></div>
            </div>
            <div class="details-row">
                <div class="details-label">Username:</div>
                <div class="details-value">@<?php echo $roworg['username']; ?></div>
            </div>
        </div>

        <div class="proofs">
            <p><strong>Proofs:</strong></p>
            <?php
            $files = json_decode($roworg['imageLoc']);
            for ($i = 0; $i < count($files); $i++) {
                echo "<a href='../uploads/" . $files[$i] . "' target='_blank'>" . $files[$i] . "</a><br>";
            }
            ?>
        </div>


        </div>
    </div>
</div>
<style>
    .card {
        border: 1px solid #ddd;
        border-radius: 12px; /* Added border-radius for rounded corners */
        margin-bottom: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #fff; /* Added background color for better contrast */
        overflow: hidden; /* Prevent content from overflowing rounded corners */
    }

    .card-body {
        padding: 20px;
    }

    .card-title {
        font-size: 1.5rem; /* Increased font size for the title */
        margin-bottom: 20px; /* Increased margin for better separation */
        color: #333; /* Set title color to a darker shade */
    }

    .details-table {
        display: flex;
        flex-direction: column;
    }

    .details-row {
        display: flex;
        margin-bottom: 15px; /* Increased margin between rows for better spacing */
    }

    .details-label {
        font-weight: bold;
        min-width: 150px; /* Increased min-width for better alignment */
        color: #555; /* Set label color to a slightly darker shade */
    }

    .details-value {
        flex-grow: 1;
        color: #333; /* Set value color to a darker shade */
    }

    .proofs p {
        margin-bottom: 15px;
        color: #555; /* Set proof text color to a slightly darker shade */
    }

    .proofs strong {
        color: #007bff; /* Blue color, you can change it */
    }

    .proofs a {
        color: #28a745; /* Green color, you can change it */
        text-decoration: none;
    }

    .proofs a:hover {
        text-decoration: underline;
    }
</style>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      <!-- &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved -->
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>