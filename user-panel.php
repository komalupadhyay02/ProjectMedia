<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <link href="user-panel-css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"/>
    <link href="user-panel-css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;900&family=Nunito&family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f867f983a3.js" crossorigin="anonymous"></script>
    <link href="user-panel-css/admin-style.css" rel="stylesheet"/>
    <title>Welcome</title>
</head>
<body>
<!-- top navigation bar -->
<nav class="navigation navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container-fluid">
        <button aria-controls="offcanvasExample" class="navbar-toggler" data-bs-target="#sidebar" data-bs-toggle="offcanvas" type="button">
            <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a class="navbar-brand me-auto ms-lg-0 ms-3 fw-bold" href="#">Hi Shampoo !</a>
        <button aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#topNavBar" data-bs-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
            <form class="d-flex ms-auto my-3 my-lg-0">
                <div class="input-group">
                    <input aria-label="Search" class="form-control" placeholder="Search" type="search"/>
                    <button class="btn btn-secondary" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a aria-expanded="false" class="nav-link dropdown-toggle ms-2" data-bs-toggle="dropdown" href="#" role="button">
                        <i class="bi bi-person-fill"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Shampoo</a></li>
                        <li><a class="dropdown-item" href="form2.html">New Project</a></li>
                        <li>
                            <a class="dropdown-item" href="index.html">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- top navigation bar -->
<!-- offcanvas -->
<div
        class="navigation offcanvas offcanvas-start sidebar-nav"
        id="sidebar"
        tabindex="-1"
>
    <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
            <ul class="navbar-nav">
                <li>
                    <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                        Home
                    </div>
                </li>
                <li>
                    <a class="nav-link px-3 active" href="#">
                        <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="my-4">
                    <hr class="dropdown-divider bg-light"/>
                </li>
                <li>
                    <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                        Projects
                    </div>
                </li>
                <li>
                        <span class="me-2"></span>
                        <span><a class="nav-link px-3 sidebar-link" href="form2.php"><i class="fa-solid fa-cloud-arrow-up"></i>&nbsp;&nbsp;Upload Project</a></span>
                </li>
                <li>
                    <a class="nav-link px-3" href="#">
                        <span><a class="nav-link px-3 sidebar-link" href="#"><i class="fa-solid fa-chart-simple"></i>&nbsp;&nbsp;&nbsp;Leaderboard</a></span>
                    </a>
                </li>
                <li class="my-4">
                    <hr class="dropdown-divider bg-light"/>
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
                <h2>Projects Available</h2>
                <hr>
            </div>
        </div>
        <section id="completed-project">
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="card bg-dark text-white">
                    <img class="card-img-top" src="images/img1.png" alt="project1">
                    <div class="card-body">AI Model</div>
                    <div class="card-footer d-flex">
                     <a class="project-details" href="project.html">View Details</a>
                        <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card bg-dark text-white">
                    <img class="card-img-top" src="images/img1.png" alt="project2">
                    <div class="card-body">Machine Learning</div>
                    <div class="card-footer d-flex">
                        <a class="project-details" href="project.html">View Details</a>
                        <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card bg-dark text-white">
                    <img class="card-img-top" src="images/img1.png" alt="project2">
                    <div class="card-body">Finance Dashboard</div>
                    <div class="card-footer d-flex">
                        <a class="project-details" href="project.html">View Details</a>
                        <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card bg-dark text-white">
                    <img class="card-img-top" src="images/img1.png" alt="project2">
                    <div class="card-body">Disaster Management</div>
                    <div class="card-footer d-flex">
                        <a class="project-details" href="project.html">View Details</a>
                        <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <h2>Ongoing Projects</h2>
            <hr>
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="card h-100">
                    <div class="card-header">
                        <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                        Project 1
                    </div>
                    <div class="card-body">
                        <a href="https://maulik-pandey.github.io/TinDog/"><img class="card-img" src="images/tindog.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card h-100">
                    <div class="card-header">
                        <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                        Project 2
                    </div>
                    <div class="card-body">
                        <a href="https://maulik-pandey.github.io/InHouseMapNav/"><img class="card-img" src="images/inhouse.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="./js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
<script src="./js/jquery-3.5.1.js"></script>
<script src="./js/jquery.dataTables.min.js"></script>
<script src="./js/dataTables.bootstrap5.min.js"></script>
<script src="./js/script.js"></script>
</body>
</html>
