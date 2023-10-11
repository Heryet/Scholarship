<?php

    require '../conn.php';

    $sid = $_GET['sid'];

    $status = $_GET['status'];

    // echo $uid;
    
    if($status == "1"){

        $updatestat = "UPDATE tbl_scholarship SET status = '2' WHERE scholarshipID = '$sid' ";

        if(mysqli_query($conn, $updatestat)){
            echo "<script>location.href='list-scholarship.php';</script>";
        }else{
            echo "err";
        }
        
    }else{

        $updatestat = "UPDATE tbl_scholarship SET status = '1' WHERE scholarshipID = '$sid' ";

        if(mysqli_query($conn, $updatestat)){
            echo "<script>location.href='list-scholarship.php';</script>";
        }else{
            echo "err";
        }

    }

    // mysqli_real_escape_string();



?>