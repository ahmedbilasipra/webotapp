<?php include 'navbar.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Insurance - PolicyBazaar</title>
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
            background: linear-gradient(135deg, #ffe8f0 0%, #fff0f3 100%);
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
            background-color: #ffe8f0;
            color: #e91e63;
            font-size: 24px;
        }
        .plan-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            padding: 30px;
            height: 100%;
            transition: all 0.3s ease;
            border-top: 5px solid #e91e63;
        }
        .plan-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }
        .plan-price {
            font-size: 32px;
            font-weight: 700;
            color: #e91e63;
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
            background-color: #e91e63;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 12px 0;
            font-weight: 500;
            width: 100%;
            transition: all 0.3s ease;
        }
        .plan-btn:hover {
            background-color: #d81b60;
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
            background-color: #ffe8f0;
            color: #e91e63;
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
                    <h1 class="display-4 fw-bold mb-3">Health Insurance</h1>
                    <p class="lead mb-4">Comprehensive health coverage for you and your family that keeps you financially protected against medical emergencies.</p>
                    <div class="d-flex mb-4">
                        <div class="me-4">
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Coverage up to ₹1 Crore</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Premium starting at ₹18/day</span>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Tax benefits under Sec 80D</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>10,000+ Cashless Hospitals</span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-danger btn-lg px-5 py-3 rounded-pill">Get a Quote</button>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="https://media.istockphoto.com/id/1189304032/photo/doctor-holding-digital-tablet-at-meeting-room.jpg?s=612x612&w=0&k=20&c=RtQn8w_vhzGYbflSa1B5ea9Ji70O8wHpSgGBSh0anUg=" alt="Health Insurance" class="img-fluid rounded-4 shadow-lg" style="max-width: 90%;">
                </div>
            </div>
        </div>
    </section>

    <!-- Coverage Section -->
    <section class="py-5">
        <div class="container py-4">
            <div class="section-heading">
                <h2>What's Covered?</h2>
                <p>Our comprehensive health insurance plans provide coverage for a wide range of medical expenses.</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="coverage-card">
                        <div class="coverage-icon">
                            <i class="bi bi-hospital"></i>
                        </div>
                        <div>
                            <h5>Hospitalization Expenses</h5>
                            <p class="mb-0 text-muted">Coverage for room charges, nursing expenses, ICU charges, and more.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="coverage-card">
                        <div class="coverage-icon">
                            <i class="bi bi-activity"></i>
                        </div>
                        <div>
                            <h5>Pre & Post Hospitalization</h5>
                            <p class="mb-0 text-muted">Coverage for 30 days before and 60 days after hospitalization.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="coverage-card">
                        <div class="coverage-icon">
                            <i class="bi bi-heart-pulse"></i>
                        </div>
                        <div>
                            <h5>Day Care Treatments</h5>
                            <p class="mb-0 text-muted">Coverage for treatments that require less than 24 hours of hospitalization.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="coverage-card">
                        <div class="coverage-icon">
                            <i class="bi bi-capsule"></i>
                        </div>
                        <div>
                            <h5>AYUSH Treatments</h5>
                            <p class="mb-0 text-muted">Coverage for Ayurveda, Yoga, Unani, Siddha, and Homeopathy treatments.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="coverage-card">
                        <div class="coverage-icon">
                            <i class="bi bi-truck"></i>
                        </div>
                        <div>
                            <h5>Ambulance Charges</h5>
                            <p class="mb-0 text-muted">Coverage for ambulance charges to transport the insured to the hospital.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="coverage-card">
                        <div class="coverage-icon">
                            <i class="bi bi-virus"></i>
                        </div>
                        <div>
                            <h5>COVID-19 Coverage</h5>
                            <p class="mb-0 text-muted">Comprehensive coverage for COVID-19 hospitalization expenses.</p>
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
                        <h3 class="fw-bold mb-3">Basic Plan</h3>
                        <div class="plan-price mb-2">₹540<span class="plan-month">/month</span></div>
                        <p class="text-muted">Essential coverage for individuals with basic health needs.</p>
                        <div class="plan-feature">
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>₹5 Lakh Coverage</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Room Rent: Shared Room</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>5,000+ Cashless Hospitals</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>No Co-payment</span>
                            </div>
                        </div>
                        <button class="plan-btn">Get Started</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="plan-card" style="border-top-color: #ff9800;">
                        <div class="bg-warning text-white px-3 py-1 rounded position-absolute top-0 end-0 me-4 mt-3" style="font-size: 12px;">POPULAR</div>
                        <h3 class="fw-bold mb-3">Family Plan</h3>
                        <div class="plan-price mb-2">₹1,050<span class="plan-month">/month</span></div>
                        <p class="text-muted">Comprehensive coverage for your entire family.</p>
                        <div class="plan-feature">
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>₹15 Lakh Coverage</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Room Rent: Single AC Room</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>8,000+ Cashless Hospitals</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Maternity Coverage after 2 years</span>
                            </div>
                        </div>
                        <button class="plan-btn" style="background-color: #ff9800;">Get Started</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="plan-card" style="border-top-color: #4caf50;">
                        <h3 class="fw-bold mb-3">Premium Plan</h3>
                        <div class="plan-price mb-2">₹1,850<span class="plan-month">/month</span></div>
                        <p class="text-muted">Maximum coverage with exclusive benefits.</p>
                        <div class="plan-feature">
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>₹1 Crore Coverage</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Room Rent: No Limit</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>10,000+ Cashless Hospitals</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>OPD Coverage Included</span>
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
                <h2>Why Choose Our Health Insurance?</h2>
                <p>Our health insurance offers several benefits to ensure you get the best healthcare when you need it.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-wallet2"></i>
                        </div>
                        <h4>No Claim Bonus</h4>
                        <p>Get up to 50% bonus on sum insured for claim-free years, enhancing your coverage without extra cost.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-clock-history"></i>
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
                        <h4>Cashless Treatment</h4>
                        <p>Access cashless treatment at 10,000+ network hospitals across India for a stress-free experience.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h4>Lifetime Renewability</h4>
                        <p>Enjoy the benefit of lifelong renewability, ensuring coverage for as long as you need it.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-calculator"></i>
                        </div>
                        <h4>Tax Benefits</h4>
                        <p>Get tax benefits under Section 80D of the Income Tax Act on premiums paid for health insurance.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-person-plus"></i>
                        </div>
                        <h4>Free Health Check-ups</h4>
                        <p>Regular free health check-ups help monitor your health and catch issues early.</p>
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
                <p>Find answers to common questions about our health insurance plans.</p>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="accordion" id="faqAccordion">
                        <div class="faq-card card">
                            <div class="card-header" id="faqOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        What is the waiting period in health insurance?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse show" data-bs-parent="#faqAccordion">
                                <div class="card-body">
                                    The waiting period is the time you need to wait before certain conditions or treatments are covered. There is usually a 30-day waiting period for general illnesses, 2-4 years for pre-existing conditions, and 2 years for specific treatments like hernia or cataract.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card card">
                            <div class="card-header" id="faqTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                        How does cashless hospitalization work?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" data-bs-parent="#faqAccordion">
                                <div class="card-body">
                                    For cashless hospitalization, you need to get admitted to a network hospital and present your health insurance card. The hospital will send a pre-authorization request to the insurer, and upon approval, you won't have to pay the covered expenses out of pocket. The insurer settles the bill directly with the hospital.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card card">
                            <div class="card-header" id="faqThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                        What is not covered in health insurance?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" data-bs-parent="#faqAccordion">
                                <div class="card-body">
                                    Common exclusions include pre-existing conditions within the waiting period, cosmetic treatments, dental treatments (unless due to an accident), self-inflicted injuries, injuries from hazardous activities or sports, fertility treatments, and non-allopathic treatments (unless specified).
                                </div>
                            </div>
                        </div>
                        <div class="faq-card card">
                            <div class="card-header" id="faqFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                        Can I port my health insurance policy?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" data-bs-parent="#faqAccordion">
                                <div class="card-body">
                                    Yes, you can port your health insurance policy from one insurer to another. You need to apply for portability at least 45 days before your policy renewal date. The new insurer will consider your waiting periods served and no-claim bonuses earned.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card card">
                            <div class="card-header" id="faqFive">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                        How much health insurance coverage do I need?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse" data-bs-parent="#faqAccordion">
                                <div class="card-body">
                                    The coverage amount depends on factors like your age, city of residence, family medical history, and healthcare costs in your area. As a rule of thumb, experts recommend a minimum coverage of ₹5 lakhs for individuals and ₹10-15 lakhs for families, with higher coverage in metros due to higher healthcare costs.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-danger text-white">
        <div class="container py-4 text-center">
            <h2 class="fw-bold mb-3">Ready to secure your health?</h2>
            <p class="lead mb-4">Get started with our health insurance plans today.</p>
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