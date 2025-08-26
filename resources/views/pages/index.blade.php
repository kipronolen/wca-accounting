@extends('layouts.app')

@section('title', 'Our Services - WCA Accounting')
@section('description', 'From bookkeeping to business advisory, we offer a full range of accounting services tailored to your business needs.')

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-headline">Comprehensive Accounting Services</h1>
                <p class="hero-subheadline">From bookkeeping to business advisory, we offer a full range of accounting services tailored to your business needs.</p>
            </div>
            <div class="hero-image">
                <div style="background-color: rgba(255,255,255,0.1); padding: 30px; border-radius: 10px; width: 400px; height: 300px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-calculator" style="font-size: 80px; color: white;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-light">
    <div class="container">
        <div class="section-title">
            <h2>Our Services</h2>
            <p>Explore our comprehensive accounting solutions designed for businesses of all sizes</p>
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
            
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-chart-line"></i></div>
                <h3>Business Advisory</h3>
                <p>Strategic financial advice to help you make informed decisions and grow your business.</p>
                <a href="{{ route('services.advisory') }}" class="btn btn-primary">Learn More</a>
            </div>
        </div>
    </div>
</section>

<section class="section section-white">
    <div class="container">
        <div class="section-title">
            <h2>Why Choose Our Services</h2>
        </div>
        
        <div class="features-grid">
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
                <div class="feature-content">
                    <h3>Fully Compliant</h3>
                    <p>All services are designed to meet HMRC requirements and accounting standards.</p>
                </div>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-clock"></i></div>
                <div class="feature-content">
                    <h3>Time-Saving</h3>
                    <p>Free up your time to focus on your business while we handle the numbers.</p>
                </div>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-pound-sign"></i></div>
                <div class="feature-content">
                    <h3>Cost-Effective</h3>
                    <p>Transparent pricing with no hidden fees or surprises.</p>
                </div>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-user-check"></i></div>
                <div class="feature-content">
                    <h3>Expert Guidance</h3>
                    <p>Access to chartered accountants with years of experience.</p>
                </div>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-tools"></i></div>
                <div class="feature-content">
                    <h3>Modern Tools</h3>
                    <p>Utilize the latest accounting software and technologies.</p>
                </div>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-headset"></i></div>
                <div class="feature-content">
                    <h3>Ongoing Support</h3>
                    <p>Dedicated support whenever you need advice or have questions.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-light">
    <div class="container">
        <div class="section-title">
            <h2>Not Sure What You Need?</h2>
            <p>We can help you determine the right services for your business</p>
        </div>
        
        <div style="text-align: center;">
            <a href="{{ route('contact') }}" class="btn">Schedule a Free Consultation</a>
        </div>
    </div>
</section>
@endsection