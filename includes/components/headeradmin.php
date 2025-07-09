<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a
          class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"
          href="#"
          >EventWave</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#topNavBar"
          aria-controls="topNavBar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
          <form class="d-flex ms-auto my-3 my-lg-0">
            <div class="input-group">
              <input
                class="form-control"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-primary" type="submit">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown" id="navDropdown">
              <a
                class="nav-link dropdown-toggle ms-2"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                
              >
                <i class="bi bi-list d-none d-md-inline"></i>
              </a>
              <ul id="navdropdownContent" class="dropdown-menu dropdown-menu-end hide" >
                <li><a class="dropdown-item" href="admin.php">Admin Dashboard</a></li>
              <li><a class="dropdown-item" href="Analytics&reports.php">Analytics and Report</a></li>
              <li><a class="dropdown-item" href="adminEvents.php">Event Management</a></li>
              <li>
                <a class="dropdown-item" href="UserManagement.php">User Management</a>
              </li>
              <li>
                <a class="dropdown-item" href="Events.php">Events</a>
              </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <script src="./js/bootstrap.bundle.min.js"></script>