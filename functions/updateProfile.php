<?php 
        include "db.php";

            // Assuming you have sanitized inputs for security
            $fullname = $_POST['fullname'];
            // $username = $_POST['username'];

            $username = $_POST['username'];
            $dateofbirth = $_POST['dob'];
            $password = $_POST['password'];
            $email = $_COOKIE['email'];
            // Check if the email exists in the database
            
                // Update the user data
                $update_query = "UPDATE CUSTOMER SET `name`='$fullname', `username`='$username', `password`='$password', `dob`='$dateofbirth' WHERE email='$email'";
                if ($conn->query($update_query)) {
                    setcookie("name", $fullname, time() + (86400 * 30), "/");
                    setcookie("password", $password, time() + (86400 * 30), "/");
                    setcookie("username", $username, time() + (86400 * 30), "/");
                    setcookie("dob", $_POST['dob'], time() + (86400 * 30), "/");
                    echo "<div class='message' style='position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: black; color: white; padding: 20px; border-radius: 10px; text-align: center;'>
                    <p>User data updated successfully!</p>
                    <a href='../profile.php' style='color: white; text-decoration: none; font-weight: bold;'>Go to Profile</a>
                </div>
                ";
                } else {
                    echo "<div class='message' style='position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: red; color: white; padding: 20px; border-radius: 10px; text-align: center;'>
                    <p>Error updating user data!</p>
                    <a href='../profile.php' style='color: white; text-decoration: none; font-weight: bold;'>Go to Profile</a>
                </div>
                ";
                    // echo "Error updating record: " . $conn->error;
                }
            
        
        
       ?>