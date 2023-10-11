<?php
                require 'conn.php';

                

                // Check the connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION));

                // Check if the file is an actual image
                if (isset($_POST["submit"])) {
                    $check = @exif_imagetype($_FILES["fileToUpload"]["tmp_name"]);
                    if ($check === false) {
                        echo "File is not an image.";
                        $uploadOk = 0;
                    }
                }

                // Allow certain file formats (you can customize this)
                $allowedFormats = array(IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_GIF);
                if (!in_array($check, $allowedFormats)) {
                    echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
                    $uploadOk = 0;
                }

                if ($uploadOk == 1) {
                    // Read the file content
                    $fileContent = file_get_contents($_FILES["fileToUpload"]["tmp_name"]);

                    // Prepare the SQL statement to insert the file content into the database
                    $sql = "UPDATE tbl_userinformation SET profile = ? WHERE userID = $uid";
                    $stmt = $conn->prepare($sql);

                    // Bind the file content and user ID to the statement
                    $uid; // Replace with the actual user ID
                    $stmt->bind_param("si", $fileContent, $uid);

                    // Execute the statement
                    if ($stmt->execute()) {
                        echo "File uploaded and saved to the database successfully.";
                    } else {
                        echo "Error uploading file to the database: " . $stmt->error;
                    }

                    // Close the statement
                    $stmt->close();
                }

                // Close the database connection
                $conn->close();
                ?>