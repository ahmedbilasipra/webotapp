<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Insurance - PolicyBazaar</title>
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
        .hero-section {
            background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);
            padding: 60px 0;
            position: relative;
        }
        .feature-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            padding: 25px;
            height: 100%;
            transition: all 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }
        .feature-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            background-color: #e3f2fd;
            color: #2196f3;
            font-size: 24px;
        }
        .plan-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            padding: 30px;
            height: 100%;
            transition: all 0.3s ease;
            border-top: 5px solid #2196f3;
        }
        .plan-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }
        .plan-price {
            font-size: 32px;
            font-weight: 700;
            color: #2196f3;
        }
        .plan-month {
            font-size: 14px;
            color: #888;
        }
        .plan-feature {
            margin: 25px 0;
        }
        .plan-feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        .plan-feature-icon {
            margin-right: 10px;
            color: #4caf50;
        }
        .plan-btn {
            background-color: #2196f3;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 12px 0;
            font-weight: 500;
            width: 100%;
            transition: all 0.3s ease;
        }
        .plan-btn:hover {
            background-color: #1e88e5;
            transform: translateY(-2px);
        }
        .section-heading {
            margin-bottom: 50px;
            text-align: center;
        }
        .section-heading h2 {
            font-weight: 600;
            color: #333;
            margin-bottom: 15px;
        }
        .section-heading p {
            color: #777;
            max-width: 700px;
            margin: 0 auto;
        }
        .coverage-card {
            display: flex;
            align-items: center;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            padding: 20px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        .coverage-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }
        .coverage-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            background-color: #e3f2fd;
            color: #2196f3;
            font-size: 20px;
            flex-shrink: 0;
        }
        .faq-card {
            border: none;
            margin-bottom: 15px;
        }
        .faq-card .card-header {
            background-color: white;
            border: none;
            padding: 0;
        }
        .faq-card .btn-link {
            width: 100%;
            text-align: left;
            color: #333;
            font-weight: 600;
            text-decoration: none;
            padding: 20px;
            position: relative;
        }
        .faq-card .btn-link:after {
            content: '\f282';
            font-family: "bootstrap-icons";
            position: absolute;
            right: 20px;
            transition: all 0.3s ease;
        }
        .faq-card .btn-link.collapsed:after {
            transform: rotate(180deg);
        }
        .faq-card .card-body {
            padding: 0 20px 20px;
            color: #666;
        }
    </style>
</head>
<body>
    

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-3">Car Insurance</h1>
                    <p class="lead mb-4">Comprehensive protection for your vehicle with plans that cover damages, theft, and third-party liability.</p>
                    <div class="d-flex mb-4">
                        <div class="me-4">
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Upto 85% No Claim Bonus</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Instant policy issuance</span>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>24/7 Roadside Assistance</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Cashless repairs at 6,500+ garages</span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-lg px-5 py-3 rounded-pill">Get a Quote</button>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="https://media.istockphoto.com/id/1132945066/photo/car-insurance-concept-document-or-policy-with-umbrella-on-desk.jpg?s=612x612&w=0&k=20&c=CKFO8FyG56F4eMXD_dyqmX1-EYgXN6PkXN7ZTdtW8LI=" alt="Car Insurance" class="img-fluid rounded-4 shadow-lg" style="max-width: 90%;">
                </div>
            </div>
        </div>
    </section>

    <!-- Coverage Section -->
    <section class="py-5">
        <div class="container py-4">
            <div class="section-heading">
                <h2>What's Covered?</h2>
                <p>Our comprehensive car insurance plans provide protection against a wide range of incidents.</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="coverage-card">
                        <div class="coverage-icon">
                            <i class="bi bi-car-front"></i>
                        </div>
                        <div>
                            <h5>Own Damage Cover</h5>
                            <p class="mb-0 text-muted">Coverage for damages to your own car due to accidents, fire, theft, or natural disasters.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="coverage-card">
                        <div class="coverage-icon">
                            <i class="bi bi-people"></i>
                        </div>
                        <div>
                            <h5>Third-Party Liability</h5>
                            <p class="mb-0 text-muted">Coverage for damages caused to third-party vehicles, property, or injuries to other people.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="coverage-card">
                        <div class="coverage-icon">
                            <i class="bi bi-person-lines-fill"></i>
                        </div>
                        <div>
                            <h5>Personal Accident Cover</h5>
                            <p class="mb-0 text-muted">Coverage for accidental death or permanent disability of the vehicle owner-driver.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="coverage-card">
                        <div class="coverage-icon">
                            <i class="bi bi-wrench-adjustable"></i>
                        </div>
                        <div>
                            <h5>Zero Depreciation Cover</h5>
                            <p class="mb-0 text-muted">Get full claim without deduction for depreciation on car parts that need replacement.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="coverage-card">
                        <div class="coverage-icon">
                            <i class="bi bi-truck"></i>
                        </div>
                        <div>
                            <h5>Roadside Assistance</h5>
                            <p class="mb-0 text-muted">24/7 assistance for breakdowns, towing, battery jumpstart, and more.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="coverage-card">
                        <div class="coverage-icon">
                            <i class="bi bi-fuel-pump"></i>
                        </div>
                        <div>
                            <h5>Engine Protection</h5>
                            <p class="mb-0 text-muted">Coverage for damages to the engine due to water ingression or leakage of lubricating oil.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Plans Section -->
    <section class="py-5 bg-light">
        <div class="container py-4">
            <div class="section-heading">
                <h2>Our Plans</h2>
                <p>Choose the plan that best suits your needs and budget.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="plan-card">
                        <h3 class="fw-bold mb-3">Third-Party Plan</h3>
                        <div class="plan-price mb-2">₹2,850<span class="plan-month">/year</span></div>
                        <p class="text-muted">Basic mandatory coverage for third-party damages.</p>
                        <div class="plan-feature">
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Third-Party Liability</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Personal Accident Cover</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-x-circle text-danger me-2"></i>
                                <span class="text-muted">Own Damage Cover</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-x-circle text-danger me-2"></i>
                                <span class="text-muted">Add-on Covers</span>
                            </div>
                        </div>
                        <button class="plan-btn">Get Started</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="plan-card" style="border-top-color: #ff9800;">
                        <div class="bg-warning text-white px-3 py-1 rounded position-absolute top-0 end-0 me-4 mt-3" style="font-size: 12px;">POPULAR</div>
                        <h3 class="fw-bold mb-3">Comprehensive Plan</h3>
                        <div class="plan-price mb-2">₹5,720<span class="plan-month">/year</span></div>
                        <p class="text-muted">Complete protection for your vehicle against all types of damages.</p>
                        <div class="plan-feature">
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Third-Party Liability</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Own Damage Cover</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Personal Accident Cover</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>24/7 Roadside Assistance</span>
                            </div>
                        </div>
                        <button class="plan-btn" style="background-color: #ff9800;">Get Started</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="plan-card" style="border-top-color: #4caf50;">
                        <h3 class="fw-bold mb-3">Premium Plan</h3>
                        <div class="plan-price mb-2">₹7,950<span class="plan-month">/year</span></div>
                        <p class="text-muted">Enhanced coverage with all add-ons and premium benefits.</p>
                        <div class="plan-feature">
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>All Comprehensive Plan Features</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Zero Depreciation Cover</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Engine Protection</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Return to Invoice Cover</span>
                            </div>
                        </div>
                        <button class="plan-btn" style="background-color: #4caf50;">Get Started</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container py-4">
            <div class="section-heading">
                <h2>Why Choose Our Car Insurance?</h2>
                <p>Our car insurance offers several benefits to ensure you get the best protection for your vehicle.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <h4>No Claim Bonus</h4>
                        <p>Earn up to 50% discount on your premium for every claim-free year, rewarding your safe driving.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-lightning-charge"></i>
                        </div>
                        <h4>Quick Claim Settlement</h4>
                        <p>Experience hassle-free claims with our dedicated claim settlement team available 24/7.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-building"></i>
                        </div>
                        <h4>Cashless Repairs</h4>
                        <p>Get cashless repairs at 6,500+ network garages across India for a stress-free experience.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h4>Transferable NCB</h4>
                        <p>Your No Claim Bonus can be transferred when you switch your insurer or buy a new car.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-phone"></i>
                        </div>
                        <h4>Mobile App Support</h4>
                        <p>Manage your policy, file claims, and access roadside assistance through our mobile app.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-star"></i>
                        </div>
                        <h4>5-Star Customer Service</h4>
                        <p>Rated 4.8/5 by our customers for excellent service and support during claims.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5 bg-light">
        <div class="container py-4">
            <div class="section-heading">
                <h2>Frequently Asked Questions</h2>
                <p>Find answers to common questions about our car insurance plans.</p>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="accordion" id="faqAccordion">
                        <div class="faq-card card">
                            <div class="card-header" id="faqOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        What is IDV in car insurance?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse show" data-bs-parent="#faqAccordion">
                                <div class="card-body">
                                    IDV (Insured Declared Value) is the maximum amount that your insurer will pay if your car is stolen or damaged beyond repair. It is calculated based on the manufacturer's listed selling price minus depreciation based on the vehicle's age.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card card">
                            <div class="card-header" id="faqTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                        What is a No Claim Bonus (NCB)?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" data-bs-parent="#faqAccordion">
                                <div class="card-body">
                                    A No Claim Bonus (NCB) is a discount on the premium that you earn for each claim-free year. It starts at 20% after the first claim-free year and can go up to 50% after 5 consecutive claim-free years. NCB is transferable when you change your insurer or car.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card card">
                            <div class="card-header" id="faqThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                        What does zero depreciation cover mean?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" data-bs-parent="#faqAccordion">
                                <div class="card-body">
                                    Zero depreciation cover, also known as 'nil depreciation cover' or 'bumper-to-bumper cover', is an add-on that ensures you get the full claim amount for car parts that need replacement without any deduction for depreciation. Standard policies deduct depreciation based on the age of the parts.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card card">
                            <div class="card-header" id="faqFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                        How do I file a claim for my car insurance?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" data-bs-parent="#faqAccordion">
                                <div class="card-body">
                                    To file a claim: 1) Inform the insurer immediately after the incident, 2) Fill out the claim form and submit it with required documents such as RC copy, driving license, policy document, and FIR (if applicable), 3) Get your car inspected, 4) After approval, get your car repaired at a network garage for cashless claims or pay and get reimbursed for non-network garages.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card card">
                            <div class="card-header" id="faqFive">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                        What factors affect my car insurance premium?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse" data-bs-parent="#faqAccordion">
                                <div class="card-body">
                                    Factors affecting your premium include: 1) Make, model, and variant of your car, 2) Age of your car, 3) Your location and where you drive, 4) Your driving history and claims record, 5) Insured Declared Value (IDV), 6) Type of coverage and add-ons chosen, 7) Your No Claim Bonus (NCB), 8) Security features in your car.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container py-4 text-center">
            <h2 class="fw-bold mb-3">Ready to protect your car?</h2>
            <p class="lead mb-4">Get started with our car insurance plans today.</p>
            <div class="d-flex justify-content-center">
                <button class="btn btn-light btn-lg px-5 py-3 rounded-pill me-3">Get a Quote</button>
                <button class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill">Contact an Advisor</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="mt-5 py-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5 class="mb-3">PolicyBazaar</h5>
                    <p class="text-muted small">India's leading insurance marketplace, helping customers make informed decisions about insurance.</p>
                </div>
                <div class="col-md-3">
                    <h5 class="mb-3">Quick Links</h5>
                    <ul class="list-unstyled small">
                        <li><a href="index.html" class="text-decoration-none text-muted">Home</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">About Us</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Contact Us</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Careers</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5 class="mb-3">Insurance Products</h5>
                    <ul class="list-unstyled small">
                        <li><a href="term-life-insurance.html" class="text-decoration-none text-muted">Term Life Insurance</a></li>
                        <li><a href="health-insurance.html" class="text-decoration-none text-muted">Health Insurance</a></li>
                        <li><a href="car-insurance.html" class="text-decoration-none text-muted">Car Insurance</a></li>
                        <li><a href="investment-plans.html" class="text-decoration-none text-muted">Investment Plans</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5 class="mb-3">Contact Us</h5>
                    <ul class="list-unstyled small">
                        <li><i class="bi bi-telephone me-2"></i> 1800-208-8787</li>
                        <li><i class="bi bi-envelope me-2"></i> care@policybazaar.com</li>
                        <li><i class="bi bi-geo-alt me-2"></i> Gurgaon, Haryana, India</li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="text-center text-muted small">
                &copy; 2023 PolicyBazaar. All rights reserved.
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 