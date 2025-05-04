<?php include 'navbar.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investment Plans - PolicyBazaar</title>
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
            background: linear-gradient(135deg, #f0fbff 0%, #e5f6ff 100%);
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
                    <h1 class="display-4 fw-bold mb-3">Investment Plans</h1>
                    <p class="lead mb-4">Secure your financial future with our diverse range of investment plans tailored to your goals.</p>
                    <div class="d-flex mb-4">
                        <div class="me-4">
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Returns up to 12% p.a.</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Start with just ₹1,000/month</span>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Tax benefits under Sec 80C</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Flexible investment horizon</span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-lg px-5 py-3 rounded-pill">Explore Plans</button>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="https://media.istockphoto.com/id/1318424488/photo/financial-planning-and-investment-strategy-with-risk-management.jpg?s=612x612&w=0&k=20&c=lG3fX-T5-7ltvHDaQoCc-qz-L9wy-KZikdgMIQ-HRkU=" alt="Investment Plans" class="img-fluid rounded-4 shadow-lg" style="max-width: 90%;">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container py-4">
            <div class="section-heading">
                <h2>Why Choose Our Investment Plans?</h2>
                <p>Our investment solutions offer a perfect blend of security, returns, and flexibility to help you achieve your financial goals.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <h4>Competitive Returns</h4>
                        <p>Potential returns of up to 12% p.a., outperforming traditional investment options like fixed deposits.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h4>Capital Protection</h4>
                        <p>Our plans offer various levels of capital protection to safeguard your investments against market volatility.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-cash-coin"></i>
                        </div>
                        <h4>Tax Benefits</h4>
                        <p>Enjoy tax deductions on investments under Section 80C and tax-free maturity benefits under Section 10(10D).</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-sliders"></i>
                        </div>
                        <h4>Flexible Investment Options</h4>
                        <p>Choose from lump sum or regular investment modes with adjustable investment horizons based on your goals.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-umbrella"></i>
                        </div>
                        <h4>Insurance Coverage</h4>
                        <p>Many of our investment plans come with built-in life insurance coverage for added financial security.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-person-check"></i>
                        </div>
                        <h4>Expert Advice</h4>
                        <p>Get personalized guidance from our certified financial advisors to maximize your investment returns.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Plans Section -->
    <section class="py-5 bg-light">
        <div class="container py-4">
            <div class="section-heading">
                <h2>Our Investment Plans</h2>
                <p>Choose the plan that aligns with your financial goals and risk appetite.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="plan-card">
                        <h3 class="fw-bold mb-3">Guaranteed Savings Plan</h3>
                        <div class="plan-price mb-2">8%<span class="plan-month"> p.a.</span></div>
                        <p class="text-muted">Safe and secure investment with guaranteed returns.</p>
                        <div class="plan-feature">
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Guaranteed Returns</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>100% Capital Protection</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Tax Benefits under Sec 80C</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Minimum Investment: ₹1,000/month</span>
                            </div>
                        </div>
                        <button class="plan-btn">Invest Now</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="plan-card" style="border-top-color: #ff9800;">
                        <div class="bg-warning text-white px-3 py-1 rounded position-absolute top-0 end-0 me-4 mt-3" style="font-size: 12px;">POPULAR</div>
                        <h3 class="fw-bold mb-3">Balanced Growth Plan</h3>
                        <div class="plan-price mb-2">10%<span class="plan-month"> p.a.</span></div>
                        <p class="text-muted">Balanced portfolio with moderate risk and higher returns.</p>
                        <div class="plan-feature">
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Diversified Investment Portfolio</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Partial Capital Protection</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Life Insurance Coverage</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Minimum Investment: ₹2,500/month</span>
                            </div>
                        </div>
                        <button class="plan-btn" style="background-color: #ff9800;">Invest Now</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="plan-card" style="border-top-color: #4caf50;">
                        <h3 class="fw-bold mb-3">Wealth Maximizer Plan</h3>
                        <div class="plan-price mb-2">12%<span class="plan-month"> p.a.</span></div>
                        <p class="text-muted">High-growth investment plan for maximum returns.</p>
                        <div class="plan-feature">
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Market-Linked Returns</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Aggressive Growth Portfolio</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Enhanced Insurance Coverage</span>
                            </div>
                            <div class="plan-feature-item">
                                <i class="bi bi-check-circle-fill plan-feature-icon"></i>
                                <span>Minimum Investment: ₹5,000/month</span>
                            </div>
                        </div>
                        <button class="plan-btn" style="background-color: #4caf50;">Invest Now</button>
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
                <p>Find answers to common questions about our investment plans.</p>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="accordion" id="faqAccordion">
                        <div class="faq-card card">
                            <div class="card-header" id="faqOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        How are investment plans different from regular savings?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse show" data-bs-parent="#faqAccordion">
                                <div class="card-body">
                                    Investment plans offer higher potential returns compared to regular savings accounts. They typically diversify across asset classes like equity, debt, and government securities to generate better returns while managing risk. Additionally, they often come with tax benefits and sometimes insurance coverage.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card card">
                            <div class="card-header" id="faqTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                        What is the minimum amount I need to start investing?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" data-bs-parent="#faqAccordion">
                                <div class="card-body">
                                    Our investment plans start from as low as ₹1,000 per month for the Guaranteed Savings Plan. The minimum amount varies based on the plan you choose, with higher potential return plans typically requiring higher minimum investments.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card card">
                            <div class="card-header" id="faqThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                        Can I withdraw my money before the maturity period?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" data-bs-parent="#faqAccordion">
                                <div class="card-body">
                                    Yes, most of our investment plans offer partial or complete withdrawal options after a specified lock-in period. However, early withdrawals may attract surrender charges or affect the returns. We recommend maintaining the investment for the complete tenure to maximize benefits.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card card">
                            <div class="card-header" id="faqFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                        What tax benefits do I get with these investment plans?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" data-bs-parent="#faqAccordion">
                                <div class="card-body">
                                    Most of our investment plans qualify for tax deductions under Section 80C of the Income Tax Act up to ₹1.5 lakhs annually. Additionally, the maturity proceeds are generally tax-free under Section 10(10D) if certain conditions are met. We recommend consulting with a tax advisor for specific advice based on your situation.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card card">
                            <div class="card-header" id="faqFive">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                        How safe are these investment plans?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse" data-bs-parent="#faqAccordion">
                                <div class="card-body">
                                    The safety of investments varies with each plan. Our Guaranteed Savings Plan offers 100% capital protection with assured returns. The Balanced Growth Plan has partial capital protection, while the Wealth Maximizer carries higher market risks but potential for better returns. All plans are managed by experienced fund managers and are regulated by relevant financial authorities.
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
            <h2 class="fw-bold mb-3">Ready to grow your wealth?</h2>
            <p class="lead mb-4">Start your investment journey with PolicyBazaar today.</p>
            <div class="d-flex justify-content-center">
                <button class="btn btn-light btn-lg px-5 py-3 rounded-pill me-3">Compare Plans</button>
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