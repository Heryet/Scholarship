<?php

    require '../conn.php';

    session_start();

    $userid = $_SESSION['userID'];
    
    $sname = $_POST['sname'];
    $sname = mysqli_real_escape_string($conn, $_POST['sname']);

    $descs = $_POST['descs'];
    $descs = mysqli_real_escape_string($conn, $_POST['descs']);

    $req = $_POST['req'];
    $req = mysqli_real_escape_string($conn, $_POST['req']);
    
    $qualification = $_POST['qualification'];
    $qualification = mysqli_real_escape_string($conn, $_POST['qualification']);
    
    $benefit = $_POST['benefit'];
    $benefit = mysqli_real_escape_string($conn, $_POST['benefit']);

    $applimit = $_POST['applimit'];
    $deadline = $_POST['deadline'];

    $scholarshipID = "SCHLR".rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
    
    $programlvl_id = $_POST['programlvl_id'];
    


    // echo $req;

    // echo $userid;
    
    $stype_id = $_POST['stype'];
    
    

    

    $getorgid = "SELECT * FROM tbl_organization WHERE userID = '$userid' ";
    $getorgidq = mysqli_query($conn, $getorgid);
    $getorgidrow = mysqli_fetch_array($getorgidq);

    $orgID = $getorgidrow['orgID'];

    
    // Insert all the custom fields
    
    $arr = json_decode($_COOKIE['fldArr']);
    $convertstr = strval($arr); 
    $json = $convertstr;
    
    $finalarr = json_decode($json);

    // print_r($finalarr);
    
    for($i=0; $i<count($finalarr); $i++){
        $name = $finalarr[$i]->name;
        $type = $finalarr[$i]->type;
        $fieldssql = "INSERT INTO `tbl_fields` (`fid`, `scholarshipID`, `field`, `type`) VALUES (NULL, '$scholarshipID', '$name', '$type')";
        mysqli_query($conn, $fieldssql);
        // echo $name." ";
    }
    
    
    
    $insertScholar = "INSERT INTO `tbl_scholarship` (`scholarshipID`, `orgID`, `scholarshipname`, `description`, `req`, `applicant_limit`, `status`, `queue`, `stype_id`, `date`, `deadline`,`qualification`, `benefit`, `proglvlid`) VALUES ('$scholarshipID', '$orgID', '$sname', '$descs', '$req', '$applimit', '1', NULL, '$stype_id', NOW(), '$deadline','$qualification', '$benefit', '$programlvl_id')";

    
    // End
    
    

    if(mysqli_query($conn, $insertScholar)){
        echo "<script>alert('Created');location.href='add-scholarship.php';</script>";
    }else{
        echo "err";
    }



?>