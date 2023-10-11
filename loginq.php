<?php

    require 'conn.php';
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];
   
    $checkData = "SELECT * FROM tbl_userinformation WHERE username = '$username' AND password = '$password' ";
    $checkDataRes = mysqli_query($conn, $checkData);
    $getdatarow = mysqli_fetch_array($checkDataRes);

    if(mysqli_num_rows($checkDataRes) > 0){

        $userinfoID = $getdatarow['userinfoID'];

        $getcred = "SELECT * FROM tbl_users WHERE userinfoID = '$userinfoID' ";
        $getcredRes = mysqli_query($conn, $getcred);
        $getcredrow = mysqli_fetch_array($getcredRes);

        if($getcredrow['userlvlID'] == 3){
            $_SESSION['userID'] = $getcredrow['userID'];
            $_SESSION['userlvlID'] = $getcredrow['userlvlID'];
            header('location: index.php');
        }else if($getcredrow['userlvlID'] == 2){
            if($getcredrow['status'] == 1){
                $_SESSION['userID'] = $getcredrow['userID'];
                $_SESSION['userlvlID'] = $getcredrow['userlvlID'];
                header('location: pages-register-org.php');
            }else if($getcredrow['status'] == 2){
                header('location: pages-org-denied.php');
            }else if($getcredrow['status'] == 3){
                $_SESSION['userID'] = $getcredrow['userID'];
                $_SESSION['userlvlID'] = $getcredrow['userlvlID'];
                header('location: organization/index.php');
            }
        }else if($getcredrow['userlvlID'] == 1){
            $_SESSION['userID'] = $getcredrow['userID'];
            $_SESSION['userlvlID'] = $getcredrow['userlvlID'];
            header('location: admin/index.php');   
        }
    }else{
        echo "<script>alert('Invalid Account'); location.href='pages-login.php'; </script>";
    }
    
    exit();



?>