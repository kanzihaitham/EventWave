<header>
                
                <!-- Main Navbar -->
                <nav id="navbar" class="navbar navbar-expand-lg fixed-top scroll-up">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="Home.php" id="brand">EventWave</a>

                        <!-- Toggler Button (for offcanvas side nav) icon from font awesome, aria controls helps w assis. tech eg screen readers etc -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg">
                            <span class="navbar-toggler-icon">  <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i></span>
                        </button>

                        <!-- Navbar Content -->
                        <div class="collapse navbar-collapse justify-content-end">
                            <ul class="navbar-nav">
                                <!-- Navbar Items -->
                                <li class="nav-item">
                                    <a class="nav-link active fw-bold" href="index.php" style="color: #fff;">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="aboutUs.php">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="KanyeEvent.php">Events</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="cateogry.php">Categories</a>
                                </li>
                            
                                <li>
                                    <form class="d-flex">
                                        <div class="input-group">
                                            <input class="form-control text-white rounded-pill" type="search" placeholder="Search" aria-label="Search" style="background-color: transparent;">
                                            <span class="input-group-text bg-transparent border-0"><i class="fas fa-search"></i></span>
                                        </div>
                                    </form>
                                </li>
                                <li>
                                    <a href="profile.php"class="btn text-white">
                                        <i class="fas fa-user-circle"></i>
                                    </a>
                                </li> 
                            </ul>
                        </div>
                    </div>
                </nav>
            
                <!-- Offcanvas Side Nav -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel" style="background-color: black;">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="navbarOffcanvasLgLabel" style="background-color: black;">EventWave</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close" id="close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <!-- Duplicate navbar content -->
                        <ul class="navbar-nav">
                            <li>
                                <form class="d-flex">
                                    <div class="input-group">
                                        <input class="form-control text-white rounded-pill" type="search" placeholder="Search" aria-label="Search" style="background-color: transparent;">
                                        <span class="input-group-text bg-transparent border-0"><i class="fas fa-search"></i></span>
                                    </div>
                                </form>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active fw-bold" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="aboutUs.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="KanyeEvent.php">Events</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="category.php">Categories</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </header>