<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Term Insurance for Women - PolicyBazaar</title>
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
            background: linear-gradient(135deg, #fce4ec 0%, #f8bbd0 100%);
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
            background-color: #fce4ec;
            color: #ec407a;
            font-size: 24px;
        }
        .plan-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            padding: 30px;
            height: 100%;
            transition: all 0.3s ease;
            border-top: 5px solid #ec407a;
        }
        .plan-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }
        .plan-price {
            font-size: 32px;
            font-weight: 700;
            color: #ec407a;
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
            background-color: #ec407a;
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
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html">
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
                        <a class="nav-link" href="term-life-insurance.html">Term Life Insurance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="health-insurance.html">Health Insurance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="car-insurance.html">Car Insurance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="2-wheeler-insurance.html">2 Wheeler Insurance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="investment-plans.html">Investment Plans</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="travel-insurance.html">Travel Insurance</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="#" class="btn-talk nav-link me-2">
                        <i class="bi bi-telephone-fill"></i> Talk to an expert
                    </a>
                    <a href="signin.html" class="btn-sign-in nav-link">
                        Sign in
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-3">Term Insurance for Women</h1>
                    <p class="lead mb-4">Specially designed term life insurance plans that address the unique protection needs of women.</p>
                    <div class="d-flex mb-4">
                        <div class="me-4">
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Coverage up to ₹1 Crore</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Premium starting at ₹350/month</span>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Women-specific health riders</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Tax benefits under Sec 80C</span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-lg px-5 py-3 rounded-pill" style="background-color: #ec407a; border-color: #ec407a;">Get a Quote</button>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="https://media.istockphoto.com/id/1354898579/photo/shot-of-a-young-woman-using-a-laptop-while-working-from-home.jpg?s=612x612&w=0&k=20&c=5lVVJ6APEerkiyddF4o2cJng2xFqfU8r3T59jjU5xKM=" alt="Term Insurance for Women" class="img-fluid rounded-4 shadow-lg" style="max-width: 90%;">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container py-4">
            <div class="section-heading">
                <h2>Why Choose Our Term Insurance for Women?</h2>
                <p>Our women-centric term insurance plans offer comprehensive protection with benefits tailored specifically for women's unique needs.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-heart-pulse"></i>
                        </div>
                        <h4>Women-Specific Coverage</h4>
                        <p>Special coverage for female-specific critical illnesses including breast cancer, cervical cancer, and pregnancy complications.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-cash-coin"></i>
                        </div>
                        <h4>Discounted Premiums</h4>
                        <p>Lower premium rates for women due to higher life expectancy and better health metrics compared to men.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-house-heart"></i>
                        </div>
                        <h4>Homemaker Coverage</h4>
                        <p>Special provisions for non-working women that recognize the economic value of household work and childcare.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-shield-plus"></i>
                        </div>
                        <h4>Pregnancy Complications Cover</h4>
                        <p>Additional coverage for pregnancy-related complications and childbirth with extended benefits.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-clipboard2-pulse"></i>
                        </div>
                        <h4>Preventive Health Check-ups</h4>
                        <p>Free annual women-specific health check-ups including mammograms and gynecological examinations.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-person-plus"></i>
                        </div>
                        <h4>Child Education Benefit</h4>
                        <p>Added child education benefits to ensure your children's future education is secured even in your absence.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Plans Section -->
    <section class="py-5 bg-light">
        <div class="container py-4">
            <div class="section-heading">
                <h2>Our Term Insurance Plans for Women</h2>
                <p>Choose the plan that best suits your protection needs and financial goals.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="plan-card">
                        <h3 class="fw-bold mb-3">Essential Plan</h3>
                        <div class="plan-price mb-2">₹350<span class="plan-month">/month</span></div>
                        <p class="text-muted">Basic protection plan for women with essential coverage benefits.</p>
                        <div class="plan-feature">
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>₹50 Lakh Coverage</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Basic Female Critical Illness Cover</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Tax Benefits under Sec 80C</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Coverage until age 65</span>
                            </div>
                        </div>
                        <button class="plan-btn">Get Started</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="plan-card" style="border-top-color: #ff9800;">
                        <div class="bg-warning text-white px-3 py-1 rounded position-absolute top-0 end-0 me-4 mt-3" style="font-size: 12px;">POPULAR</div>
                        <h3 class="fw-bold mb-3">Comprehensive Plan</h3>
                        <div class="plan-price mb-2">₹650<span class="plan-month">/month</span></div>
                        <p class="text-muted">Enhanced protection with comprehensive women-specific benefits.</p>
                        <div class="plan-feature">
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>₹75 Lakh Coverage</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Enhanced Female Critical Illness Cover</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Pregnancy Complications Cover</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Child Education Benefit</span>
                            </div>
                        </div>
                        <button class="plan-btn" style="background-color: #ff9800;">Get Started</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="plan-card" style="border-top-color: #4caf50;">
                        <h3 class="fw-bold mb-3">Premium Plan</h3>
                        <div class="plan-price mb-2">₹950<span class="plan-month">/month</span></div>
                        <p class="text-muted">Ultimate protection with highest coverage and exclusive benefits.</p>
                        <div class="plan-feature">
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>₹1 Crore Coverage</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Comprehensive Female Illness Cover</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Monthly Income Benefit for Family</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Premium Waiver on Diagnosis</span>
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
                <p>Find answers to common questions about our term insurance plans for women.</p>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="accordion" id="faqAccordion">
                        <div class="faq-card card">
                            <div class="card-header" id="faqOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        Why do women need specific term insurance plans?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse show" data-bs-parent="#faqAccordion">
                                <div class="card-body">
                                    Women have unique health concerns and life circumstances that traditional term plans may not fully address. Women-specific plans offer coverage for female-specific illnesses, pregnancy complications, and often come with lower premiums due to women's higher life expectancy. They also recognize the economic value of homemakers and provide specialized benefits tailored to women's needs.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card card">
                            <div class="card-header" id="faqTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                        Can homemakers get term insurance?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" data-bs-parent="#faqAccordion">
                                <div class="card-body">
                                    Yes, our women-centric plans specifically cater to homemakers as well. We recognize the substantial economic value of household work and childcare. Homemakers can get coverage up to a certain amount (typically proportional to the earning spouse's income) without showing proof of income. The premium might be slightly higher, but the coverage acknowledges the financial impact their absence would have on the family.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card card">
                            <div class="card-header" id="faqThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                        What women-specific health conditions are covered?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" data-bs-parent="#faqAccordion">
                                <div class="card-body">
                                    Our women-specific plans cover critical illnesses like breast cancer, cervical cancer, ovarian cancer, and fallopian tube cancer. The Comprehensive and Premium plans also cover pregnancy complications such as eclampsia, ectopic pregnancy, and postpartum hemorrhage. Additionally, conditions like systemic lupus erythematosus (SLE) and rheumatoid arthritis, which have higher prevalence in women, are covered under enhanced plans.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card card">
                            <div class="card-header" id="faqFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                        Are the premiums different for women compared to men?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" data-bs-parent="#faqAccordion">
                                <div class="card-body">
                                    Yes, typically women enjoy lower premium rates than men for the same coverage amount. This is because women statistically have longer life expectancies and lower risks of lifestyle diseases at younger ages. Our women-specific plans take advantage of these demographics to offer more affordable premiums, making comprehensive coverage more accessible.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card card">
                            <div class="card-header" id="faqFive">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                        What happens to the policy during maternity leave?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse" data-bs-parent="#faqAccordion">
                                <div class="card-body">
                                    Our women-specific term insurance policies continue without interruption during maternity leave. There's no need to inform us about temporary career breaks for maternity. The Comprehensive and Premium plans also offer the option of premium holiday (premium payment break) for up to 6 months during maternity leave, where the policy remains in force without requiring premium payments during this period.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 text-white" style="background-color: #ec407a;">
        <div class="container py-4 text-center">
            <h2 class="fw-bold mb-3">Ready to secure your family's future?</h2>
            <p class="lead mb-4">Get started with our specialized term insurance plans for women today.</p>
            <div class="d-flex justify-content-center">
                <button class="btn btn-light btn-lg px-5 py-3 rounded-pill me-3">Get a Quote</button>
                <button class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill">Talk to an Advisor</button>
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
                        <li><a href="term-insurance-for-women.html" class="text-decoration-none text-muted">Term Insurance for Women</a></li>
                        <li><a href="health-insurance.html" class="text-decoration-none text-muted">Health Insurance</a></li>
                        <li><a href="car-insurance.html" class="text-decoration-none text-muted">Car Insurance</a></li>
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