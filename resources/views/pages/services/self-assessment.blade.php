@extends('layouts.app')

@section('title', 'Self-Assessment Services - WCA Accounting')
@section('description', 'Expert self-assessment tax return preparation for sole traders, partners, and company directors.')

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-headline">Self-Assessment Services</h1>
                <p class="hero-subheadline">Expert self-assessment tax return preparation for sole traders, partners, and company directors.</p>
            </div>
            <div class="hero-image">
                <div style="background-color: rgba(255,255,255,0.1); padding: 30px; border-radius: 10px; width: 400px; height: 300px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-user-tie" style="font-size: 80px; color: white;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-content">
    <div class="container">
        <div class="service-section">
            <h2 class="section-heading">Expert Self-Assessment Tax Services</h2>
            <p>Navigating the complexities of self-assessment can be challenging. Our expert team ensures your tax return is accurate, compliant, and optimized to minimize your tax liability.</p>
            
            <div class="service-features">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3 class="feature-title">Tax Return Preparation</h3>
                    <p>Complete preparation and submission of your self-assessment tax return to HMRC.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-search-dollar"></i>
                    </div>
                    <h3 class="feature-title">Tax Planning</h3>
                    <p>Strategic advice to help you minimize your tax liability through legitimate tax planning.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <h3 class="feature-title">Payment Calculations</h3>
                    <p>Accurate calculation of tax payments and payments on account to avoid surprises.</p>
                </div>
            </div>
            
            <div class="service-features">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-question-circle"></i>
                    </div>
                    <h3 class="feature-title">HMRC Correspondence</h3>
                    <p>Handling all communications with HMRC on your behalf, including enquiries and investigations.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3 class="feature-title">Income Analysis</h3>
                    <p>Detailed analysis of all income sources to ensure accurate reporting and optimal tax treatment.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="feature-title">Expert Guidance</h3>
                    <p>Professional advice on allowable expenses, deductions, and tax-efficient strategies.</p>
                </div>
            </div>
        </div>
        
        <div class="service-section">
            <h2 class="section-heading">Who Needs to File a Self-Assessment?</h2>
            <p>You may need to complete a self-assessment tax return if you:</p>
            <ul style="margin-left: 20px; margin-bottom: 24px;">
                <li>Are self-employed as a sole trader with income over £1,000</li>
                <li>Are a partner in a business partnership</li>
                <li>Have untaxed income from investments, property, or other sources</li>
                <li>Have income from abroad that is taxable in the UK</li>
                <li>Are a company director with certain types of income</li>
                <li>Have annual income over £100,000</li>
                <li>Need to make claims for tax reliefs or expenses</li>
            </ul>
            <p>Our team will help you determine your filing obligations and ensure you meet all deadlines to avoid penalties.</p>
        </div>
    </div>
</section>
@endsection