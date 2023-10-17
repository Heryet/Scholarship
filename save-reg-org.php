<?php
require 'conn.php'; // Include your database connection file here

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Process and store the uploaded file
    $uploadDir = 'uploads/'; // Specify the directory to store uploaded files
    $proofsID = $_FILES['proofsID'];

    if ($attachment['error'] === 0) {
        $attachmentPath = $uploadDir . $attachment['name'];
        if (move_uploaded_file($attachment['tmp_name'], $attachmentPath)) {
            // File upload successful
        }
    } else {
        // Handle file upload error
    }

    // Insert data into the database
    $insertQuery = "INSERT INTO tbl_users (fname, mname, lname, gender, orgName, email, username, password, attachment)
                    VALUES ($fname, $mname, $lname, $gender, $company, $email, $username, $password)";
    
    $stmt = $conn->prepare($insertQuery);
    $stmt->bind_param("sssssssss", $fname, $mname, $lname, $gender, $orgName, $email, $username, $password, $attachmentPath);

    if ($stmt->execute()) {
        // Data inserted successfully
        header("Location: pages-login.php"); // Redirect to a success page
        exit();
    } else {
        // Handle database insert error
    }

    $stmt->close();
    $conn->close();
} else {
    // Handle cases where the form was not submitted
    echo "Form not submitted!";
}
?>
