<?php

    require 'conn.php';
    session_start();

    $userID = $_SESSION['userID'];
    $oname = $_POST['oname'];
    $cname = $_POST['cname'];
    $email = $_POST['email'];
    $files = $_POST['filesup'];

    $countfiles = count($_FILES['filesup']['name']);

    $filesAll = "";
    $totalFileUploaded = 0;

    $proofsimgs = json_encode($_FILES['filesup']['name']);

    for($i=0;$i<$countfiles;$i++){

        $filename = basename($_FILES['filesup']['name'][$i]);
        $location = "uploads/".$filename;

        // echo $location."<br>";

        
            ## Upload file
        if(move_uploaded_file($_FILES["filesup"]["tmp_name"][$i], $location)){

            // echo "file name : ".$filename."<br/>";

            // $proofsobj = (object) array('$i', '$filename');

        }else{
            
        }

    }
    $proofsIDs = "PROOF".rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
    $insertProofs = "INSERT INTO `tbl_proofs` (`proofsID`, `userID`, `imageLoc`) VALUES ('$proofsIDs', '$userID', '$proofsimgs')";
    $orgID = "ORG".rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);

    if(mysqli_query($conn, $insertProofs)){

        // echo "done na po";

        $insertOrg = "INSERT INTO `tbl_organization` (`orgID`, `userID`, `name`, `company`, `email`, `proofsID`, `status`) VALUES ('$orgID', '$userID', '$oname', '$cname', '$email', '$proofsIDs', '1')";

        if(mysqli_query($conn, $insertOrg)){

            $updateuserstat = "UPDATE tbl_users SET status = '2' WHERE userID = '$userID' ";

            if(mysqli_query($conn, $updateuserstat)){

                echo "<script>location.href='pages-org-denied.php';</script>";
                
    
            }

        }


    }



    // echo "Total File uploaded : ".$totalFileUploaded;
    


?>