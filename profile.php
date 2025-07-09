<!DOCTYPE html>
<html lang="en">
<head>
    <!-- website unicode  -->
    <meta charset="UTF-8">
    <!-- font awesome icons  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./includes/profile.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href= "https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- website title -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>EventWave</title>
</head>
<body>

<?php include "includes/components/header.php"; ?>

                <!-- <li> Sign In
                    <a href="profile.php"class="btn text-white">
                       <i class="fas fa-user-circle"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div> -->
    <div class="Dcontainer">
        <nav class="sidebar">
          <div class="profile-pic">
            <img src="<?php echo $_COOKIE['image'];?>" alt="Profile Image" id="profile-pic">
            <i id="edit-image" class='bx bx-edit-alt' ></i>
          </div>
          <h3 class="profile-name"><?php echo $_COOKIE['name']; ?></h3>

          <ul id="myNav">
            <li><a href="#" data="myEvents">My Events</a></li>
            <li><a href="#" data="myInfo">Personal info</a></li>
            <!-- <li><a href="#" data="paymentinfo">Payment Details</a></li> -->



          </ul>
          <button class="logout-btn" id="logoutBtn"><i class='bx bx-log-out bx-flip-horizontal' ></i>Logout</button>
        </nav>
        <main class="content">
          <h1>Dashboard</h1>
          <section class="events" id="myEvents">
            <h2>My Events</h2>
            <div class="events-container">
                <div class="event">
                    <img src="images/kanye.jpg" alt="E3">
                    <h4>KANYE WEST</h4>
                </div>
                <div class="event">
                    <img src="images/theweekend.jpg " alt="E1">
                    <h4>THE WEEKEND</h4>
                </div>
                <div class="event">
                    <img src="images/cairokee.jpg" alt="E2">
                    <h4>CAIROKEE</h4>
                </div>
                <div class="event">
                    <img src="images/shakira.jpg" alt="E4">
                    <h4>SHAKIRA</h4>
                </div>
                <div class="event">
                    <img src="images/pablo.jpg" alt="E4">
                    <h4>Marwan Pablo</h4>
                  </div>
              </div>
            </section>
            <section class="information hide" id="myInfo">
              <div class="container">
                <div class="row gutters">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card h-100" style="background-color:#fff0;">
                      <div class="card-body">
                        <div class="row gutters">
                          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h6 class="mb-2 text-primary">Personal Details</h6>
                          </div>
                          <form action="functions/updateProfile.php" method="post">
                            <div class="col-12">
                              <div class="form-group">
                                <label for="fullName">Full Name</label>
                                <input type="text" class="form-control" name="fullname" value="<?php echo $_COOKIE['name']; ?>" id="fullName" placeholder="Enter full name">
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="form-group">
                                <label for="eMail">Username</label>
                                <input type="text" class="form-control" name="username" value="<?php echo $_COOKIE['username']; ?>" id="eMail" placeholder="Enter email ID">
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="form-group">
                                <label for="eMail">Email</label>
                                <input type="email" class="form-control" name="email" value="<?php echo $_COOKIE['email']; ?>" disabled id="eMail" placeholder="Enter email ID">
                              </div>
                            </div>
                            <div class=" col-12">
                              <div class="form-group">
                                <label for="phone">dob</label>
                                <input type="date" class="form-control" name="dob" id="dob" value="<?php echo $_COOKIE['dob']; ?>" placeholder="Enter phone number">
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="form-group">
                                <label for="website">Password</label>
					                      <input type="password" class="form-control" name="password" value="<?php echo $_COOKIE['password']; ?>" id="password" placeholder="password">
				                      </div>
			                      </div>
		                      </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                              <div class="text-right">
                                <!-- <button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button> -->
                                <button type="submit" id="submit" name="submit" class="btn btn-primary">Update</button>
                              </div>
                            </div>
                        </form>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </section>

        </main>
      </div>
      <div id="bigPImage" class="hide">
            <span id="closeImage">X</span>
          <img src="<?php echo $_COOKIE['image'];?>" alt="Profile Image">
      </div>

      <form class="" style="display:none;" action="functions/updateImage.php" enctype="multipart/form-data" method="post">


      <input type="file" style="display: none;" onchange="uploadFile()" accept="Image/*" name="userImage"  id="edit-file-input"/>
      <button type="submit" id="updateImageBtn" name="button"></button>
    </form>


      <div id="black" class="container-fluid">


</div>
<?php include "includes/components/footer.php"; ?>
    <script>
    function uploadFile(){
      if (confirm("Are You Sure you wat to update your image ?")) {
        $("#updateImageBtn").click();
      }

    }
</script>
    <script src="javascript/script.js"></script>

</body>
</html>
