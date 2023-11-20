<?php
session_start();
require 'conn.php';

if (isset($_GET['schid'])) {
    $schID = $_GET['schid'];
    $uid = $_SESSION['userID'];

    // Check if the user has the scholarship with status 1
    $checkStatusQuery = "SELECT * FROM tbl_scholars WHERE userid = '$uid' AND scholarshipID = '$schID' AND status = '1'";
    $checkStatusResult = mysqli_query($conn, $checkStatusQuery);

    if (mysqli_num_rows($checkStatusResult) > 0) {
        // User has the scholarship with status 1, proceed to delete
        $deleteScholarQuery = "DELETE FROM tbl_scholars WHERE userid = '$uid' AND scholarshipID = '$schID' AND status = '1'";
        $deleteScholarResult = mysqli_query($conn, $deleteScholarQuery);

        if ($deleteScholarResult) {
            // Deletion successful
            header("Location: pending-scholarship.php"); // Redirect to the scholarships page or any other desired location
            exit();
        } else {
            // Deletion failed
            echo "Error canceling scholarship: " . mysqli_error($conn);
        }
    } else {
        // User doesn't have the scholarship with status 1
        echo "You cannot cancel this scholarship.";
    }
} else {
    // Redirect to an error page or handle the case when schid is not set
    header("Location: error.php");
    exit();
}
?>
