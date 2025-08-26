@extends('layouts.app')

@section('title', 'Accounting for Sole Traders - WCA Accounting')
@section('description', 'Complete accounting package for sole traders from bookkeeping to self-assessment.')

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-headline">Accounting for Sole Traders</h1>
                <p class="hero-subheadline">Complete accounting package for sole traders from bookkeeping to self-assessment.</p>
            </div>
            <div class="hero-image">
                <div style="background-color: rgba(255,255,255,0.1); padding: 30px; border-radius: 10px; width: 400px; height: 300px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-user" style="font-size: 80px; color: white;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-light">
    <div class="container">
        <div class="section-title">
            <h2>Sole Trader Accounting Solutions</h2>
            <p>Comprehensive accounting services tailored for sole traders and self-employed professionals</p>
        </div>
        
        <div class="features-grid">
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-file-alt"></i></div>
                <div class="feature-content">
                    <h3>Self-Assessment Tax Returns</h3>
                    <p>Complete preparation and submission of your annual self-assessment.</p>
                </div>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-book"></i></div>
                <div class="feature-content">
                    <h3>Bookkeeping</h3>
                    <p>Organized tracking of income and expenses throughout the year.</p>
                </div>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-receipt"></i></div>
                <div class="feature-content">
                    <h3>Expense Management</h3>
                    <p>Maximizing your tax deductions through proper expense tracking.</p>
                </div>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-pound-sign"></i></div>
                <div class="feature-content">
                    <h3>VAT Services</h3>
                    <p>VAT registration, scheme selection, and quarterly returns if needed.</p>
                </div>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-chart-line"></i></div>
                <div class="feature-content">
                    <h3>Profit Analysis</h3>
                    <p>Regular reporting on your business performance and profitability.</p>
                </div>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
                <div class="feature-content">
                    <h3>Compliance Assurance</h3>
                    <p>Peace of mind knowing your tax obligations are met correctly.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-white">
    <div class="container">
        <div class="section-title">
            <h2>Sole Trader Packages</h2>
            <p>Affordable accounting solutions for sole traders</p>
        </div>
        
        <div style="display: flex; gap: 30px; flex-wrap: wrap; justify-content: center;">
            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); flex: 1; min-width: 250px; max-width: 350px;">
                <h3 style="text-align: center; color: var(--primary);">Starter</h3>
                <div style="text-align: center; font-size: 2rem; font-weight: bold; color: var(--accent); margin: 20px 0;">£40/month</div>
                <ul style="list-style-type: none;">
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Self-Assessment Tax Return</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Basic Bookkeeping</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Expense Tracking</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-times" style="color: #ccc; margin-right: 10px;"></i> VAT Services</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-times" style="color: #ccc; margin-right: 10px;"></i> Quarterly Reviews</li>
                </ul>
                <div style="text-align: center; margin-top: 20px;">
                    <a href="{{ route('contact') }}" class="btn">Get Started</a>
                </div>
            </div>
            
            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); flex: 1; min-width: 250px; max-width: 350px; border: 2px solid var(--accent);">
                <div style="text-align: center; background: var(--accent); color: white; margin: -30px -30px 20px; padding: 10px; border-radius: 8px 8px 0 0;">MOST POPULAR</div>
                <h3 style="text-align: center; color: var(--primary);">Complete</h3>
                <div style="text-align: center; font-size: 2rem; font-weight: bold; color: var(--accent); margin: 20px 0;">£75/month</div>
                <ul style="list-style-type: none;">
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Everything in Starter</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> VAT Registration & Returns</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Quarterly Financial Reviews</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Business Advice</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Dedicated Account Manager</li>
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
            <h2>Ready to Simplify Your Sole Trader Accounting?</h2>
            <p>Contact us today to discuss your specific needs</p>
        </div>
        
        <div style="text-align: center;">
            <a href="{{ route('contact') }}" class="btn">Get in Touch</a>
        </div>
    </div>
</section>
@endsection