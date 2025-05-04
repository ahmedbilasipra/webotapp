<?php include 'navbar.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Health Insurance - PolicyBazaar</title>
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
            background: linear-gradient(135deg, #e8f5ff 0%, #d0edfd 100%);
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
                    <h1 class="display-4 fw-bold mb-3">Family Health Insurance</h1>
                    <p class="lead mb-4">Comprehensive health coverage for your entire family under a single policy.</p>
                    <div class="d-flex mb-4">
                        <div class="me-4">
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Coverage up to ₹1 Crore</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Premium starting at ₹1,000/month</span>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Cashless treatment at 10,000+ hospitals</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Tax benefits under Sec 80D</span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-lg px-5 py-3 rounded-pill">Get a Quote</button>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="https://media.istockphoto.com/id/1289687621/photo/happy-family-with-two-children-having-fun-at-home.jpg?s=612x612&w=0&k=20&c=JLsDBh-x-aGUy5RFmR0-O5lAR5fNJEUJcfSmh2D_5uI=" alt="Family Health Insurance" class="img-fluid rounded-4 shadow-lg" style="max-width: 90%;">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container py-4">
            <div class="section-heading">
                <h2>Why Choose Our Family Health Insurance?</h2>
                <p>Our family health plans offer comprehensive protection for your loved ones with flexible coverage options and exceptional benefits.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-people"></i>
                        </div>
                        <h4>Single Policy, Total Protection</h4>
                        <p>Cover your entire family including spouse, children, and parents under a single policy with comprehensive benefits.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-hospital"></i>
                        </div>
                        <h4>Extensive Hospital Network</h4>
                        <p>Access to cashless treatment at over 10,000 network hospitals across India for hassle-free healthcare.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-wallet2"></i>
                        </div>
                        <h4>No Claim Bonus</h4>
                        <p>Enjoy increased sum insured up to 100% for every claim-free year without any additional premium.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-shield-plus"></i>
                        </div>
                        <h4>Pre & Post Hospitalization</h4>
                        <p>Coverage for medical expenses 60 days before and 90 days after hospitalization for complete care.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-calendar-check"></i>
                        </div>
                        <h4>Day Care Procedures</h4>
                        <p>Coverage for over 200 day care procedures that don't require 24-hour hospitalization.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-heart-pulse"></i>
                        </div>
                        <h4>Preventive Health Check-ups</h4>
                        <p>Free annual health check-ups for all insured family members to monitor their well-being.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Plans Section -->
    <section class="py-5 bg-light">
        <div class="container py-4">
            <div class="section-heading">
                <h2>Our Family Health Plans</h2>
                <p>Choose the plan that best suits your family's healthcare needs and budget.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="plan-card">
                        <h3 class="fw-bold mb-3">Essential Plan</h3>
                        <div class="plan-price mb-2">₹1,000<span class="plan-month">/month</span></div>
                        <p class="text-muted">Basic coverage for your family's essential healthcare needs.</p>
                        <div class="plan-feature">
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>₹5 Lakh Coverage</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Covers up to 4 family members</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Room Rent Limit: Twin Sharing</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>No Claim Bonus: 10% per year</span>
                            </div>
                        </div>
                        <button class="plan-btn">Get Started</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="plan-card" style="border-top-color: #ff9800;">
                        <div class="bg-warning text-white px-3 py-1 rounded position-absolute top-0 end-0 me-4 mt-3" style="font-size: 12px;">POPULAR</div>
                        <h3 class="fw-bold mb-3">Comprehensive Plan</h3>
                        <div class="plan-price mb-2">₹2,500<span class="plan-month">/month</span></div>
                        <p class="text-muted">Complete protection for your family with enhanced benefits.</p>
                        <div class="plan-feature">
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>₹25 Lakh Coverage</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Covers up to 6 family members</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Room Rent: Single Private Room</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>No Claim Bonus: 20% per year</span>
                            </div>
                        </div>
                        <button class="plan-btn" style="background-color: #ff9800;">Get Started</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="plan-card" style="border-top-color: #4caf50;">
                        <h3 class="fw-bold mb-3">Premier Plan</h3>
                        <div class="plan-price mb-2">₹5,000<span class="plan-month">/month</span></div>
                        <p class="text-muted">Premium coverage with highest sum insured and unlimited benefits.</p>
                        <div class="plan-feature">
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>₹1 Crore Coverage</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Covers up to 8 family members</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Room Rent: No Limit</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>No Claim Bonus: 50% per year</span>
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
                <p>Find answers to common questions about our family health insurance plans.</p>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="accordion" id="faqAccordion">
                        <div class="faq-card card">
                            <div class="card-header" id="faqOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        Who can be covered under a family health insurance plan?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse show" data-bs-parent="#faqAccordion">
                                <div class="card-body">
                                    A family health insurance plan typically covers the policyholder, spouse, dependent children (up to 25 years), and dependent parents. Some plans also allow inclusion of parents-in-law, siblings, and grandparents. The number of family members covered depends on the specific plan chosen.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card card">
                            <div class="card-header" id="faqTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                        What is the waiting period for pre-existing diseases?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" data-bs-parent="#faqAccordion">
                                <div class="card-body">
                                    Most of our family health insurance plans have a waiting period of 2-4 years for pre-existing diseases, depending on the plan chosen. The Premier Plan offers a reduced waiting period of just 2 years for pre-existing conditions. Some specific conditions may have different waiting periods, which are detailed in the policy document.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card card">
                            <div class="card-header" id="faqThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                        How does the floater sum insured work?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" data-bs-parent="#faqAccordion">
                                <div class="card-body">
                                    In a family floater policy, the sum insured is shared among all insured family members. For example, if you have a ₹25 lakh floater policy, the entire amount can be used by any one or more family members during the policy year. If one member claims ₹10 lakh, the remaining ₹15 lakh is available for other family members during the same policy year.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card card">
                            <div class="card-header" id="faqFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                        Can I add a new family member to my existing policy?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" data-bs-parent="#faqAccordion">
                                <div class="card-body">
                                    Yes, you can add new family members such as a newborn baby or a new spouse to your existing family health insurance policy. For newborns, they can be added after 90 days from birth. For a new spouse, they can be added immediately after marriage. Additional premium may be applicable based on the age and health condition of the new member.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card card">
                            <div class="card-header" id="faqFive">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                        What tax benefits do I get with family health insurance?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse" data-bs-parent="#faqAccordion">
                                <div class="card-body">
                                    Under Section 80D of the Income Tax Act, you can claim tax deductions on premiums paid for family health insurance. The maximum deduction is ₹25,000 for self, spouse, and dependent children. An additional deduction of up to ₹25,000 is available for premiums paid for parents. If parents are senior citizens, the additional deduction increases to ₹50,000.
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
            <h2 class="fw-bold mb-3">Ready to secure your family's health?</h2>
            <p class="lead mb-4">Get comprehensive coverage for your loved ones today.</p>
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
                        <li><a href="health-insurance.html" class="text-decoration-none text-muted">Health Insurance</a></li>
                        <li><a href="family-health-insurance.html" class="text-decoration-none text-muted">Family Health Insurance</a></li>
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