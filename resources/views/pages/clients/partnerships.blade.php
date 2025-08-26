@extends('layouts.app')

@section('title', 'Accounting for Partnerships - WCA Accounting')
@section('description', 'Partnership accounting including profit allocation calculations and tax responsibilities.')

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-headline">Accounting for Partnerships</h1>
                <p class="hero-subheadline">Partnership accounting including profit allocation calculations and tax responsibilities.</p>
            </div>
            <div class="hero-image">
                <div style="background-color: rgba(255,255,255,0.1); padding: 30px; border-radius: 10px; width: 400px; height: 300px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-handshake" style="font-size: 80px; color: white;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-light">
    <div class="container">
        <div class="section-title">
            <h2>Partnership Accounting Expertise</h2>
            <p>Specialist accounting services for business partnerships of all sizes</p>
        </div>
        
        <div class="features-grid">
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-chart-pie"></i></div>
                <div class="feature-content">
                    <h3>Profit Allocation</h3>
                    <p>Accurate calculation and allocation of profits according to partnership agreements.</p>
                </div>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-file-alt"></i></div>
                <div class="feature-content">
                    <h3>Partnership Returns</h3>
                    <p>Preparation and submission of partnership tax returns to HMRC.</p>
                </div>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-user-friends"></i></div>
                <div class="feature-content">
                    <h3>Partner Self-Assessment</h3>
                    <p>Individual tax return preparation for each partner.</p>
                </div>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-balance-scale"></i></div>
                <div class="feature-content">
                    <h3>Agreement Compliance</h3>
                    <p>Ensuring financial practices align with partnership agreements.</p>
                </div>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-money-bill-wave"></i></div>
                <div class="feature-content">
                    <h3>Drawings Management</h3>
                    <p>Tracking partner drawings and current accounts.</p>
                </div>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
                <div class="feature-content">
                    <h3>Compliance Assurance</h3>
                    <p>Ensuring full compliance with partnership accounting standards.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-white">
    <div class="container">
        <div class="section-title">
            <h2>Partnership Packages</h2>
            <p>Comprehensive accounting solutions for partnerships</p>
        </div>
        
        <div style="display: flex; gap: 30px; flex-wrap: wrap; justify-content: center;">
            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); flex: 1; min-width: 250px; max-width: 350px;">
                <h3 style="text-align: center; color: var(--primary);">Basic Partnership</h3>
                <div style="text-align: center; font-size: 2rem; font-weight: bold; color: var(--accent); margin: 20px 0;">£120/month</div>
                <ul style="list-style-type: none;">
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Partnership Tax Return</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> 2 Partner Self-Assessments</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Basic Bookkeeping</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-times" style="color: #ccc; margin-right: 10px;"></i> VAT Returns</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-times" style="color: #ccc; margin-right: 10px;"></i> Payroll Services</li>
                </ul>
                <div style="text-align: center; margin-top: 20px;">
                    <a href="{{ route('contact') }}" class="btn">Get Started</a>
                </div>
            </div>
            
            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); flex: 1; min-width: 250px; max-width: 350px; border: 2px solid var(--accent);">
                <div style="text-align: center; background: var(--accent); color: white; margin: -30px -30px 20px; padding: 10px; border-radius: 8px 8px 0 0;">MOST POPULAR</div>
                <h3 style="text-align: center; color: var(--primary);">Comprehensive Partnership</h3>
                <div style="text-align: center; font-size: 2rem; font-weight: bold; color: var(--accent); margin: 20px 0;">£199/month</div>
                <ul style="list-style-type: none;">
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Everything in Basic</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Up to 4 Partner Self-Assessments</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> VAT Registration & Returns</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Payroll for Employees</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Quarterly Financial Reviews</li>
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
            <h2>Need Partnership Accounting Support?</h2>
            <p>Contact us today for specialized partnership accounting services</p>
        </div>
        
        <div style="text-align: center;">
            <a href="{{ route('contact') }}" class="btn">Get in Touch</a>
        </div>
    </div>
</section>
@endsection