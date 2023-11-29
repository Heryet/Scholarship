<?php

    require 'conn.php';

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mname = $_POST['mname'];
    $bd = $_POST['bd'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $orgname = $_POST['orgname'];
    $userid = "02100".rand(0,9).rand(0,9).rand(0,9).rand(0,9);
    $userid2 = "02000".rand(0,9).rand(0,9).rand(0,9).rand(0,9);

    $to = $email;
    $subject = "Email Verification";
    
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $headers .= 'From: Diverse System Scholarship <dsscholarship@gmail.com>';
    
    $message = '<html><body>';
    $message .= '<h1>Hello, World!</h1>';
    $message .= '</body></html>';
    
    $message = '<html><body>';
    
    $message .= '
    
    <div style="padding: 20px; background-color: #ddd;">
        <div style="background-color: white; border-radius: 10px">
            <div style="padding: 20px; border-bottom: solid 1px #ddd; font-size: 30px; font-family: Arial, Helvetica, sans-serif; color: skyblue;"><b>Diverse System Scholarship</b></div>
            <div style="padding: 20px; font-family: Arial, Helvetica, sans-serif; color: gray;">
                <br>
                <div style="font-size: 25px;">
                    Verify Email
                </div>
                <div style="font-size: 18px;">
                    <p>
                        Welcome '.$fname.' '.$lname.'!
                    </p>
                    <p>
                        To continue, please verify your email address 
                        by clicking the button below.
                    </p><br>
                    <div>
                        <a href="dsscholarshop-gsc.online/verify-account.php?username='.$username.'"><button style="padding: 15px; border-radius: 100px; border: solid 1px white; background-color: skyblue; color: white; font-size: 18px; ">
                            Verify Email Address
                        </button></a>
                    </div><br>
                    <p>
                        Thanks,<br>
                        Team Diverse System Scholarship
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    ';
    
    $message .= "</body></html>";
    
    
    if(mail($to, $subject, $message, $headers)){
        // echo "<script>location.href = 'Verify-email.php'</script>";
    }else{
        echo "error";
    }

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
            $insertdata = "INSERT INTO `tbl_userinformation` (`userinfoID`, `fname`, `mname`, `lname`, `birthdate`, `gender`, `email`,`contact`,`address`, `username`, 
                            `password`, `status`, `profpic`, `orgname`) 
                            VALUES ('$userid', '$fname', '$mname', '$lname', '$bd', '$gender', '$email','$contact','$address', '$username', '$password', '0', '1', '$orgname')";
                            
            $insertdata2 = "INSERT INTO `tbl_users` (`userID`, `userinfoID`, `userlvlID`, `status`) VALUES ('$userid2', '$userid', '2', '1')";

            if(mysqli_query($conn, $insertdata)){
                if(mysqli_query($conn, $insertdata2)){
                    echo "<script>alert('Registration Success'); location.href='pages-login.php'; </script>";
                }
            }
        }

    } 
?>