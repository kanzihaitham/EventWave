<?php 
        include "db.php";

            // Assuming you have sanitized inputs for security
            $id = $_GET['u'];
            // Check if the email exists in the database
            
                // Update the user data
                $update_query = "DELETE FROM customer WHERE c_id='$id'";
                if ($conn->query($update_query)) {
                    echo "<div class='message' style='position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: green; color: white; padding: 20px; border-radius: 10px; text-align: center;'>
                    <p>User deleted successfully!</p>
                    <a href='javascript:self.history.back()' style='color: white; text-decoration: none; font-weight: bold;'>Go to Profile</a>
                </div>
                ";
                } else {
                    echo "<div class='message' style='position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: red; color: white; padding: 20px; border-radius: 10px; text-align: center;'>
                    <p>Error deleting user!</p>
                    <a href='javascript:self.history.back()' style='color: white; text-decoration: none; font-weight: bold;'>Go to Profile</a>
                </div>
                ";
                    // echo "Error updating record: " . $conn->error;
                }
            
        
        
       ?>