<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - PolicyBazaar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
            background-color: #f8f9fa;
        }
        .navbar {
            padding: 15px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 1001;
            background-color: white;
            width: 100%;
        }
        .navbar-brand img {
            height: 50px;
            margin-right: 15px;
        }
        .navbar-brand {
            display: flex;
            align-items: center;
        }
        .navbar-nav .nav-link {
            color: #333 !important;
            font-weight: 500;
            font-size: 16px;
            padding: 0 15px !important;
            position: relative;
        }
        .btn-talk, .btn-sign-in {
            background-color: white;
            color: #2962ff !important;
            border: 1px solid #2962ff;
            border-radius: 4px;
            padding: 6px 15px !important;
            font-weight: 500;
            display: flex;
            align-items: center;
            height: 38px;
            font-size: 14px;
        }
        .btn-talk i {
            margin-right: 5px;
            color: #2962ff;
            font-size: 18px;
        }
        .btn-sign-in {
            margin-left: 10px;
            padding: 6px 20px !important;
            justify-content: center;
        }
        .btn-talk:hover, .btn-sign-in:hover {
            background-color: #f5f8ff;
        }
        .signup-container {
            max-width: 550px;
            margin: 60px auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        .signup-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .signup-header h2 {
            color: #333;
            font-weight: 600;
            margin-bottom: 10px;
        }
        .signup-header p {
            color: #666;
            font-size: 14px;
        }
        .form-control {
            height: 50px;
            border-radius: 5px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            padding: 10px 15px;
            font-size: 15px;
        }
        .form-control:focus {
            border-color: #2962ff;
            box-shadow: 0 0 0 0.2rem rgba(41, 98, 255, 0.25);
        }
        .signup-btn {
            background-color: #2962ff;
            color: white;
            border: none;
            height: 50px;
            border-radius: 5px;
            font-weight: 500;
            font-size: 16px;
            width: 100%;
            margin-top: 10px;
            transition: all 0.3s ease;
        }
        .signup-btn:hover {
            background-color: #1a54ff;
            transform: translateY(-2px);
        }
        .social-signup {
            margin-top: 25px;
            text-align: center;
        }
        .social-signup p {
            color: #666;
            margin-bottom: 15px;
            position: relative;
        }
        .social-signup p:before, .social-signup p:after {
            content: "";
            display: inline-block;
            width: 30%;
            height: 1px;
            background-color: #ddd;
            position: absolute;
            top: 50%;
        }
        .social-signup p:before {
            left: 0;
        }
        .social-signup p:after {
            right: 0;
        }
        .social-btns {
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        .social-btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #ddd;
            background-color: white;
            transition: all 0.3s ease;
        }
        .social-btn:hover {
            background-color: #f5f8ff;
            transform: translateY(-2px);
        }
        .social-btn.google i {
            color: #DB4437;
        }
        .social-btn.facebook i {
            color: #4267B2;
        }
        .social-btn.apple i {
            color: #000;
        }
        .signin-link {
            text-align: center;
            margin-top: 25px;
        }
        .signin-link p {
            color: #666;
            font-size: 14px;
        }
        .signin-link a {
            color: #2962ff;
            text-decoration: none;
            font-weight: 500;
        }
        .signin-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="https://static.pbcdn.in/cdn/images/new-home/logopb.svg" alt="PolicyBazaar">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Insurance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Investments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="#" class="btn-talk nav-link">
                        <i class="bi bi-telephone-fill"></i> Talk to an expert
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Sign Up Container -->
    <div class="container">
        <div class="signup-container">
            <div class="signup-header">
                <h2>Sign Up</h2>
                <p>Create your PolicyBazaar account</p>
            </div>
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="First Name" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Last Name" required>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Email address" required>
                </div>
                <div class="mb-3">
                    <input type="tel" class="form-control" placeholder="Phone Number" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" placeholder="Confirm Password" required>
                </div>
                <div class="mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="termsCheck" required>
                        <label class="form-check-label" for="termsCheck" style="font-size: 14px; color: #666;">
                            I agree to the <a href="#" style="color: #2962ff;">Terms & Conditions</a> and <a href="#" style="color: #2962ff;">Privacy Policy</a>
                        </label>
                    </div>
                </div>
                <button type="submit" class="signup-btn">Create Account</button>
            </form>
            <div class="social-signup">
                <p>Or sign up with</p>
                <div class="social-btns">
                    <button class="social-btn google">
                        <i class="bi bi-google"></i>
                    </button>
                    <button class="social-btn facebook">
                        <i class="bi bi-facebook"></i>
                    </button>
                    <button class="social-btn apple">
                        <i class="bi bi-apple"></i>
                    </button>
                </div>
            </div>
            <div class="signin-link">
                <p>Already have an account? <a href="signin.php">Sign in</a></p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="mt-5 py-4 bg-light">
        <div class="container text-center">
            <p class="mb-0" style="font-size: 14px; color: #666;">
                © 2023 PolicyBazaar. All rights reserved.
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 