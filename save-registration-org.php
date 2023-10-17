<?php

    require 'conn.php';

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mname = $_POST['mname'];
    $bd = $_POST['bd'];
    $userlvl = $_POST['userlvl'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $userid = "02100".rand(0,9).rand(0,9).rand(0,9).rand(0,9);
    $userid2 = "02000".rand(0,9).rand(0,9).rand(0,9).rand(0,9);



    $checkaccountemail = "SELECT * FROM tbl_userinformation WHERE tbl_userinformation.email = '$email' ";
    $checkaccountemailq = mysqli_query($conn, $checkaccountemail);


    $checkaccountusername = "SELECT * FROM tbl_userinformation WHERE tbl_userinformation.username = '$username' ";
    $checkaccountusernameq = mysqli_query($conn, $checkaccountusername);

    if(mysqli_num_rows($checkaccountemailq) > 0){
        echo "<script>alert('Email already exist'); 'history.go(-1)'; </script>";
    }else{

       

        if(mysqli_num_rows($checkaccountusernameq) > 0){
            echo "<script>alert('Username already exist'); history.go(-1); </script>";
        }else{
            $insertdata = "INSERT INTO `tbl_userinformation` (`userinfoID`, `fname`, `mname`, `lname`, `birthdate`, `gender`, `email`,`contact`,`address`, `username`, `password`, `status`) VALUES ('$userid', '$fname', '$mname', '$lname', '$bd', '$gender', '$email','$contact','$address', '$username', '$password', '1')";
            $insertdata2 = "INSERT INTO `tbl_users` (`userID`, `userinfoID`, `userlvlID`, `status`) VALUES ('$userid2', '$userid', '2', '1')";

            if(mysqli_query($conn, $insertdata)){
                if(mysqli_query($conn, $insertdata2)){
                    echo "<script>alert('Registration Success'); location.href='pages-login.php'; </script>";
                }
            }
        }

    } 
?>