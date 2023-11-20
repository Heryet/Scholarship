<?php

    require '../conn.php';

    $uid = $_GET['userid'];

    // echo $uid;
    
    $updatestat = "UPDATE tbl_users SET status = '0' WHERE userid = '$uid' ";

    if(mysqli_query($conn, $updatestat)){
        echo "<script>alert('Declined');location.href='review-organization.php';</script>";
    }else{
        echo "err";
    }

    // mysqli_real_escape_string();



?>