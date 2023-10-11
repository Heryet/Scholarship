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
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="../assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
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
        <h1>Scholars List</h1>
      </div><!-- End Page Title -->
      
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
                                    <option value="0,1,2,3">-Scholarship Applied-</option>
                                    <option value="0">Merit-Based</option>
                                    <option value="1">Skills-Based</option>
                                    <option value="2">Needs-Based</option>
                                    <option value="2">Context-Based</option>
                                </select>
                            </div>
            <thead>
              <tr>
                <th scope="col">Userid</th>
                <th scope="col">Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Email</th>
                <th scope="col">Option</th>
              </tr>
            </thead>
            <tbody>
            
              <?php

                require '../conn.php';


                $sids = @$_GET['sid'];

                $checkorg = "SELECT tbl_userinformation.userinfoID, CONCAT(tbl_userinformation.lname,', ',tbl_userinformation.fname,' ',tbl_userinformation.mname) AS Names, tbl_userinformation.gender, tbl_userinformation.email FROM tbl_userinformation INNER JOIN tbl_users ON tbl_users.userinfoID = tbl_userinformation.userinfoID WHERE tbl_users.userlvlID = 3;";
                $checkorgq = mysqli_query($conn, $checkorg);
                while($roworg = mysqli_fetch_array($checkorgq)){
                  $userid = $roworg['userinfoID'];
              ?>

              <tr>
                <th scope="row"><?php echo ucfirst($roworg['userinfoID'])?></th>
                <td><?php echo ucfirst($roworg['Names'])?></td>
                <td><?php echo ucfirst($roworg['gender'])?></td>
                <td><?php echo ($roworg['email'])?></td>
                <td><a href="#" id="myBtn<?php echo $userid?>">Show requirements</a></td>
                <td>
                  
                </td>
              </tr>

                <!-- The Modal -->

                <div id="myModal<?php echo $userid?>" class="modal">
                  <div class="modal-content">
                    
                    <span style="color: red; text-align: right;" class="close<?php echo $userid ?>">&times;</span>
                    
                    <div>
                      <h5>Requirements:</h5>
                      <?php

                      $status2 = "";

                      $selectfiels = "SELECT * FROM tbl_applicant_req WHERE userid = '$userid' AND scolarshipID = '$sids' ";
                      $selectfielsq = mysqli_query($conn, $selectfiels);
                      $selectfielsrow = mysqli_fetch_array($selectfielsq);

                      if(mysqli_num_rows($selectfielsq) > 0){
                          $files = json_decode($selectfielsrow['reqs']);

                          for($i=0; $i<count($files); $i++){
                            $status2 = $status2."<a href='../uploads/".$files[$i]."' target='_blank'>".$files[$i]."</a><br>";
                          }

                        echo $status2;
                      }else{
                        echo 1;
                      }
                      
                      ?>
                    </div>
                    
                  <!-- This is link of adding small images
                      which are used in the link section  -->
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