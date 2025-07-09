<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet"  href="./includes/style.log.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
</head>

<body>

    <div class="log" >
        <form id="loginForm" action="functions/login.php" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text"  placeholder="Username" name="username" id="username">
                <i class='bx bxs-user'></i>
            </div>
            <p style="color: red;"  id="usermsg"></p>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" id="password">
                <i class='bx bxs-lock-alt'></i>
            </div>
            <p style="color: red;"  id="passmsg"></p>
            <br><br>
            <div class="forget">
                <label> <input type="checkbox"> Remember me
                </label>
                <a href="#"> Forget Password?</a>
            </div> 
            <button type="submit"  class="subbtn">Login</button>

            <div  class="register">
                <p>Don't have an account? 
                    <a href="signup.php">Register</a> </p>
            </div>
            <div>
                <p>If you're an admin, click here:</p>
    
                <button type="submit" formaction="functions/loginAdmin.php" id="adminLoginBtn" class="adminbtn">Login as Admin</button>
    
            </div>
        </form>

    </div>
    <script src="javascript/script.js"></script>
</body>

</html>


