<?php
        include "db.php";

              $email = $_COOKIE["email"];
                $target_dir = "images/users/";
                $imgNum = rand();
                $FILES['userImage']['name'] = $imgNum .".png" ;
                $file_name = $_FILES['userImage']['name'];
                $file_tmp = $_FILES['userImage']['tmp_name'];
                $target_file = $target_dir . basename($_FILES["userImage"]["name"]);
                move_uploaded_file($file_tmp,"../images/users/".$file_name);
            // Check if the email exists in the database

                // Update the user data
                $update_query = "UPDATE CUSTOMER SET `image`='$target_file' WHERE email='$email'";
                if ($conn->query($update_query)) {
                    setcookie("image", $target_file, time() + (86400 * 30), "/");
                    echo "<div class='message' style='position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: black; color: white; padding: 20px; border-radius: 10px; text-align: center;'>
                    <p>User Image updated successfully!</p>
                    <a href='../profile.php' style='color: white; text-decoration: none; font-weight: bold;'>Go to Profile</a>
                </div>
                ";
                } else {
                    echo "<div class='message' style='position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: red; color: white; padding: 20px; border-radius: 10px; text-align: center;'>
                    <p>Error updating user Image!</p>
                    <a href='../profile.php' style='color: white; text-decoration: none; font-weight: bold;'>Go to Profile</a>
                </div>
                ";
                    // echo "Error updating record: " . $conn->error;
                }



       ?>
