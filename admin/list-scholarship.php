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
  <script src="https://cdn.tailwindcss.com"></script>
  
  <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
 
/* Assigning all the same properties to the body */
    .container{
        width: 20em;
        background-color: rgb(255, 255, 255);
        overflow: hidden;
        border-radius: 1em;
        text-align: center;
        font-family: 'Open Sans Condensed', sans-serif;
        font-size: 1em;
    }
    
    .user-image{
        padding: 3em 0;
        background-image: linear-gradient(70deg,#61A1DD,#0083FD);
        box-shadow:  0 0.6em 1em pink;
    }
    
    .user-image img{
        width: 7em;
        height: 7em;
        border-radius: 50%;
        box-shadow:  0 0.6em 1.8em pink;
        object-fit: cover;
    }
    
    .content{
        color: #565656;
        padding: 2.2em;
    }
    
    .name{
        font-size: 1em;
        text-transform: uppercase;
        font-weight: bold;
    }
    
    .username{
        font-size: 1em;
        color: #9e9e9e;
    }
    
    .links{
        display: flex;
        justify-content: center;
        margin: 1.5em 0;
    }
    
    .user-image a{
        text-decoration: none;
        color: #565656;
        transition: all 0.3s;
        font-size: 2em;
        margin-right: 1.2em;
    }
    
    .user-image a:last-child{
        margin: 0;
    }
    
    .insta:hover{
        color:rgb(255, 70, 101);
        transform: scale(2,2);
    }
    
    .git:hover{
        color:rgb(0, 0, 0);
        transform: scale(2,2);
    }
    
    .linkedin:hover{
        color:rgba(4, 0, 253, 0.842);
        transform: scale(2,2);
    }
    
    .facebook:hover{
        color:rgb(4, 0, 255);
        transform: scale(2,2);
    }
    
    .details{
        margin-bottom: 1.8em;
    }
    
    
    /* CSS for messagin link */
    
    .effect {
        text-align: center;
        display: inline-block;
        position: relative;
        text-decoration: none;
        color: rgb(48, 41, 41);
        text-transform: capitalize;
        width: 100%;
        background-image: linear-gradient(60deg,#0083FD,#61A1DD);
        font-size: 1.2em;
        padding: 1em 3em;
        border-radius: 5em;
        overflow: hidden;
        transition: 0.5s;
    }
    .effect:hover{
      color: white;
    }

  </style>

  

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

    include('../include/sidebar-admin.php');
  
  ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Scholarships</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Scholarship</a></li>
          <li class="breadcrumb-item active">Scholarship List</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    
    
    <div class="containeradd">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title"></h5>

          <!-- Default Table -->
          <table class="table">
          <div class="col-sm-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="filterDropdown">Filter by:</label>
                                </div>
                                <select class="form-control" id="filterDropdown">
                                    <option value="">-Scholarhsip Type-</option>
                                    <option value="0">Merit-Based</option>
                                    <option value="1">Skills-Based</option>
                                    <option value="2">Needs-Based</option>
                                    <option value="2">Context-Based</option>
                                </select>
                            </div>
                        </div>
            <thead>
              <tr>
                <th scope="col">#</th>
                    <th scope="col">Scholarship</th>
                    <th scope="col">Organization</th>
                    <th scope="col">Company</th>
                    <th scope="col">Scholarship Type</th>
                    <th scope="col">Program Level</th>
                    <th scope="col">Slots</th>
                    <th scope="col" style="cursor: pointer" id="deadlineHeader">Deadline</th>
                    <th scope="col">Option</th>
              </tr>
            </thead>
            <tbody>
              
              <style>
                .modals{
                  z-index: 2;
                  background-color: rgba(0, 0, 0, 0.2);
                  position: fixed;
                  width: 100%;
                  height: 100%;
                  top: 0;
                  left: 0;
                  overflow: scroll;
                  display: none;
                }

                .modalcontent{
                  /* margin: auto 15%; */
                  /* z-index: 3; */
                  background-color: white;
                  width: 50%;
                  margin: 8% 35%;
                  height: auto;
                  padding: 20px;
                  border-radius: 10px;
                  scroll-behavior: smooth;
                  
                }

                .close{
                  color: white;
                  font-weight: 900;
                  font-size: 10px;
                  background-color: red;
                  padding: 3px;
                  float: right;
                  border-radius:5px;
                  cursor: pointer;
                  /* box-shadow: 1px 1px 1px 1px #888; */
                }
              </style>
            
              <?php

                require '../conn.php';

                $uid = $_SESSION['userID'];

                $checkorg = "SELECT *, tbl_scholarship.status AS 'stat'  FROM `tbl_scholarship` INNER JOIN tbl_organization ON tbl_scholarship.orgID = tbl_organization.orgID INNER JOIN tbl_stype ON tbl_stype.stype_id = tbl_scholarship.stype_id JOIN tbl_programlvl ON tbl_scholarship.proglvlid = tbl_programlvl.programlvl_id";
                $checkorgq = mysqli_query($conn, $checkorg);
                
                

                $count = 0;

                $archived = "";
                $link = "";
                $color = "";

                while($roworg = mysqli_fetch_array($checkorgq)){

                  $sid = $roworg['scholarshipID'];

                   $countsc = "SELECT COUNT(*) FROM `tbl_scholars` WHERE tbl_scholars.scholarshipID = '$sid' AND status = '3' ";
            $countscq = mysqli_query($conn, $countsc);
            $countscrow = mysqli_fetch_array($countscq);

                  ++$count;


                  if($roworg['stat'] == '2'){
                    $archived = "Unarchive";
                    $color = "green";
                    $link = "2";
                  }else{
                    $archived = "Archive";
                    $color = "#888";
                    $link = "1";
                  }

              ?>


              <div class="modals" id="modals<?php echo $sid?>">
                <div class="modalcontent">

                    <div style="border-bottom: 1px black #ddd; font-weight: 500">
                      <b>About Scholarship</b>
                    </div>
                    <hr>
                    <div>
                    <div class="col-md-4">
                          <label for="inputName5" class="form-label">Scholarship Name</label>
                          <input type="text" class="form-control" id="inputName5" value="<?php echo ucfirst($roworg['name'])?>" readonly>
                        </div>
                        <br>
                        <div class="col-md-4">
                          <label for="inputName5" class="form-label">Scholarship Type</label>
                          <input type="text" class="form-control" id="inputName5" value = "<?php echo ucfirst($roworg['stype'])?>" readonly>
                        </div>
                        <br>
                        <div class="col-md-4">
                          <label for="inputName5" class="form-label">Organization</label>
                          <input type="text" class="form-control" id="inputName5" value = "<?php echo ucfirst($roworg['name'])?>" readonly>
                        </div>
                        <br>
                        <div class="col-md-12">
                          <label for="inputName5" class="form-label">Requirments</label>
                          <div style="padding: 10px; background-color: #ddd; border-radius: 10px">
                              <pre><?php 
                                  echo $roworg['req'];
                              ?></pre>
                          </div>
                        </div>
                    </div>

                    <br>

                    <span class="close" id="close<?php echo $sid?>">CLOSE</span><br>
                </div>
              </div>

             

              <tr>
                <th scope="row"><?php echo $count ?></th>
                <td><?php echo ucfirst($roworg['scholarshipname'])?></td>
                <td><?php echo ucfirst($roworg['name'])?></td>
                <td><?php echo ucfirst($roworg['company'])?></td>
                <td><?php echo ucfirst($roworg['stype'])?></td>
                <td><?php echo ucfirst($roworg['programlvl'])?></td>
                <!-- <td><?php echo ucfirst($roworg['req'])?></td> -->
                <td><?php echo $countscrow['COUNT(*)'] ."/". ($roworg['applicant_limit'])?></td>
                <td><?php echo ucfirst($roworg['deadline'])?></td>
                <td><a href="?sid=<?php echo $sid?>" class="btn btn-primary">View Applicants</a></td>
              </tr>


              <script>

                  let modals<?php echo $sid?> = document.getElementById('modals<?php echo $sid?>');
                  let close<?php echo $sid?> = document.getElementById('close<?php echo $sid?>');
                  
                  function openmodal(){
                    modals<?php echo $sid?>.style.display = 'block';
                  }

                  close<?php echo $sid?>.onclick = function(){
                    modals<?php echo $sid?>.style.display = 'none';
                  }


              </script>
                
              <?php
                }
              ?>

            </tbody>
          </table>
          <!-- End Default Table Example -->
          
        </div>
      </div>
          <!-- End Default Table Example -->
          
        </div>
      </div>

    </div>
    <div class="pagetitle">
        <h1>Applicants</h1>
      </div><!-- End Page Title -->
      
      
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"></h5>

          <!-- Default Table -->
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Scholar's Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Email</th>
                <th scope="col">Option</th>
              </tr>
            </thead>
            <tbody>
            
              <?php

                require '../conn.php';

                $uid = $_SESSION['userID'];

                $sids = @$_GET['sid'];

                $checkorg = "SELECT *, tbl_scholars.scholarsID AS 'ssid' FROM `tbl_scholars` INNER JOIN tbl_scholarship ON tbl_scholars.scholarshipID = tbl_scholarship.scholarshipID INNER JOIN tbl_users ON tbl_scholars.userid = tbl_users.userID INNER JOIN tbl_userinformation ON tbl_userinformation.userinfoID = tbl_users.userinfoID WHERE tbl_scholars.scholarshipID = '$sids' AND tbl_scholars.status = '3'  ";
                
                $checkorgq = mysqli_query($conn, $checkorg);
                $count = 0;
                
                
                while($roworg = mysqli_fetch_array($checkorgq)){
                  $userid = $roworg['userid'];
                  $count++;
              ?>

              <tr>
                  <th scope="row"><?php echo $count ?></th>
                  <td><?php echo ucfirst($roworg['fname']. " " .$roworg['lname'] )?></td>
                  <td><?php echo ucfirst($roworg['gender'])?></td>
                  <td><?php echo ($roworg['email'])?></td>
                  <td><a href="#" id="myBtn<?php echo $userid?>" class="btn btn-primary">Show Requirements</a></td>
              </tr>


                <!-- The Modal -->

                <div id="myModal<?php echo $userid?>" class="modal">
                  <div class="modal-content">
                        <span style="color: red; text-align: right;" class="close<?php echo $userid ?>">&times;</span>
                        <div class="mb-2">
                            <h1 class="text-xl font-semibold">Student Information</h1>
                        </div>
                        <div class="p-2">
                            <div class="flex gap-2 mb-2">
                                <div class="w-[50%]">
                                    <label>Firstname</label>
                                    <div>
                                        <input class="p-2 bg-indigo-100 w-full" type="" value="<?php echo $roworg['fname']?>" disabled>
                                    </div>
                                </div>
                                <div class="w-[50%]">
                                    <label>Middlename</label>
                                    <div>
                                        <input class="p-2 bg-indigo-100 w-full" type="" value="<?php echo $roworg['mname']?>" disabled>
                                    </div>
                                </div>
                                <div class="w-[50%]">
                                    <label>Lastname</label>
                                    <div>
                                        <input class="p-2 bg-indigo-100 w-full" type="" value="<?php echo $roworg['lname']?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="flex gap-2 mb-2">
                                <div class="w-[50%]">
                                    <label>Gender</label>
                                    <div>
                                        <input class="p-2 bg-indigo-100 w-full" type="" value="<?php echo $roworg['gender']?>" disabled>
                                    </div>
                                </div>
                                <div class="w-[50%]">
                                    <label>Birthdate</label>
                                    <div>
                                        <input class="p-2 bg-indigo-100 w-full" type="" value="<?php echo $roworg['birthdate']?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="flex gap-2 mb-2">
                                <div class="w-[30%]">
                                    <label>Contact Number</label>
                                    <div>
                                        <input class="p-2 bg-indigo-100 w-full" type="" value="<?php echo $roworg['contact']?>" disabled>
                                    </div>
                                </div>
                                <div class="w-[70%]">
                                    <label>Email Address</label>
                                    <div>
                                        <input class="p-2 bg-indigo-100 w-full" type="" value="<?php echo $roworg['email']?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="flex gap-2 mb-2">
                                <div class="w-full">
                                    <label>Home Address</label>
                                    <div>
                                        <input class="p-2 bg-indigo-100 w-full" type="" value="<?php echo $roworg['address']?>" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <hr class="m-2">
                        
                        <div class="m-2">
                            <div>Submitted Applications</div>
                            <div>
                                
                                
                                
                                <?php
                                    $getfiles = "SELECT * FROM `tbl_uploads` WHERE userid = '$userid' AND sid = '$sid' ";
                                    $res = mysqli_query($conn, $getfiles);
                                    
                                    $countup = 1;
                                    
                                    while($uploadsrow = mysqli_fetch_array($res)){                                    
                                
                                ?>
                                
                                    <div class="flex gap-3 m-2">
                                        <div>
                                            <?php echo $countup; ?>
                                        </div>
                                        <div>
                                            <a href="../<?php echo $uploadsrow['dest']; ?>"><?php echo substr($uploadsrow['dest'], 8); ?></a>
                                        </div>
                                    </div>
                                    
                                <?php
                                    $countup++;
                                
                                    }
                                ?>
                                
                                <div>
                                    <div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="align-right mt-2">

                          <!-- <a class="p-2 bg-red-500 m-2 text-white rounded-md text-sm" href="removeappq.php?scholarsid=<?php echo $roworg['ssid']?>&&ssid=<?php echo $sid?>">-->
                          <!--    Remove Applicant-->
                          <!--</a>-->
                      </div>
                  </div>

                </div>
                
                <style>
                  .modal {
                    display: none; /* Hidden by default */
                    position: fixed; /* Stay in place */
                    z-index: 1; /* Sit on top */
                    left: 0%;
                    top: 0;
                    width: 100%; /* Full width */
                    height: 100%; /* Full height */
                    overflow: auto; /* Enable scroll if needed */
                    background-color: rgb(0,0,0); /* Fallback color */
                    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                  }

                  /* Modal Content/Box */
                  .modal-content {
                    left: 10%;
                    top: -15%;
                    overflow: auto;
                    background-color: #fefefe;
                    margin: 15% auto; /* 15% from the top and centered */
                    padding: 20px;
                    border: 1px solid #888;
                    width: 60%; /* Could be more or less, depending on screen size */
                  }

                  /* The Close Button */
                  .close<?php echo $userid ?>{
                    color: #aaa;
                    float: right;
                    font-size: 28px;
                    font-weight: bold;
                  }

                  .close<?php echo $userid ?>:hover,
                  .close<?php echo $userid ?>:focus {
                    color: black;
                    text-decoration: none;
                    cursor: pointer;
                  }
                </style>

                

                <script>

                  var modal<?php echo $userid?> = document.getElementById("myModal<?php echo $userid?>");

                  var btn<?php echo $userid?> = document.getElementById("myBtn<?php echo $userid?>");

                  var span<?php echo $userid?> = document.getElementsByClassName("close<?php echo $userid?>")[0];
 
                  btn<?php echo $userid?>.onclick = function() {
                    modal<?php echo $userid?>.style.display = "block";
                  }

                  span<?php echo $userid?>.onclick = function() {
                    modal<?php echo $userid?>.style.display = "none";
                  }

                  window.onclick = function(event) {
                    if (event.target == modal<?php echo $userid?>) {
                      modal<?php echo $userid?>.style.display = "none";
                    }
                  }

                </script>



                <!-- The modal end -->

              <?php
                }
              ?>

            </tbody>
          </table>
          <!-- End Default Table Example -->
          
        </div>
      </div>

    </div>

          </table>

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
  <style>
                  .modal {
                    display: none; /* Hidden by default */
                    position: fixed; /* Stay in place */
                    z-index: 1; /* Sit on top */
                    left: 0%;
                    top: 0;
                    width: 100%; /* Full width */
                    height: 100%; /* Full height */
                    overflow: auto; /* Enable scroll if needed */
                    background-color: rgb(0,0,0); /* Fallback color */
                    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                  }

                  /* Modal Content/Box */
                  .modal-content {
                    left: 10%;
                    top: -15%;
                    background-color: #fefefe;
                    margin: 15% auto; /* 15% from the top and centered */
                    padding: 20px;
                    border: 1px solid #888;
                    width: 30%; /* Could be more or less, depending on screen size */
                  }

                  /* The Close Button */
                  .close<?php echo $userid ?>{
                    color: #aaa;
                    float: right;
                    font-size: 28px;
                    font-weight: bold;
                  }

                  .close<?php echo $userid ?>:hover,
                  .close<?php echo $userid ?>:focus {
                    color: black;
                    text-decoration: none;
                    cursor: pointer;
                  }
                </style>
  
  <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
 
/* Assigning all the same properties to the body */
    .container{
        width: 20em;
        background-color: rgb(255, 255, 255);
        overflow: hidden;
        border-radius: 1em;
        text-align: center;
        font-family: 'Open Sans Condensed', sans-serif;
        font-size: 1em;
    }
    
    .user-image{
        padding: 3em 0;
        background-image: linear-gradient(70deg,#61A1DD,#0083FD);
        box-shadow:  0 0.6em 1em pink;
    }
    
    .user-image img{
        width: 7em;
        height: 7em;
        border-radius: 50%;
        box-shadow:  0 0.6em 1.8em pink;
        object-fit: cover;
    }
    
    .content{
        color: #565656;
        padding: 2.2em;
    }
    
    .name{
        font-size: 1em;
        text-transform: uppercase;
        font-weight: bold;
    }
    
    .username{
        font-size: 1em;
        color: #9e9e9e;
    }
    
    .links{
        display: flex;
        justify-content: center;
        margin: 1.5em 0;
    }
    
    .user-image a{
        text-decoration: none;
        color: #565656;
        transition: all 0.3s;
        font-size: 2em;
        margin-right: 1.2em;
    }
    
    .user-image a:last-child{
        margin: 0;
    }
    
    .insta:hover{
        color:rgb(255, 70, 101);
        transform: scale(2,2);
    }
    
    .git:hover{
        color:rgb(0, 0, 0);
        transform: scale(2,2);
    }
    
    .linkedin:hover{
        color:rgba(4, 0, 253, 0.842);
        transform: scale(2,2);
    }
    
    .facebook:hover{
        color:rgb(4, 0, 255);
        transform: scale(2,2);
    }
    
    .details{
        margin-bottom: 1.8em;
    }
    
    
    /* CSS for messagin link */
    
    .effect {
        text-align: center;
        display: inline-block;
        position: relative;
        text-decoration: none;
        color: rgb(48, 41, 41);
        text-transform: capitalize;
        width: 100%;
        background-image: linear-gradient(60deg,#0083FD,#61A1DD);
        font-size: 1.2em;
        padding: 1em 3em;
        border-radius: 5em;
        overflow: hidden;
        transition: 0.5s;
    }
    .effect:hover{
      color: white;
    }

  </style>

</body>

</html>