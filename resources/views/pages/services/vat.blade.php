@extends('layouts.app')

@section('title', 'VAT Returns - WCA Accounting')
@section('description', 'MTD-compliant VAT return services including registration, scheme selection, and quarterly submissions.')

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-headline">VAT Return Services</h1>
                <p class="hero-subheadline">MTD-compliant VAT return services including registration, scheme selection, and quarterly submissions.</p>
            </div>
            <div class="hero-image">
                <div style="background-color: rgba(255,255,255,0.1); padding: 30px; border-radius: 10px; width: 400px; height: 300px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-pound-sign" style="font-size: 80px; color: white;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-light">
    <div class="container">
        <div class="section-title">
            <h2>Comprehensive VAT Services</h2>
            <p>We handle all aspects of VAT compliance to keep your business on the right side of HMRC</p>
        </div>
        
        <div style="display: flex; gap: 40px; flex-wrap: wrap;">
            <div style="flex: 1; min-width: 300px;">
                <h3>Our VAT Services</h3>
                <ul style="list-style-type: none;">
                    <li style="margin-bottom: 15px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> VAT registration and de-registration</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Making Tax Digital (MTD) compliant returns</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> VAT scheme selection advice</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Quarterly VAT return preparation and submission</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> VAT liability calculations</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> VAT dispute representation</li>
                </ul>
            </div>
            
            <div style="flex: 1; min-width: 300px;">
                <h3>Benefits</h3>
                <ul style="list-style-type: none;">
                    <li style="margin-bottom: 15px;"><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i> Avoid penalties for late filing</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i> Ensure optimal VAT scheme selection</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i> Maximize VAT reclaim opportunities</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i> Full MTD compliance</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i> Professional representation if HMRC queries your return</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section section-white">
    <div class="container">
        <div class="section-title">
            <h2>VAT Schemes We Handle</h2>
            <p>We'll help you choose the right VAT scheme for your business</p>
        </div>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-calculator"></i></div>
                <h3>Standard VAT Scheme</h3>
                <p>For businesses with taxable turnover above £85,000. VAT is paid on sales and reclaimed on purchases.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-calendar-alt"></i></div>
                <h3>Flat Rate Scheme</h3>
                <p>Pay a fixed percentage of your turnover as VAT. Simplifies accounting but limits reclaims.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-money-bill-wave"></i></div>
                <h3>Cash Accounting Scheme</h3>
                <p>Pay VAT on sales when you're paid, and reclaim VAT on purchases when you pay suppliers.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-industry"></i></div>
                <h3>Annual Accounting Scheme</h3>
                <p>Make advance VAT payments throughout the year based on your last return, with one annual return.</p>
            </div>
        </div>
    </div>
</section>

<section class="section section-light">
    <div class="container">
        <div class="section-title">
            <h2>Our VAT Process</h2>
        </div>
        
        <div class="process-steps">
            <div class="step">
                <div class="step-icon"><i class="fas fa-chart-pie"></i></div>
                <h3>Data Collection</h3>
                <p>We gather your sales and purchase records through our secure portal</p>
            </div>
            
            <div class="step">
                <div class="step-icon"><i class="fas fa-calculator"></i></div>
                <h3>VAT Calculation</h3>
                <p>Our experts calculate your VAT liability and prepare your return</p>
            </div>
            
            <div class="step">
                <div class="step-icon"><i class="fas fa-check-circle"></i></div>
                <h3>Review & Approval</h3>
                <p>We review the return with you before submission</p>
            </div>
            
            <div class="step">
                <div class="step-icon"><i class="fas fa-paper-plane"></i></div>
                <h3>MTD Submission</h3>
                <p>We electronically file your return through HMRC's Making Tax Digital system</p>
            </div>
        </div>
    </div>
</section>

<section class="section section-white">
    <div class="container">
        <div class="section-title">
            <h2>Pricing</h2>
            <p>Transparent pricing for our VAT services</p>
        </div>
        
        <div style="display: flex; gap: 30px; flex-wrap: wrap; justify-content: center;">
            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); flex: 1; min-width: 250px; max-width: 350px;">
                <h3 style="text-align: center; color: var(--primary);">Basic VAT Service</h3>
                <div style="text-align: center; font-size: 2rem; font-weight: bold; color: var(--accent); margin: 20px 0;">£45/month</div>
                <ul style="list-style-type: none;">
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Quarterly VAT returns</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> MTD-compliant filing</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> VAT liability calculation</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-times" style="color: #ccc; margin-right: 10px;"></i> VAT scheme advice</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-times" style="color: #ccc; margin-right: 10px;"></i> VAT registration</li>
                </ul>
                <div style="text-align: center; margin-top: 20px;">
                    <a href="{{ route('contact') }}" class="btn">Get Started</a>
                </div>
            </div>
            
            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); flex: 1; min-width: 250px; max-width: 350px; border: 2px solid var(--accent);">
                <div style="text-align: center; background: var(--accent); color: white; margin: -30px -30px 20px; padding: 10px; border-radius: 8px 8px 0 0;">MOST POPULAR</div>
                <h3 style="text-align: center; color: var(--primary);">Complete VAT Service</h3>
                <div style="text-align: center; font-size: 2rem; font-weight: bold; color: var(--accent); margin: 20px 0;">£75/month</div>
                <ul style="list-style-type: none;">
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Everything in Basic</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> VAT scheme advice</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> VAT registration</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> VAT dispute support</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Quarterly VAT review</li>
                </ul>
                <div style="text-align: center; margin-top: 20px;">
                    <a href="{{ route('contact') }}" class="btn">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-light">
    <div class="container">
        <div class="section-title">
            <h2>Need Help With VAT?</h2>
            <p>Contact us today for expert VAT advice and support</p>
        </div>
        
        <div style="text-align: center;">
            <a href="{{ route('contact') }}" class="btn">Get in Touch</a>
        </div>
    </div>
</section>
@endsection