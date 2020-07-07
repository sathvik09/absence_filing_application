<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Jekyll v4.0.1" />
    <title>Dashboard Template · Bootstrap</title>

    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/4.5/examples/dashboard/"
    />

    <!-- Bootstrap core CSS -->
    <link href="http://<?= base_url("ext_files/dist/css/bootstrap.css")?>" rel="stylesheet" />

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="http://<?= base_url("ext_files/css/dashboard.css")?>" rel="stylesheet" />
  </head>
  <body>
    <nav
      class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow"
    >
      <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#"
        >HELLO ADMIN</a
      >
      <button
        class="navbar-toggler position-absolute d-md-none collapsed"
        type="button"
        data-toggle="collapse"
        data-target="#sidebarMenu"
        aria-controls="sidebarMenu"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav
          id="sidebarMenu"
          class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse"
        >
          <div class="sidebar-sticky pt-3">
            <ul class="nav flex-column">
              
              
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Employee
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Leave Forms


                </a>
              </li>
              <li class="nav-item settings">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  
             Settings
                        </a>
              </li>
              
              <li class="nav-item settings-nav-d">
                <a class="nav-link" href="http://<?= base_url("index.php/mycontroller/abcd/sample") ?>">
                  <span data-feather="bar-chart-2"></span>
                  Change Password
                </a>
              </li>
              
              <li class="nav-item settings-nav-d">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Add employee
                </a>
              </li>
              
              <li class="nav-item settings-nav-d">
                <a class="nav-link" href="http://<?= base_url("index.php/mycontroller/abcd/upload")?>">
                  <span data-feather="bar-chart-2"></span>
                  Upload Excel Sheet
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" >
                  <span data-feather="layers"></span>
                  Logout
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Reports
                </a>
              </li>
            </ul>

            
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
          <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
          >
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
            </div>
          </div>


          </div>
        </main>
      </div>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script>
      window.jQuery ||
        document.write(
          '<script src="http://<?= base_url("ext_files/dist/js/vendor/jquery.slim.min.js")?>"><\/script>'
        );
    </script>
    <script src="http://<?= base_url("ext_files/dist/js/bootstrap.bundle.js")?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script src="http://<?=base_url("ext_files/js/dashboard.js")?>"></script>
    <script src="http://<?=base_url("ext_files/js/drop_down_menu.js")?>"></script>
  </body>
</html>
