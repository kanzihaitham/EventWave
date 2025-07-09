<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="includes/bootstrap.min.css" />
    <link rel="stylesheet" href="includes/groupStyle.css">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="includes/ADMINstyle.css" />
    <title>EventWave</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>
  <body>
    
    <?php include "includes/components/headeradmin.php"; ?>
    
    <!-- offcanvas -->
    <div
      class="offcanvas offcanvas-start sidebar-nav bg-dark"
      tabindex="-1"
      id="sidebar"
    >
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
          <ul class="navbar-nav">
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3">
                CORE
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Interface
              </div>
            </li>
            <li>
              <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#layouts"
              >
                <span class="me-2"><i class="bi bi-layout-split"></i></span>
                <span>Layouts</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="#" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span>Dashboard</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-book-fill"></i></span>
                <span>Pages</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Addons
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-graph-up"></i></span>
                <span>Charts</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-table"></i></span>
                <span>Tables</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- offcanvas -->
   
 <main class="mt-5 pt-3">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h4>Dashboard</h4>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3 mb-3">
        <div class="card bg-light text-black h-100">
          <div class="card-body py-5">Primary Card</div>
          <div class="card-footer d-flex">
            View Details
            <span class="ms-auto">
              <i class="bi bi-chevron-right"></i>
            </span>
          </div>
        </div>
      </div>

      <div class="col-md-3 mb-3">
          <div class="card bg-warning text-dark h-100">
            <div class="card-body py-5">Warning Card</div>
            <div class="card-footer d-flex">
              View Details
              <span class="ms-auto">
                <i class="bi bi-chevron-right"></i>
              </span>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card bg-danger text-dark h-100">
            <div class="card-body py-5">Danger Card</div>
            <div class="card-footer d-flex">
              View Details
              <span class="ms-auto">
                <i class="bi bi-chevron-right"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
        <div class="col-md-3 mb-3">
          <div class="card bg-success text-dark h-100">
            <div class="card-body py-5">Success Card</div>
            <div class="card-footer d-flex">
              View Details
              <span class="ms-auto">
                <i class="bi bi-chevron-right"></i>
              </span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <div class="card h-100">
              <div class="card-header">
                <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                Area Chart 
              </div>
              <div class="card-body">
                <canvas class="chart" width="200" height="100"></canvas>
              </div>
            </div>
          </div>

          <div class="row">
              <div class="col-md-12 mb-3">
                <div class="card">
                  <div class="card-header">
                    <span><i class="bi bi-table me-2"></i></span> Data Table
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table
                        id="example"
                        class="table table-striped data-table"
                        style="width: 100%"
                      >
                      <thead>
                          <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Age</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Start date</th>
                            <th>Salary</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Ahmed</td>
                            <td>Sherif</td>
                            <td>32</td>
                            <td>System Architect</td>
                            <td>Maadi</td>
                            <td>4/4/2020</td>
                            <td>$120,800</td>
                          </tr>
                          <tr>
                              <td>Malak</td>
                              <td>Ahmed</td>
                              <td>30</td>
                              <td>Marketing</td>
                              <td>New Cairo</td>
                              <td>20/4/2020</td>
                              <td>$60,800</td>
                            </tr>
                            <tr>
                              <td>Sarah</td>
                              <td>Sherif</td>
                              <td>26</td>
                              <td>Pre-Sales Support</td>
                              <td>New York</td>
                              <td>25/7/2021</td>
                              <td>$80,800</td>
                            </tr>

                            <tr>
                              <td>Kanzy</td>
                              <td>Haitham</td>
                              <td>27</td>
                              <td>Software Engineer</td>
                              <td>London</td>
                              <td>15/4/2022</td>
                              <td>$80,800</td>
                            </tr>

    </main>
    <script src="javascript/ADMINscript.js"></script>
  
    <script src="./js/bootstrap.bundle.min.js"></script>
</div>          
  </body>
</html>
