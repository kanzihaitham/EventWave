
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet"  href="./includes/style.sign.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>  
    <link href="./includes/component/Validation.php">
    <style>
        .message{
            position: fixed;
            top:30%;
            left:30%;
            width:500px;
            /* height:300px; */
            background-color:#fff;
            border-radius:20px;
            padding:50px;
            
        }
    </style>
</head>
<body>
    <div class="sign">
   
        <form action="signup.php" id="signForm"  enctype="multipart/form-data" method="POST">
            <h1>Sign Up</h1>

            <div class="input-box2">
           
                <div class="input-field">
                    <input type="text" placeholder="Full Name" name="fullname" id="fullname">
                    <i class='bx bxs-user'></i>
                </div>
                
                <p style="color: red;"  id="namemsg"></p>
            <br><br>

                <div class="input-field">
                    <input type="text" placeholder="Username" name="username"  id="username">
                    <i class='bx bxs-user'></i>
                </div>
                
                <p style="color: red;"  id="usernamemsg"></p>
            <br><br>
            </div>
            <div class="input-box2">
                <div class="input-field">
                    <input type="text"  placeholder="Email"  name="email"  id="email">
                    <i class='bx bxs-envelope'></i>
                </div>
               
                <p style="color: red;"  id="emailmsg"></p>
                <br><br><br>
        

                <div class="input-field">
    <input type="date" placeholder="Date of Birth" name="dob" id="dob">
    <i class='bx bxs-calendar'></i>
</div>

<p style="color: red;" id="dobmsg"></p>
<br><br><br>

            </div>
            <div class="input-box2">
                <div class="input-field">
                    <input type="password"  placeholder="Password"  name="password" id="password">
                    <i class='bx bxs-lock-alt'></i>
                </div>
                
                <p style="color: red;"  id="passmsg"></p>
            <br><br>
                <div class="input-field">
                    <input type="password"  placeholder="Confirm Password" name="confirmP" id="confirmP">
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <br><br>
                <div class="input-field">
                <input type="file" accept="Image/*" id="img" name="userImage" >
                    
                </div>

            </div>

            <button type="submit" class="confirmbtn" id="signForm" name="signup">Sign Up</button>
            
    <div class="login-section">
            <p>Already have an account? <a href="login.php">Login</a></p>
        </div>
    </div>
    <?php 
    if(isset($_POST['signup'])){
        include "functions/db.php";
        $fullname=$_POST['fullname'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        $dateofbirth=$_POST['dob'];
        $password=$_POST['password'];
        $cpassword=$_POST['confirmP'];


        $target_dir = "images/users/";
        $imgNum = rand();
        $FILES['userImage']['name'] = $imgNum .".png" ;
        $file_name = $_FILES['userImage']['name'];
        $file_tmp = $_FILES['userImage']['tmp_name'];
        $target_file = $target_dir . basename($_FILES["userImage"]["name"]);
        move_uploaded_file($file_tmp,"images/users/".$file_name);
    
         $verify_query = "SELECT email FROM CUSTOMER WHERE email='$email' ";
       $sql = "INSERT INTO CUSTOMER(`name`,`username`,`password`,`email`,`dob`,`image`) VALUES('$fullname','$username','$password','$email','$dateofbirth','".$target_file."');"; 
       $result = $conn->query($verify_query);
        if($result->num_rows > 0){
            echo "<div class='message'>
                <p>This email is used, Try another one please!</p>
                <a href='javascript:self.history.back()'><button class='btn'>Go Back</button>
                </div> <br>";
    
        }
        else{
            if ($conn->query($sql)) {
                echo "<div class='message'>
                <p>Registration Successfully!</p>
                <a href='login.php'>Login Now</a>
                </div> <br>";
            }
                
        }
       
    }
?>
        </form>
    </div>

    <script src="javascript/script.js"></script>
</body>
</html>