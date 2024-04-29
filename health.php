<?php
session_start();

// Check if the user is not logged in and redirect to the login page
if (!isset($_SESSION['id'])) {
    header("Location: login.php"); // Change 'login.php' to your actual login page
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ELDERLY CARE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.php" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
        <h1 class="m-0 text-primary">ELDER CARE</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.php" class="nav-item nav-link active">Home</a>
            <a href="about.php" class="nav-item nav-link">About</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Caregivers</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="list.php" class="dropdown-item">List</a>
                    <a href="detail.php" class="dropdown-item">Detail</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="category.php" class="dropdown-item">Carer Category</a>
                    <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                    <a href="404.php" class="dropdown-item">404</a>
                </div>
            </div>
            <a href="contact.php" class="nav-item nav-link">Contact</a>
            <?php if(isset($_SESSION['id'])): ?>
                <a href="logout.php" class="nav-item nav-link">Logout</a>
            <?php endif; ?>
        </div>
        <a href="contact.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Talk To Specialist<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>

        <!-- Navbar End -->
    <!-- Spinner Start -->
    <div id="spinner" class="spinner-overlay">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="index.php" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <h1 class="m-0 text-primary">ELDER CARE</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Caregivers</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="job-list.php" class="dropdown-item">List</a>
                            <a href="job-detail.php" class="dropdown-item">Detail</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="category.phhp" class="dropdown-item">Job Category</a>
                            <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                            <a href="404.phhp" class="dropdown-item">404</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
                <?php if(isset($_SESSION['name'])): ?>
                <a href="logout.php" class="nav-item nav-link">Logout</a>
            <?php endif; ?>
                <a href="" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Talk To Specialist<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>

<body>

    <div class="container mt-5">
        <h2 class="mb-4">Health Status</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="temperature">Temperature (°C)</label>
                <input type="number" class="form-control" id="temperature" name="temperature" placeholder="Enter temperature">
            </div>
            <div class="form-group">
                <label for="blood_pressure">Blood Pressure (mmHg)</label>
                <input type="text" class="form-control" id="blood_pressure" name="blood_pressure" placeholder="Enter blood pressure">
            </div>
            <div class="form-group">
                <label for="heart_rate">Heart Rate (bpm)</label>
                <input type="number" class="form-control" id="heart_rate" name="heart_rate" placeholder="Enter heart rate">
            </div>
            <div class="form-group">
                <label for="weight">Weight (kg)</label>
                <input type="number" class="form-control" id="weight" name="weight" placeholder="Enter weight">
            </div>
            <div class="form-group">
                <label for="height">Height (cm)</label>
                <input type="number" class="form-control" id="height" name="height" placeholder="Enter height">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php if (!empty($user_health_info)) : ?>
            <h3 class="mt-5">Your Health Information:</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Temperature (°C)</th>
                        <th>Blood Pressure (mmHg)</th>
                        <th>Heart Rate (bpm)</th>
                        <th>Weight (kg)</th>
                        <th>Height (cm)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($user_health_info as $info) : ?>
                        <tr>
                            <td><?php echo $info['temperature']; ?></td>
                            <td><?php echo $info['blood_pressure']; ?></td>
                            <td><?php echo $info['heart_rate']; ?></td>
                            <td><?php echo $info['weight']; ?></td>
                            <td><?php echo $info['height']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</body>

</html>
