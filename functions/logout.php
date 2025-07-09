<?php
       setcookie("c_id","" ,time() - (86400 * 30), "/");
       setcookie("image", "", time() - (86400 * 30), "/");

        setcookie("name","" ,  time() - (86400 * 30), "/");
       setcookie("username","" , time() - (86400 * 30), "/");
       setcookie("password","" , time() - (86400 * 30), "/");
       setcookie("email" ,"" , time() - (86400 * 30), "/");
       setcookie("dob","" , time() - (86400 * 30), "/");
       header("Location: ../login.php");
?>
