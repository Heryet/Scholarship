<?php
session_start();

require 'conn.php';

$userid = $_GET['userid'];
$profpic = $_POST['profpic'];


if (isset($_FILES['fileToUpload'])) {
    $uploadDir = 'uploads/';
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

    $fileName = $_FILES['fileToUpload']['name'];
    $fileTmpName = $_FILES['fileToUpload']['tmp_name'];
    $fileSize = $_FILES['fileToUpload']['size'];
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    if (in_array($fileExtension, $allowedExtensions)) {
        $uniqueFileName = time() . '_' . $fileName;

        if (move_uploaded_file($fileTmpName, $uploadDir . $uniqueFileName)) {
            $userID = $_SESSION['userID'];
            $profpicPath = $uploadDir . $uniqueFileName;

            // Use prepared statement to update the database
            $updateQuery = "UPDATE tbl_userinformation SET profpic =  $profpic WHERE userID = $userID";
            $stmt = $conn->prepare($updateQuery);
            $stmt->bind_param("si", $profpicPath, $userID);

            // Check if the update was successful
            if ($stmt->execute()) {
                echo "Profile image updated successfully!";
            } else {
                echo "Error updating profile image: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "File upload failed.";
        }
    } else {
        echo "Invalid file format. Allowed extensions: jpg, jpeg, png, gif.";
    }
} else {
    echo "No file was uploaded.";
}
?>
