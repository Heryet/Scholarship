<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
      
        <title>Components / Accordion - NiceAdmin Bootstrap Template</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
      
        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
      
        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      
        <!-- Vendor CSS Files -->
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

<body class="">

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
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
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
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
              <a class="dropdown-item d-flex align-items-center" href="#">
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
  <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="index.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Scholarship</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="list-scholarship.php">
          <i class="bi bi-circle"></i><span>Apply Scholarship</span>
        </a>
      </li>
      <li>
        <a href="pending-scholarship.php">
          <i class="bi bi-circle"></i><span>Pending Scholarship</span>
        </a>
      </li>
      <!-- <li>
        <a href="list-scholarship.php">
          <i class="bi bi-circle"></i><span>List of Scholarship</span>
        </a>
      </li> -->
      <li>
        <a href="components-accordion.html">
          <!-- <i class="bi bi-circle"></i><span>Accordion</span> -->
        </a>
      </li>
    </ul>
  </li><!-- End Components Nav -->

  <!-- <li class="nav-item">
    <a class="nav-link collapsed" href="pages-blank.html">
      <i class="bi bi-file-earmark"></i>
      <span>Blank</span>
    </a>
  </li>End Blank Page Nav -->

</ul>

</aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Scholarship</h1>
      <nav>
        
      </nav>
    </div><!-- End Page Title -->

    
      <div class="row">
        

        <div class="col-">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Apply Scholarship</h5>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Scholarship</th>
                    <th scope="col">Scholarship Type</th>
                    <th scope="col">Available Slot</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Educar</td>
                    <td>Merit-based</td>
                    <td>10/10</td>
                    <td>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
                      Apply
                    </button>

                      
                    </td>
                  </tr>
                  
                  
                  
                  
                </tbody>
              </table>

              <!-- MODAL FOR APPLY APPLICATION -->
              <div class="modal fade" id="largeModal" tabindex="-1">
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
                        <div class="col-md-4">
                          <label for="inputName5" class="form-label">First Name</label>
                          <input type="text" class="form-control" id="inputName5" value="Jhon Dell" readonly>
                        </div>
                        <div class="col-md-4">
                          <label for="inputName5" class="form-label">Middle Name</label>
                          <input type="text" class="form-control" id="inputName5" value = "Gwapo" readonly>
                        </div>
                        <div class="col-md-4">
                          <label for="inputName5" class="form-label">Last Name</label>
                          <input type="text" class="form-control" id="inputName5" value = "Aristales" readonly>
                        </div>
                        <div class="col-md-4">
                          <label for="inputName5" class="form-label">Gender</label>
                          <input type="text" class="form-control" id="inputName5" value="Male" readonly>
                        </div>
                        <div class="col-md-4">
                          <label for="inputName5" class="form-label">Contact</label>
                          <input type="text" class="form-control" id="inputName5" value="09674197097" readonly>
                        </div>
                        <div class="col-md-4">
                          <label for="inputName5" class="form-label">Email</label>
                          <input type="text" class="form-control" id="inputName5" value="aristalesjhondell@gmail.com" readonly>
                        </div>
                        <div class="col-12">
                          <label for="inputAddress5" class="form-label">Address</label>
                          <input type="text" class="form-control" id="inputAddres5s" value="Matibangon, Labangal, General Santos City" readonly>
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
                          <input type="text" class="form-control" id="inputName5" value="Edukar" readonly>
                        </div>
                        <div class="col-md-4">
                          <label for="inputName5" class="form-label">Scholarship Type</label>
                          <input type="text" class="form-control" id="inputName5" value = "Merit-Based" readonly>
                        </div>
                        <div class="col-md-4">
                          <label for="inputName5" class="form-label">Organization</label>
                          <input type="text" class="form-control" id="inputName5" value = "R Rivera" readonly>
                        </div>
                        <div class="col-md-12">
                          <label for="inputName5" class="form-label">Requirments</label>
                            <ul>
                              <li>PSA</li>
                              <li>Certificate of Indigency</li>
                              <li>Certificate of Enrollment</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                          <label for="inputName5" class="form-label">Attach Your Requirments</label>
                          <input type="file"  name="image" id="image" class="form-control">
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </div>
              </div><!-- End Large Modal-->

              <div class="modal fade" id="largeModal" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Apply Scholarship</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                      <!-- Heading -->
                      <div class="card-heading">
                          <span class=" text-dark text-uppercase">
                              Applicant Information
                          </span>
                      </div>
                      <!-- Divider -->
                      <hr class="card-divider bg-dark">
                        <p><b>Applicant Name:</b> &ensp; Jhon Dell </p> 
                        <p><b>Gender:</b>&emsp; Male </p>
                        <p><b>Contact:</b> &ensp;09123456789 </p>
                        <p><b>Email:</b> &ensp; JhonDell@gmail.com </p>
                        <p><b>Address:</b> &ensp; Blabla st. 146 gensan </p>
                         
                        <b><h5 class="text-success ">Scholarship Information</h5></b><br>

                        <p><b>Scholarship Name:</b> &ensp; Edukar </p> 
                        <p><b>Scholarship Type:</b>&emsp; Merit-based </p>
                        <p><b>Organization:</b> &ensp; .... </p>

                        <b><h5 class="text-success ">Requirments Information</h5></b><br>

                        <p><b>Requirments 1</b> &ensp; ... </p> 
                        <p><b>Requirments 1</b>&emsp; ... </p>
                        <p><b>Requirments 1</b> &ensp; ... </p>

                        <div class="col-sm-7">
                          <input class="form-control" type="file" id="formFile">
                        </div>
                        
                        
                        

    
                    </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- End Footer -->

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



<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg></body></html>