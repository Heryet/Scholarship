<?php

    require 'conn.php';
    
    $userid = $_GET['userid'];
    $schid = $_GET['schid'];
    $scholarsID = "SCHOLAR".rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
    $insertDateQuery = "INSERT tbl_scholars VALUES date = NOW()";
    
    $fcount = $_POST['fcount'];
    
    for($i=1; $i<$fcount; $i++){
        $name = $_POST['name'.$i];
        $field = $_POST['field'.$i];
        
        $uploaddir = 'uploads/';
        $uploadfile = $uploaddir . basename($_FILES['field'.$i]['name']);
    
        if (move_uploaded_file($_FILES['field'.$i]['tmp_name'], $uploadfile)) {
            
            $insertdata = "INSERT INTO `tbl_uploads` (`uploadID`, `dest`, `sid`, `userid` ) VALUES (NULL, '$uploadfile', '$schid', '$userid')";
            mysqli_query($conn, $insertdata);
            
        } else {
            
        }
    }

    $insert = "INSERT INTO `tbl_scholars` (`scholarsID`, `scholarshipID`, `userid`, `status`, `queue`, date) VALUES ('$scholarsID', '$schid', '$userid', '1', NULL, NOW() )";
    
    if(mysqli_query($conn, $insert)){
        echo "<script>alert('Application Submitted');location.href='list-scholarship.php';</script>";
    }
    
   
    
    

?>