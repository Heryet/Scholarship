<?php

    require '../conn.php';

    $ssid = $_GET['scholarsid'];
    $sid = $_GET['ssid'];

    

    $updatescholar = "UPDATE tbl_scholars SET status = '2' WHERE scholarsID = '$ssid'  ";
    echo $sid;

    if(mysqli_query($conn, $updatescholar)){
        echo "<script>alert('Accepted'); location.href='list-scholarship.php?sid=$sid'; </script>";
    }


?>