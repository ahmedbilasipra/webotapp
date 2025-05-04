<?php
// Start output buffering to capture the HTML content
ob_start();
?>
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
        .card-body .d-flex span[style*="font-size: 20px;"] {
            display: inline-block;
            animation: bounce 2s infinite ease-in-out;
        }
        .position-absolute[style*="border-radius: 50%; background-color"] {
            animation: pulse 4s infinite ease-in-out;
        }
        .btn-talk i.bi-telephone-fill {
            animation: calling 1.5s infinite ease-in-out;
            transform-origin: center;
            display: inline-block;
        }
        .btn:hover i:not(.bi-telephone-fill) {
            animation-duration: 0.8s !important;
        }
        .btn-talk:hover {
            animation: shake 0.5s ease-in-out;
        }
        .hero-section .category-icon i {
            animation: glow 2s infinite ease-in-out;
        }
        @media (max-width: 991.98px) {
            .hide-on-mobile {
                display: none !important;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="https://static.pbcdn.in/cdn/images/new-home/logopb.svg" alt="PolicyBazaar">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#policyBazaarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="policyBazaarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <!-- Desktop Only Menu Items -->
                    <li class="nav-item dropdown mega-dropdown d-none d-lg-block">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Insurance Products
                            <span class="underline-animation"></span>
                        </a>
                        <div class="dropdown-menu mega-dropdown-menu">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3 mega-menu-column">
                                        <div class="category-header">
                                            <div class="category-icon umbrella"><i class="bi bi-umbrella"></i></div>
                                            <h5 class="card-title"><a href="term-life-insurance.html" class="text-decoration-none text-dark">Term Life Insurance</a></h5>
                                        </div>
                                        <a href="#">Life Insurance</a>
                                        <a href="#">List of Term Insurance Plan</a>
                                        <a href="#">Term Insurance for NRI</a>
                                        <a href="#">What is Term Insurance</a>
                                        <a href="#">1 Crore Term Insurance</a>
                                        <a href="#">Term Insurance Calculator</a>
                                        <a href="#">Dedicated Claim Assistance</a>
                                        <a href="#">Term Insurance for Women</a>
                                        <a href="#">Term Insurance for HNI</a>
                                        <a href="#">Term Insurance Return of Premium</a>
                                    </div>
                                    <div class="col-md-3 mega-menu-column">
                                        <div class="category-header">
                                            <div class="category-icon investment"><i class="bi bi-currency-exchange"></i></div>
                                            Investment Plans
                                        </div>
                                        <a href="#">Investment Plans with High Returns</a>
                                        <a href="#">Market Linked Investment Plans (ULIP)</a>
                                        <a href="#">Investment Plans for NRIs</a>
                                        <a href="#">SIP Calculator</a>
                                        <a href="#">Capital Guarantee Plans</a>
                                        <a href="#">Child Plans</a>
                                        <a href="#">Pension Plans</a>
                                        <a href="#">Guaranteed Return Plans</a>
                                        <a href="#">Tax Saving Investments</a>
                                        <a href="#">SIP (Systematic Investment Plan)</a>
                                    </div>
                                    <div class="col-md-3 mega-menu-column">
                                        <div class="category-header">
                                            <div class="category-icon health"><i class="bi bi-heart-pulse"></i></div>
                                            Health Insurance
                                        </div>
                                        <a href="#">Book Free Home Visit</a>
                                        <a href="#">Family Health Insurance</a>
                                        <a href="#">Senior Citizen Health Insurance</a>
                                        <a href="#">Health Insurance for Parents</a>
                                        <a href="#">Maternity Insurance</a>
                                        <a href="#">Health Insurance Portability</a>
                                        <a href="#">OPD Cover In Health Insurance</a>
                                        <a href="#">Mediclaim Policy</a>
                                        <a href="#">Critical Illness Insurance</a>
                                        <a href="#">Health Insurance Calculator</a>
                                    </div>
                                    <div class="col-md-3 mega-menu-column">
                                        <div class="category-header">
                                            <div class="category-icon car"><i class="bi bi-car-front"></i></div>
                                            Car Insurance
                                        </div>
                                        <a href="#">Motor Insurance</a>
                                        <a href="#">Bike Insurance</a>
                                        <a href="#">Zero Dep Car Insurance</a>
                                        <a href="#">Third Party Insurance</a>
                                        <a href="#">Third Party Bike Insurance</a>
                                        <a href="#">Car Insurance Calculator</a>
                                        <a href="#">Bike Insurance Calculator</a>
                                        <a href="#">Car Insurance Companies</a>
                                        <a href="#">Pay As You Drive Insurance</a>
                                        <a href="#">Commercial Vehicle Insurance</a>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-3 mega-menu-column">
                                        <div class="category-header">
                                            <div class="category-icon other"><i class="bi bi-grid"></i></div>
                                            Other Insurance
                                        </div>
                                        <a href="#">Travel Insurance</a>
                                        <a href="#">International Travel Insurance</a>
                                        <a href="#">Schengen Travel Insurance</a>
                                        <a href="#">Group Health Insurance</a>
                                        <a href="#">Marine Insurance</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown d-none d-lg-block">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Renew Your Policy
                            <span class="underline-animation"></span>
                        </a>
                        <div class="dropdown-menu" style="min-width: 250px; padding: 15px;">
                            <div class="dropdown-item d-flex align-items-center border-bottom pb-2 mb-2">
                                <div class="category-icon umbrella" style="width: 32px; height: 32px; min-width: 32px;">
                                    <i class="bi bi-umbrella"></i>
                                </div>
                                <a href="#" class="text-decoration-none ms-2">Term Life Renewal</a>
                            </div>
                            <div class="dropdown-item d-flex align-items-center border-bottom pb-2 mb-2">
                                <div class="category-icon investment" style="width: 32px; height: 32px; min-width: 32px;">
                                    <i class="bi bi-currency-exchange"></i>
                                </div>
                                <a href="#" class="text-decoration-none ms-2">Investment Renewal</a>
                            </div>
                            <div class="dropdown-item d-flex align-items-center border-bottom pb-2 mb-2">
                                <div class="category-icon health" style="width: 32px; height: 32px; min-width: 32px;">
                                    <i class="bi bi-heart-pulse"></i>
                                </div>
                                <a href="#" class="text-decoration-none ms-2">Health Renewal</a>
                            </div>
                            <div class="dropdown-item d-flex align-items-center border-bottom pb-2 mb-2">
                                <div class="category-icon car" style="width: 32px; height: 32px; min-width: 32px;">
                                    <i class="bi bi-car-front"></i>
                                </div>
                                <a href="#" class="text-decoration-none ms-2">Motor Renewal</a>
                            </div>
                            <div class="dropdown-item d-flex align-items-center border-bottom pb-2 mb-2">
                                <div class="category-icon car" style="width: 32px; height: 32px; min-width: 32px;">
                                    <i class="bi bi-bicycle"></i>
                                </div>
                                <a href="#" class="text-decoration-none ms-2">Two Wheeler Renewal</a>
                            </div>
                            <div class="dropdown-item d-flex align-items-center">
                                <div class="category-icon other" style="width: 32px; height: 32px; min-width: 32px;">
                                    <i class="bi bi-house"></i>
                                </div>
                                <a href="#" class="text-decoration-none ms-2">Home Insurance Renewal</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown d-none d-lg-block">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Claim
                            <span class="underline-animation"></span>
                        </a>
                        <div class="dropdown-menu" style="min-width: 250px; padding: 15px;">
                            <div class="dropdown-item d-flex align-items-center border-bottom pb-2 mb-2">
                                <div class="category-icon umbrella" style="width: 32px; height: 32px; min-width: 32px;">
                                    <i class="bi bi-file-earmark-text"></i>
                                </div>
                                <a href="#" class="text-decoration-none ms-2">File a New Claim</a>
                            </div>
                            <div class="dropdown-item d-flex align-items-center border-bottom pb-2 mb-2">
                                <div class="category-icon investment" style="width: 32px; height: 32px; min-width: 32px;">
                                    <i class="bi bi-search"></i>
                                </div>
                                <a href="#" class="text-decoration-none ms-2">Track Claim Status</a>
                            </div>
                            <div class="dropdown-item d-flex align-items-center border-bottom pb-2 mb-2">
                                <div class="category-icon health" style="width: 32px; height: 32px; min-width: 32px;">
                                    <i class="bi bi-heart-pulse"></i>
                                </div>
                                <a href="#" class="text-decoration-none ms-2">Health Insurance Claims</a>
                            </div>
                            <div class="dropdown-item d-flex align-items-center border-bottom pb-2 mb-2">
                                <div class="category-icon car" style="width: 32px; height: 32px; min-width: 32px;">
                                    <i class="bi bi-car-front"></i>
                                </div>
                                <a href="#" class="text-decoration-none ms-2">Motor Insurance Claims</a>
                            </div>
                            <div class="dropdown-item d-flex align-items-center border-bottom pb-2 mb-2">
                                <div class="category-icon umbrella" style="width: 32px; height: 32px; min-width: 32px;">
                                    <i class="bi bi-umbrella"></i>
                                </div>
                                <a href="#" class="text-decoration-none ms-2">Life Insurance Claims</a>
                            </div>
                            <div class="dropdown-item d-flex align-items-center">
                                <div class="category-icon other" style="width: 32px; height: 32px; min-width: 32px;">
                                    <i class="bi bi-airplane"></i>
                                </div>
                                <a href="#" class="text-decoration-none ms-2">Travel Insurance Claims</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown d-none d-lg-block">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Support
                            <span class="underline-animation"></span>
                        </a>
                        <div class="dropdown-menu" style="min-width: 250px; padding: 15px;">
                            <div class="fw-bold text-info mb-2 ps-2" style="font-size: 14px;">My account</div>
                            <div class="dropdown-item d-flex align-items-center border-bottom pb-2 mb-2">
                                <div class="category-icon other" style="width: 32px; height: 32px; min-width: 32px;">
                                    <i class="bi bi-grid-1x2"></i>
                                </div>
                                <a href="#" class="text-decoration-none ms-2">Dashboard</a>
                            </div>
                            <div class="dropdown-item d-flex align-items-center border-bottom pb-2 mb-2">
                                <div class="category-icon umbrella" style="width: 32px; height: 32px; min-width: 32px;">
                                    <i class="bi bi-file-text"></i>
                                </div>
                                <div class="ms-2">
                                    <a href="#" class="text-decoration-none">Policies</a>
                                    <div style="font-size: 12px; color: #777;"><a href="signin.html" style="color: #777; text-decoration: underline;">Sign in to view all your policies</a></div>
                                </div>
                            </div>
                            <div class="dropdown-item d-flex align-items-center border-bottom pb-2 mb-2">
                                <div class="category-icon investment" style="width: 32px; height: 32px; min-width: 32px;">
                                    <i class="bi bi-question-circle"></i>
                                </div>
                                <a href="#" class="text-decoration-none ms-2">Get help</a>
                            </div>
                            <div class="dropdown-item d-flex align-items-center border-bottom pb-2 mb-2">
                                <div class="category-icon health" style="width: 32px; height: 32px; min-width: 32px;">
                                    <i class="bi bi-bell"></i>
                                </div>
                                <a href="#" class="text-decoration-none ms-2">Manage communication preferences</a>
                            </div>
                            <div class="dropdown-item d-flex align-items-center pb-2 mb-3">
                                <div class="category-icon car" style="width: 32px; height: 32px; min-width: 32px;">
                                    <i class="bi bi-person-check"></i>
                                </div>
                                <a href="#" class="text-decoration-none ms-2">Verify your advisor</a>
                            </div>
                            <div class="fw-bold text-info mb-2 ps-2" style="font-size: 14px;">Contact us</div>
                            <div class="row g-2 mb-2">
                                <div class="col-4">
                                    <div class="text-center p-2 border rounded">
                                        <i class="bi bi-whatsapp text-success fs-4"></i>
                                        <div style="font-size: 12px;">Connect on Whatsapp</div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="text-center p-2 border rounded">
                                        <i class="bi bi-geo-alt text-primary fs-4"></i>
                                        <div style="font-size: 12px;">Stores near you</div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="text-center p-2 border rounded">
                                        <i class="bi bi-telephone text-info fs-4"></i>
                                        <div style="font-size: 12px;">Request a callback</div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-item d-flex align-items-center">
                                <div class="category-icon other" style="width: 32px; height: 32px; min-width: 32px;">
                                    <i class="bi bi-grid-3x3-gap"></i>
                                </div>
                                <a href="#" class="text-decoration-none ms-2">View more</a>
                            </div>
                        </div>
                    </li>
                    <!-- Mobile Only: My Account Section -->
                    <li class="nav-item d-lg-none border-top mt-3">
                        <div class="fw-bold text-primary mt-3 mb-2 ps-3">My Account</div>
                        <div class="ps-3">
                            <a class="nav-link py-2" href="#"><i class="bi bi-grid-1x2 me-2"></i>Dashboard</a>
                            <a class="nav-link py-2" href="#"><i class="bi bi-file-text me-2"></i>Policies</a>
                            <a class="nav-link py-2" href="#"><i class="bi bi-question-circle me-2"></i>Get help</a>
                            <a class="nav-link py-2" href="#"><i class="bi bi-bell me-2"></i>Manage communication preferences</a>
                            <a class="nav-link py-2" href="#"><i class="bi bi-person-check me-2"></i>Verify your advisor</a>
                        </div>
                    </li>
                    <!-- Mobile Only: Contact Section -->
                    <li class="nav-item d-lg-none border-top mt-3">
                        <div class="fw-bold text-primary mt-3 mb-2 ps-3">Contact us</div>
                        <div class="row g-2 px-3 mb-3">
                            <div class="col-4">
                                <div class="text-center p-2 border rounded">
                                    <i class="bi bi-whatsapp text-success fs-4"></i>
                                    <div style="font-size: 12px;">Whatsapp</div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="text-center p-2 border rounded">
                                    <i class="bi bi-geo-alt text-primary fs-4"></i>
                                    <div style="font-size: 12px;">Stores</div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="text-center p-2 border rounded">
                                    <i class="bi bi-telephone text-info fs-4"></i>
                                    <div style="font-size: 12px;">Call us</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- Mobile Only: Talk to Expert & Sign In -->
                    <li class="nav-item d-lg-none">
                        <a class="btn btn-talk w-100 my-2" href="#">
                            <i class="bi bi-telephone-fill"></i>
                            <span>Talk to Expert</span>
                        </a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <a class="btn btn-sign-in w-100" href="signin.php">Sign in</a>
                    </li>
                    <!-- Desktop Only: Talk to Expert & Sign In -->
                    <li class="nav-item ms-3 d-none d-lg-block">
                        <a class="btn btn-talk" href="#">
                            <i class="bi bi-telephone-fill"></i>
                            <span>Talk to Expert</span>
                        </a>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="btn btn-sign-in" href="signin.php">Sign in</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
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
<?php
// Output the buffered content
ob_end_flush();
?>