<?php

    require 'conn.php';
    
    $scholarsID = "SCHOLAR".rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
    $userid = $_GET['userid'];
    $schid = $_GET['schid'];

    // echo $scholarsID;

    $insert = "INSERT INTO `tbl_scholars` (`scholarsID`, `scholarshipID`, `userid`, `status`, `queue`) VALUES ('$scholarsID', '$schid', '$userid', '1', NULL)";

    if(mysqli_query($conn, $insert)){
        echo "<script>alert('Reserved');location.href='list-scholarship.php';</script>";
    }


?>