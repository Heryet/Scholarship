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
  

  <title>List Scholarships</title>
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
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">DS Scholarship</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

<!-- End Search Bar -->

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

          <!--<a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">-->
          <!--  <i class="bi bi-chat-left-text"></i>-->
          <!--  <span class="badge bg-success badge-number">3</span>-->
          <!--</a><!-- End Messages Icon -->

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
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <!--<li>-->
            <!--  <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">-->
            <!--    <i class="bi bi-question-circle"></i>-->
            <!--    <span>Need Help?</span>-->
            <!--  </a>-->
            <!--</li>-->
            <!--<li>-->
            <!--  <hr class="dropdown-divider">-->
            <!--</li>-->

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

              <div class="">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="filterDropdown">Filter by:</label>
                                </div>
                                <form id="yourFormId" method="get" action="your_action.php">
                                <select class="form-control" id="filterDropdown" onchange="updateUrlParams()">
                                    <?php
                                    
                                        $stypename = "";
                                        
                                        if($_GET['stype'] == "1"){
                                            $stypename = "Merit-Based";
                                        }else if($_GET['stype'] == "2"){
                                            $stypename = "Skills-Based";
                                        }else if($_GET['stype'] == "3"){
                                            $stypename = "Context-Based";
                                        }else if($_GET['stype'] == "4"){
                                            $stypename = "Needs-Based";
                                        }
                                        
                                        if($_GET['stype'] == ""){
                                            echo '<option value="" disabled selected>Scholarship Type</option>';
                                            
                                        }else{
                                            
                                            echo '<option value="" disabled selected style="color: red">'.$stypename.'</option>';
                                            echo '<option value="" >Display All</option>';
                                        }
                                    
                                    ?>
                                    
                                    <option value="1">Merit-Based</option>
                                    <option value="2">Skills-Based</option>
                                    <option value="3">Context-Based</option>
                                    <option value="4">Needs-Based</option>
                                    
                                    
                                </select>
                                
                                
                            </form>
                                
                                <!-- Add this code inside your form, below the scholarship type dropdown -->
                              <div class="input-group" style="width: 10%">
                                <div class="input-group-prepend">
                                </div>
                                <select class="form-control" id="programLvlDropdown"  onchange="filterTableByProgramLevel()">
                                    <option value="" disabled selected>-Program Level-</option>
                                    <option value="College">College</option>
                                    <option value="High School">High School</option>
                                    <option value="Technical or Vocational">Technical or Vocational</option>
                                </select>
                            </div>

                                
                                
                            
                            <script>
                                function updateUrlParams() {
                                    var selectedScholarshipType = document.getElementById('filterDropdown').value;
                                    var selectedProgramLvl = document.getElementById('programLvlDropdown').value;
                                    var currentUrl = window.location.href;
                            
                                    location.href = '?stype=' + selectedScholarshipType + '&programlvl=' + selectedProgramLvl;
                                }
                                
                                function filterTableByProgramLevel() {
                                    // Get the selected program level value from the dropdown
                                    var selectedProgramLevel = document.getElementById("programLvlDropdown").value;
                                    var table = document.getElementById("tablescholarship");
                                    var rows = table.getElementsByTagName("tr");
                                
                                    // Loop through all table rows, hide those that don't match the selected program level
                                    for (var i = 1; i < rows.length; i++) { // Start from index 1 to skip the table header row
                                        var cell = rows[i].getElementsByTagName("td")[3]; // Assuming Program Level is in the 5th column
                                
                                        if (cell) {
                                            if (selectedProgramLevel === "all" || cell.textContent === selectedProgramLevel) {
                                                rows[i].style.display = "";
                                            } else {
                                                rows[i].style.display = "none";
                                            }
                                        }
                                    }
                                }

                            </script>

                                
                                <div class="input-group-prepend1">
                                    <label class="input-group-text1" for="filterDropdown"></label>
                                </div>
                            </div>
                        </div>

              <!-- Default Table -->
              <table class="table" id="tablescholarship">
                <thead>
                  <tr>
                    <th scope="col">Scholarship</th>
                    <th scope="col">Organization</th>
                    <th scope="col">Scholarship Type</th>
                    <th scope="col">Program Level</th>
                    <th scope="col">Slots</th>
                    <th scope="col" style="cursor: pointer" id="deadlineHeader">Deadline</th>
                    <th scope="col">Option</th>
                  </tr>
                </thead>
                <tbody>
    <?php
    require 'conn.php';
    
    
    
    $stypelink = $_GET['stype'];
    $programLvlLink = $_GET['programlvl'];

    $programLvlLinkMsg = "";
    
    
    @$_SESSION['programMsg'] = "";
    @$_SESSION['stypeMsg'] = "";
    
    if($stypelink == ""){
        $_SESSION['stypeMsg'] = "";
    }else{
        $_SESSION['stypeMsg'] = "WHERE tbl_scholarship.stype_id=".$stypelink;
    }
    
    @$stypelinkmsg = $_SESSION['stypeMsg'];
    
    if ($programLvlLink == "") {
    $programLvlLinkMsg = "";
    } else {
        $programLvlLinkMsg = "AND tbl_scholarship.proglvlid=".$programLvlLink;
    }
    
    
    
    $uid = $_SESSION['userID'];
    $checkorg = "SELECT * FROM `tbl_scholarship` $stypelinkmsg $programLvlLinkMsg";
    $checkorgq = mysqli_query($conn, $checkorg);
    $count = 1;
    $count2 = 0;
    
    

    while ($roworg = mysqli_fetch_array($checkorgq)) {
    $schID = $roworg['scholarshipID'];

    ++$count2;

    $getdatascho = "SELECT * FROM tbl_scholarship
        LEFT JOIN tbl_stype ON tbl_scholarship.stype_id = tbl_stype.stype_id
        LEFT JOIN tbl_organization ON tbl_organization.orgID = tbl_scholarship.orgID
        JOIN tbl_programlvl ON tbl_scholarship.proglvlid = tbl_programlvl.programlvl_id
        WHERE tbl_scholarship.scholarshipID = '$schID'";

    $getdataschoq = mysqli_query($conn, $getdatascho);

    $countscrow2 = mysqli_fetch_array($getdataschoq);

    // Use the correct column name for program level in the line below
    $programLevel = ucfirst($countscrow2['programlvl']);

    $countsc = "SELECT COUNT(*) FROM `tbl_scholars` WHERE tbl_scholars.scholarshipID = '$schID' AND status = 3 ";
    $countscq = mysqli_query($conn, $countsc);
    $countscrow = mysqli_fetch_array($countscq);

    $deadline = $countscrow2['deadline'];

    date_default_timezone_set('Asia/Manila');
    $datenow = date('Y-m-d');
    $messagedeadline = "";
    $display = "";

    if ($deadline == $datenow) {
        $messagedeadline = "<b style='color:red'>Expired</b>";
        $display = "none";
    } else {
        $messagedeadline = $deadline;
        $display = "";
    }

        ?>
        <tr>
            <td><?php echo ucfirst($roworg['scholarshipname']) ?></td>
            <td><?php echo ucfirst($countscrow2['name']) ?></td>
            <td><?php echo ucfirst($countscrow2['stype']) ?></td>
            <td><?php echo $programLevel; ?></td>
            <td><?php echo  $countscrow['COUNT(*)'] . "/" . $roworg['applicant_limit'] ?></td>
            <td><?php echo $messagedeadline; ?></td>
            <td>
                <?php
                $checklist = "SELECT * FROM tbl_scholars WHERE userid = '$uid' AND scholarshipID = '$schID'";
                $checklistq = mysqli_query($conn, $checklist);
                $checklistrow = mysqli_fetch_array($checklistq);

                $status = @$checklistrow['status'];

                if ($status == '3') {
                    echo '<a class="btn btn-secondary" readonly>Applied</a>';
                }else if($status == '0'){
                    echo '<a class="btn btn-secondary" readonly>Restricted</a>';
                }
                else if($status == '1'){
                    echo '<a class="btn btn-secondary" readonly>Applied</a>';
                }
                else {
                ?>
                    <form action="#" method="POST" style="display:<?php echo $display?>">
                        <a class="btn btn-primary view-scholarship btn-sm" data-bs-toggle="modal" data-bs-target="#viewScholarship<?php echo $schID; ?>">
                            <i class="fa fa-search"></i> Apply
                        </a>
                    </form>
                <?php
                }
                ?>
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

                           
                            
                            $getdata = "SELECT *, tbl_users.userID AS 'uid' FROM `tbl_userinformation` INNER JOIN tbl_users ON tbl_users.userinfoID = tbl_userinformation.userinfoID INNER JOIN tbl_userlevel ON tbl_userlevel.userlvlID = tbl_users.userlvlID WHERE userid = '$uid' ";

                            $getdataq = mysqli_query($conn, $getdata);
                            $rowuser = mysqli_fetch_array($getdataq);

                        
                        ?>

                        <div class="col-md-4">
                          <label for="inputName5" class="form-label">First Name</label>
                          <input type="text" class="form-control" id="inputFname" value="<?php echo $rowuser['fname']?>" readonly>
                        </div>
                        <div class="col-md-4">
                          <label for="inputName5" class="form-label">Middle Name</label>
                          <input type="text" class="form-control" id="inputMname" value = "<?php echo $rowuser['mname']?>" readonly>
                        </div>
                        <div class="col-md-4">
                          <label for="inputName5" class="form-label">Last Name</label>
                          <input type="text" class="form-control" id="inputLname" value = "<?php echo $rowuser['lname']?>" readonly>
                        </div>
                        <div class="col-md-4">
                          <label for="inputName5" class="form-label">Gender</label>
                          <input type="text" class="form-control" id="inputGender" value="<?php echo $rowuser['gender']?>" readonly>
                        </div>
                        <div class="col-md-4">
                          <label for="inputContact" class="form-label">Contact Number</label>
                          <input type="text" class="form-control" name="contact" id="inputContact" value="<?php echo $rowuser['contact']?>" editable>
                        </div>
                        <div class="col-md-4">
                          <label for="inputName5" class="form-label">Email</label>
                          <input type="text" class="form-control" id="inputEmail" value="<?php echo $rowuser['email']?>" readonly>
                        </div>
                        <div class="col-12">
                          <label for="inputAddress" class="form-label">Address</label>
                          <input type="text" class="form-control" name="address" id="inputAddress" value="<?php echo $rowuser['address']?>" editable>
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
                          <input type="text" class="form-control" id="inputName5" value="<?php echo ucfirst($countscrow2['scholarshipname'])?>" readonly>
                        </div>
                        <div class="col-md-4">
                          <label for="inputName5" class="form-label">Scholarship Type</label>
                          <input type="text" class="form-control" id="inputName5" value = "<?php echo ucfirst($countscrow2['stype'])?>" readonly>
                        </div>
                        <div class="col-md-4">
                          <label for="inputName5" class="form-label">Program Level</label>
                          <input type="text" class="form-control" id="inputName5" value = "<?php echo ucfirst($countscrow2['programlvl'])?>" readonly>
                        </div>
                        <div class="col-md-4">
                          <label for="inputName5" class="form-label">Organization</label>
                          <input type="text" class="form-control" id="inputName5" value = "<?php echo ucfirst($countscrow2['name'])?>" readonly>
                        </div>
                        <div class="col-md-12">
                          <label for="inputName5" class="form-label">Description:</label>
                          <div style="padding: 10px; background-color: #ddd; border-radius: 10px;">
                              <p><?php echo $roworg['description'];?></p>
                          </div>
                        </div>
                        <br>
                        <div class="col-md-12">
                          <label for="inputName5" class="form-label">Qualification:</label>
                          <div style="padding: 10px; background-color: #ddd; border-radius: 10px;">
                              <p><?php echo $roworg['qualification'];?></p>
                          </div>
                        </div>
                        <br>
                        <div class="col-md-12">
                          <label for="inputName5" class="form-label">Benefits:</label>
                          <div style="padding: 10px; background-color: #ddd; border-radius: 10px;">
                              <p><?php echo $roworg['benefit'];?></p>
                          </div>
                        </div>
                        <br>
                        <div class="col-md-12">
                          <label for="inputName5" class="form-label">Requirement Instruction:</label>
                          <div style="padding: 10px; background-color: #ddd; border-radius: 10px;">
                              <p><?php echo $roworg['req'];?></p>
                          </div>
                        </div>
                        <br>
                        
                        </form>
                        
                        
                        <form method="POST" enctype="multipart/form-data" action="res-scholar.php?userid=<?php echo $uid ?>&&schid=<?php echo $schID ?>">
                        
                        <?php
                        
                        
                            $getfields = "SELECT * FROM tbl_fields WHERE tbl_fields.scholarshipID = '$schID' ";
                            $res = mysqli_query($conn, $getfields);
                            $count = 1;
                            
                            while($frow = mysqli_fetch_array($res)){
                            
                        ?>
                        <div class="col-md-4" style="margin-top: 10px; margin-bottom: 10px; ">
                          <label for="inputName5" class="form-label"><?php echo $frow['field'] ?></label>
                          <input type="<?php echo $frow['type'] ?>" class="form-control" name="field<?php echo $count?>" value="" required>
                          <input type="hidden" name="name<?php echo $count?>" value="<?php echo $frow['field'] ?>">
                        </div>
                        
                        <?php $count = $count + 1; } ?>
                        
                        <input type="hidden" name="fcount" value="<?php echo $count ?>">
                        
                        
                      
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
                        // $statusmsg = '<a href="res-scholar.php?userid='.$uid.'&&schid='.$schID.'"class="btn btn-primary">Reserve Me</a>';
                        $statusmsg = '<button class="btn btn-primary">Submit Form</button>';
                      }else if($status == '1'){
                        $statusmsg = '<a class="btn btn-secondary" readonly>Application Sent</a>';
                      }else if($status == '2'){
                        $statusmsg = '

                          <form action="save-files.php?userid='.$uid.'&&sid='.$schID.'" method="POST" enctype="multipart/form-data">
                              <input class="btn btn-primary w-100" type="submit" value="Submit Application">
                          </form>

                        ';
                      }else if($status == '3'){
                        $statusmsg = '<a style="padding: 10px; background-color: #ddd; border-radius: 10px" readonly>Uploaded</a>';
                        
                      }else if($status == '0'){
                          $statusmsg = '<a style="padding: 10px; background-color: #ddd; border-radius: 10px" readonly>Cannot Submit Anymore</a>';
                      }
                      ?>

                      <?php echo $statusmsg?>
                    </div>
                    
                    </form>
                  </div>
                </div>
              </div><!-- End Large Modal-->
              

                  <?php

                        $count++;

                    }
                  ?>

                </tbody>
              </table>
              
            
            <script>
                
                
            
                document.addEventListener("DOMContentLoaded", function () {
                    // Set initial sorting order
                    var deadlineSortOrder = 'asc';
            
                    // Function to compare dates for sorting
                    function compareDates(a, b) {
                        var dateA = new Date(a);
                        var dateB = new Date(b);
            
                        if (dateA < dateB) {
                            return -1;
                        }
                        if (dateA > dateB) {
                            return 1;
                        }
                        return 0;
                    }
            
                    // Function to sort table rows based on deadline
                    function sortTable(order) {
                        var table = document.getElementById('tablescholarship').getElementsByTagName('tbody')[0];
                        var rows = Array.from(table.getElementsByTagName('tr'));
            
                        rows.sort(function (a, b) {
                            var cellA = a.cells[6].textContent; // Assuming the deadline is in the 7th column (index 6)
                            var cellB = b.cells[6].textContent;
            
                            return order === 'asc' ? compareDates(cellA, cellB) : compareDates(cellB, cellA);
                        });
            
                        rows.forEach(function (row) {
                            table.appendChild(row);
                        });
                    }
            
                    // Initial sorting
                    sortTable(deadlineSortOrder);
            
                    // Toggle sorting order on click
                    document.getElementById('deadlineHeader').addEventListener('click', function () {
                        deadlineSortOrder = deadlineSortOrder === 'asc' ? 'desc' : 'asc';
                        sortTable(deadlineSortOrder);
                    });
                });
            </script>


              
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
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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