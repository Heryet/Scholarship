<?php

    require '../conn.php';

    session_start();

    $userid = $_SESSION['userID'];
    
    $sname = $_POST['sname'];
    $sname = mysqli_real_escape_string($conn, $_POST['sname']);

    $descs = $_POST['descs'];
    $descs = mysqli_real_escape_string($conn, $_POST['descs']);

    $req = html_entity_decode($_POST['req']);
    $req = mysqli_real_escape_string($conn, $_POST['req']);

    $applimit = $_POST['applimit'];

    $scholarshipID = "SCHLR".rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);


    // echo $req;

    echo $userid;

    $getorgid = "SELECT * FROM tbl_organization WHERE userID = '$userid' ";
    $getorgidq = mysqli_query($conn, $getorgid);
    $getorgidrow = mysqli_fetch_array($getorgidq);

    $orgID = $getorgidrow['orgID'];

    // echo $orgID;

    // exit();

    $insertScholar = "INSERT INTO `tbl_scholarship` (`scholarshipID`, `orgID`, `scholarshipname`, `description`, `req`, `applicant_limit`, `status`, `queue`) VALUES ('$scholarshipID', '$orgID', '$sname', '$descs', '$req', '$applimit', '1', NULL)";

    if(mysqli_query($conn, $insertScholar)){
        echo "<script>alert('Created');location.href='add-scholarship.php';</script>";
    }else{
        echo "err";
    }



?>