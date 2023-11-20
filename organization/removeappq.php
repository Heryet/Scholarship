<?php

    require '../conn.php';

    $ssid = $_GET['scholarsid'];
    $sid = $_GET['ssid'];

    

    $deletescholar = "DELETE FROM tbl_scholars WHERE scholarsID = '$ssid'";
    echo $sid;

    if(mysqli_query($conn, $deletescholar)){
        echo "<script>alert('Applicant Removed'); location.href='list-scholarship.php?sid=$sid'; </script>";
    }


?>