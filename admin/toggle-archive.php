<?php
require '../conn.php';

$userid = $_GET['userid'];

// Fetch the current status from the database
$query = "SELECT is_archived FROM tbl_users WHERE userid = $userid";
$result = mysqli_query($conn, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $currentStatus = $row['is_archived'];

    // Toggle the status
    $newStatus = ($currentStatus == 1) ? 0 : 1;

    // Update the database with the new status
    $updateQuery = "UPDATE tbl_users SET is_archived = $newStatus WHERE userid = $userid";
    $updateResult = mysqli_query($conn, $updateQuery);

    if ($updateResult) {
        // Redirect back to the original page
        header("Location: list-organization.php");
        exit();
    } else {
        echo "Error updating status: " . mysqli_error($conn);
    }
} else {
    echo "Error fetching current status: " . mysqli_error($conn);
}
?>
