<?php

    require 'conn.php';
    session_start();

    $userID = $_SESSION['userID'];
    $username = $_SESSION['username'];
    $oname = $_POST['oname'];
    $cname = $_POST['cname'];
    $email = $_POST['email'];
    $files = $_POST['filesup'];

    $countfiles = count($_FILES['filesup']['name']);

    $filesAll = "";
    $totalFileUploaded = 0;

    $proofsimgs = json_encode($_FILES['filesup']['name']);

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
                        Welcome '.$oname.' from '.$cname.'!
                    </p>
                    <p>
                        To continue, please verify your email address 
                        by clicking the button below.
                    </p><br>
                    <div>
                        <a href="dsscholarshop-gsc.online/verify-account-org.php?username='.$username.'"><button style="padding: 15px; border-radius: 100px; border: solid 1px white; background-color: skyblue; color: white; font-size: 18px; ">
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

            $updateuserstat = "UPDATE tbl_users SET status = '0' WHERE userID = '$userID' ";

            if(mysqli_query($conn, $updateuserstat)){

                echo "<script>location.href='pages-org-denied.php';</script>";
                
    
            }

        }


    }



    // echo "Total File uploaded : ".$totalFileUploaded;
    


?>