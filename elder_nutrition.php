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
    <!-- Your page content goes here -->
        <!-- Main Content -->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-
                <div class="col-lg-8">
            <h2 class="mb-4">Elder Nutrition</h2>
            <p>
                As people age, their nutritional needs change. Good nutrition is essential for older adults to maintain health and vitality. Here are some key points to consider for elder nutrition:
            </p>
            <ul class="mb-4">
                <li>Ensure a balanced diet with a variety of foods to get all the essential nutrients.</li>
                <li>Encourage the consumption of fruits and vegetables for vitamins, minerals, and fiber.</li>
                <li>Include lean proteins such as fish, poultry, eggs, and legumes for muscle strength and repair.</li>
                <li>Choose whole grains over refined grains for sustained energy and digestive health.</li>
                <li>Limit processed foods, sugary snacks, and high-fat foods to reduce the risk of chronic diseases.</li>
                <li>Stay hydrated by drinking plenty of water and avoiding excessive caffeine and alcohol.</li>
                <li>Consider dietary supplements if necessary, but consult with a healthcare professional first.</li>
            </ul>
            <h3 class="mb-3">Sample Daily Meal Plan for Seniors</h3>
            <p>Here's an example of a nutritious daily meal plan for older adults:</p>
            <div class="table-responsive mb-4">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Meal</th>
                            <th>Menu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Breakfast</td>
                            <td>Whole grain cereal with low-fat milk, sliced strawberries, and a boiled egg</td>
                        </tr>
                        <tr>
                            <td>Morning Snack</td>
                            <td>Yogurt with mixed nuts</td>
                        </tr>
                        <tr>
                            <td>Lunch</td>
                            <td>Grilled chicken salad with mixed greens, tomatoes, cucumbers, and olive oil dressing</td>
                        </tr>
                        <tr>
                            <td>Afternoon Snack</td>
                            <td>Whole grain crackers with hummus</td>
                        </tr>
                        <tr>
                            <td>Dinner</td>
                            <td>Baked salmon with quinoa and steamed broccoli</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h3 class="mb-3">Importance of Nutritional Counseling</h3>
            <p>Nutritional counseling plays a crucial role in helping seniors maintain a healthy diet. Registered dietitians can provide personalized nutrition plans, address specific dietary needs or restrictions, and offer guidance on healthy eating habits.</p>
            <p>Regular nutritional assessments and counseling sessions can help older adults make informed choices about their diet and lifestyle, leading to improved overall health and well-being.</p>
        </div>
    </div>
</div>
<!-- Main Content End -->

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

</html>
