<?php

session_start();

require '../conn.php';

if(isset($_SESSION['userID'])){

}else{
    header('location: pages-login.php');
    
}

$uid = $_SESSION['userID'];
$orgd = $_SESSION['orgID'];

$getdata = "SELECT * FROM `tbl_userinformation` INNER JOIN tbl_users ON tbl_userinformation.userinfoID = tbl_users.userinfoID WHERE tbl_users.userID = '$uid' ";
$getdataq = mysqli_query($conn, $getdata);
$rowdata = mysqli_fetch_array($getdataq);


?>

<!DOCTYPE html>
<html lang="en">

<head>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Scholarship',     3],
          ['Accepted Applicants',      2],
          ['Available Slots',  90],
        ]);

        var options = {
          title: 'Organization Chart'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo ucfirst($rowdata['fname']) ?> Organization</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


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
<style>
    .details-list {
      display: none;
    }
  </style>
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

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo ucfirst($rowdata['fname']) ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo ucfirst($rowdata['fname']) ?></h6>
              <span>Organization</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
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

      include('../include/sidebar-org.php');
  
  ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <!DOCTYPE html>
<html>
<head>
  <style>
    .dashboard {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-gap: 20px;
      margin-bottom: 20px;
    }

    .dashboard-card {
      background-color: #f5f5f5;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 10px;
    }

    .dashboard-card h3 {
      margin-top: 0;
      font-size: 20px;
      font-weight: bold;
    }

    .dashboard-card p {
      margin: 0;
      font-size: 16px;
    }
  </style>
</head>
<body>
  <div class="dashboard">
    <?php
    require '../conn.php';

    // Query to count active scholarship programs related to the user
    $activeScholarshipQuery = "SELECT COUNT(*) AS activeScholarships
                                FROM `tbl_scholarship` INNER JOIN tbl_organization ON tbl_scholarship.orgID = tbl_organization.orgID JOIN tbl_stype ON tbl_scholarship.stype_id = tbl_stype.stype_id
                                JOIN tbl_programlvl ON tbl_scholarship.proglvlid = tbl_programlvl.programlvl_id WHERE userID = '$uid'";


    $activeScholarshipResult = mysqli_query($conn, $activeScholarshipQuery);
    $activeScholarshipRow = mysqli_fetch_assoc($activeScholarshipResult);
    $activeScholarships = $activeScholarshipRow['activeScholarships'];
    
    // Query to count total scholars related to the user
    $totalScholarsQuery = "SELECT COUNT(*) AS totalScholars
FROM tbl_scholarship
INNER JOIN tbl_organization ON tbl_scholarship.orgID = tbl_organization.orgID
INNER JOIN tbl_programlvl ON tbl_scholarship.proglvlid = tbl_programlvl.programlvl_id
WHERE tbl_organization.userID = '$uid' AND tbl_scholarship.status = 3";

    $totalScholarsResult = mysqli_query($conn, $totalScholarsQuery);
    $totalScholarsRow = mysqli_fetch_assoc($totalScholarsResult);
    $totalScholars = $totalScholarsRow['totalScholars'];
    
    // Query to count pending applicants related to the user
    $pendingApplicantsQuery = "SELECT COUNT(*) AS pendingApplicants FROM tbl_scholarship
LEFT JOIN tbl_stype ON tbl_scholarship.stype_id = tbl_stype.stype_id
LEFT JOIN tbl_organization ON tbl_organization.orgID = tbl_scholarship.orgID
JOIN tbl_programlvl ON tbl_scholarship.proglvlid = tbl_programlvl.programlvl_id
JOIN tbl_scholars ON tbl_scholars.scholarshipID = tbl_scholarship.scholarshipID
WHERE tbl_organization.userID = '$uid' AND tbl_scholars.status = 1";
    $pendingApplicantsResult = mysqli_query($conn, $pendingApplicantsQuery);
    $pendingApplicantsRow = mysqli_fetch_assoc($pendingApplicantsResult);
    $pendingApplicants = $pendingApplicantsRow['pendingApplicants'];
    
    // Query to count rejected applicants related to the user
    $rejectedApplicantsQuery = "SELECT COUNT(*) AS rejectedApplicants FROM tbl_scholarship
INNER JOIN tbl_organization ON tbl_scholarship.orgID = tbl_organization.orgID
INNER JOIN tbl_programlvl ON tbl_scholarship.proglvlid = tbl_programlvl.programlvl_id
WHERE tbl_organization.userID = '$uid' AND tbl_scholarship.status = 0";
    $rejectedApplicantsResult = mysqli_query($conn, $rejectedApplicantsQuery);
    $rejectedApplicantsRow = mysqli_fetch_assoc($rejectedApplicantsResult);
    $rejectedApplicants = $rejectedApplicantsRow['rejectedApplicants'];
    ?>
    
    <div class="dashboard-card">
  <h3>Active Scholarship Programs</h3>
  <p><?php echo $activeScholarships; ?></p>
  <button type="button" class="btn btn-primary">View Details</button>
</div>

<div class="dashboard-card">
  <h3>Total Scholars</h3>
  <p><?php echo $totalScholars; ?></p>
  <button type="button" class="btn btn-primary">View Details</button>
</div>

<div class="dashboard-card">
  <h3>Total Pending Applicants</h3>
  <p><?php echo $pendingApplicants; ?></p>
  <button type="button" class="btn btn-primary">View Details</button>
</div>

<div class="dashboard-card">
  <h3>Rejected Applicants</h3>
  <p><?php echo $rejectedApplicants; ?></p>
  <button type="button" class="btn btn-primary">View Details</button>
</div>


  </div>
</body>

</html>


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