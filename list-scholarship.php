<?php

    session_start();

    require 'conn.php';

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

  <title><?php echo ucfirst($rowdata['fname']) ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


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
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">DS Scholarship</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

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

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

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
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
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
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
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
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo ucfirst($rowdata['fname']." ".$rowdata['lname']) ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo ucfirst($rowdata['fname']." ".$rowdata['lname']) ?></h6>
              <span>Student</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
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

    include('include/sidebar.php');
  
  ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Certified Scholarship Programs</h1>
    </div><!-- End Page Titlessss -->
    
    <div class="containeradd">
    <div class="card">
            <div class="card-body">
              <h5 class="card-title">List of Scholarships</h5>

              </style>

              <div class="col-sm-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="filterDropdown">Filter by:</label>
                                </div>
                                <select class="form-control" id="filterDropdown">

                                    <option value="0,1,2,3">Scholarship Type </option>
                                    <option value="0">Merit-Based</option>
                                    <option value="1">Skills-Based</option>
                                    <option value="2">Needs-Based</option>
                                    <option value="2">Context-Based</option>
                                </select>
                                <div class="input-group-prepend1">
                                    <label class="input-group-text1" for="filterDropdown"></label>
                                </div>
                            </div>
                        </div>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Scholarship</th>
                    <th scope="col">Organization</th>
                    <!-- <th scope="col">Description</th>
                    <th scope="col">Requirements</th> -->
                    <th scope="col">Remaining</th>
                    <th scope="col">Option</th>
                  </tr>
                </thead>
                <tbody>
                
                  <?php

                    require 'conn.php';

                    $uid = $_SESSION['userID'];

                    $checkorg = "SELECT * FROM tbl_scholarship";
                    $checkorgq = mysqli_query($conn, $checkorg);
                    $count = 1;

                    while($roworg = mysqli_fetch_array($checkorgq)){
                        $schID = $roworg['scholarshipID'];

                        $getdatascho = "SELECT * FROM tbl_scholarship LEFT JOIN tbl_stype ON tbl_scholarship.stype_id = tbl_stype.stype_id LEFT JOIN tbl_organization ON tbl_organization.orgID = tbl_scholarship.orgID WHERE tbl_scholarship.scholarshipID = '$schID' ";

                        $getdataschoq = mysqli_query($conn, $getdatascho);

                        $countscrow2 = mysqli_fetch_array($getdataschoq);

                        $countsc = "SELECT COUNT(*) FROM `tbl_scholars` WHERE tbl_scholars.scholarshipID = '$schID' ";
                        $countscq = mysqli_query($conn, $countsc);
                        $countscrow = mysqli_fetch_array($countscq);

                  ?>

                  <tr>
                    <th scope="row"><?php echo $count; ?></th>
                    <td><?php echo ucfirst($roworg['scholarshipname'])?></td>
                    <td><?php echo ucfirst($countscrow2['name'])?></td>
                    <!-- <td><?php echo ucfirst($roworg['description'])?></td>
                    <td><?php echo ucfirst($roworg['req'])?></td> -->
                    <td><?php echo ucfirst($roworg['applicant_limit']-$countscrow['COUNT(*)'] ."/".$roworg['applicant_limit'])?></td>
                    <td>
                      <!-- <a href="view-scholarship.php?schid=<?php echo $schID ?>">View</a> -->
                      <form action="#" method="POST">
                        <a class="btn btn-primary view-scholarship btn-sm" data-bs-toggle="modal" data-bs-target="#viewScholarship<?php echo $schID; ?>">
                          <i class="fa fa-search"></i> Apply
                        </a>
                      </form>
                    </td>
                  </tr>
                  
                  <div class="modal fade" id="viewScholarship<?php echo $schID; ?>" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">APPLY SCHOLARSHIP</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                       <!-- form start -->
                      <form class="row g-2" id="quickForm" method="post" enctype="multipart/form-data" action="">
                        <!-- Heading -->
                        <div class="col-md-12">
                            <span class=" text-dark text-uppercase fs-6">
                                Applicant Information
                            </span>
                            <!-- Divider -->
                            <hr class="card-divider bg-dark">
                        </div>

                        <?php 

                            require 'conn.php';

                            $uids = $_SESSION['userID'];

                            echo $uid;
                            
                            $getdata = "SELECT *, tbl_users.userID AS 'uid' FROM `tbl_userinformation` INNER JOIN tbl_users ON tbl_users.userinfoID = tbl_userinformation.userinfoID INNER JOIN tbl_userlevel ON tbl_userlevel.userlvlID = tbl_users.userlvlID WHERE userid = '$uid' ";

                            $getdataq = mysqli_query($conn, $getdata);
                            $rowuser = mysqli_fetch_array($getdataq);

                        
                        ?>

                        <div class="col-md-4">
                          <label for="inputName5" class="form-label">First Name</label>
                          <input type="text" class="form-control" id="inputName5" value="<?php echo $rowuser['mname']?>" readonly>
                        </div>
                        <div class="col-md-4">
                          <label for="inputName5" class="form-label">Middle Name</label>
                          <input type="text" class="form-control" id="inputName5" value = "<?php echo $rowuser['mname']?>" readonly>
                        </div>
                        <div class="col-md-4">
                          <label for="inputName5" class="form-label">Last Name</label>
                          <input type="text" class="form-control" id="inputName5" value = "<?php echo $rowuser['lname']?>" readonly>
                        </div>
                        <div class="col-md-4">
                          <label for="inputName5" class="form-label">Gender</label>
                          <input type="text" class="form-control" id="inputName5" value="<?php echo $rowuser['gender']?>" readonly>
                        </div>
                        <div class="col-md-4">
                          <label for="inputName5" class="form-label">Contact</label>
                          <input type="text" class="form-control" id="inputName5" value="<?php echo $rowuser['contact']?>" readonly>
                        </div>
                        <div class="col-md-4">
                          <label for="inputName5" class="form-label">Email</label>
                          <input type="text" class="form-control" id="inputName5" value="<?php echo $rowuser['email']?>" readonly>
                        </div>
                        <div class="col-12">
                          <label for="inputAddress5" class="form-label">Address</label>
                          <input type="text" class="form-control" id="inputAddres5s" value="<?php echo $rowuser['address']?>" readonly>
                        </div>
                        <div class="col-md-12 mt-4">
                            <span class=" text-dark text-uppercase fs-6">
                                Scholarship Information
                            </span>
                            <!-- Divider -->
                            <hr class="card-divider bg-dark">
                        </div>
                        <div class="col-md-4">
                          <label for="inputName5" class="form-label">Scholarship Name</label>
                          <input type="text" class="form-control" id="inputName5" value="<?php echo ucfirst($countscrow2['name'])?>" readonly>
                        </div>
                        <div class="col-md-4">
                          <label for="inputName5" class="form-label">Scholarship Type</label>
                          <input type="text" class="form-control" id="inputName5" value = "<?php echo ucfirst($countscrow2['stype'])?>" readonly>
                        </div>
                        <div class="col-md-4">
                          <label for="inputName5" class="form-label">Organization</label>
                          <input type="text" class="form-control" id="inputName5" value = "<?php echo ucfirst($countscrow2['name'])?>" readonly>
                        </div>
                        <div class="col-md-12">
                          <label for="inputName5" class="form-label">Requirments</label>
                          <div style="padding: 10px; background-color: #ddd; border-radius: 10px">
                              <pre><?php 
                                  echo $roworg['req'];
                              ?></pre>
                          </div>
                        </div>
                        <!--
                        <div class="col-md-12">
                          <label for="inputName5" class="form-label">Attach Your Requirments</label>
                          <input type="file"  name="image" id="image" class="form-control">
                        </div>-->
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                      <?php
                      $checklist = "SELECT * FROM tbl_scholars WHERE userid = '$uid' AND scholarshipID = '$schID'  ";
                      $checklistq = mysqli_query($conn, $checklist);
                      $checklistrow = mysqli_fetch_array($checklistq);

                      $status = @$checklistrow['status'];
                      $statusmsg = "";

                      if($status == ''){
                        $statusmsg = '<a href="res-scholar.php?userid='.$uid.'&&schid='.$schID.'"class="btn btn-primary">Reserve Me</a>';
                      }else if($status == '1'){
                        $statusmsg = '<a class="btn btn-secondary" readonly>Reserved</a>';
                      }else if($status == '2'){
                        $statusmsg = '

                          <form action="save-files.php?userid='.$uid.'&&sid='.$schID.'" method="POST" enctype="multipart/form-data">
                              <h6>Send requirements:</h6>
                              <lable></label>
                              <input class="form-control" type="file" multiple="multiple" name="filesk[]" required>
                              <br>
                              <input class="btn btn-primary w-100" type="submit" value="Send">
                          </form>

                        ';
                      }else if($status == '3'){
                        $statusmsg = '<a style="padding: 10px; background-color: #ddd; border-radius: 10px" readonly>Uploaded</a>';
                      }
                      ?>

                      <?php echo $statusmsg?>
                    </div>
                  </div>
                </div>
              </div><!-- End Large Modal-->
              

                  <?php

                        $count++;

                    }
                  ?>

                </tbody>
              </table>
              <!-- End Default Table Example -->
              
              <?php
                    

                    $checkorg = "SELECT sl.scholarshipID, sl.scholarshipname, st.stype, o.name as orgname, sl.req
                                  FROM tbl_scholarship sl
                                  JOIN tbl_stype st ON sl.stype_id = st.stype_id
                                  JOIN tbl_organization o ON sl.orgID = o.orgID;";
                    $checkorgq = mysqli_query($conn, $checkorg);

                    while($roworg = mysqli_fetch_array($checkorgq)){

                      $userinfo = mysqli_query($conn, "SELECT u.userID, us.userinfoID, us.fname, us.mname, us.lname, us.gender, us.contact, us.email, us.address 
                                                      FROM tbl_users u
                                                      JOIN tbl_userinformation us ON u.userinfoID = us.userinfoID WHERE u.userID = '$uid';");
                        $rowuser = mysqli_fetch_array($userinfo);
                        $schID = $roworg['scholarshipID'];
                  ?>
              <!-- MODAL FOR APPLY APPLICATION -->
              <?php


                    }
                  ?>
            </div>
          </div>
    </div>

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
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>