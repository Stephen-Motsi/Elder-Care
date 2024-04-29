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

        <!-- Content Section -->
        <div class="container mt-5">
            <!-- Bluetooth Connection Status -->
            <div id="bluetooth-status" class="text-center mb-4">
                <h2>Bluetooth Connection Status</h2>
                <p id="connection-status">Not connected</p>
                <button id="connect-btn" class="btn btn-primary">Connect to Bluetooth</button>
            </div>
            
            <!-- Device Information -->
            <div id="device-info" class="text-center">
                <h2>Device Information</h2>
                <p id="device-name">No device connected</p>
                <p id="device-data">-</p>
            </div>
        </div>
        <!-- Content Section End -->

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>

        <!-- Custom JavaScript for Bluetooth Connection -->
        <script>
            // Button click event to connect to Bluetooth device
            $('#connect-btn').click(function() {
                // Use the Web Bluetooth API to connect to a device
                navigator.bluetooth.requestDevice({ acceptAllDevices: true })
                .then(device => {
                    // Connect to the device and get its services...
                })
                .then(services => {
                    // List of known services and their corresponding device types and icons
                    const deviceTypes = {
                        'heart_rate': { type: 'Heart Rate Monitor', icon: 'heart-rate-monitor-icon.png' },
                        'phone_alert_status': { type: 'Phone', icon: 'phone-icon.png' },
                        // Add more services as needed...
                    };
                    
                    // Check each service against the list of known services
                    for (let service of services) {
                        if (deviceTypes.hasOwnProperty(service.uuid)) {
                            // If the service is known, display the device type and icon
                            let deviceType = deviceTypes[service.uuid].type;
                            let deviceIcon = deviceTypes[service.uuid].icon;
                            $('#device-name').text(deviceType);
                            $('#device-icon').attr('src', deviceIcon);
                        }
                    }
                })
                .catch(error => {
                    console.log('Error: ' + error);
                });
            });
        </script>
    </div>
</body>

</html>
