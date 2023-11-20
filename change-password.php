<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php
session_start();
require 'conn.php';

if (isset($_SESSION['userID'])) {
    $userID = $_SESSION['userID'];

    if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['currentPassword'], $_POST['newPassword'], $_POST['renewPassword'])) {
            $currentPassword = $_POST['currentPassword'];
            $newPassword = $_POST['newPassword'];
            $renewPassword = $_POST['renewPassword'];

            // Check if the new password and confirm password match
            if ($newPassword === $renewPassword) {
                // Verify the provided current password
                $checkPasswordQuery = "SELECT password FROM tbl_userinformation 
                                       INNER JOIN tbl_users ON tbl_userinformation.userinfoID = tbl_users.userinfoID
                                       WHERE tbl_users.userID = ?";
                $stmt = mysqli_prepare($conn, $checkPasswordQuery);
                mysqli_stmt_bind_param($stmt, "i", $userID);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                if ($row = mysqli_fetch_assoc($result)) {
                    $currentPasswordFromDB = $row['password'];

                    if ($currentPassword === $currentPasswordFromDB) {
                        // Use a prepared statement to update the password in the 'tbl_userinformation' table
                        $updatePasswordQuery = "UPDATE tbl_userinformation 
                            INNER JOIN tbl_users ON tbl_userinformation.userinfoID = tbl_users.userinfoID
                            SET tbl_userinformation.password = ? 
                            WHERE tbl_users.userID = ?";
                        $stmt = mysqli_prepare($conn, $updatePasswordQuery);
                        mysqli_stmt_bind_param($stmt, "si", $newPassword, $userID);

                        if (mysqli_stmt_execute($stmt)) {
                            // Password updated successfully, show a JavaScript alert
                            echo '<script>alert("Password updated successfully.");</script>';
                            // Redirect to users-profile.php
                            header('location: users-profile.php');
                            exit;
                        } else {
                            // Handle the error if the update fails
                            echo "Error updating password: " . mysqli_error($conn);
                        }

                        mysqli_stmt_close($stmt);
                    } else {
                        echo "Current password is incorrect.";
                    }
                }
            } else {
                echo "New password and re-entered password do not match.";
            }
        } else {
            echo "New password is empty or not set.";
        }
    }
} else {
    header('location: pages-login.php');
}
?>
