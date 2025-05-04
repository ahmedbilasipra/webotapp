<?php include 'navbar.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PolicyBazaar Mega Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
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
        .nav-item.dropdown {
            position: relative;
        }
        .dropdown-toggle::after {
            color: #2962ff;
            vertical-align: middle;
            margin-left: 5px;
            border-top: 0.3em solid;
            transition: none;
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

        /* Mega Menu Styles */
        .mega-dropdown {
            position: static !important;
        }
        .dropdown-menu {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            border: none;
            margin-top: 0;
            position: absolute;
            top: 100%;
            z-index: 1000;
            transform: translateZ(0);
            will-change: transform, opacity;
            opacity: 0;
            visibility: hidden;
            display: block !important;
            transition: opacity 0.2s ease, visibility 0.2s ease;
        }
        .dropdown-menu.show {
            opacity: 1;
            visibility: visible;
        }
        .category-header {
            display: flex;
            align-items: center;
            color: #2962ff;
            font-weight: 600;
            font-size: 18px;
            padding: 10px 15px;
            margin-bottom: 10px;
        }
        .category-icon {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            font-size: 18px;
        }
        .category-icon.umbrella { background-color: #e8f0ff; color: #2962ff; }
        .category-icon.investment { background-color: #fff6e8; color: #ff9800; }
        .category-icon.health { background-color: #ffe8f0; color: #e91e63; }
        .category-icon.car { background-color: #e8f6ff; color: #03a9f4; }
        .category-icon.other { background-color: #e8fff0; color: #4caf50; }
        .mega-menu-column {
            padding: 0 15px;
        }
        .mega-menu-column a {
            display: block;
            color: #555;
            text-decoration: none;
            padding: 8px 15px;
            font-size: 14px;
            border-radius: 4px;
            transition: all 0.2s ease;
        }
        .mega-menu-column a:hover {
            color: #2962ff;
            background-color: #f5f8ff;
            padding-left: 18px;
        }
        .underline-animation {
            position: absolute;
            bottom: -15px;
            left: 15px;
            width: 0;
            height: 3px;
            background-color: #2962ff;
            transition: width 0.3s ease;
        }
        .nav-link:hover .underline-animation {
            width: calc(100% - 30px);
        }

        @keyframes glow {
            0%, 100% { filter: brightness(1); }
            50% { filter: brightness(1.3); }
        }
        
        /* Phone calling animation */
        @keyframes calling {
            0% { transform: rotate(-15deg); color: #2962ff; }
            10% { transform: rotate(15deg); }
            20% { transform: rotate(-15deg); }
            30% { transform: rotate(15deg); color: red; }
            40% { transform: rotate(-15deg); }
            50% { transform: rotate(15deg); color: #2962ff; }
            60% { transform: rotate(-15deg); }
            70% { transform: rotate(15deg); color: red; }
            80% { transform: rotate(-15deg); }
            100% { transform: rotate(0); color: #2962ff; }
        }
        
        /* Apply animations to different icon types */
        .category-icon i {
            animation: pulse 2s infinite ease-in-out;
        }
        
        .card-body .rounded-circle i {
            animation: pulse 2s infinite ease-in-out;
        }
        
        .dropdown-item .category-icon i {
            animation: float 2s infinite ease-in-out;
        }
        
        .d-flex .rounded-circle i {
            animation: pulse 1.5s infinite ease-in-out;
        }
        
        /* Banner icons */
        .position-absolute i.bi-calculator,
        .position-absolute i.bi-house-heart,
        .position-absolute i.bi-chat-dots {
            animation: rotate 20s infinite linear;
        }
        
        .position-relative i.bi-piggy-bank,
        .position-relative i.bi-house-door,
        .position-relative i.bi-question-circle {
            animation: float 3s infinite ease-in-out;
        }
        
        /* Emoji icons */
        .card-body .d-flex span[style*="font-size: 20px;"] {
            display: inline-block;
            animation: bounce 2s infinite ease-in-out;
        }
        
        /* Background circles animation */
        .position-absolute[style*="border-radius: 50%; background-color"] {
            animation: pulse 4s infinite ease-in-out;
        }
        
        /* Button icons - replace shake with calling for phone icon */
        .btn-talk i.bi-telephone-fill {
            animation: calling 1.5s infinite ease-in-out;
            transform-origin: center;
            display: inline-block;
        }
        
        .btn:hover i:not(.bi-telephone-fill) {
            animation-duration: 0.8s !important;
        }
        
        /* Applying a vibration effect to the entire button on hover */
        .btn-talk:hover {
            animation: shake 0.5s ease-in-out;
        }
        
        /* Hero section icons */
        .hero-section .category-icon i {
            animation: glow 2s infinite ease-in-out;
        }
        
        /* Hide specific menu items in mobile view */
        @media (max-width: 991.98px) {
            .hide-on-mobile {
                display: none !important;
            }
        }
    </style>
</head>
<body>
  
  

    <!-- Hero Section with Cards -->
    <div class="container pt-5 pb-3">
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <h1 class="display-5 fw-bold" style="color: #2e4765;">Let's find you</h1>
                <h1 class="display-5 mb-4">the <span style="color: #2e4765; font-weight: bold;">Best Insurance</span></h1>
                
                <div class="d-flex align-items-center mb-3">
                    <div class="category-icon umbrella" style="width: 36px; height: 36px; min-width: 36px;">
                        <i class="bi bi-graph-down"></i>
                    </div>
                    <p class="ms-3 mb-0" style="color: #5e6c84;"><strong>51 insurers</strong> offering lowest prices</p>
                </div>
                
                <div class="d-flex align-items-center">
                    <div class="category-icon investment" style="width: 36px; height: 36px; min-width: 36px;">
                        <i class="bi bi-lightning"></i>
                    </div>
                    <p class="ms-3 mb-0" style="color: #5e6c84;"><strong>Quick, easy &</strong> hassle free</p>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                    <div class="card-body p-0 position-relative">
                        <div style="background: linear-gradient(135deg, #702020 0%, #9a4343 100%); padding: 30px; color: white;">
                            <h5 class="mb-0">Health insurance with</h5>
                            <h2 class="text-warning fw-bold mb-1">Unlimited <i class="bi bi-plus"></i></h2>
                            <h3 class="mb-3">Sum Insured</h3>
                            <p class="small mb-4">also available now</p>
                            
                            <a href="#" class="btn btn-primary px-4 mb-2">View plans &rarr;</a>
                            <p class="small text-light-emphasis mt-2 mb-0">*Standard T&C apply</p>
                        </div>
                        <div class="position-absolute" style="right: 10px; top: 50%; transform: translateY(-50%);">
                            <div style="background-color: rgba(255,255,255,0.2); width: 150px; height: 150px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <div class="text-center">
                                    <i class="bi bi-heart-fill text-danger" style="font-size: 60px;"></i>
                                    <div class="text-white" style="font-size: 40px; font-weight: bold;">∞</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Carousel Indicators -->
        <div class="d-flex justify-content-center mt-3 mb-5">
            <div class="mx-1 rounded-circle bg-primary" style="width: 10px; height: 10px;"></div>
            <div class="mx-1 rounded-circle bg-light border" style="width: 10px; height: 10px;"></div>
            <div class="mx-1 rounded-circle bg-light border" style="width: 10px; height: 10px;"></div>
        </div>
        
        <!-- Insurance Cards First Row -->
        <div class="row g-4 mb-4">
            <div class="col-md-3 col-6">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="card-header border-0 text-white py-2" style="background-color: #8bc34a; font-size: 12px;">
                        Lowest Price Guarantee
                    </div>
                    <div class="card-body p-4">
                        <div class="rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px; background-color: #f0f7ff;">
                            <i class="bi bi-umbrella text-primary" style="font-size: 40px;"></i>
                        </div>
                        <h5 class="card-title"><a href="term-life-insurance.php" class="text-decoration-none text-dark">Term Life Insurance</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="card-header border-0 text-white py-2" style="background-color: #4caf50; font-size: 12px;">
                        FREE Home Visit
                    </div>
                    <div class="card-body p-4">
                        <div class="rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px; background-color: #fff0f4;">
                            <i class="bi bi-heart-pulse text-danger" style="font-size: 40px;"></i>
                        </div>
                        <h5 class="card-title"><a href="health-insurance.php" class="text-decoration-none text-dark">Health Insurance</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="card-header border-0 text-white py-2" style="background-color: #ff9800; font-size: 12px;">
                        In-Built Life Cover
                    </div>
                    <div class="card-body p-4">
                        <div class="rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px; background-color: #fff9e6;">
                            <i class="bi bi-pie-chart text-warning" style="font-size: 40px;"></i>
                        </div>
                        <h5 class="card-title"><a href="investment-plans.php" class="text-decoration-none text-dark">Investment Plans</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="card-header border-0 text-white py-2" style="background-color: #2196f3; font-size: 12px;">
                        Upto 91% Discount
                    </div>
                    <div class="card-body p-4">
                        <div class="rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px; background-color: #f0f7ff;">
                            <i class="bi bi-car-front text-info" style="font-size: 40px;"></i>
                        </div>
                        <h5 class="card-title"><a href="car-insurance.php" class="text-decoration-none text-dark">Car Insurance</a></h5>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Insurance Cards Second Row -->
        <div class="row g-4 mb-5">
            <div class="col-md-3 col-6">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="card-header border-0 text-white py-2" style="background-color: #03a9f4; font-size: 12px;">
                        Upto 85% Discount
                    </div>
                    <div class="card-body p-4">
                        <div class="rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px; background-color: #e3f2fd;">
                            <i class="bi bi-bicycle text-info" style="font-size: 40px;"></i>
                        </div>
                        <h5 class="card-title">2 Wheeler Insurance</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="card-header border-0 text-white py-2" style="background-color: #8bc34a; font-size: 12px;">
                        Upto 25% Discount
                    </div>
                    <div class="card-body p-4">
                        <div class="rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px; background-color: #f1f8e9;">
                            <i class="bi bi-people text-success" style="font-size: 40px;"></i>
                        </div>
                        <h5 class="card-title">Family Health Insurance</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="card-header border-0 text-white py-2" style="background-color: #00bcd4; font-size: 12px;">
                        Premium Waiver
                    </div>
                    <div class="card-body p-4">
                        <div class="rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px; background-color: #e0f7fa;">
                            <i class="bi bi-airplane text-info" style="font-size: 40px;"></i>
                        </div>
                        <h5 class="card-title">Travel Insurance</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="card-header border-0 text-white py-2" style="background-color: #9c27b0; font-size: 12px;">
                        Upto 20% Cheaper
                    </div>
                    <div class="card-body p-4">
                        <div class="rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px; background-color: #f3e5f5;">
                            <i class="bi bi-gender-female text-purple" style="font-size: 40px;"></i>
                        </div>
                        <h5 class="card-title">Term Insurance (Women)</h5>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- View All Products Button -->
        <div class="text-center mb-5">
            <a href="#" class="btn btn-outline-primary rounded-pill px-4 py-2">View all products</a>
        </div>
        
        <!-- Also Buy Section -->
        <div class="mb-5">
            <h6 class="text-primary fw-bold mb-4">ALSO BUY</h6>
            
            <!-- Also Buy First Row -->
            <div class="row g-3 mb-4">
                <div class="col-md">
                    <div class="card border-0 shadow-sm rounded-3 h-100">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 24px; height: 24px; background-color: rgba(41, 98, 255, 0.1);">
                                    <i class="bi bi-currency-exchange text-primary" style="font-size: 12px;"></i>
                                </div>
                                <div>
                                    <div class="small text-primary mb-1">Investment</div>
                                    <h6 class="card-title mb-0">LIC Plans</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card border-0 shadow-sm rounded-3 h-100">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 24px; height: 24px; background-color: rgba(41, 98, 255, 0.1);">
                                    <i class="bi bi-umbrella text-primary" style="font-size: 12px;"></i>
                                </div>
                                <div>
                                    <div class="small text-primary mb-1">Term Life</div>
                                    <h6 class="card-title mb-0">Return of Premium</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card border-0 shadow-sm rounded-3 h-100">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 24px; height: 24px; background-color: rgba(41, 98, 255, 0.1);">
                                    <i class="bi bi-umbrella text-primary" style="font-size: 12px;"></i>
                                </div>
                                <div>
                                    <div class="small text-primary mb-1">Term Life</div>
                                    <h6 class="card-title mb-0">Life Insurance for Housewives</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card border-0 shadow-sm rounded-3 h-100">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 24px; height: 24px; background-color: rgba(233, 30, 99, 0.1);">
                                    <i class="bi bi-heart-pulse text-danger" style="font-size: 12px;"></i>
                                </div>
                                <div>
                                    <div class="small text-danger mb-1">Health Insurance</div>
                                    <h6 class="card-title mb-0">Day 1 Coverage</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card border-0 shadow-sm rounded-3 h-100">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 24px; height: 24px; background-color: rgba(233, 30, 99, 0.1);">
                                    <i class="bi bi-heart-pulse text-danger" style="font-size: 12px;"></i>
                                </div>
                                <div>
                                    <div class="small text-danger mb-1">Health Insurance</div>
                                    <h6 class="card-title mb-0">1 Cr Health Insurance</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card border-0 shadow-sm rounded-3 h-100">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 24px; height: 24px; background-color: rgba(233, 30, 99, 0.1);">
                                    <i class="bi bi-shield-plus text-danger" style="font-size: 12px;"></i>
                                </div>
                                <div>
                                    <div class="small text-danger mb-1">Health Insurance</div>
                                    <h6 class="card-title mb-0">Personal Accident</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card border-0 shadow-sm rounded-3 h-100">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 24px; height: 24px; background-color: rgba(3, 169, 244, 0.1);">
                                    <i class="bi bi-car-front text-info" style="font-size: 12px;"></i>
                                </div>
                                <div>
                                    <div class="small text-info mb-1">Motor Insurance</div>
                                    <h6 class="card-title mb-0">Commercial Vehicles</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Also Buy Second Row -->
            <div class="row g-3">
                <div class="col-md">
                    <div class="card border-0 shadow-sm rounded-3 h-100">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 24px; height: 24px; background-color: rgba(76, 175, 80, 0.1);">
                                    <i class="bi bi-building text-success" style="font-size: 12px;"></i>
                                </div>
                                <div>
                                    <div class="small text-success mb-1">Business Insurance</div>
                                    <h6 class="card-title mb-0">Marine Insurance</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card border-0 shadow-sm rounded-3 h-100">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 24px; height: 24px; background-color: rgba(76, 175, 80, 0.1);">
                                    <i class="bi bi-hospital text-success" style="font-size: 12px;"></i>
                                </div>
                                <div>
                                    <div class="small text-success mb-1">Business Insurance</div>
                                    <h6 class="card-title mb-0">Professional Indemnity for Doctors</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card border-0 shadow-sm rounded-3 h-100">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 24px; height: 24px; background-color: rgba(76, 175, 80, 0.1);">
                                    <i class="bi bi-briefcase text-success" style="font-size: 12px;"></i>
                                </div>
                                <div>
                                    <div class="small text-success mb-1">Business Insurance</div>
                                    <h6 class="card-title mb-0">Directors & Officers Liability</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card border-0 shadow-sm rounded-3 h-100">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 24px; height: 24px; background-color: rgba(76, 175, 80, 0.1);">
                                    <i class="bi bi-people text-success" style="font-size: 12px;"></i>
                                </div>
                                <div>
                                    <div class="small text-success mb-1">Business Insurance</div>
                                    <h6 class="card-title mb-0">Workmen Compensation</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card border-0 shadow-sm rounded-3 h-100">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 24px; height: 24px; background-color: rgba(108, 117, 125, 0.1);">
                                    <i class="bi bi-plus-square text-secondary" style="font-size: 12px;"></i>
                                </div>
                                <div>
                                    <div class="small text-secondary mb-1">Others</div>
                                    <h6 class="card-title mb-0">Pet Insurance</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card border-0 shadow-sm rounded-3 h-100">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 24px; height: 24px; background-color: rgba(108, 117, 125, 0.1);">
                                    <i class="bi bi-shield text-secondary" style="font-size: 12px;"></i>
                                </div>
                                <div>
                                    <div class="small text-secondary mb-1">Others</div>
                                    <h6 class="card-title mb-0">Personal Cyber Insurance</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <!-- Empty column to match the layout -->
                    <div class="h-100"></div>
                </div>
            </div>
        </div>
        
        <!-- Bottom Promotional Banners -->
        <div class="row g-4 mb-5">
            <!-- SIP Calculator Banner -->
            <div class="col-md-4">
                <div class="card border-0 rounded-4 overflow-hidden h-100">
                    <div class="card-body p-4 text-white position-relative" style="background: linear-gradient(135deg, #9c27b0 0%, #e91e63 100%);">
                        <div class="position-relative" style="z-index: 2">
                            <i class="bi bi-piggy-bank mb-3" style="font-size: 28px;"></i>
                            <p class="text-white-50 mb-1">Reach your financial goals</p>
                            <h3 class="mb-3">Make investment simple with our SIP calculator</h3>
                            <a href="#" class="btn btn-light rounded-pill px-4 py-2">Calculate now</a>
                        </div>
                        <div class="position-absolute" style="right: 10px; top: 50%; transform: translateY(-50%); opacity: 0.2;">
                            <i class="bi bi-calculator" style="font-size: 120px;"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Home Insurance Banner -->
            <div class="col-md-4">
                <div class="card border-0 rounded-4 overflow-hidden h-100">
                    <div class="card-body p-4 text-white position-relative" style="background: linear-gradient(135deg, #039be5 0%, #0288d1 100%);">
                        <div class="position-relative" style="z-index: 2">
                            <i class="bi bi-house-door mb-3" style="font-size: 28px;"></i>
                            <p class="mb-1">Home Insurance</p>
                            <h3 class="mb-2">₹50 Lakh Cover for Your Home Insurance</h3>
                            <h4 class="mb-4">starting at Just ₹80/month*</h4>
                            <a href="#" class="btn btn-light rounded-pill px-4 py-2">Learn More</a>
                        </div>
                        <div class="position-absolute" style="right: 10px; top: 50%; transform: translateY(-50%); opacity: 0.2;">
                            <i class="bi bi-house-heart" style="font-size: 120px;"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- AskPB Banner -->
            <div class="col-md-4">
                <div class="card border-0 rounded-4 overflow-hidden h-100">
                    <div class="card-body p-4 text-white position-relative" style="background: linear-gradient(135deg, #ff5722 0%, #ff9800 100%);">
                        <div class="position-relative" style="z-index: 2">
                            <i class="bi bi-question-circle mb-3" style="font-size: 28px;"></i>
                            <p class="mb-1">AskPB</p>
                            <h3 class="mb-3">Got a question about insurance?</h3>
                            <h4 class="mb-4">Write to us</h4>
                            <a href="#" class="btn btn-light rounded-pill px-4 py-2">Contact Now</a>
                        </div>
                        <div class="position-absolute" style="right: 10px; top: 50%; transform: translateY(-50%); opacity: 0.2;">
                            <i class="bi bi-chat-dots" style="font-size: 120px;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


      <!-- Why Choose PolicyBazaar Section -->
    <div class="container py-5 position-relative">
        <div class="position-absolute" style="top: 0; left: 0; width: 100%; height: 100%; overflow: hidden; z-index: -1;">
            <div class="position-absolute" style="top: 10%; left: 5%; width: 50px; height: 50px; border-radius: 50%; background-color: rgba(255, 193, 7, 0.1);"></div>
            <div class="position-absolute" style="top: 60%; left: 20%; width: 20px; height: 20px; border-radius: 50%; background-color: rgba(233, 30, 99, 0.1);"></div>
            <div class="position-absolute" style="top: 30%; right: 15%; width: 30px; height: 30px; border-radius: 50%; background-color: rgba(3, 169, 244, 0.1);"></div>
            <div class="position-absolute" style="top: 70%; right: 10%; width: 15px; height: 15px; border-radius: 50%; background-color: rgba(76, 175, 80, 0.1);"></div>
            <div class="position-absolute" style="top: 20%; left: 40%; width: 300px; height: 300px; border-radius: 50%; background-color: rgba(41, 98, 255, 0.03);"></div>
        </div>
        
        <div class="row mb-5">
            <div class="col-lg-6">
                <h2 class="display-6 fw-normal mb-2">What makes</h2>
                <h2 class="display-6 fw-bold mb-2" style="color: #2e4765;">Policybazaar</h2>
                <h2 class="display-6 fw-normal mb-3">one of <span style="color: #2e4765; font-weight: bold;">India's favourite places</span></h2>
                <h2 class="display-6 fw-normal">to <span style="color: #2e4765; font-weight: bold;">buy insurance</span>?</h2>
            </div>
            
            <div class="col-lg-6">
                <div class="row g-4">
                    <!-- Card 1 -->
                    <div class="col-md-6">
                        <div class="card border-0 rounded-4 shadow-sm h-100 p-2">
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <span class="me-2 text-primary" style="font-size: 20px;">🎉</span>
                                    <h4 class="text-primary fw-bold">Over 9 million</h4>
                                </div>
                                <p class="text-muted mb-0">customers trust us & have bought their insurance on Policybazaar</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card 2 -->
                    <div class="col-md-6">
                        <div class="card border-0 rounded-4 shadow-sm h-100 p-2">
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <span class="me-2 text-info" style="font-size: 20px;">🔍</span>
                                    <h4 class="text-info fw-bold">51 insurers</h4>
                                </div>
                                <p class="text-muted mb-0">partnered with us so that you can compare easily & transparently</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card 3 -->
                    <div class="col-md-6">
                        <div class="card border-0 rounded-4 shadow-sm h-100 p-2">
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <span class="me-2 text-success" style="font-size: 20px;">😊</span>
                                    <h4 class="text-success fw-bold">Great Price</h4>
                                </div>
                                <p class="text-muted mb-0">for all kinds of insurance plans available online</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card 4 -->
                    <div class="col-md-6">
                        <div class="card border-0 rounded-4 shadow-sm h-100 p-2">
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <span class="me-2 text-warning" style="font-size: 20px;">👤</span>
                                    <h4 class="text-warning fw-bold">Claims</h4>
                                </div>
                                <p class="text-muted mb-0">support built in with every policy for help, when you need it the most</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        <!-- Demo Banner Section -->
        <div class="container my-5">
            <div class="row g-4">
                <!-- Claims Assistance Banner -->
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm rounded-4 h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center">
                                <img src="https://picsum.photos/80/80" alt="Support Agent" class="me-3 rounded" style="width: 80px; height: 80px; object-fit: cover;">
                                <div>
                                    <h5 class="mb-2">Our claims assistance experts are available</h5>
                                    <div class="d-flex align-items-center">
                                        <span class="badge bg-success px-3 py-2 rounded-pill">24x7</span>
                                        <small class="text-muted ms-2">*Assistance available for Health & Motor insurance</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ask PB Banner -->
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm rounded-4 h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center">
                                <img src="https://media.istockphoto.com/id/1188444331/photo/man-hand-question-mark.jpg?s=612x612&w=0&k=20&c=7_1Zgmbl1YMDq4PcCCn5y-SGb-klA1wUogLDmjcHuKw=" alt="Question Mark" class="me-3 rounded" style="width: 80px; height: 80px; object-fit: cover;">
                                <div>
                                    <h5 class="mb-2">Got a question about insurance?</h5>
                                    <p class="mb-0 text-muted">Drop a message and we will help you quickly.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fraud Alert Banner -->
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm rounded-4 h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center">
                                <img src="https://media.istockphoto.com/id/1386179512/photo/computer-hacker-stealing-data-from-a-laptop.jpg?s=2048x2048&w=is&k=20&c=FHJY--2bDKL_TCOEcfBNxw59OiZIcThyw-WjZI417tw=" alt="Security Alert" class="me-3 rounded" style="width: 80px; height: 80px; object-fit: cover;">
                                <div>
                                    <h5 class="mb-2">Beware of Insurance Fraudsters</h5>
                                    <small class="text-muted">Learn how to identify and avoid fraud</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Banner Navigation Dots -->
            <div class="d-flex justify-content-center mt-4">
                <div class="mx-1 rounded-circle bg-primary" style="width: 8px; height: 8px;"></div>
                <div class="mx-1 rounded-circle bg-secondary opacity-25" style="width: 8px; height: 8px;"></div>
                <div class="mx-1 rounded-circle bg-secondary opacity-25" style="width: 8px; height: 8px;"></div>
                <div class="mx-1 rounded-circle bg-secondary opacity-25" style="width: 8px; height: 8px;"></div>
            </div>
        </div>

            <!-- Popular Calculators Section -->
    <div class="container my-5">
        <h2 class="fw-bold text-center mb-3" style="color: #22325c;">Popular calculators</h2>
        <p class="text-center mb-5" style="max-width: 900px; margin: 0 auto;">
            Discover our user-friendly calculators tailored to help you make informed financial decisions. Our diverse range of insurance calculators ensures you find the perfect fit for your needs. Explore the options below to get started.
        </p>
        <div class="row g-4 justify-content-center">
            <!-- Investment Calculators -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="p-3 rounded-3 mb-2" style="background: #ffeceb;">
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="fw-bold mb-0" style="color: #22325c;">Investment<br>calculators</h5>
                            </div>
                            <img src="https://media.istockphoto.com/id/875247422/photo/whats-the-budget-looking-like-this-month.jpg?s=612x612&w=0&k=20&c=0EPSpWuXR_Wgf_T8-zl3JGXUZK0iGeX_cO08oDrlUvo=" alt="Investment" style="height: 70px; margin-left: auto;">
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0">
                            SIP Calculator <i class="bi bi-arrow-right"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0">
                            Income Tax Calculator <i class="bi bi-arrow-right"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0">
                            ULIP Calculator <i class="bi bi-arrow-right"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0">
                            NPS Calculator <i class="bi bi-arrow-right"></i>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Term Insurance Calculators -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="p-3 rounded-3 mb-2" style="background: #e6f7fa;">
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="fw-bold mb-0" style="color: #22325c;">Term Insurance<br>calculators</h5>
                            </div>
                            <img src="https://media.istockphoto.com/id/941729686/photo/business-accounting-concept-business-man-using-calculator-with-computer-laptop-budget-and-loan.jpg?s=612x612&w=0&k=20&c=SlfDzm_rNa2XqM5t3AdqjPfp-RkmUJdbyMrdYi8C-8g=" alt="Term Insurance" style="height: 70px; margin-left: auto;">
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0">
                            Life Insurance Calculator <i class="bi bi-arrow-right"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0">
                            Term Insurance Calculator <i class="bi bi-arrow-right"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0">
                            Human Life Value Calculator <i class="bi bi-arrow-right"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0">
                            NRI Term Insurance Calculator <i class="bi bi-arrow-right"></i>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Policy Premium Calculators -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="p-3 rounded-3 mb-2" style="background: #f3f0fa;">
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="fw-bold mb-0" style="color: #22325c;">Policy premium<br>calculators</h5>
                            </div>
                            <img src="https://media.istockphoto.com/id/1432903655/photo/finance-accounting-and-fintech-a-man-on-a-computer-and-calculator-working-out-his-business.jpg?s=612x612&w=0&k=20&c=dfn4cHD-wHC66j1xw0qGJKx6h2H9SKca3CNFIibIxu0=" alt="Premium" style="height: 70px; margin-left: auto;">
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0">
                            Health Insurance Premium Calculator <i class="bi bi-arrow-right"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0">
                            Car Insurance Calculator <i class="bi bi-arrow-right"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0">
                            Bike Insurance Calculator <i class="bi bi-arrow-right"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0">
                            Travel Insurance Calculator <i class="bi bi-arrow-right"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-outline-primary rounded-pill px-4 fw-bold">View All Calculators</a>
        </div>
    </div>

        <!-- Support Section -->
<div class="container my-5">
  <div class="row align-items-center">
    <!-- Left: Text and Contact Info -->
    <div class="col-md-6 mb-4 mb-md-0">
      <h2 class="fw-bold mb-2" style="color: #22325c;">Have a question?<br>Here to help.</h2>
      <div style="width: 60px; height: 4px; background: #2962ff; border-radius: 2px; margin-bottom: 24px;"></div>
      <p class="mb-4" style="color: #5e6c84;">
        Our friendly customer support team is your extended family. Speak your heart out. They listen with undivided attention to resolve your concerns. Give us a call, request a callback or drop us an email, we're here to help.
      </p>
      <div class="mb-3 p-3 border rounded-3 d-flex align-items-center" style="max-width: 400px;">
        <i class="bi bi-send fs-3 text-primary me-3"></i>
        <div>
          <div class="text-muted" style="font-size: 15px;">General Enquiries</div>
          <div class="fw-bold" style="font-size: 18px;">care@policybazaar.com</div>
        </div>
      </div>
      <div class="p-3 border rounded-3 d-flex align-items-center" style="max-width: 400px;">
        <i class="bi bi-headset fs-3 text-primary me-3"></i>
        <div>
          <div class="text-muted" style="font-size: 15px;">Customer Sales Enquiries</div>
          <div class="fw-bold" style="font-size: 18px;">1800 - 208 - 8787</div>
        </div>
      </div>
    </div>
    <!-- Right: Illustration -->
    <div class="col-md-6 text-center">
      <img src="https://media.istockphoto.com/id/1322211571/vector/group-therapy-addiction-treatment-concept-characters-counseling-with-psychologist-on.jpg?s=612x612&w=0&k=20&c=moDxi4u07wOzgiiuS2HK66dJzpsfRHkIk1ITTI5NbeE=" alt="Support Illustration" style="max-width: 90%; height: auto;">
    </div>
  </div>
</div>

        <!-- Footer Section -->
<footer class="bg-dark text-white pt-5 pb-3 mt-5">
  <div class="container">
    <div class="row mb-4">
      <!-- Insurance -->
      <div class="col-md-2 mb-4 mb-md-0">
        <h6 class="fw-bold mb-3">Insurance</h6>
        <ul class="list-unstyled small">
          <li><a href="#" class="text-white-50 text-decoration-none">General Insurance</a></li>
          <li><a href="#" class="text-white-50 text-decoration-none">Life Insurance</a></li>
          <li><a href="#" class="text-white-50 text-decoration-none">Term Insurance</a></li>
          <li><a href="#" class="text-white-50 text-decoration-none">Investment</a></li>
          <li><a href="#" class="text-white-50 text-decoration-none">Health Insurance</a></li>
          <li><a href="#" class="text-white-50 text-decoration-none">Other Insurance</a></li>
        </ul>
      </div>
      <!-- Calculators -->
      <div class="col-md-3 mb-4 mb-md-0">
        <h6 class="fw-bold mb-3">Calculators</h6>
        <ul class="list-unstyled small">
          <li><a href="#" class="text-white-50 text-decoration-none">SIP Calculator</a></li>
          <li><a href="#" class="text-white-50 text-decoration-none">Income Tax Calculator</a></li>
          <li><a href="#" class="text-white-50 text-decoration-none">Compound Interest Calculator</a></li>
          <li><a href="#" class="text-white-50 text-decoration-none">NPS Calculator</a></li>
          <li><a href="#" class="text-white-50 text-decoration-none">Term Insurance Calculator</a></li>
          <li><a href="#" class="text-white-50 text-decoration-none">HLV Calculator</a></li>
          <li><a href="#" class="text-white-50 text-decoration-none">Life Insurance Calculator</a></li>
          <li><a href="#" class="text-white-50 text-decoration-none">Health Insurance Calculator</a></li>
          <li><a href="#" class="text-white-50 text-decoration-none">Travel Insurance Calculator</a></li>
          <li><a href="#" class="text-white-50 text-decoration-none">Car Insurance Calculator</a></li>
          <li><a href="#" class="text-white-50 text-decoration-none">Bike Insurance Calculator</a></li>
        </ul>
      </div>
      <!-- Resources -->
      <div class="col-md-3 mb-4 mb-md-0">
        <h6 class="fw-bold mb-3">Resources</h6>
        <ul class="list-unstyled small">
          <li><a href="#" class="text-white-50 text-decoration-none">Articles</a></li>
          <li><a href="#" class="text-white-50 text-decoration-none">Customer reviews</a></li>
          <li><a href="#" class="text-white-50 text-decoration-none">Insurance companies</a></li>
          <li><a href="#" class="text-white-50 text-decoration-none">Newsroom</a></li>
          <li><a href="#" class="text-white-50 text-decoration-none">Awards</a></li>
          <li><a href="#" class="text-white-50 text-decoration-none">PB Life</a></li>
        </ul>
      </div>
      <!-- Company -->
      <div class="col-md-4">
        <h6 class="fw-bold mb-3">Company</h6>
        <ul class="list-unstyled small">
          <li><a href="#" class="text-white-50 text-decoration-none">About Us</a></li>
          <li><a href="#" class="text-white-50 text-decoration-none">Sitemap</a></li>
          <li><a href="#" class="text-white-50 text-decoration-none">Careers</a></li>
          <li><a href="#" class="text-white-50 text-decoration-none">Legal & Admin policies</a></li>
          <li><a href="#" class="text-white-50 text-decoration-none">ISNP</a></li>
          <li><a href="#" class="text-white-50 text-decoration-none">Contact us</a></li>
          <li><a href="#" class="text-white-50 text-decoration-none">Verify your advisor</a></li>
          <li><a href="#" class="text-white-50 text-decoration-none">Investor Relations</a></li>
        </ul>
      </div>
    </div>
    <!-- Payment, Security, Social -->
    <div class="row align-items-center text-center text-md-start mb-4">
      <div class="col-md-6 mb-3 mb-md-0">
        <div class="fw-bold mb-2">Payment Methods</div>
        <div class="d-flex flex-wrap gap-2 justify-content-center justify-content-md-start">
          <img src="https://static.pbcdn.in/cdn/images/career/footer/amex-icon.png" alt="Amex" style="height:28px;">
          <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/Visa_Logo.png" alt="Visa" style="height:28px;">
          <img src="https://static.pbcdn.in/cdn/images/career/footer/paytm-icon.png" alt="Paytm" style="height:28px;">
          <img src="https://static.pbcdn.in/cdn/images/career/footer/rupay-icon.png" alt="RuPay" style="height:28px;">
          <img src="https://static.pbcdn.in/cdn/images/career/footer/netbanking-icon.png" alt="Netbanking" style="height:28px;">
          <img src="https://static.pbcdn.in/cdn/images/career/footer/master-card-icon.png" alt="Mastercard" style="height:28px;">
        </div>
      </div>
      <div class="col-md-3 mb-3 mb-md-0">
        <div class="fw-bold mb-2">Secured With</div>
        <img src="https://static.pbcdn.in/cdn/images/career/footer/pci-icon.png" alt="PCI DSS" style="height:32px;">
      </div>
      <div class="col-md-3">
        <div class="fw-bold mb-2">Follow us on</div>
        <div class="d-flex gap-2 justify-content-center justify-content-md-start">
          <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook" style="height:28px;"></a>
          <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" alt="X" style="height:28px;"></a>
          <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733561.png" alt="LinkedIn" style="height:28px;"></a>
          <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733646.png" alt="YouTube" style="height:28px;"></a>
        </div>
      </div>
    </div>
    <!-- Legal and Info -->
    <div class="small text-white-50 mb-2">
      <div class="mb-1">
        <i class="bi bi-dot"></i> Policybazaar Insurance Brokers Private Limited CIN: U74999HR2014PTC053454 Registered Office - Plot No.119, Sector - 44, Gurugram - 122001, Haryana Tel no.: 0124-4218302 Email ID: enquiry@policybazaar.com
      </div>
      <div class="mb-1">
        <i class="bi bi-dot"></i> Policybazaar is registered as a Composite Broker | Registration Code No. IRDA/ DB 797/ 19, Valid till 09/06/2027, License category- Composite Broker
      </div>
      <div class="mb-1">
        <i class="bi bi-dot"></i> Visitors are hereby informed that their information submitted on the website may be shared with insurers. Product information is authentic and solely based on the information received from the insurers.
      </div>
      <div class="mb-1">
        <span class="fw-bold text-info">BEWARE OF SPURIOUS PHONE CALLS AND FICTITIOUS / FRAUDULENT OFFERS</span><br>
        IRDAI or its officials do not involve in activities like selling insurance policies, announcing bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint.
      </div>
    </div>
    <div class="text-center text-white-50 mt-3" style="font-size: 14px;">
      &copy; Copyright 2025 Webotapp Student. All Rights Reserved.
    </div>
  </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const dropdowns = document.querySelectorAll('.nav-item.dropdown');
            let timeoutId;
            
            // Pre-position all dropdowns once to avoid layout shifts
            function positionDropdowns() {
                dropdowns.forEach(dropdown => {
                    const dropdownMenu = dropdown.querySelector('.dropdown-menu');
                    const isMega = dropdown.classList.contains('mega-dropdown');
                    
                    if (isMega) {
                        // Position mega menu
                        dropdownMenu.style.width = '100%';
                        dropdownMenu.style.left = '0';
                    } else {
                        // Position regular dropdown - fixed width to prevent layout shifts
                        const rect = dropdown.getBoundingClientRect();
                        dropdownMenu.style.minWidth = Math.max(rect.width, 250) + 'px';
                        dropdownMenu.style.left = '0';
                    }
                });
            }
            
            // Position on load and resize, but debounce resize events
            positionDropdowns();
            let resizeTimer;
            window.addEventListener('resize', () => {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(positionDropdowns, 250);
            });
            
            dropdowns.forEach(dropdown => {
                const dropdownMenu = dropdown.querySelector('.dropdown-menu');
                
                // Show dropdown on hover using classes, not direct style manipulation
                dropdown.addEventListener('mouseenter', () => {
                    if (window.innerWidth > 992) {
                        clearTimeout(timeoutId);
                        
                        // Hide all other dropdowns
                        dropdowns.forEach(otherDropdown => {
                            if (otherDropdown !== dropdown) {
                                otherDropdown.querySelector('.dropdown-menu').classList.remove('show');
                            }
                        });
                        
                        dropdownMenu.classList.add('show');
                    }
                });
                
                // Hide dropdown with delay when mouse leaves
                dropdown.addEventListener('mouseleave', () => {
                    if (window.innerWidth > 992) {
                        timeoutId = setTimeout(() => {
                            dropdownMenu.classList.remove('show');
                        }, 300);
                    }
                });
                
                // Prevent menu from hiding when mouse is inside it
                dropdownMenu.addEventListener('mouseenter', () => {
                    if (window.innerWidth > 992) {
                        clearTimeout(timeoutId);
                    }
                });
                
                dropdownMenu.addEventListener('mouseleave', () => {
                    if (window.innerWidth > 992) {
                        timeoutId = setTimeout(() => {
                            dropdownMenu.classList.remove('show');
                        }, 300);
                    }
                });
            });
            
            // Close all dropdowns when clicking outside
            document.addEventListener('click', () => {
                dropdowns.forEach(dropdown => {
                    dropdown.querySelector('.dropdown-menu').classList.remove('show');
                });
            });
            
            // For touch devices
            if ('ontouchstart' in window) {
                dropdowns.forEach(dropdown => {
                    const dropdownToggle = dropdown.querySelector('.dropdown-toggle');
                    const dropdownMenu = dropdown.querySelector('.dropdown-menu');
                    
                    dropdownToggle.addEventListener('click', (e) => {
                        e.preventDefault();
                        e.stopPropagation();
                        
                        const isOpen = dropdownMenu.classList.contains('show');
                        
                        // Close all other dropdowns
                        dropdowns.forEach(otherDropdown => {
                            otherDropdown.querySelector('.dropdown-menu').classList.remove('show');
                        });
                        
                        if (!isOpen) {
                            dropdownMenu.classList.add('show');
                        }
                    });
                });
            }
        });
    </script>
</body>
</html>