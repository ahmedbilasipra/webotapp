<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Term Life Insurance - PolicyBazaar</title>
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
            background: linear-gradient(135deg, #f0f7ff 0%, #e1f5fe 100%);
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
            background-color: #f0f7ff;
            color: #2962ff;
            font-size: 24px;
        }
        .plan-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            padding: 30px;
            height: 100%;
            transition: all 0.3s ease;
            border-top: 5px solid #2962ff;
        }
        .plan-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }
        .plan-price {
            font-size: 32px;
            font-weight: 700;
            color: #2962ff;
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
            background-color: #2962ff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 12px 0;
            font-weight: 500;
            width: 100%;
            transition: all 0.3s ease;
        }
        .plan-btn:hover {
            background-color: #1a54ff;
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
                    <h1 class="display-4 fw-bold mb-3">Term Life Insurance</h1>
                    <p class="lead mb-4">Protect your family's financial future with our comprehensive term life insurance plans.</p>
                    <div class="d-flex mb-4">
                        <div class="me-4">
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Coverage up to ₹1 Crore</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Premium starting at ₹550/month</span>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Tax benefits under Sec 80C</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Quick online process</span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-lg px-5 py-3 rounded-pill">Get a Quote</button>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="https://content.usaa.com/mcontent/static_assets/Media/usaa_a_d07_family_porch.jpg?cacheid=1250268433_p" alt="Term Life Insurance" class="img-fluid rounded-4 shadow-lg" style="max-width: 90%;">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container py-4">
            <div class="section-heading">
                <h2>Why Choose Our Term Life Insurance?</h2>
                <p>Our term life insurance offers comprehensive coverage with flexible options that adapt to your changing needs.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h4>Comprehensive Coverage</h4>
                        <p>Get coverage of up to ₹1 Crore to ensure your family's financial security in your absence.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-cash-coin"></i>
                        </div>
                        <h4>Affordable Premiums</h4>
                        <p>Our plans start from just ₹550 per month, making financial protection accessible for everyone.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <h4>Tax Benefits</h4>
                        <p>Enjoy tax benefits on your premium payments under Section 80C of the Income Tax Act.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-lightning-charge"></i>
                        </div>
                        <h4>Quick Claim Settlement</h4>
                        <p>We ensure a hassle-free and quick claim settlement process when your family needs it most.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-sliders"></i>
                        </div>
                        <h4>Flexible Options</h4>
                        <p>Choose from multiple coverage options and riders to customize your policy based on your needs.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-clipboard-check"></i>
                        </div>
                        <h4>Simple Documentation</h4>
                        <p>Minimal paperwork with a quick and easy online application process for your convenience.</p>
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
                        <div class="plan-price mb-2">₹550<span class="plan-month">/month</span></div>
                        <p class="text-muted">Perfect for individuals looking for essential coverage.</p>
                        <div class="plan-feature">
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>₹50 Lakh Coverage</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Tax Benefits under Sec 80C</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Coverage until age 65</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>24/7 Customer Support</span>
                            </div>
                        </div>
                        <button class="plan-btn">Get Started</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="plan-card" style="border-top-color: #ff9800;">
                        <div class="bg-warning text-white px-3 py-1 rounded position-absolute top-0 end-0 me-4 mt-3" style="font-size: 12px;">POPULAR</div>
                        <h3 class="fw-bold mb-3">Pro Plan</h3>
                        <div class="plan-price mb-2">₹850<span class="plan-month">/month</span></div>
                        <p class="text-muted">Ideal for families seeking comprehensive protection.</p>
                        <div class="plan-feature">
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>₹75 Lakh Coverage</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Critical Illness Cover</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Accidental Death Benefit</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Premium Waiver Benefit</span>
                            </div>
                        </div>
                        <button class="plan-btn" style="background-color: #ff9800;">Get Started</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="plan-card" style="border-top-color: #4caf50;">
                        <h3 class="fw-bold mb-3">Premium Plan</h3>
                        <div class="plan-price mb-2">₹1,250<span class="plan-month">/month</span></div>
                        <p class="text-muted">Complete protection with maximum benefits.</p>
                        <div class="plan-feature">
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>₹1 Crore Coverage</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Enhanced Critical Illness Cover</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Disability Income Benefit</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Return of Premium Option</span>
                            </div>
                        </div>
                        <button class="plan-btn" style="background-color: #4caf50;">Get Started</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5">
        <div class="container py-4">
            <div class="section-heading">
                <h2>Frequently Asked Questions</h2>
                <p>Find answers to common questions about our term life insurance plans.</p>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="accordion" id="faqAccordion">
                        <div class="faq-card card">
                            <div class="card-header" id="faqOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        What is term life insurance?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse show" data-bs-parent="#faqAccordion">
                                <div class="card-body">
                                    Term life insurance is a type of life insurance that provides coverage for a specific period (term). If the insured person passes away during the term, the policy pays a death benefit to the beneficiaries.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card card">
                            <div class="card-header" id="faqTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                        How much coverage do I need?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" data-bs-parent="#faqAccordion">
                                <div class="card-body">
                                    The coverage amount depends on your financial obligations, income, and future goals. A general rule of thumb is to have coverage that is 10-15 times your annual income. Our advisors can help you determine the right amount for your specific situation.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card card">
                            <div class="card-header" id="faqThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                        What happens if I outlive my term policy?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" data-bs-parent="#faqAccordion">
                                <div class="card-body">
                                    In a standard term policy, if you outlive the term, the coverage ends and there is no payout. However, we offer return of premium options where you can get back all or a portion of the premiums paid if you outlive the policy term.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card card">
                            <div class="card-header" id="faqFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                        Can I convert my term policy to a permanent life insurance policy?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" data-bs-parent="#faqAccordion">
                                <div class="card-body">
                                    Yes, many of our term policies come with a conversion option that allows you to convert to a permanent life insurance policy without providing evidence of insurability. This can be done within a specific period as mentioned in your policy.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card card">
                            <div class="card-header" id="faqFive">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                        What information do I need to apply for term life insurance?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse" data-bs-parent="#faqAccordion">
                                <div class="card-body">
                                    You will need to provide basic personal information, health details, lifestyle information, and sometimes a medical examination depending on the coverage amount. Our online application process guides you through all the required information step by step.
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
            <h2 class="fw-bold mb-3">Ready to secure your family's future?</h2>
            <p class="lead mb-4">Get started with our term life insurance plans today.</p>
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