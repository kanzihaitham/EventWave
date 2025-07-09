<?php
    include "db.php";
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM CUSTOMER WHERE username = '" . $username . "' AND password = '" . $password . "'" ;
        $result = $conn->query($sql); // result set
        $duration = 86400 * 30;
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              setcookie("image", $row["image"], time() + (86400 * 30), "/");
                setcookie("c_id", $row["c_id"], time() + (86400 * 30), "/");
                setcookie("name", $row["name"], time() + (86400 * 30), "/");
                setcookie("username", $row["username"], time() + (86400 * 30), "/");
                setcookie("password", $row["password"], time() + (86400 * 30), "/");
                setcookie("email", $row["email"], time() + (86400 * 30), "/");
                setcookie("dob", $row["dob"], time() + (86400 * 30), "/");
                setcookie("image", $row["image"], time() + ($duration), "/");
                header("Location: ../profile.php");
            }
        } else {
            echo"<div class='message' style='position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: red; color: white; padding: 20px; border-radius: 10px; text-align: center;'>
            <p>Please Enter a valid Login Credintials!</p>
            <a href='javascript:self.history.back()' style='color: white; text-decoration: none; font-weight: bold;'>Go Back</a>
        </div>";
            // header("Location: ../login.php");
        }
        $conn->close();
?>
