@extends('layouts.app')

@section('title', 'WCA Accounting - Small Business Accounting Experts')
@section('description', 'Professional accounting services for small businesses, freelancers, and startups. Tax returns, bookkeeping, payroll, and more. Get your instant quote today!')

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-headline">Taking the Stress Out of Your Numbers</h1>
                <p class="hero-subheadline">Small business accounting made simple, compliant, and stress-free. From bookkeeping to tax returns — we've got you covered.</p>
                <a href="#quote" class="btn">Get an Instant Quote</a>
            </div>
            <div class="hero-image">
                <!-- Placeholder for financial infographic -->
                <div style="background-color: rgba(255,255,255,0.1); padding: 30px; border-radius: 10px; width: 400px; height: 300px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-chart-line" style="font-size: 80px; color: white;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Short Intro Section -->
<section class="section section-light">
    <div class="container">
        <div class="section-title">
            <h2>Welcome to WCA Accounting</h2>
            <p>We're chartered accountants with over a decade of experience helping small business owners, freelancers, and startups stay compliant, save money, and stress less about numbers. Simple, jargon-free, modern accounting tailored to your needs.</p>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="section section-white">
    <div class="container">
        <div class="section-title">
            <h2>Our Accounting Services</h2>
            <p>Comprehensive financial solutions designed for your business needs</p>
        </div>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                <h3>Accounts Preparation</h3>
                <p>Professional preparation of year-end accounts ensuring compliance with HMRC requirements and accounting standards.</p>
                <a href="{{ route('services.accounting') }}" class="btn btn-primary">Learn More</a>
            </div>
            
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-receipt"></i></div>
                <h3>Tax Returns</h3>
                <p>Complete tax return services for individuals and businesses to maximize deductions and ensure timely filing.</p>
                <a href="{{ route('services.tax') }}" class="btn btn-primary">Learn More</a>
            </div>
            
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-pound-sign"></i></div>
                <h3>VAT Returns</h3>
                <p>MTD-compliant VAT return services including registration, scheme selection, and quarterly submissions.</p>
                <a href="{{ route('services.vat') }}" class="btn btn-primary">Learn More</a>
            </div>
            
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-book"></i></div>
                <h3>Bookkeeping</h3>
                <p>Organized financial record keeping with software integration to keep your business finances in order.</p>
                <a href="{{ route('services.bookkeeping') }}" class="btn btn-primary">Learn More</a>
            </div>
            
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-users"></i></div>
                <h3>Payroll</h3>
                <p>Complete payroll processing including RTI submissions, payslips, pension administration, and year-end reporting.</p>
                <a href="{{ route('services.payroll') }}" class="btn btn-primary">Learn More</a>
            </div>
            
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-user-tie"></i></div>
                <h3>Self-Assessment</h3>
                <p>Expert self-assessment tax return preparation for sole traders, partners, and company directors.</p>
                <a href="{{ route('services.self-assessment') }}" class="btn btn-primary">Learn More</a>
            </div>
            
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-hard-hat"></i></div>
                <h3>CIS Returns</h3>
                <p>Specialist Construction Industry Scheme services for contractors and subcontractors.</p>
                <a href="{{ route('services.cis') }}" class="btn btn-primary">Learn More</a>
            </div>
            
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-building"></i></div>
                <h3>Company Formations</h3>
                <p>Complete company registration service including all necessary documentation and post-formation support.</p>
                <a href="{{ route('services.company-formation') }}" class="btn btn-primary">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- Who We Serve Section -->
<section class="section section-light">
    <div class="container">
        <div class="section-title">
            <h2>Who We Serve</h2>
            <p>Tailored accounting solutions for different business structures</p>
        </div>
        
        <div class="client-grid">
            <div class="client-card">
                <h3>Startups</h3>
                <p>Specialized accounting support for new businesses including setup advice and investor reporting.</p>
            </div>
            
            <div class="client-card">
                <h3>Freelancers</h3>
                <p>Simplified accounting solutions for freelancers with focus on expense tracking and tax efficiency.</p>
            </div>
            
            <div class="client-card">
                <h3>Contractors</h3>
                <p>CIS expertise and IR35 compliance for contractors in various industries.</p>
            </div>
            
            <div class="client-card">
                <h3>Partnerships</h3>
                <p>Partnership accounting including profit allocation calculations and tax responsibilities.</p>
            </div>
            
            <div class="client-card">
                <h3>Sole Traders</h3>
                <p>Complete accounting package for sole traders from bookkeeping to self-assessment.</p>
            </div>
            
            <div class="client-card">
                <h3>Limited Companies</h3>
                <p>Full accounting services for limited companies including corporation tax and director responsibilities.</p>
            </div>
            
            <div class="client-card">
                <h3>Self-Employed</h3>
                <p>Specialized support for self-employed professionals across various sectors.</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="section section-white">
    <div class="container">
        <div class="section-title">
            <h2>Why Choose WCA Accounting</h2>
            <p>Experience the difference of working with dedicated accounting professionals</p>
        </div>
        
        <div class="features-grid">
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-award"></i></div>
                <div class="feature-content">
                    <h3>Chartered Experts</h3>
                    <p>10+ years in corporate and small business finance with chartered accreditation.</p>
                </div>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-pound-sign"></i></div>
                <div class="feature-content">
                    <h3>Simple Monthly Pricing</h3>
                    <p>Transparent fixed-fee packages with no surprises or hidden costs.</p>
                </div>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-laptop"></i></div>
                <div class="feature-content">
                    <h3>Modern Tools</h3>
                    <p>Work with Xero, QuickBooks, and secure client portals for real-time financial access.</p>
                </div>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-bolt"></i></div>
                <div class="feature-content">
                    <h3>Fast Turnaround</h3>
                    <p>Efficient processes to keep you on schedule and ahead of tax deadlines.</p>
                </div>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-comments"></i></div>
                <div class="feature-content">
                    <h3>Clear Communication</h3>
                    <p>No accounting jargon - just straight, practical advice you can understand.</p>
                </div>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-lightbulb"></i></div>
                <div class="feature-content">
                    <h3>Business Insight</h3>
                    <p>Not just bookkeeping - we provide clarity and insights to help your business grow.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partners Section -->
<section class="section section-light">
    <div class="container">
        <div class="section-title">
            <h2>Our Partners</h2>
            <p>Working with industry-leading platforms to deliver exceptional service</p>
        </div>
        
        <div class="partners-slider">
            <div class="partner-logo">
                <!-- Placeholder for Xero logo -->
                <div style="background-color: #fff; padding: 10px; border-radius: 5px; width: 120px; height: 50px; display: flex; align-items: center; justify-content: center;">
                    <span style="font-weight: bold; color: #13b5ea;">XERO</span>
                </div>
            </div>
            
            <div class="partner-logo">
                <!-- Placeholder for QuickBooks logo -->
                <div style="background-color: #2CA01C; padding: 10px; border-radius: 5px; width: 120px; height: 50px; display: flex; align-items: center; justify-content: center;">
                    <span style="font-weight: bold; color: white;">QuickBooks</span>
                </div>
            </div>
            
            <div class="partner-logo">
                <!-- Placeholder for HMRC recognized -->
                <div style="background-color: #1d70b8; padding: 10px; border-radius: 5px; width: 180px; height: 50px; display: flex; align-items: center; justify-content: center;">
                    <span style="font-weight: bold; color: white; text-align: center; font-size: 14px;">HMRC Recognized Software</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="section section-white">
    <div class="container">
        <div class="section-title">
            <h2>What Our Clients Say</h2>
            <p>Trusted by over 200 small businesses in the UK</p>
        </div>
        
        <div class="testimonials-slider">
            <div class="testimonial">
                <div class="testimonial-text">
                    <p>WCA gave us clarity from day one. They genuinely care about our business success and make accounting simple and stress-free.</p>
                </div>
                <div class="testimonial-author">
                    <div class="author-image">
                        JS
                    </div>
                    <div class="author-details">
                        <h4>James Smith</h4>
                        <p>Director, Smith Consulting Ltd</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <div style="display: flex; justify-content: center; gap: 20px; margin-bottom: 20px; flex-wrap: wrap;">
                <!-- Trustpilot -->
                <div style="display: flex; align-items: center; background: #00b67a; color: white; padding: 8px 15px; border-radius: 5px;">
                    <span style="margin-right: 8px;">★★★★★</span>
                    <span>Trustpilot</span>
                </div>
                
                <!-- Google -->
                <div style="display: flex; align-items: center; background: #4285F4; color: white; padding: 8px 15px; border-radius: 5px;">
                    <span style="margin-right: 8px;">★★★★★</span>
                    <span>Google</span>
                </div>
                
                <!-- Reviews.io -->
                <div style="display: flex; align-items: center; background: #3A47AB; color: white; padding: 8px 15px; border-radius: 5px;">
                    <span style="margin-right: 8px;">★★★★★</span>
                    <span>Reviews.io</span>
                </div>
            </div>
            <p>4.9 / 5.0 Average Rating from 100+ Reviews</p>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="section section-light">
    <div class="container">
        <div class="section-title">
            <h2>Easy To Get Started</h2>
            <p>Simple three-step process to begin working with us</p>
        </div>
        
        <div class="process-steps">
            <div class="step">
                <div class="step-icon"><i class="fas fa-phone"></i></div>
                <h3>Book a Free Call</h3>
                <p>Schedule a consultation to discuss your accounting needs</p>
            </div>
            
            <div class="step">
                <div class="step-icon"><i class="fas fa-paper-plane"></i></div>
                <h3>Send Us Your Info</h3>
                <p>Share your financial documents through our secure portal</p>
            </div>
            
            <div class="step">
                <div class="step-icon"><i class="fas fa-check-circle"></i></div>
                <h3>Relax - We Handle the Rest</h3>
                <p>We take care of everything while you focus on your business</p>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 50px;">
            <a href="{{ route('contact') }}" class="btn">Sign Up for Our Services</a>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section section-white">
    <div class="container">
        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
            <p>Quick answers to common questions about our services</p>
        </div>
        
        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <span>What makes WCA different from other accounting firms?</span>
                    <span>+</span>
                </div>
                <div class="faq-answer">
                    <p>We combine corporate-level expertise with small business understanding. Our founders have worked with major companies like Vodafone and Mitie, but we're passionate about helping small businesses thrive. We offer clear communication, fixed pricing, and modern technology to make accounting simple and stress-free.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>Do you only work with UK-based clients?</span>
                    <span>+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, we specialize in UK accounting regulations and tax laws. All our services are tailored to comply with HMRC requirements and UK accounting standards. We serve clients across England, Scotland, Wales, and Northern Ireland.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>What's your onboarding process?</span>
                    <span>+</span>
                </div>
                <div class="faq-answer">
                    <p>Our onboarding process is simple: 1) Initial consultation to understand your needs, 2) Engagement letter and secure document sharing, 3) Setup in our systems and software integration, 4) Regular ongoing support. The entire process typically takes 3-5 business days.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>Are our services MTD compliant?</span>
                    <span>+</span>
                </div>
                <div class="faq-answer">
                    <p>Absolutely. All our VAT and tax services are fully compliant with Making Tax Digital requirements. We use HMRC-recognized software and ensure all submissions meet MTD standards. We also help clients transition to MTD if they haven't already.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>Can I switch to WCA mid-year?</span>
                    <span>+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, we regularly onboard clients throughout the financial year. We handle the transition process with your previous accountant, ensuring a smooth handover without disrupting your compliance requirements or financial reporting.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quote Form Section -->
<section id="quote" class="section section-light">
    <div class="container">
        <div class="section-title">
            <h2>Get an Instant Quote</h2>
            <p>Provide some basic information and receive a customized quote for our services</p>
        </div>
        
        <form style="max-width: 600px; margin: 0 auto;">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="phone">Telephone</label>
                <input type="tel" id="phone" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="business-type">Business Type</label>
                <select id="business-type" class="form-control" required>
                    <option value="">Select Business Type</option>
                    <option value="sole-trader">Sole Trader</option>
                    <option value="limited-company">Limited Company</option>
                    <option value="partnership">Partnership</option>
                    <option value="freelancer">Freelancer/Contractor</option>
                    <option value="startup">Startup</option>
                    <option value="other">Other</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="turnover">Annual Turnover (£)</label>
                <input type="number" id="turnover" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label>Services Needed</label>
                <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                    <label style="display: flex; align-items: center;">
                        <input type="checkbox" value="vat"> VAT Returns
                    </label>
                    <label style="display: flex; align-items: center;">
                        <input type="checkbox" value="payroll"> Payroll
                    </label>
                    <label style="display: flex; align-items: center;">
                        <input type="checkbox" value="bookkeeping"> Bookkeeping
                    </label>
                </div>
            </div>
            
            <button type="submit" class="btn" style="width: 100%;">Get Instant Quote</button>
        </form>
    </div>
</section>
@endsection