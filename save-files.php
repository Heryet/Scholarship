
<?php

    require 'conn.php';

    $userid = $_GET['userid'];
    $sid = $_GET['sid'];

    $countfiles = count($_FILES['filesk']['name']);

    $filesAll = "";
    $totalFileUploaded = 0;

    $proofsimgs = json_encode($_FILES['filesk']['name']);
    
    // echo $sid;

    // exit();

    for($i=0;$i<$countfiles;$i++){

        $filename = basename($_FILES['filesk']['name'][$i]);
        $location = "uploads/".$filename;

        echo $location."<br>";

            ## Upload file
        if(move_uploaded_file($_FILES["filesk"]["tmp_name"][$i], $location)){

            // echo "file name : ".$filename."<br/>";

            // $proofsobj = (object) array('$i', '$filename');


        }else{
            // echo "err";
        }

    }

    $insertreq = "INSERT INTO `tbl_applicant_req` (`appreqID`, `userid`, `scolarshipID`, `reqs`, `status`) VALUES (NULL, '$userid', '$sid', '$proofsimgs', '0')";
    if(mysqli_query($conn, $insertreq)){
        $updatereq = "UPDATE tbl_scholars SET status = '3' WHERE userid = '$userid' AND scholarshipID = '$sid' ";
        if(mysqli_query($conn, $updatereq)){
            echo "<script>alert('Uploaded');location.href='view-scholarship.php?schid=".$sid."';</script>";
        }
    }


?>

