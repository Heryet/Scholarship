<?php

    require '../conn.php';
    session_start();

    if(isset($_SESSION['userID'])){

    }else{
        header('location: pages-login.php');
    }

    $uid = $_SESSION['userID'];

$getdata = "SELECT *
            FROM `tbl_userinformation`
            INNER JOIN tbl_users ON tbl_userinformation.userinfoID = tbl_users.userinfoID
            LEFT JOIN tbl_organization ON tbl_organization.userID = tbl_users.userID
            WHERE tbl_users.userID = '$uid' ";
$getdataq = mysqli_query($conn, $getdata);
$rowdata = mysqli_fetch_array($getdataq);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add Scholarship</title>
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

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
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
              <span>Organization Name</span>
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
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
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
      <h1>Add Scholarship</h1>
    </div><!-- End Page Title -->
    
    <div class="containeradd">
        <form class="row g-3 needs-validation" method="POST" action="save-scholarship.php" novalidate>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Scholarship Name</label>
                <input name="sname" type="text" class="form-control" id="validationCustom01" value="" placeholder="Enter Scholarship" required>
                <div class="valid-feedback">
                Looks good!
                </div>
                <div class="invalid-feedback">
                    Please choose a scholarship name.
                </div>
            </div>
            <div class="col-md-4">
              <label for="inputName5" class="form-label">Scholarship Type</label>
              <select name="stype" class="form-select" aria-label="Default select example" required>
                <option selected disabled>Select Scholarship Type</option>
                <option value="1">Merit-Based</option>
                <option value="2">Skills-Based</option>
                <option value="3">Context-Based</option>
                <option value="4">Needs-Based</option>
              </select>
              <div class="valid-feedback">
                Looks good!
                </div>
                <div class="invalid-feedback">
                    Please choose a scholarship type.
                </div>
            </div>
            
            <div class="col-md-4">
              <label for="inputName5" class="form-label">Program Level</label>
              <select name="programlvl_id" class="form-select" aria-label="Default select example" required>
                <option selected disabled>Select Program Level</option>
                <option value="1">College</option>
                <option value="2">High School</option>
                <option value="3">Vocational or Technical</option>
                <div class="valid-feedback">
                Looks good!
                </div>
                <div class="invalid-feedback">
                    Please choose a program level.
                </div>
              </select>
            </div>
            
            <div class="col-md-4">
              <label for="inputName5" class="form-label">Organization</label>
              <input type="text" class="form-control" id="inputName5" value="<?php echo ucfirst($rowdata['name']) ?>"disabled>
              <div class="valid-feedback">
                Looks good!
                </div>
                <div class="invalid-feedback">
                    Please enter your organization name.
                </div>
            </div>
            <div class="col-md-12">
                <label for="validationCustom02" class="form-label">Description</label>
                <input name="descs" type="text" class="form-control" id="validationCustom02" value="" required>
                <div class="valid-feedback">
                Looks good!
                </div>
                <div class="invalid-feedback">
                    Please choose a scholarship name.
                </div>
            </div>
            
            <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
            <div class="col-md-15">
                <label for="validationCustom02" class="form-label">Qualifications:</label>
                <textarea name="qualification" id="editorQualification" required></textarea>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please put scholarship qualifications.
                </div>
                <script>
                    ClassicEditor
                        .create(document.querySelector('#editorQualification'))
                        .catch(error => {
                            console.error(error);
                        });
                </script>
            </div>
            
            <div class="col-md-15">
                <label for="validationCustom02" class="form-label">Benefits:</label>
                <textarea name="benefit" id="editorBenefit" required></textarea>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please put scholarship benefits.
                </div>
                <script>
                    ClassicEditor
                        .create(document.querySelector('#editorBenefit'))
                        .catch(error => {
                            console.error(error);
                        });
                </script>
            </div>
            
            <div class="col-md-15">
                <label for="validationCustom02" class="form-label">File uploading insctructions:</label>
                <textarea name="req" id="editorRequirements" required></textarea>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please put scholarship requirements.
                </div>
                <script>
                    ClassicEditor
                        .create(document.querySelector('#editorRequirements'))
                        .catch(error => {
                            console.error(error);
                        });
                </script>
            </div>


            
            
            <!--Dynamic Form-->
            <br>
            <hr>
            
            <h4>Application Fields</h4>
            <h6>List all the application you want your applicant to upload</h6>
            
            <br>
                
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Field Name</label>
                <input name="fldname" type="text" class="form-control" id="fldname" value="" placeholder="Enter">
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
            <div class="col-md-4">
    <label for="inputName5" class="form-label">Type</label>
        <select class="form-select" name="fldtype" id="fldtype" aria-label="Default select example">
            <option selected disabled>Field Type</option>
            <option value="text">Textbox</option>
            <option value="file">File</option>
            <option value="number">Number</option>
        </select>
    </div>
    <div class="col-md-2">
        <label for="inputName5" class="form-label">Action</label><br>
        <a id="addfld" class="btn btn-primary">Add Field</a>
    </div>
    
    <div id="fldlist" style="display: flex; flex-wrap: wrap; gap: 5px;"></div>
    
    <script>
        var fldlist = document.getElementById('fldlist');
        var addfld = document.getElementById('addfld');
        var fldname = document.getElementById('fldname');
        var fldtype = document.getElementById('fldtype');
    
        var fldArr = [];
        document.addEventListener('DOMContentLoaded', function() {
        var applicationFields = document.getElementById('fldlist');

        var scholarshipTypeSelect = document.querySelector('select[name="stype"]');
        scholarshipTypeSelect.addEventListener('change', function(e) {
            var selectedType = e.target.value;

            // Clear existing fields
            applicationFields.innerHTML = '';
    
                if (selectedType === '1') { // Merit-Based
                var meritSelection = document.createElement('div');
                meritSelection.innerHTML = `
                    <label for="meritField" class="form-label">Select Merit Type:</label>
                    <select class="form-select" id="meritField" name="meritField" required>
                        <option selected disabled>Select Merit Type</option>
                        <option value="gwa">GWA</option>
                        <option value="gradeRange">Grade Range</option>
                        <option value="honorList">Honor List</option>
                    </select>
                `;
                applicationFields.appendChild(meritSelection);

                var gwaField = document.createElement('div');
                gwaField.innerHTML = `
                    <label for="gwaField" class="form-label">GWA</label>
                    <input type="number" class="form-control" id="gwaField" name="gwaField" disabled>
                    <label for="uploadGWAFile" class="form-label">Upload GWA File</label>
                    <input type="file" class="form-control" id="uploadGWAFile" name="uploadGWAFile" accept=".pdf, .doc, .docx">
                `;

                var gradeRangeField = document.createElement('div');
                gradeRangeField.innerHTML = `
                    <label class="form-label">Set Grade Range</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gradeRange" value="90above" id="90above">
                        <label class="form-check-label" for="90above">
                            90 - Above
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gradeRange" value="80above" id="80above">
                        <label class="form-check-label" for="80above">
                            80 - Above
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gradeRange" value="75above" id="75above">
                        <label class="form-check-label" for="75above">
                            75 - Above
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="numericGrade">Numeric Grade</label>
                        <input type="number" class="form-control" id="numericGrade" name="numericGrade" min="0" max="100" disabled>
                    </div>
                `;
                applicationFields.appendChild(gradeRangeField);


                var honorListField = document.createElement('div');
                honorListField.innerHTML = `
                    <label for="honorListField" class="form-label">Honor List</label>
                    <input type="text" class="form-control" id="honorListField" name="honorListField" disabled>
                    <label for="uploadFile" class="form-label">Upload File</label>
                    <input type="file" class="form-control" id="uploadFile" name="uploadFile" accept=".pdf, .doc, .docx">
                `;

                var meritSelect = document.getElementById('meritField');
                meritSelect.addEventListener('change', function(event) {
                    var selectedMerit = event.target.value;

                    // Remove existing fields
                    applicationFields.innerHTML = '';
                    applicationFields.appendChild(meritSelection);

                    // Show selected field
                    if (selectedMerit === 'gwa') {
                        applicationFields.appendChild(gwaField);
                    } else if (selectedMerit === 'gradeRange') {
                        applicationFields.appendChild(gradeRangeField);
                    } else if (selectedMerit === 'honorList') {
                        applicationFields.appendChild(honorListField);
                    }
                });
              

                }else if (selectedType === '2') { // Skills-Based
            var skillsDropdown = document.createElement('div');
            skillsDropdown.innerHTML = `
                <label for="skillsDropdown" class="form-label">Skills</label>
                <select class="form-select" id="skillsDropdown" name="skillsDropdown" required>
                    <option selected disabled>Select Skill</option>
                    <option value="sports">Sports</option>
                    <option value="music">Music</option>
                    <option value="tech-voc">Tech-Voc</option>
                </select>
            `;
            applicationFields.appendChild(skillsDropdown);

            var sportsField = document.createElement('div');
            sportsField.innerHTML = `
                            <label for="sportsRadio" class="form-label">Sports</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sports" value="Basketball" id="basketball">
                                <label class="form-check-label" for="basketball">Basketball</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sports" value="Volleyball" id="volleyball">
                                <label class="form-check-label" for="volleyball">Volleyball</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sports" value="Swimming" id="swimming">
                                <label class="form-check-label" for="swimming">Swimming</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sports" value="Boxing" id="boxing">
                                <label class="form-check-label" for="boxing">Boxing</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sports" value="Tennis" id="tennis">
                                <label class="form-check-label" for="tennis">Tennis</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sports" value="Football" id="football">
                                <label class="form-check-label" for="football">Football</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sports" value="Billiards" id="billiards">
                                <label class="form-check-label" for="billiards">Billiards</label>
                            </div>
                            <label for="otherSports" class="form-label">If not listed, please specify</label>
                            <input type="text" class="form-control" id="otherSports" name="otherSports">
                            <!-- Add more sports options -->
                        `;
                        applicationFields.appendChild(sportsField);
                
                        var musicField = document.createElement('div');
            musicField.innerHTML = `
                            <label for="musicInstrument" class="form-label">Music Instruments</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="music" value="Guitar" id="guitar">
                                <label class="form-check-label" for="guitar">Guitar</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="music" value="Piano" id="piano">
                                <label class="form-check-label" for="piano">Piano</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="music" value="Violin" id="violin">
                                <label class="form-check-label" for="violin">Violin</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="music" value="Flute" id="flute">
                                <label class="form-check-label" for="flute">Flute</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="music" value="Trumpet" id="trumpet">
                                <label class="form-check-label" for="trumpet">Trumpet</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="music" value="Cello" id="cello">
                                <label class="form-check-label" for="cello">Cello</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="music" value="Saxophone" id="saxophone">
                                <label class="form-check-label" for="saxophone">Saxophone</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="music" value="Clarinet" id="clarinet">
                                <label class="form-check-label" for="clarinet">Clarinet</label>
                            </div>
                            <label for="otherMusic" class="form-label">If not listed, please specify</label>
                            <input type="text" class="form-control" id="otherMusic" name="otherMusic">
                        `;
                        applicationFields.appendChild(musicField);
                  
                        var techVocField = document.createElement('div');
                        techVocField.innerHTML = `
                        <label class="form-label">Tech-Voc Skills</label><br>
                          <input type="radio" id="all" name="techVoc" value="all" required>
                          <label for="all">All Skills</label><br>

                          <input type="radio" id="welding" name="techVoc" value="Shielded Metal Arc Welding" required>
                          <label for="welding">Shielded Metal Arc Welding</label><br>

                          <input type="radio" id="cookery" name="techVoc" value="Cookery">
                          <label for="cookery">Cookery</label><br>

                          <input type="radio" id="foodService" name="techVoc" value="Food and Beverage Service">
                          <label for="foodService">Food and Beverage Service</label><br>

                          <input type="radio" id="pastry" name="techVoc" value="Bread and Pastry Production">
                          <label for="pastry">Bread and Pastry Production</label><br>

                          <input type="radio" id="housekeeping" name="techVoc" value="Housekeeping">
                          <label for="housekeeping">Housekeeping</label><br>

                          <input type="radio" id="electrical" name="techVoc" value="Electrical Installation and Maintenance">
                          <label for="electrical">Electrical Installation and Maintenance</label><br>

                          <input type="radio" id="computer" name="techVoc" value="Computer Systems Servicing">
                          <label for="computer">Computer Systems Servicing</label><br>

                          <input type="radio" id="bookkeeping" name="techVoc" value="Bookkeeping">
                          <label for="bookkeeping">Bookkeeping</label><br>

                          <input type="radio" id="contactCenter" name="techVoc" value="Contact Center Services">
                          <label for="contactCenter">Contact Center Services</label><br>
                          <label for="otherTechVoc" class="form-label">If not listed, please specify</label>
                          <input type="text" class="form-control" id="otherTechVoc" name="otherTechVoc">
                        `;
                        applicationFields.appendChild(techVocField);

                        var skillsSelect = document.getElementById('skillsDropdown');
            skillsSelect.addEventListener('change', function(event) {
                var selectedSkill = event.target.value;

                // Clear existing fields except skills dropdown
                while (applicationFields.children.length > 1) {
                    if (applicationFields.lastChild.id !== 'skillsDropdown') {
                        applicationFields.removeChild(applicationFields.lastChild);
                    } else {
                        break;
                    }
                }
                          applicationFields.appendChild(skillsDropdown);

                          if (selectedSkill === 'sports') {
                              applicationFields.appendChild(sportsField);
                          } else if (selectedSkill === 'music') {
                              applicationFields.appendChild(musicField);
                          } else if (selectedSkill === 'tech-voc') {
                              applicationFields.appendChild(techVocField);
                          }
                          
                        
                      })
                    }
                    else if (selectedType === '4') { // Needs-Based
    var needsSelection = document.createElement('div');
    needsSelection.innerHTML = `
        <label class="form-label">Needs Selection</label><br>
        <input type="radio" id="yearlyIncome" name="needsSelection" value="Yearly Income" required>
        <label for="yearlyIncome">Yearly Income</label><br>
        <input type="radio" id="monthlyIncome" name="needsSelection" value="Monthly Income">
        <label for="monthlyIncome">Monthly Income</label><br>
        <input type="radio" id="weeklyIncome" name="needsSelection" value="Weekly Income">
        <label for="weeklyIncome">Weekly Income</label><br>
    `;
    applicationFields.appendChild(needsSelection);

    var needsField = document.createElement('div');
    needsField.innerHTML = `
        <label for="incomeField" class="form-label">Income</label>
        <input type="number" class="form-control" id="incomeField" name="incomeField" disabled>
        <label for="uploadIncomeFile" class="form-label">Upload Income File</label>
        <input type="file" class="form-control" id="uploadIncomeFile" name="uploadIncomeFile" accept=".pdf, .doc, .docx" disabled>
    `;

    var needsRadioButtons = document.querySelectorAll('input[name="needsSelection"]');
    needsRadioButtons.forEach(function(radio) {
        radio.addEventListener('change', function(event) {
            var selectedNeed = event.target.value;

            // Clear existing fields
            while (applicationFields.lastChild !== needsSelection) {
                applicationFields.removeChild(applicationFields.lastChild);
            }

            applicationFields.appendChild(needsSelection);

            // Show selected field
            if (selectedNeed === 'Yearly Income' || selectedNeed === 'Monthly Income' || selectedNeed === 'Weekly Income') {
                applicationFields.appendChild(needsField);
            }
        });
    });
}

                    
        });
    }
);

                addfld.addEventListener('click', function (e) {
    var fld = {
        name: fldname.value,
        type: fldtype.value
    };
    fldArr.push(fld);

    var newFieldDiv = document.createElement('div');
    newFieldDiv.style.padding = '3px';
    newFieldDiv.style.backgroundColor = 'white';
    newFieldDiv.style.boxShadow = '0px 0px 1px 1px #ddd';
    newFieldDiv.style.borderRadius = '5px';
    newFieldDiv.style.marginTop = '5px';

    var fieldNameDiv = document.createElement('div');
    fieldNameDiv.style.padding = '3px';
    fieldNameDiv.textContent = fld.name;

    var inputField = document.createElement('input');
    inputField.style.border = 'solid 1px #ddd';
    inputField.style.borderRadius = '5px';
    inputField.setAttribute('type', fld.type);

    var removeButton = document.createElement('button');
    removeButton.textContent = 'x';
    removeButton.style.backgroundColor = 'red';
    removeButton.style.color = 'white';
    removeButton.style.border = 'solid 1px red';
    removeButton.style.borderRadius = '5px';
    removeButton.onclick = function () {
        removeData(fldArr.indexOf(fld));
    };

    var fieldContainer = document.createElement('div');
    fieldContainer.style.padding = '3px';

    fieldContainer.appendChild(inputField);
    fieldContainer.appendChild(removeButton);

    newFieldDiv.appendChild(fieldNameDiv);
    newFieldDiv.appendChild(fieldContainer);

    fldlist.appendChild(newFieldDiv);

    let string = JSON.stringify(fldArr);
    localStorage.setItem('fldArr', string);
    console.log(string);

    document.cookie = 'fldArr=' + JSON.stringify(string);
});

function removeData(index) {
    fldArr.splice(index, 1);
    fldlist.innerHTML = '';

    for (var i = 0; i < fldArr.length; i++) {
        var newFieldDiv = document.createElement('div');
                        fldlist.innerHTML += '<div style="padding: 3px; background-color: white; box-shadow: 0px 0px 1px 1px #ddd; border-radius: 5px; margin-top: 5px"><div style="padding: 3px;">'+fldArr[i].name+'</div><div style="padding: 3px;"><input style="border: solid 1px #ddd; border-radius: 5px" type="'+fldArr[i].type+'"> <button style="background-color: red; color: white; border: solid 1px red; border-radius: 5px" onclick="removedata('+i+')">x</button> </div></div>';
                    }
                    let string = JSON.stringify(fldArr) 
                    localStorage.setItem("fldArr", string)
                    console.log(string);
                    
                    document.cookie = 'fldArr='+ JSON.stringify(string);
                }

</script>
            
            <!--Dynamic End-->
            
            <hr>
            
            
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Application Limit</label>
                <div class="input-group has-validation">
                <input name="applimit" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    Please choose a application limit.
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomDeadline" class="form-label">Application Deadline</label>
                <input name="deadline" type="date" class="form-control" id="validationCustomDeadline" required>
                <div class="invalid-feedback">
                    Please choose an application deadline.
                </div>
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form><!-- End Custom Styled Validation -->
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

  <script src="https://cdn.tiny.cloud/1/yeelk9ipgqriqeyjrd0lxzmub4nnlsr0ecin4rswnvew4et0/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  
  <!-- Vendor JS Files -->
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
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